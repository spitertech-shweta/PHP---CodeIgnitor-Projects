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
|	$route['404_override'] = 'errors/home_missing';
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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Admin Login_controller
$route['admin/sign_up'] = 'admin/Login_controller/sign_up';
$route['admin/login'] = 'admin/Login_controller/login';
$route['admin/sign_up_insert_data'] = 'admin/Login_controller/sign_up_insert_data';
$route['admin/log_out'] = 'admin/Login_controller/log_out';
$route['admin/forget_password'] = 'admin/Login_controller/forget_password';


//Admin Home Controller
$route['admin/home_page'] = 'admin/Home/home_page';
$route['admin/add_home'] = 'admin/Home/add_home';
$route['admin/show_home'] = 'admin/Home/show_home';
$route['admin/edit_home/(:any)'] = 'admin/Home/edit_home/$1';  //route with parameter 
$route['admin/update_home'] = 'admin/Home/update_home';  
$route['admin/onDelete_update_home/(:any)'] = 'admin/Home/onDelete_update_home/$1';  
$route['admin/trash_home_0'] = 'admin/Home/trash_home_0';  
$route['admin/recover_home/(:any)'] = 'admin/Home/recover_home/$1';  
$route['admin/view_home/(:any)'] = 'admin/Home/view_home/$1';  
$route['admin/delete_home/(:any)'] = 'admin/Home/delete_home/$1';  



//Admin About Controller
$route['admin/about_page'] = 'admin/About/about_page';
$route['admin/add_about'] = 'admin/About/add_about';
$route['admin/show_about'] = 'admin/About/show_about';
$route['admin/edit_about/(:any)'] = 'admin/About/edit_about/$1';  //route with parameter 
$route['admin/update_about'] = 'admin/About/update_about';  
$route['admin/onDelete_update_about/(:any)'] = 'admin/About/onDelete_update_about/$1';  
$route['admin/trash_about_0'] = 'admin/About/trash_about_0';  
$route['admin/recover_about/(:any)'] = 'admin/About/recover_about/$1';  
$route['admin/view_about/(:any)'] = 'admin/About/view_about/$1';  
$route['admin/delete_about/(:any)'] = 'admin/About/delete_about/$1';  


//Admin Features Controller
$route['admin/features_page'] = 'admin/Features/features_page';
$route['admin/add_features'] = 'admin/Features/add_features';
$route['admin/show_features'] = 'admin/Features/show_features';
$route['admin/edit_features/(:any)'] = 'admin/Features/edit_features/$1';  //route with parameter 
$route['admin/update_features'] = 'admin/Features/update_features';  
$route['admin/onDelete_update_features/(:any)'] = 'admin/Features/onDelete_update_features/$1';  
$route['admin/trash_features_0'] = 'admin/Features/trash_features_0';  
$route['admin/recover_features/(:any)'] = 'admin/Features/recover_features/$1';  
$route['admin/view_features/(:any)'] = 'admin/Features/view_features/$1';  
$route['admin/delete_features/(:any)'] = 'admin/Features/delete_features/$1';  


//Admin Blog Controller -->pending
$route['admin/blog_page'] = 'admin/Blog/blog_page';
$route['admin/add_blog'] = 'admin/Blog/add_blog';
$route['admin/show_blog'] = 'admin/Blog/show_blog';
$route['admin/edit_blog/(:any)'] = 'admin/Blog/edit_blog/$1';  //route with parameter 
$route['admin/update_blog'] = 'admin/Blog/update_blog';  
$route['admin/onDelete_update_blog/(:any)'] = 'admin/Blog/onDelete_update_blog/$1';  
$route['admin/trash_blog_0'] = 'admin/Blog/trash_blog_0';  
$route['admin/recover_blog/(:any)'] = 'admin/Blog/recover_blog/$1';  
$route['admin/view_blog/(:any)'] = 'admin/Blog/view_blog/$1';  
$route['admin/delete_blog/(:any)'] = 'admin/Blog/delete_blog/$1';  


//Admin Gallery Controller
$route['admin/gallery_page'] = 'admin/gallery/gallery_page';
$route['admin/add_gallery'] = 'admin/gallery/add_gallery';
$route['admin/show_gallery'] = 'admin/gallery/show_gallery';
$route['admin/edit_gallery/(:any)'] = 'admin/gallery/edit_gallery/$1';  //route with parameter 
$route['admin/update_gallery'] = 'admin/gallery/update_gallery';  
$route['admin/onDelete_update_gallery/(:any)'] = 'admin/gallery/onDelete_update_gallery/$1';  
$route['admin/trash_gallery_0'] = 'admin/gallery/trash_gallery_0';  
$route['admin/recover_gallery/(:any)'] = 'admin/gallery/recover_gallery/$1';  
$route['admin/view_gallery/(:any)'] = 'admin/gallery/view_gallery/$1';  
$route['admin/delete_gallery/(:any)'] = 'admin/gallery/delete_gallery/$1';  


//Admin Pricing Controller
$route['admin/pricing_page'] = 'admin/Pricing/pricing_page';
$route['admin/add_pricing'] = 'admin/Pricing/add_pricing';
$route['admin/show_pricing'] = 'admin/Pricing/show_pricing';
$route['admin/edit_pricing/(:any)'] = 'admin/Pricing/edit_pricing/$1';  //route with parameter 
$route['admin/update_pricing'] = 'admin/Pricing/update_pricing';  
$route['admin/onDelete_update_pricing/(:any)'] = 'admin/pricing/onDelete_update_pricing/$1';  
$route['admin/trash_pricing_0'] = 'admin/Pricing/trash_pricing_0';  
$route['admin/recover_pricing/(:any)'] = 'admin/Pricing/recover_pricing/$1';  
$route['admin/view_pricing/(:any)'] = 'admin/Pricing/view_pricing/$1';  
$route['admin/delete_pricing/(:any)'] = 'admin/Pricing/delete_pricing/$1';  


//Admin User_enquiry Controller
$route['admin/show_user_enquiry'] = 'admin/User_enquiry/show_user_enquiry';
$route['admin/view_user_enquiry/(:any)'] = 'admin/User_enquiry/view_user_enquiry/$1';
$route['admin/onDelete_update_user_enquiry/(:any)'] = 'admin/User_enquiry/onDelete_update_user_enquiry/$1';  
$route['admin/trash_user_enquiry_0'] = 'admin/User_enquiry/trash_user_enquiry_0';  
$route['admin/recover_user_enquiry/(:any)'] = 'admin/User_enquiry/recover_user_enquiry/$1'; 
$route['admin/delete_user_enquiry/(:any)'] = 'admin/User_enquiry/delete_user_enquiry/$1';
$route['admin/email_newsletter'] = 'admin/User_enquiry/email_newsletter';

//Admin Contact_enquiry Controller
$route['admin/show_contact_enquiry'] = 'admin/Contact_enquiry/show_contact_enquiry';
$route['admin/view_contact_enquiry/(:any)'] = 'admin/Contact_enquiry/view_contact_enquiry/$1';
$route['admin/onDelete_update_contact_enquiry/(:any)'] = 'admin/Contact_enquiry/onDelete_update_contact_enquiry/$1';  
$route['admin/trash_contact_enquiry_0'] = 'admin/Contact_enquiry/trash_contact_enquiry_0';  
$route['admin/recover_contact_enquiry/(:any)'] = 'admin/Contact_enquiry/recover_contact_enquiry/$1'; 
$route['admin/delete_contact_enquiry/(:any)'] = 'admin/Contact_enquiry/delete_contact_enquiry/$1';
