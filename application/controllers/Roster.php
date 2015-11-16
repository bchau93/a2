<?php
/**
 * Roster controller 
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
    /*
     * Default method called when Roster is in the URL.
     * Pagination is done here for the first page.
     */
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
    
    /*
     * Pagination method for accessing other pages with the page
     * number buttons.
     */
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
    
    /*
     * Function used to display the detail view of a player in the roster
     */
    function playerDetails($id)
    {	
        
        if($this->session->edit == 'editOn'){
            redirect("Player/edit/$id");
        }else{
            $this->data['pagebody'] = 'Roster/playerInfo';    // this is the view we want shown
            $rec = $this->rosters->get($id);

            $player = array(
                'id' => $rec->id, 
                'playerName' => $rec->playerLastName . ", " . $rec->playerFirstName, 
                'playerPhoto' => $rec->playerPhoto,
                'playerNumber' => $rec->playerNumber, 
                'playerPosition' => $rec->playerPosition
            );

            $this->data = array_merge($this->data, $player);
            $this->render();
        }
    
        
    }

    /*
     * Change toogle to order by name, number, or position
     */
    function order($filterByWhat)
    {
        $_SESSION['order'] = $filterByWhat;
        $this->index();
    }
    
    /*
     * Change layout toggle table or gallery
     */
    function layout($typeOfLayout = 'table')
    {
        $typeOfLayout == 'gallery' ? 
            $this->session->layout = 'gallery':
            $this->session->layout = 'table';
        $this->index();
    }
    
    /*
     * Change toogle to turn edit on or off
     */
    function editable()
    {
        $this->session->edit == 'editOff' ? 
            $this->session->edit = 'editOn':
            $this->session->edit = 'editOff';
        $this->index();
    }
    
    /*
     * Method used to inject css styling depending
     * on edit toggle.
     * Will use a hook for assignment 3.
     */
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