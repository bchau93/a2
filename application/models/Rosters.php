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
        parent::__construct("rosters", "id");
    }
    
    //fetch department details from database
    function get_roster_list($start, $unit)
    {
        $sql = 'select * from rosters limit ' . ($start-1)*$unit . ', ' . $unit;
        $query = $this->db->query($sql);
        return $query->result();
    }
}
