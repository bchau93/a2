<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class League extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'League/League';    
        
        /*
         * Calls the displayAFC() function to obtain an array of 
         * each team in the AFC. After the data has been grabbed,
         * the data will be displayed
         */
        $AFCSource = $this->leagues->displayAFC();
        $AFC = array();        
        foreach ($AFCSource as $rec) {
                $AFC[] = array('id' => $rec['id'], 
                    'city' => $rec['city'], 
                    'conf' => $rec['conf'], 
                    'division' => $rec['division'],
                    'logo' => $rec['logo']);
        }      
        $this->data['AFC'] = $AFC;
        
        /*
         * Calls the displayNFC() function to obtain an array of 
         * each team in the NFC. After the data has been grabbed,
         * the data will be displayed
         */
        $NFCSource = $this->leagues->displayNFC();
        $NFC = array();
        foreach ($NFCSource as $rec) {
                $NFC[] = array('id' => $rec['id'], 
                    'city' => $rec['city'], 
                    'conf' => $rec['conf'], 
                    'division' => $rec['division'],
                    'logo' => $rec['logo']);
        }
        $this->data['NFC'] = $NFC;
        
        $this->render();
    }


}