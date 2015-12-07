<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Histories
 *
 * @author Lawrence
 */
class Histories extends MY_Model2 {
    
    function __construct() {
        parent::__construct("histories", "date", "homeTeam");
    }
    
    function extract($element)
    {
        $record = new stdClass();
        $record->date = (string)$element['date'];
        $record->homeTeam = (string)$element['home'];
        $record->opponentTeam = (string)$element['away'];
        $record->score = (string)$element['score'];
        
        $dupe = $this->get($record->date, $record->homeTeam);
        if($dupe == null)
        {
            $this->add($record);
        }
        return;
    }
    
    function getMostRecent()
    {
        $this->db->order_by($this->_keyField, 'desc');
        $query = $this->db->get($this->_tableName);
        $all = $query->result();
        return $all[0]->date;
        
    }
    
    function getPredicted($team)
    {
        $this->db->where(array('homeTeam' => 'CIN'));
        $this->db->or_where(array('opponentTeam' => 'CIN'));
        $this->db->order_by($this->_keyField, 'desc');
        $query =  $this->db->get($this->_tableName);
        $games = $query->result();
        $totalGames = count($games);
        $percentage = array();
        $gamesAgainst = array();
        foreach($games as $test)
        {
            if($test->homeTeam == $team || $test->opponentTeam == $team){
                array_push($gamesAgainst, $test);
                
            }
        }
        
        $overallAverage = $this->getOverall($games) * 100;
        $lastFiveAverage = $this->getLastFiveAverage($games)* 100;
        $lastFiveOpponent = $this->getLastFiveAverage($gamesAgainst)* 100;
        $predictPercent = (((.70) * $overallAverage) 
        + ((.20) * $lastFiveAverage) 
        + ((.10) * $lastFiveOpponent)) ;
        array_push($percentage, $overallAverage, $lastFiveAverage, $lastFiveOpponent, $predictPercent);
        return $percentage;
        
    }
    
    
    function getOverall($yo){
        $totalGames = count($yo);
        $win = 0;
        if(empty($yo)){
            return 1/2;
        }
        foreach($yo as $test)
        {
            preg_match_all('!\d+!', $test->score, $matches);
            if($test->homeTeam == 'CIN' && $matches[0][1] > $matches[0][0])
            {    
                $win++;   
            }
            else if ($test->opponentTeam == 'CIN' && $matches[0][0] > $matches[0][1]){
                $win++;
            }
        }
        return $win/$totalGames;
        
    }
    
    function getLastFiveAverage($yo){
        $totalGames = count($yo);
        $i = 0;
        $win = 0;
        if(count($yo) < 5){
            return $this->getOverall($yo);
        }
        while($i < 5){
            preg_match_all('!\d+!', $yo[$i]->score, $matches);
            if($yo[$i]->homeTeam == 'CIN' && $matches[0][1] > $matches[0][0])
            {    
                $win++;
                
            }
            else if ($yo[$i]->opponentTeam == 'CIN' && $matches[0][0] > $matches[0][1]){
                $win++;
            }
            $i++;
        }
        return $win/5;
    }
    
}
