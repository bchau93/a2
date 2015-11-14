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
        $this->data['pagebody'] = 'League/league';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->leagues->all();
        
        $this->data['teams'] = $source;

        $this->render();
    }


}