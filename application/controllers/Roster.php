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
        $this->pagination->initialize($config);
        
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
         //call the model function to get the department data
        $this->data['players'] = $this->rosters->get_roster_list(1, $config["per_page"]);  
        $this->data['pagination'] = $this->pagination->create_links();
        
        $this->ugly();
        
        $this->go();
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
        $this->data['players'] = $this->rosters->get_roster_list($data['page'], $config["per_page"]);           
        $this->data['pagination'] = $this->pagination->create_links();
        $this->data['pagebody'] = 'Roster';
        
        $this->ugly();
        
        $this->go();   
    }
    
    //Change toogle to order by name, number, or position
    function order($filterByWhat)
    {
        $_SESSION['order'] = $filterByWhat;
        $this->index();
    }
    
    //Change toggle for table or gallery view
    function layout($typeOfLayout = 'table')
    {
        $typeOfLayout == 'gallery' ? 
            $this->session->layout = 'gallery':
            $this->session->layout = 'table';
        $this->index();
    }
    
    //Change toggle for table or gallery view
    function editable()
    {
        $this->session->edit == 'editOff' ? 
            $this->session->edit = 'editOn':
            $this->session->edit = 'editOff';
        $this->index();
    }
    
    function ugly()
    {
        if($this->session->order == 'playerLastName')
        {
            $this->data['nameDefault'] = 'checked="true"';
            $this->data['numDefault'] = '';
            $this->data['posDefault'] = '';
        } else if( $this->session->order == 'playerNumber' )
        {
            $this->data['nameDefault'] = '';
            $this->data['numDefault'] = 'checked="true"';
            $this->data['posDefault'] = '';
        } else 
        {
            $this->data['nameDefault'] = '';
            $this->data['numDefault'] = '';
            $this->data['posDefault'] = 'checked="true"';
        }
        
        if($this->session->layout == 'table')
        {
            $this->data['tabDefault'] = 'checked="true"';
            $this->data['galDefault'] = '';
        } else 
        {
            $this->data['tabDefault'] = '';
            $this->data['galDefault'] = 'checked="true"';
        }
        if($this->session->edit == 'editOff')
        {
            $this->data['editDefault'] = '';
            $this->data['editable'] = 'style="display: none"';
        } else 
        {
            $this->data['editDefault'] = 'checked="true"';
            $this->data['editable'] = '';
        }
    }
}