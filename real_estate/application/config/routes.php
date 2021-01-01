<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Home Controller - Frontend
$route['home_page'] = 'Home/home_page';
$route['about'] = 'Home/about';
$route['agents'] = 'Home/agents';
$route['blog'] = 'Home/blog';
$route['buysalerent'] = 'Home/buysalerent';
$route['contact'] = 'Home/contact';
$route['insert_contact'] = 'Home/insert_contact';
$route['property_details/(:any)'] = 'Home/property_details/$1';
$route['blog_detail/(:any)'] = 'Home/blog_detail/$1';  
$route['property_enquiry'] = 'Home/property_enquiry';





//Admin login_controller
$route['admin/sign_up'] = 'admin/login_controller/sign_up';
$route['admin/login'] = 'admin/login_controller/login';
$route['admin/sign_up_insert_data'] = 'admin/login_controller/sign_up_insert_data';




//Admin About controller
$route['admin/about_page'] = 'admin/About/about_page';  
$route['admin/add_page'] = 'admin/About/add_page';  
$route['admin/show_page'] = 'admin/About/show_page';  
$route['admin/edit_page/(:any)'] = 'admin/About/edit_page/$1';  //route with parameter 
$route['admin/update_page'] = 'admin/About/update_page';  
$route['admin/onDelete_update_page/(:any)'] = 'admin/About/onDelete_update_page/$1';  
$route['admin/trash_page_0'] = 'admin/About/trash_page_0';  
$route['admin/recover_page/(:any)'] = 'admin/About/recover_page/$1';  
$route['admin/view_page/(:any)'] = 'admin/About/view_page/$1';  
$route['admin/delete_page/(:any)'] = 'admin/About/delete_page/$1';  


//Agent controller
$route['admin/agent'] = 'admin/Agent/agent';  
$route['admin/add_agent'] = 'admin/Agent/add_agent';  
$route['admin/show_agent'] = 'admin/Agent/show_agent';  
$route['admin/edit_agent/(:any)'] = 'admin/Agent/edit_agent/$1';  //route with parameter 
$route['admin/update_agent'] = 'admin/Agent/update_agent';  
$route['admin/onDelete_update_agent/(:any)'] = 'admin/Agent/onDelete_update_agent/$1';  
$route['admin/trash_agent_0'] = 'admin/Agent/trash_agent_0';  
$route['admin/recover_agent/(:any)'] = 'admin/Agent/recover_agent/$1';  
$route['admin/view_agent/(:any)'] = 'admin/Agent/view_agent/$1';  
$route['admin/delete_agent/(:any)'] = 'admin/Agent/delete_agent/$1';  



//blog controller
$route['admin/index'] = 'admin/blog/index';  
$route['admin/add_blog'] = 'admin/blog/add_blog';  
$route['admin/show_blog'] = 'admin/blog/show_blog';  
$route['admin/edit_blog/(:any)'] = 'admin/blog/edit_blog/$1';  //route with parameter 
$route['admin/update_blog'] = 'admin/blog/update_blog';  
$route['admin/onDelete_update_blog/(:any)'] = 'admin/blog/onDelete_update_blog/$1';  
$route['admin/trash_blog_0'] = 'admin/blog/trash_blog_0';  
$route['admin/recover_blog/(:any)'] = 'admin/blog/recover_blog/$1';  
$route['admin/view_blog/(:any)'] = 'admin/blog/view_blog/$1';  
$route['admin/delete_blog/(:any)'] = 'admin/blog/delete_blog/$1'; 


//Property controller
$route['admin/property'] = 'admin/Property/property';  
$route['admin/add_property'] = 'admin/Property/add_property';  
$route['admin/show_property'] = 'admin/Property/show_property';  
$route['admin/edit_property/(:any)'] = 'admin/Property/edit_property/$1';  //route with parameter 
$route['admin/update_property'] = 'admin/Property/update_property';  
$route['admin/onDelete_update_property/(:any)'] = 'admin/Property/onDelete_update_property/$1';  
$route['admin/trash_property_0'] = 'admin/Property/trash_property_0';  
$route['admin/recover_property/(:any)'] = 'admin/Property/recover_property/$1';  
$route['admin/view_property/(:any)'] = 'admin/Property/view_property/$1';  
$route['admin/delete_property/(:any)'] = 'admin/Property/delete_property/$1'; 
$route['admin/delete_slider_img/(:any)/(:num)'] = 'admin/Property/delete_slider_img/$1/$2'; 











