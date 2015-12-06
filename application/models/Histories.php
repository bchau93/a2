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
}
