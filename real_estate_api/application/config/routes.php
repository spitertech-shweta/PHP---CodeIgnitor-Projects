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
$route['default_controller'] = 'Real_estate_api';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



$route['api/properties'] = 'api/Real_estate_api/properties';
$route['api/about'] = 'api/Real_estate_api/about';
$route['api/agent'] = 'api/Real_estate_api/agent';
$route['api/blog'] = 'api/Real_estate_api/blog';
$route['api/blog_detail/(:any)'] = 'api/Real_estate_api/blog_detail/$1';
$route['api/hot_properties'] = 'api/Real_estate_api/hot_properties';
$route['api/property_type'] = 'api/Real_estate_api/property_type';
$route['api/property_count'] = 'api/Real_estate_api/property_count';
$route['api/property_details/(:any)'] = 'api/Real_estate_api/property_details/$1';

$route['api/services/(:any)'] = 'api/Real_estate_api/services/$1';
$route['api/services'] = 'api/Real_estate_api/services';
$route['api/contact'] = 'api/Real_estate_api/contact';
$route['api/insert_contact'] = 'api/Real_estate_api/insert_contact';
$route['api/fetch'] = 'api/Real_estate_api/fetch';
$route['api/seo_url'] = 'api/Real_estate_api/seo_url';




