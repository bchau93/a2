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
class Roster extends Application {
    
    function __construct() {
        parent::__construct();
    
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('pagination');

        //load the department_model
        $this->load->model('Rosters');
    
        
    }
    
    function index() {
        
        //pagination settings
        $config['base_url'] = site_url('Roster/page');
        $config['total_rows'] = $this->db->count_all('rosters');
        $config['per_page'] = "12";
        $config['use_page_numbers'] = true;
        /*$config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        */
        $this->pagination->initialize($config);
        
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

         //call the model function to get the department data
        $this->data['players'] = $this->Rosters->get_roster_list(1, $config["per_page"]);           

        $this->data['pagination'] = $this->pagination->create_links();

        //load the department_view
       // $this->load->view('Roster/roster',$data);
    
        
        
        
        
        
        
        $this->data['pagebody'] = 'Roster/roster';
    /*    
        $source = $this->rosters->all();
//        $players = array();
//        foreach ($source as $record) {
//            $players[] = array('playerName' => $record['playerName'], 'number' => $record['number'], 'position' => $record['position']);
//        }
        $this->data['players'] = $source;

//        var_dump($source);
//        die();
      */  
     
        $this->render();
    }
    
    function page($id) {
        //pagination settings
        $config['base_url'] = site_url('Roster/page');
        $config['total_rows'] = $this->db->count_all('rosters');
        $config['per_page'] = "12";
        $config['use_page_numbers'] = true;
        
        $this->pagination->initialize($config);
        
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;

         //call the model function to get the data
        $this->data['players'] = $this->Rosters->get_roster_list($data['page'], $config["per_page"]);           

        $this->data['pagination'] = $this->pagination->create_links();

        $this->data['pagebody'] = 'Roster/roster';
        
        $this->render();
        
    }
    
}