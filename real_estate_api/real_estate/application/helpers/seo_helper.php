<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');



function seo($controller_name,$method_name)
{
	$CI =& get_instance();
	$router = &load_class('Router');
	$currentMethod = $router->fetch_method();
	//echo $controller_name;
	//echo $method_name;
	$where_condition = array('controller_name' =>$controller_name,'nav_header'=>$method_name);
	$CI->db->select('*');
	$CI->db->from('meta');
	$CI->db->where($where_condition);
	$query = $CI->db->get();
	$result = $query->row();
	return $result;
	

}  

?>