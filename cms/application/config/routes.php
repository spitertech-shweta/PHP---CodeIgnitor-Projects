<?php
defined('BASEPATH') OR  exit('No direct script access allowed');


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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';

//$route['admin/'] = 'admin/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin/sign_up'] = 'admin/login_controller/sign_up';

$route['admin/admin'] = 'admin/Home/admin';

$route['admin/login'] = 'admin/login_controller/login';
//$route['admin/login'] = 'admin/Home/login';

$route['admin/sign_up_insert_data'] = 'admin/login_controller/sign_up_insert_data';
$route['admin/add_stud'] = 'admin/Home/add_stud';
$route['admin/add_stud_data'] = 'admin/Home/add_stud_data';
$route['admin/show_stud'] = 'admin/Home/show_stud';
$route['admin/edit_stud_data/(:any)'] = 'admin/Home/edit_stud_data/$1';  //route with parameter 
$route['admin/update_stud_data'] = 'admin/Home/update_stud_data';
$route['admin/delete_stud_data/(:any)'] = 'admin/Home/delete_stud_data/$1';  //route with parameter 
$route['admin/onDelete_update_data/(:any)'] = 'admin/Home/onDelete_update_data/$1';  //route with parameter 
$route['admin/trash_record_status_0'] = 'admin/Home/trash_record_status_0';  //route with parameter 
$route['admin/recover/(:any)'] = 'admin/Home/recover/$1';  //route with parameter 
$route['admin/view/(:any)'] = 'admin/Home/view/$1';  //route with parameter 
$route['admin/logout'] = 'admin/Home/logout';  

$route['admin/add_admin'] = 'admin/Home/add_admin';  


$route['admin/add_admin_user'] = 'admin/Home/add_admin_user';  
$route['admin/show_admin'] = 'admin/Home/show_admin';  
$route['admin/show_admin_user'] = 'admin/Home/show_admin_user';  

$route['admin/edit_admin_data/(:any)'] = 'admin/Home/edit_admin_data/$1';  //route with parameter 
$route['admin/update_admin_data'] = 'admin/Home/update_admin_data';
$route['admin/onDelete_update_admin_data/(:any)'] = 'admin/Home/onDelete_update_admin_data/$1';  //route with parameter 

$route['admin/trash_admin_record_status_0'] = 'admin/Home/trash_admin_record_status_0';  //route with parameter 
$route['admin/view_admin/(:any)'] = 'admin/Home/view_admin/$1';  //route with parameter 
$route['admin/recover_admin_data/(:any)'] = 'admin/Home/recover_admin_data/$1';  //route with parameter 
$route['admin/delete_admin_data/(:any)'] = 'admin/Home/delete_admin_data/$1';  //route with parameter 


