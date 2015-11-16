<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

define('BR', '<br/>');
class Player extends Application {
    
    function __construct() {
        parent::__construct();
        $this->load->helper('formfields');
        $this->load->library('session');
        
       
    }

    function add(){
      $_SESSION['player'] = $this->rosters->create();
      $this->present($_SESSION['player']);
    }
    
    function edit($id){
      $_SESSION['player'] = $this->rosters->get($id);
      $this->present($_SESSION['player']);
    }
    
    function present($player){  
        $message = '';
        if (count($this->errors) > 0) {
            foreach ($this->errors as $booboo){
                $message .= $booboo . BR;
            }      
         }
        $this->data['message'] = $message;
        if($player->id != null){
            $this->data['pid'] = makeTextField('hidden', '', 'id', $player->id, "",10,10, false);
        }else{
          $this->data['pid'] = makeTextField('hidden', '', 'id', $player->id, "",10,10,true);
        }
        $this->data['pFirstName'] = makeTextField('text', 'First Name', 'playerFirstName', $player->playerFirstName);
        $this->data['pLastName'] = makeTextField('text', 'Last Name', 'playerLastName', $player->playerLastName);
        $this->data['pNumber'] = makeTextField('text', 'Jersey Number', 'playerNumber', $player->playerNumber);
        $this->data['pPosition'] = makeTextField('text', 'Position', 'playerPosition', $player->playerPosition);
        //$this->data['pPhoto'] = makeTextField('text', 'Player Mugshot File Name','playerPhoto', $player->playerPhoto);
        $this->data['pagebody'] = 'Roster/player_edit';
        if($player->id != null){
            $this->data['psubmit'] = makeSubmitButton('Save', "Click here to edit player.",'submitButton', 'editAdd', 'btn-success','_fields/submit');
            $this->data['pdelete'] = makeSubmitButton('Delete Player', "Click here to delete player.",'submitButton',  'delete', 'btn-success', '_fields/submit'); 
            $this->data['pcancel'] = makeSubmitButton('Cancel', "Click here to cancel.",'submitButton',  'cancel', 'btn-success', '_fields/submit'); 
        }else{
            $this->data['psubmit'] = makeSubmitButton('Add Player', "Click here to add player.",'submitButton', 'editAdd', 'btn-success', '_fields/submit'); 
            $this->data['pcancel'] = makeSubmitButton('Cancel', "Click here to cancel.",'submitButton',  'cancel', 'btn-success', '_fields/submit');
            $this->data['pdelete'] = makeSubmitButton('Delete Player', "Click here to delete player.",'submitButton', 'delete', 'btn-success', '_fields/hiddenBtn');       
        }
        $this->render();
    }
    
    function checkNumber($number){  
        $id = 0;
        $this->db->where('playerNumber',$number);
        $query = $this->db->get('rosters');
        foreach ($query->result() as $row)
        {
            $id = $row->id;
        }   
        if(!(empty($_SESSION['player']->id))){
            
            if ($query->num_rows() > 0 && $id != $_SESSION['player']->id){
                $this->errors[] = 'Jersey Number ' . $number . ' is already taken.';
                return true;
            }
            else{
             
                return false;
            }
        }else{
            if ($query->num_rows() > 0){
                $this->errors[] = 'Jersey Number ' . $number . ' is already taken.';
                return true;
            }
            else{
                return false;
            }
        }
            
    }
    
    function validateInput($fname, $lname, $pnum, $ppos){
        $vposition = '/(QB|RB|FB|WR|TE|OL|C|G|LG|RG|T|LT|RT|K|KR|DL|DE|DT|NT|LB|ILB|OLB|MLB|DB|CB|FS|SS|S|P|PR){1,3}/i';

        if (empty($fname) || preg_match('/^[a-zA-Z]+$/', $fname) == 0)
             $this->errors[] = 'You must specify a valid first name.';
        if (empty($lname) || preg_match('/^[a-zA-Z]+$/', $lname) == 0)
             $this->errors[] = 'You must specify a valid first name.';
        if (empty($pnum) || preg_match('/^[1-9][0-9]?$|^99$/', $pnum) == 0 )
             $this->errors[] = 'You must specify a valid jersey number.';
        if (empty($ppos) || preg_match($vposition, $ppos == 0))
             $this->errors[] = 'You must specify a valid position'; 
    }
    
    function uploadIt(){
        $config['upload_path'] = './assets/images/players/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $config['detect_mime'] = true;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload()) {
            //$this->errors[] = $this->upload->display_errors();
            return null;

        } else { //else, set the success message
            $data = array('msg' => "Upload success!");
            //$_SESSION['filename'] = $this->upload->data('file_name');
            $file = $this->upload->data('photo');
            $filename = $this->upload->data('file_name');
            return $filename;
        }
    }
    
    function confirm() {   
        
        $formSubmit = $this->input->post('submitButton');
        if($formSubmit == "cancel"){
            session_destroy();  
            redirect("Roster");
            return;
        }
        // Extract submitted fields
        $_SESSION['player']->id = $this->input->post('id');
        $_SESSION['player']->playerFirstName = $this->input->post('playerFirstName');
        $_SESSION['player']->playerFirstName = $this->input->post('playerFirstName');
        $_SESSION['player']->playerLastName = $this->input->post('playerLastName');
        $_SESSION['player']->playerNumber = $this->input->post('playerNumber');
        $_SESSION['player']->playerPosition = $this->input->post('playerPosition'); 

        $this->validateInput($_SESSION['player']->playerFirstName,$_SESSION['player']->playerLastName, $_SESSION['player']->playerNumber, $_SESSION['player']->playerPosition);

        $this->checkNumber($_SESSION['player']->playerNumber);
        if (count($this->errors) > 0) {
            $this->present($_SESSION['player']);
            return;
        }     
        if($formSubmit == 'editAdd' ){
            if($this->uploadIt() == null){
                $this->db->where('id', $_SESSION['player']->id);
                $query = $this->db->get('rosters');
                foreach ($query->result() as $row)
                {
                    $pic = $row->playerPhoto;
                }   
                if($pic == null){
                    $_SESSION['player']->playerPhoto = "logo.gif";
                }
                
            }else{
                $_SESSION['player']->playerPhoto = $this->uploadIt();
            }
            if (empty($_SESSION['player']->id) ){
                $this->rosters->add($_SESSION['player']);
            }else{
                $this->rosters->update($_SESSION['player']);
            }     
            
        }else if($formSubmit == 'delete' ){
            $this->rosters->delete($_SESSION['player']->id);
            
        }
        session_destroy();  
        redirect("Roster");
    } 
}
