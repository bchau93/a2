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
        $this->data['pagebody'] = 'League/leagueIndex';            
        $this->render();
    }
    
    function layout($type){
        $this->load->library('parser');
        $this->load->model('leagues');
			
        if ($type == "leagueConf") {
                $this->conference();
        } else if ($type == "leagueDiv") {
                $this->division();
        } else if ($type == "league") {
                $this->league();
        } 

       //$this->data['pagebody'] = 'League/'$mode;

        $this->render();
    }
    
    function conference(){
        $this->data['pagebody'] = 'League/leagueConf';    
        
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
                    'logo' => $rec['logo'],
                    'win' => $rec['win'],
                    'loss' => $rec['loss'],
                    'ties' => $rec['ties'],
                    'pf' => $rec['pf'],
                    'pa' => $rec['pa'],
                    'netpts' => $rec['netpts'],
                    'homew' => $rec['homew'],
                    'roadw' => $rec['roadw'],
                    'divw' => $rec['divw'],
                    'confscore' => $rec['confscore'],
                    'nonconfscore' => $rec['nonconfscore'],
                    'streak' => $rec['streak'],
                    'last5' => $rec['last5']);
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
                    'logo' => $rec['logo'],
                    'win' => $rec['win'],
                    'loss' => $rec['loss'],
                    'ties' => $rec['ties'],
                    'pf' => $rec['pf'],
                    'pa' => $rec['pa'],
                    'netpts' => $rec['netpts'],
                    'homew' => $rec['homew'],
                    'roadw' => $rec['roadw'],
                    'divw' => $rec['divw'],
                    'confscore' => $rec['confscore'],
                    'nonconfscore' => $rec['nonconfscore'],
                    'streak' => $rec['streak'],
                    'last5' => $rec['last5']);
        }
        $this->data['NFC'] = $NFC;
        
        //$this->render();
    }
    
    function league(){
        $this->data['pagebody'] = 'League/League';
        
        $AllTeamsSource = $this->leagues->choose('stand');
        $AllTeams = array();        
        foreach ($AllTeamsSource as $rec) {
                $AllTeams[] = array(
                    'id' => $rec['id'],
                    'city' => $rec['city'], 
                    'conf' => $rec['conf'], 
                    'division' => $rec['division'],
                    'logo' => $rec['logo'],
                    'win' => $rec['win'],
                    'loss' => $rec['loss'],
                    'ties' => $rec['ties'],
                    'pf' => $rec['pf'],
                    'pa' => $rec['pa'],
                    'netpts' => $rec['netpts'],
                    'homew' => $rec['homew'],
                    'roadw' => $rec['roadw'],
                    'divw' => $rec['divw'],
                    'confscore' => $rec['confscore'],
                    'nonconfscore' => $rec['nonconfscore'],
                    'streak' => $rec['streak'],
                    'last5' => $rec['last5']);
        }      
        $this->data['AllTeams'] = $AllTeams;
        $this->render();
    }
    
    function test($filterBy)
    {
        $this->data['pagebody'] = 'League/League';
        
        $AllTeamsSource = $this->leagues->choose($filterBy);
        $AllTeams = array();        
        foreach ($AllTeamsSource as $rec) {
                $AllTeams[] = array(
                    'id' => $rec['id'],
                    'city' => $rec['city'], 
                    'conf' => $rec['conf'], 
                    'division' => $rec['division'],
                    'logo' => $rec['logo'],
                    'win' => $rec['win'],
                    'loss' => $rec['loss'],
                    'ties' => $rec['ties'],
                    'pf' => $rec['pf'],
                    'pa' => $rec['pa'],
                    'netpts' => $rec['netpts'],
                    'homew' => $rec['homew'],
                    'roadw' => $rec['roadw'],
                    'divw' => $rec['divw'],
                    'confscore' => $rec['confscore'],
                    'nonconfscore' => $rec['nonconfscore'],
                    'streak' => $rec['streak'],
                    'last5' => $rec['last5']);
        }      
        $this->data['AllTeams'] = $AllTeams;
        $this->render();
    }
    
    function division() {
        $this->data['pagebody'] = 'League/leagueDiv';    
        
        // AFC 
        $AFCEASTSource = $this->leagues->displayAFCEAST();
        $AFCEAST = array();        
        foreach ($AFCEASTSource as $rec) {
                $AFCEAST[] = array(
                    'id' => $rec['id'], 
                    'city' => $rec['city'], 
                    'logo' => $rec['logo'],
                    'win' => $rec['win'],
                    'loss' => $rec['loss'],
                    'ties' => $rec['ties'],
                    'pf' => $rec['pf'],
                    'pa' => $rec['pa'],
                    'netpts' => $rec['netpts'],
                    'homew' => $rec['homew'],
                    'roadw' => $rec['roadw'],
                    'divw' => $rec['divw'],
                    'confscore' => $rec['confscore'],
                    'nonconfscore' => $rec['nonconfscore'],
                    'streak' => $rec['streak'],
                    'last5' => $rec['last5']);
        }      
        $this->data['AFCEAST'] = $AFCEAST;
        
        $AFCWESTSource = $this->leagues->displayAFCWEST();
        $AFCWEST = array();        
        foreach ($AFCWESTSource as $rec) {
                $AFCWEST[] = array(
                    'id' => $rec['id'], 
                    'city' => $rec['city'], 
                    'logo' => $rec['logo'],
                    'win' => $rec['win'],
                    'loss' => $rec['loss'],
                    'ties' => $rec['ties'],
                    'pf' => $rec['pf'],
                    'pa' => $rec['pa'],
                    'netpts' => $rec['netpts'],
                    'homew' => $rec['homew'],
                    'roadw' => $rec['roadw'],
                    'divw' => $rec['divw'],
                    'confscore' => $rec['confscore'],
                    'nonconfscore' => $rec['nonconfscore'],
                    'streak' => $rec['streak'],
                    'last5' => $rec['last5']);
        }      
        $this->data['AFCWEST'] = $AFCWEST;
        
        $AFCNORTHSource = $this->leagues->displayAFCNORTH();
        $AFCNORTH = array();        
        foreach ($AFCNORTHSource as $rec) {
                $AFCNORTH[] = array(
                    'id' => $rec['id'], 
                    'city' => $rec['city'], 
                    'logo' => $rec['logo'],
                    'win' => $rec['win'],
                    'loss' => $rec['loss'],
                    'ties' => $rec['ties'],
                    'pf' => $rec['pf'],
                    'pa' => $rec['pa'],
                    'netpts' => $rec['netpts'],
                    'homew' => $rec['homew'],
                    'roadw' => $rec['roadw'],
                    'divw' => $rec['divw'],
                    'confscore' => $rec['confscore'],
                    'nonconfscore' => $rec['nonconfscore'],
                    'streak' => $rec['streak'],
                    'last5' => $rec['last5']);
        }      
        $this->data['AFCNORTH'] = $AFCNORTH;
        
        $AFCSOUTHSource = $this->leagues->displayAFCSOUTH();
        $AFCSOUTH = array();        
        foreach ($AFCSOUTHSource as $rec) {
                $AFCSOUTH[] = array(
                    'id' => $rec['id'], 
                    'city' => $rec['city'], 
                    'logo' => $rec['logo'],
                    'win' => $rec['win'],
                    'loss' => $rec['loss'],
                    'ties' => $rec['ties'],
                    'pf' => $rec['pf'],
                    'pa' => $rec['pa'],
                    'netpts' => $rec['netpts'],
                    'homew' => $rec['homew'],
                    'roadw' => $rec['roadw'],
                    'divw' => $rec['divw'],
                    'confscore' => $rec['confscore'],
                    'nonconfscore' => $rec['nonconfscore'],
                    'streak' => $rec['streak'],
                    'last5' => $rec['last5']);
        }      
        $this->data['AFCSOUTH'] = $AFCSOUTH;
        
        // NFC
        
        $NFCEASTSource = $this->leagues->displayNFCEAST();
        $NFCEAST = array();        
        foreach ($NFCEASTSource as $rec) {
                $NFCEAST[] = array(
                    'id' => $rec['id'], 
                    'city' => $rec['city'], 
                    'logo' => $rec['logo'],
                    'win' => $rec['win'],
                    'loss' => $rec['loss'],
                    'ties' => $rec['ties'],
                    'pf' => $rec['pf'],
                    'pa' => $rec['pa'],
                    'netpts' => $rec['netpts'],
                    'homew' => $rec['homew'],
                    'roadw' => $rec['roadw'],
                    'divw' => $rec['divw'],
                    'confscore' => $rec['confscore'],
                    'nonconfscore' => $rec['nonconfscore'],
                    'streak' => $rec['streak'],
                    'last5' => $rec['last5']);
        }      
        $this->data['NFCEAST'] = $NFCEAST;
        
        $NFCWESTSource = $this->leagues->displayNFCWEST();
        $NFCWEST = array();        
        foreach ($NFCWESTSource as $rec) {
                $NFCWEST[] = array(
                    'id' => $rec['id'], 
                    'city' => $rec['city'], 
                    'logo' => $rec['logo'],
                    'win' => $rec['win'],
                    'loss' => $rec['loss'],
                    'ties' => $rec['ties'],
                    'pf' => $rec['pf'],
                    'pa' => $rec['pa'],
                    'netpts' => $rec['netpts'],
                    'homew' => $rec['homew'],
                    'roadw' => $rec['roadw'],
                    'divw' => $rec['divw'],
                    'confscore' => $rec['confscore'],
                    'nonconfscore' => $rec['nonconfscore'],
                    'streak' => $rec['streak'],
                    'last5' => $rec['last5']);
        }      
        $this->data['NFCWEST'] = $NFCWEST;
        
        $NFCNORTHSource = $this->leagues->displayNFCNORTH();
        $NFCNORTH = array();        
        foreach ($NFCNORTHSource as $rec) {
                $NFCNORTH[] = array(
                    'id' => $rec['id'], 
                    'city' => $rec['city'], 
                    'logo' => $rec['logo'],
                    'win' => $rec['win'],
                    'loss' => $rec['loss'],
                    'ties' => $rec['ties'],
                    'pf' => $rec['pf'],
                    'pa' => $rec['pa'],
                    'netpts' => $rec['netpts'],
                    'homew' => $rec['homew'],
                    'roadw' => $rec['roadw'],
                    'divw' => $rec['divw'],
                    'confscore' => $rec['confscore'],
                    'nonconfscore' => $rec['nonconfscore'],
                    'streak' => $rec['streak'],
                    'last5' => $rec['last5']);
        }      
        $this->data['NFCNORTH'] = $NFCNORTH;
        
        $NFCSOUTHSource = $this->leagues->displayNFCSOUTH();
        $NFCSOUTH = array();        
        foreach ($NFCSOUTHSource as $rec) {
                $NFCSOUTH[] = array(
                    'id' => $rec['id'], 
                    'city' => $rec['city'], 
                    'logo' => $rec['logo'],
                    'win' => $rec['win'],
                    'loss' => $rec['loss'],
                    'ties' => $rec['ties'],
                    'pf' => $rec['pf'],
                    'pa' => $rec['pa'],
                    'netpts' => $rec['netpts'],
                    'homew' => $rec['homew'],
                    'roadw' => $rec['roadw'],
                    'divw' => $rec['divw'],
                    'confscore' => $rec['confscore'],
                    'nonconfscore' => $rec['nonconfscore'],
                    'streak' => $rec['streak'],
                    'last5' => $rec['last5']);
        }      
        $this->data['NFCSOUTH'] = $NFCSOUTH;
        
        //$this->render();
    }
}