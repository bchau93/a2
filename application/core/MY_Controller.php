<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author		JLP
 * @copyright           2010-2013, James L. Parry
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller {

    protected $data = array();      // parameters for view components
    protected $id;                  // identifier for our content

    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */

    function __construct() {
        parent::__construct();
        $this->data = array();
        $this->data['title'] = '';    // our default title
        $this->errors = array();
        $this->data['pageTitle'] = 'welcome';   // our default page
    
        if(!isset($_SESSION['defaultToggles']))
        {
            $_SESSION['defaultToggles'] = '1';
            $_SESSION['order'] = 'playerLastName';
            $_SESSION['layout'] = 'table';
            $_SESSION['edit'] = 'editOff';
        }
    }

    /**
     * Render this page
     */
    function render() {
        $this->data['menubar'] = $this->parser->parse('_menubar', $this->config->item('menu_choices'),true);
        $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);

        // finally, build the browser page!
        $this->data['data'] = &$this->data;
        $this->parser->parse('_template', $this->data);
    }
    
    /*
     * Check session for which view to load, then render it.
     */
    function go()
    {
        $this->session->layout == 'gallery' ? 
                $this->data['pagebody'] = 'Roster/rosterGal' : 
                $this->data['pagebody'] = 'Roster/rosterTab';   
        $this->render();
    }
}

/* End of file MY_Controller.php */
/* Location: application/core/MY_Controller.php */