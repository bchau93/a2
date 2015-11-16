<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Roster
 *
 * @author Lawrence
 */
class Rosters extends MY_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    //fetch department details from database
    function get_roster_list($start, $unit)
    {
        $order = $this->session->order;
        
        $sql = 'SELECT * '
                .'FROM rosters '
                .'ORDER BY ' . $order . ' ASC '
                .'LIMIT ' . ($start-1) * $unit . ', ' . $unit;
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    function filter($filterByWhat = null) 
    {
        switch($filterByWhat)
        {
            case "name":
                $this->db->order_by('playerLastName', 'asc');
                break;
            case "num":
                $this->db->order_by('playerNumber', 'asc');
                break;
            case "pos":
                $this->db->order_by('playerPosition', 'asc');
                break;
            default:
                $this->all();
                break;
        }
        $query = $this->db->get($this->_tableName);
        return $query->result();
    }
}
