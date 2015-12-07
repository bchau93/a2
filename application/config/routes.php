<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
$route['404_override'] = '';
$route['Roster'] = "Roster";
$route['playerDetails/(:num)'] = "Roster/playerDetails/$1";
$route['Roster/page'] = "Roster/page/$1";
$route['Roster/(:num)'] = "Roster/page/$1";
$route['Player/add'] = "Player/add";
$route['Player/edit/(:num)'] = "Player/edit/$1";
$route['League'] = "League";
$route['About'] = "About";
$route['((playerLastName)|(playerNumber)|(playerPosition))'] = "Roster/order/$1";
$route['((table)|(gallery))'] = "Roster/layout/$1";
$route['edit'] = "Roster/editable";

//Handles pagination routes
$route['Roster/((playerLastName)|(playerNumber)|(playerPosition))'] = "Roster/order/$1";
$route['Roster/((table)|(gallery))'] = "Roster/layout/$1";
$route['Roster/edit'] = "Roster/editable";
$route['Roster/Player/add'] = "Player/add";
$route['Roster/Player/edit/(:num)'] = "Player/edit/$1";
$route['Roster/page/((playerLastName)|(playerNumber)|(playerPosition))'] = 'Roster/order/$1';
$route['Roster/page/((table)|(gallery))'] = "Roster/layout/$1";
$route['Roster/page/edit'] = "Roster/editable";
$route['Roster/page/playerDetails/(:num)'] = "Roster/playerDetails/$1";
$route['Roster/page/Player/add'] = "Player/add";
$route['Roster/page/Player/edit/(:num)'] = "Player/edit/$1";


$route['League'] = 'League/league';
$route['League/((team)|(stand)|(city))'] = 'League/test/$1';
$route['League/layout/leagueConf/((team)|(stand)|(city))'] = 'League/layout/league/$1';

$route['History'] = "History";
$route['Welcome/showTeam'] = "Welcome/showTeam"; 
/* End of file routes.php */
/* Location: ./application/config/routes.php */
