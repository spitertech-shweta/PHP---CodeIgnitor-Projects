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


//Admin Login_controller
$route['admin/sign_up'] = 'admin/Login_controller/sign_up';
$route['admin/sign_up_msg'] = 'admin/Login_controller/sign_up_msg';
$route['admin/login'] = 'admin/Login_controller/login';
$route['admin/sign_up_insert_data'] = 'admin/Login_controller/sign_up_insert_data';
$route['admin/log_out'] = 'admin/Login_controller/log_out';
$route['admin/forget_password'] = 'admin/Login_controller/forget_password';
$route['admin/get_forget_password'] = 'admin/Login_controller/get_forget_password';
$route['admin/forget_password_form'] = 'admin/Login_controller/forget_password_form';
$route['admin/forget_password_link'] = 'admin/Login_controller/forget_password_link';
$route['admin/recovered_password_msg'] = 'admin/Login_controller/recovered_password_msg';


//Admin User
$route['admin/user'] = 'admin/User/user';
$route['admin/add_user'] = 'admin/User/add_user';
$route['admin/show_user'] = 'admin/User/show_user';
$route['admin/edit_user'] = 'admin/User/edit_user';
$route['admin/recover_user/(:any)'] = 'admin/User/recover_user/$1';
$route['admin/view_user/(:any)'] = 'admin/User/view_user/$1';
$route['admin/update_user'] = 'admin/User/update_user';
$route['admin/trash_user_0'] = 'admin/User/trash_user_0';
$route['admin/onDelete_update_user/(:any)'] = 'admin/User/onDelete_update_user/$1';
$route['admin/delete_user/(:any)'] = 'admin/User/delete_user/$1';

//Admin Work
$route['admin/work'] = 'admin/Work/work';
$route['admin/add_work'] = 'admin/Work/add_work';
$route['admin/show_work'] = 'admin/Work/show_work';
$route['admin/edit_work/(:any)'] = 'admin/Work/edit_work/$1';
$route['admin/recover_work/(:any)'] = 'admin/Work/recover_work/$1';
$route['admin/view_work/(:any)'] = 'admin/Work/view_work/$1';
$route['admin/update_work'] = 'admin/Work/update_work';
$route['admin/trash_work_0'] = 'admin/Work/trash_work_0';
$route['admin/onDelete_update_work/(:any)'] = 'admin/Work/onDelete_update_work/$1';
$route['admin/delete_work/(:any)'] = 'admin/Work/delete_work/$1';


//Admin User_client
$route['admin/client'] = 'admin/User_client/client';
$route['admin/add_client'] = 'admin/User_client/add_client';
$route['admin/show_client'] = 'admin/User_client/show_client';
$route['admin/edit_client/(:any)'] = 'admin/User_client/edit_client/$1';
$route['admin/recover_client/(:any)'] = 'admin/User_client/recover_client/$1';
$route['admin/view_client/(:any)'] = 'admin/User_client/view_client/$1';
$route['admin/update_client'] = 'admin/User_client/update_client';
$route['admin/trash_client_0'] = 'admin/User_client/trash_client_0';
$route['admin/onDelete_update_client/(:any)'] = 'admin/User_client/onDelete_update_client/$1';
$route['admin/delete_client/(:any)'] = 'admin/User_client/delete_client/$1';



//Admin Services Controller
$route['admin/service'] = 'admin/Services/service';
$route['admin/add_service'] = 'admin/Services/add_service';
$route['admin/show_service'] = 'admin/Services/show_service';
$route['admin/edit_service/(:any)'] = 'admin/Services/edit_service/$1';
$route['admin/recover_service/(:any)'] = 'admin/Services/recover_service/$1';
$route['admin/view_service/(:any)'] = 'admin/Services/view_service/$1';
$route['admin/update_service'] = 'admin/Services/update_service';
$route['admin/trash_service_0'] = 'admin/Services/trash_service_0';
$route['admin/onDelete_update_service/(:any)'] = 'admin/Services/onDelete_update_service/$1';
$route['admin/delete_service/(:any)'] = 'admin/Services/delete_service/$1';


//Admin Blog Controller
$route['admin/blog'] = 'admin/Blog/blog';
$route['admin/add_blog'] = 'admin/Blog/add_blog';
$route['admin/show_blog'] = 'admin/Blog/show_blog';
$route['admin/edit_blog/(:any)'] = 'admin/Blog/edit_blog/$1';
$route['admin/recover_blog/(:any)'] = 'admin/Blog/recover_blog/$1';
$route['admin/view_blog/(:any)'] = 'admin/Blog/view_blog/$1';
$route['admin/update_blog'] = 'admin/Blog/update_blog';
$route['admin/trash_blog_0'] = 'admin/Blog/trash_blog_0';
$route['admin/onDelete_update_blog/(:any)'] = 'admin/Blog/onDelete_update_blog/$1';
$route['admin/delete_blog/(:any)'] = 'admin/Blog/delete_blog/$1';


//Admin User_desgignation Controller
$route['admin/user_designation'] = 'admin/user_designation/user_designation';
$route['admin/add_user_designation'] = 'admin/user_designation/add_user_designation';
$route['admin/show_user_designation'] = 'admin/user_designation/show_user_designation';
$route['admin/edit_user_designation/(:any)'] = 'admin/user_designation/edit_user_designation/$1';
$route['admin/recover_user_designation/(:any)'] = 'admin/user_designation/recover_user_designation/$1';
$route['admin/view_user_designation/(:any)'] = 'admin/user_designation/view_user_designation/$1';
$route['admin/update_user_designation'] = 'admin/user_designation/update_user_designation';
$route['admin/trash_user_designation_0'] = 'admin/user_designation/trash_user_designation_0';
$route['admin/onDelete_update_user_designation/(:any)'] = 'admin/user_designation/onDelete_update_user_designation/$1';
$route['admin/delete_user_designation/(:any)'] = 'admin/user_designation/delete_user_designation/$1';

//Admin Contact_enquiry Controller
$route['admin/show_contact_enquiry'] = 'admin/Contact_enquiry/show_contact_enquiry';
$route['admin/recover_contact_enquiry/(:any)'] = 'admin/Contact_enquiry/recover_contact_enquiry/$1';
$route['admin/view_contact_enquiry/(:any)'] = 'admin/Contact_enquiry/view_contact_enquiry/$1';
$route['admin/trash_contact_enquiry_0'] = 'admin/Contact_enquiry/trash_contact_enquiry_0';
$route['admin/onDelete_update_contact_enquiry/(:any)'] = 'admin/Contact_enquiry/onDelete_update_contact_enquiry/$1';
$route['admin/delete_contact_enquiry/(:any)'] = 'admin/Contact_enquiry/delete_contact_enquiry/$1';


//Admin Testimonial Controller
$route['admin/testimonial'] = 'admin/Testimonial/testimonial';
$route['admin/add_testimonial'] = 'admin/Testimonial/add_testimonial';
$route['admin/show_testimonial'] = 'admin/Testimonial/show_testimonial';
$route['admin/edit_testimonial/(:any)'] = 'admin/Testimonial/edit_testimonial/$1';
$route['admin/recover_testimonial/(:any)'] = 'admin/Testimonial/recover_testimonial/$1';
$route['admin/view_testimonial/(:any)'] = 'admin/Testimonial/view_testimonial/$1';
$route['admin/update_testimonial'] = 'admin/Testimonial/update_testimonial';
$route['admin/trash_testimonial_0'] = 'admin/Testimonial/trash_testimonial_0';
$route['admin/onDelete_update_testimonial/(:any)'] = 'admin/Testimonial/onDelete_update_testimonial/$1';
$route['admin/delete_testimonial/(:any)'] = 'admin/Testimonial/delete_testimonial/$1';


//Admin Social_sharing Controller
$route['admin/social_sharing'] = 'admin/Social_sharing/social_sharing';
$route['admin/add_social_sharing'] = 'admin/Social_sharing/add_social_sharing';
$route['admin/show_social_sharing'] = 'admin/Social_sharing/show_social_sharing';
$route['admin/edit_social_sharing'] = 'admin/Social_sharing/edit_social_sharing';
$route['admin/recover_social_sharing/(:any)'] = 'admin/Social_sharing/recover_social_sharing/$1';
$route['admin/view_social_sharing/(:any)'] = 'admin/Social_sharing/view_social_sharing/$1';
$route['admin/update_social_sharing'] = 'admin/Social_sharing/update_social_sharing';
$route['admin/trash_social_sharing_0'] = 'admin/Social_sharing/trash_social_sharing_0';
$route['admin/onDelete_update_social_sharing/(:any)'] = 'admin/Social_sharing/onDelete_update_social_sharing/$1';
$route['admin/delete_social_sharing/(:any)'] = 'admin/Social_sharing/delete_social_sharing/$1';

