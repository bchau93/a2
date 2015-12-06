<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of History
 *
 * @author Lawrence
 */
define('RPCSERVER', ('nfl.jlparry.com/rpc'));	// endpoint fo the XML-RPC server
define('RPCPORT', 80);

class History extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Histories');
    }
    
    function index()
    {
        $date = $this->histories->getMostRecent();
        
//        var_dump($date);
//        die();
        
        $list = array();
        $this->load->library('xmlrpc');
        $this->xmlrpc->server(RPCSERVER, RPCPORT);
        $this->xmlrpc->method('since');
        //$date = "20151112";
        $request = array($date);
        $this->xmlrpc->request($request);
        
        if (!$this->xmlrpc->send_request())
        {
                echo $this->xmlrpc->display_error();
                echo '<br/>' . var_dump($this->xmlrpc->response) . '<br/>';
        }
        $list = $this->xmlrpc->display_response();
        
        var_dump($list);
        die();
        
        foreach($list as $record)
        {
            $this->histories->extract($record);
        }
    }
    
}
