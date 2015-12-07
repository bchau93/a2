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
    
    public function choose($sortByWhat)
    {
        $sortedArray = array();
        switch ($sortByWhat)
        {
            case 'stand':
                $this->db->order_by('netpts', 'desc');
                $query = $this->db->get($this->_tableName);
                $sortedArray = $query->result();
                return $this->displayAll($sortedArray);
                break;
            case 'city':
                $this->db->order_by('city', 'asc');
                $query = $this->db->get($this->_tableName);
                $sortedArray = $query->result();
                return $this->displayAll($sortedArray);
                break;
            case 'team':
                $this->db->order_by('id', 'asc');
                $query = $this->db->get($this->_tableName);
                $sortedArray = $query->result();
                return $this->displayAll($sortedArray);
//                $test = $this->displayAll($sortedArray);
//                var_dump($test);
//                die();
                break;
            default:
                $sortedArray = $this->all();
                break;
                
        }
    }
    
    /*
     * This is a function that is called to take each property
     * of each league in the database and puts it into 
     * an array. It will only take in the teams in the AFC.
     */
     public function displayAll($sortedRecords) {
        //var_dump($sortedArray);
         //       die();
        $AllTeams = array();
        $allRecords = $sortedRecords;
        //var_dump($allRecords);
        //die();
        foreach ($allRecords as $teamRec)
        {
           $AllTeams[] = array(
                    'id' => $teamRec->id, 
                    'city' => $teamRec->city, 
                    'conf' => $teamRec->conf, 
                    'division' => $teamRec->division, 
                    'logo' => $teamRec->logo,
                    'win' => $teamRec->win,
                    'loss' => $teamRec->loss,
                    'ties' => $teamRec->ties,
                    'pf' => $teamRec->pf,
                    'pa' => $teamRec->pa,
                    'netpts' => $teamRec->netpts,
                    'homew' => $teamRec->homew,
                    'roadw' => $teamRec->roadw,
                    'divw' => $teamRec->divw,
                    'confscore' => $teamRec->confscore,
                    'nonconfscore' => $teamRec->nonconfscore,
                    'streak' => $teamRec->streak,
                    'last5' => $teamRec->last5);
        }
        return $AllTeams;
    }
    
    public function displayAFC() {
        $AFC = array();
        $allRecords = $this->all();
        
        foreach ($allRecords as $teamRec)
        {
            if ($teamRec->conf == "AFC") {
                $AFC[] = array(
                    'id' => $teamRec->id, 
                    'city' => $teamRec->city, 
                    'conf' => $teamRec->conf, 
                    'division' => $teamRec->division, 
                    'logo' => $teamRec->logo,
                    'win' => $teamRec->win,
                    'loss' => $teamRec->loss,
                    'ties' => $teamRec->ties,
                    'pf' => $teamRec->pf,
                    'pa' => $teamRec->pa,
                    'netpts' => $teamRec->netpts,
                    'homew' => $teamRec->homew,
                    'roadw' => $teamRec->roadw,
                    'divw' => $teamRec->divw,
                    'confscore' => $teamRec->confscore,
                    'nonconfscore' => $teamRec->nonconfscore,
                    'streak' => $teamRec->streak,
                    'last5' => $teamRec->last5);
            }
        }
        return $AFC;
    }
    
    public function displayAFCEAST() {
        $AFCEAST = array();
        $allRecords = $this->all();
        
        foreach ($allRecords as $teamRec)
        {
            if ($teamRec->division == "AFC EAST") {
                $AFCEAST[] = array(
                    'id' => $teamRec->id, 
                    'city' => $teamRec->city, 
                    'logo' => $teamRec->logo,
                    'win' => $teamRec->win,
                    'loss' => $teamRec->loss,
                    'ties' => $teamRec->ties,
                    'pf' => $teamRec->pf,
                    'pa' => $teamRec->pa,
                    'netpts' => $teamRec->netpts,
                    'homew' => $teamRec->homew,
                    'roadw' => $teamRec->roadw,
                    'divw' => $teamRec->divw,
                    'confscore' => $teamRec->confscore,
                    'nonconfscore' => $teamRec->nonconfscore,
                    'streak' => $teamRec->streak,
                    'last5' => $teamRec->last5);
            }
        }
        return $AFCEAST;
    }
    
    public function displayAFCWEST() {
        $AFCWEST = array();
        $allRecords = $this->all();
        
        foreach ($allRecords as $teamRec)
        {
            if ($teamRec->division == "AFC WEST") {
                $AFCWEST[] = array(
                    'id' => $teamRec->id, 
                    'city' => $teamRec->city, 
                    'logo' => $teamRec->logo,
                    'win' => $teamRec->win,
                    'loss' => $teamRec->loss,
                    'ties' => $teamRec->ties,
                    'pf' => $teamRec->pf,
                    'pa' => $teamRec->pa,
                    'netpts' => $teamRec->netpts,
                    'homew' => $teamRec->homew,
                    'roadw' => $teamRec->roadw,
                    'divw' => $teamRec->divw,
                    'confscore' => $teamRec->confscore,
                    'nonconfscore' => $teamRec->nonconfscore,
                    'streak' => $teamRec->streak,
                    'last5' => $teamRec->last5);
            }
        }
        return $AFCWEST;
    }

    public function displayAFCNORTH() {
        $AFCNORTH = array();
        $allRecords = $this->all();
        
        foreach ($allRecords as $teamRec)
        {
            if ($teamRec->division == "AFC NORTH") {
                $AFCNORTH[] = array(
                    'id' => $teamRec->id, 
                    'city' => $teamRec->city, 
                    'conf' => $teamRec->conf, 
                    'division' => $teamRec->division, 
                    'logo' => $teamRec->logo,
                    'win' => $teamRec->win,
                    'loss' => $teamRec->loss,
                    'ties' => $teamRec->ties,
                    'pf' => $teamRec->pf,
                    'pa' => $teamRec->pa,
                    'netpts' => $teamRec->netpts,
                    'homew' => $teamRec->homew,
                    'roadw' => $teamRec->roadw,
                    'divw' => $teamRec->divw,
                    'confscore' => $teamRec->confscore,
                    'nonconfscore' => $teamRec->nonconfscore,
                    'streak' => $teamRec->streak,
                    'last5' => $teamRec->last5);
            }
        }
        return $AFCNORTH;
        }
        
    public function displayAFCSOUTH() {
        $AFCSOUTH = array();
        $allRecords = $this->all();
        
        foreach ($allRecords as $teamRec)
        {
            if ($teamRec->division == "AFC SOUTH") {
                $AFCSOUTH[] = array(
                    'id' => $teamRec->id, 
                    'city' => $teamRec->city, 
                    'conf' => $teamRec->conf, 
                    'division' => $teamRec->division, 
                    'logo' => $teamRec->logo,
                    'win' => $teamRec->win,
                    'loss' => $teamRec->loss,
                    'ties' => $teamRec->ties,
                    'pf' => $teamRec->pf,
                    'pa' => $teamRec->pa,
                    'netpts' => $teamRec->netpts,
                    'homew' => $teamRec->homew,
                    'roadw' => $teamRec->roadw,
                    'divw' => $teamRec->divw,
                    'confscore' => $teamRec->confscore,
                    'nonconfscore' => $teamRec->nonconfscore,
                    'streak' => $teamRec->streak,
                    'last5' => $teamRec->last5);
            }
        }
        return $AFCSOUTH;
        }
        
    public function displayNFCEAST() {
        $NFCEAST = array();
        $allRecords = $this->all();
        
        foreach ($allRecords as $teamRec)
        {
            if ($teamRec->division == "NFC EAST") {
                $NFCEAST[] = array(
                    'id' => $teamRec->id, 
                    'city' => $teamRec->city, 
                    'logo' => $teamRec->logo,
                    'win' => $teamRec->win,
                    'loss' => $teamRec->loss,
                    'ties' => $teamRec->ties,
                    'pf' => $teamRec->pf,
                    'pa' => $teamRec->pa,
                    'netpts' => $teamRec->netpts,
                    'homew' => $teamRec->homew,
                    'roadw' => $teamRec->roadw,
                    'divw' => $teamRec->divw,
                    'confscore' => $teamRec->confscore,
                    'nonconfscore' => $teamRec->nonconfscore,
                    'streak' => $teamRec->streak,
                    'last5' => $teamRec->last5);
            }
        }
        return $NFCEAST;
    }
    
    public function displayNFCWEST() {
        $NFCWEST = array();
        $allRecords = $this->all();
        
        foreach ($allRecords as $teamRec)
        {
            if ($teamRec->division == "NFC WEST") {
                $NFCWEST[] = array(
                    'id' => $teamRec->id, 
                    'city' => $teamRec->city, 
                    'logo' => $teamRec->logo,
                    'win' => $teamRec->win,
                    'loss' => $teamRec->loss,
                    'ties' => $teamRec->ties,
                    'pf' => $teamRec->pf,
                    'pa' => $teamRec->pa,
                    'netpts' => $teamRec->netpts,
                    'homew' => $teamRec->homew,
                    'roadw' => $teamRec->roadw,
                    'divw' => $teamRec->divw,
                    'confscore' => $teamRec->confscore,
                    'nonconfscore' => $teamRec->nonconfscore,
                    'streak' => $teamRec->streak,
                    'last5' => $teamRec->last5);
            }
        }
        return $NFCWEST;
    }

    public function displayNFCNORTH() {
        $NFCNORTH = array();
        $allRecords = $this->all();
        
        foreach ($allRecords as $teamRec)
        {
            if ($teamRec->division == "NFC NORTH") {
                $NFCNORTH[] = array(
                    'id' => $teamRec->id, 
                    'city' => $teamRec->city, 
                    'conf' => $teamRec->conf, 
                    'division' => $teamRec->division, 
                    'logo' => $teamRec->logo,
                    'win' => $teamRec->win,
                    'loss' => $teamRec->loss,
                    'ties' => $teamRec->ties,
                    'pf' => $teamRec->pf,
                    'pa' => $teamRec->pa,
                    'netpts' => $teamRec->netpts,
                    'homew' => $teamRec->homew,
                    'roadw' => $teamRec->roadw,
                    'divw' => $teamRec->divw,
                    'confscore' => $teamRec->confscore,
                    'nonconfscore' => $teamRec->nonconfscore,
                    'streak' => $teamRec->streak,
                    'last5' => $teamRec->last5);
            }
        }
        return $NFCNORTH;
    }
        
    public function displayNFCSOUTH() {
        $NFCSOUTH = array();
        $allRecords = $this->all();
        
        foreach ($allRecords as $teamRec)
        {
            if ($teamRec->division == "NFC SOUTH") {
                $NFCSOUTH[] = array(
                    'id' => $teamRec->id, 
                    'city' => $teamRec->city, 
                    'conf' => $teamRec->conf, 
                    'division' => $teamRec->division, 
                    'logo' => $teamRec->logo,
                    'win' => $teamRec->win,
                    'loss' => $teamRec->loss,
                    'ties' => $teamRec->ties,
                    'pf' => $teamRec->pf,
                    'pa' => $teamRec->pa,
                    'netpts' => $teamRec->netpts,
                    'homew' => $teamRec->homew,
                    'roadw' => $teamRec->roadw,
                    'divw' => $teamRec->divw,
                    'confscore' => $teamRec->confscore,
                    'nonconfscore' => $teamRec->nonconfscore,
                    'streak' => $teamRec->streak,
                    'last5' => $teamRec->last5);
            }
        }
        return $NFCSOUTH;
        }

    public function displayNFC() {
        $NFC = array();
        $allRecords = $this->all();
        
        foreach ($allRecords as $teamRec)
        {
            if ($teamRec->conf == "NFC") {
                $NFC[] = array(
                    'id' => $teamRec->id, 
                    'city' => $teamRec->city, 
                    'conf' => $teamRec->conf, 
                    'division' => $teamRec->division, 
                    'logo' => $teamRec->logo,
                    'win' => $teamRec->win,
                    'loss' => $teamRec->loss,
                    'ties' => $teamRec->ties,
                    'pf' => $teamRec->pf,
                    'pa' => $teamRec->pa,
                    'netpts' => $teamRec->netpts,
                    'homew' => $teamRec->homew,
                    'roadw' => $teamRec->roadw,
                    'divw' => $teamRec->divw,
                    'confscore' => $teamRec->confscore,
                    'nonconfscore' => $teamRec->nonconfscore,
                    'streak' => $teamRec->streak,
                    'last5' => $teamRec->last5);
            }
        }
        return $NFC;
    }

}

