<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct() {
        parent::__construct();
        $this->load->model('Histories');
        //$this->load->helper('input');
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'homepage';    // this is the view we want shown
        $this->data['selectTeam'] = '';
        $source = $this->contents->homepage();
        $this->data = array_merge($this->data, $source);
        
        $teamAll = $this->leagues->all();
        $teamList = array();
        foreach ($teamAll as $rec) {
                $teamList[] = array('id' => $rec->id, 'teamCode' => $rec->teamCode);
        }
        $this->data['TeamList'] = $teamList;
        if($_POST)
        {
            $this->data['selectTeam'] = $_POST['team'];
        }
        
        $this->render();
        
    }
    
    function showTeam() {
        $team = $_POST['team'];
       
        $result = $this->histories->getPredicted($team);
        
        $predict = "Overall average is " . $result[0] . "%<br>" .
                "Last five games average is " . $result[1] . "%<br>" .
                "Last five games average against " . $team . " is " . $result[2] . "%<br>" .
                "Bengals has a " . $result[3] . "% chance of winning.";
        
        
        echo $predict;
        
    }
    


}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */