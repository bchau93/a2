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
    
    /*
     * Used to paginate roster view.
     * Uses session variable order to determine what
     * to pull from the database in what order.
     */
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
}
