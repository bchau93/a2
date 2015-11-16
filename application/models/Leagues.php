<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Leagues extends MY_Model {

    // Constructor
    public function __construct() {
        parent::__construct("leagues");
    }
    
    /*
     * This is a function that is called to take each property
     * of each league in the database and puts it into 
     * an array. It will only take in the teams in the AFC.
     */
    public function displayAFC() {
        $AFC = array();
        $allRecords = $this->all();
        
        foreach ($allRecords as $teamRec)
        {
            if ($teamRec->conf == "AFC") {
                $AFC[] = array('id' => $teamRec->id, 
                    'city' => $teamRec->city, 
                    'conf' => $teamRec->conf, 
                    'division' => $teamRec->division, 
                    'logo' => $teamRec->logo);  
            }
        }
        return $AFC;
    }
    
    /*
     * This is a function that is called to take each property
     * of each league in the database and puts it into 
     * an array. It will only take in the teams in the NFC.
     */
    public function displayNFC() {
        $NFC = array();
        $allRecords = $this->all();
        
        foreach ($allRecords as $teamRec)
        {
            if ($teamRec->conf == "NFC") {
                $NFC[] = array('id' => $teamRec->id, 
                    'city' => $teamRec->city, 
                    'conf' => $teamRec->conf, 
                    'division' => $teamRec->division, 
                    'logo' => $teamRec->logo);  
            }
        }
        return $NFC;
    }

}

