<?php
if(!defined('BASEPATH'))  exit('No direct script access allowed');

class login_controller extends CI_Controller
{
	function __construct()
	  {
	 	parent::__construct();
		
		
 	  }


	public function index()
	{

	 	$data['error']= "";
	 	$this->load->view('admin/login',$data); 
		
	 }
		

	 
	 function sign_up()
	 {	
		
		 $this->load->view('admin/sign_up');
 
	 }
	 
	  function sign_up_insert_data()
	  {
		$admin_role=$this->input->post('admin_role');
		 $data = array(
		  'name' =>$this->input->post('name'),
		  'email' =>$this->input->post('email'),
		  //'mobile'=>$this->input->post('mobile'),
		 'pwd'=>md5($this->input->post('password')),
		 'admin_role'=>$admin_role
		 );
		 
		 

		 $this->session->set_userdata('admin_role',$admin_role); 
		  $this->session->userdata('admin_role'); 
		
		 $this->master_model->add_data('admin_user',$data);
		 redirect(base_url()."admin/login");
	  }
 
	
	 public function login()
	 {
 
		 if(isset($_POST) && !empty($_POST))
		 {
 
			 $user_name	 = 	 $this->input->post('email');
			 $user_pwd    =  $this->input->post('password');
   
			 $hash_val = md5($user_pwd);
			 
			 $session_data = $this->session->set_userdata('email',$user_name); 
			 $this->session->set_userdata('pwd',$user_pwd);  
  
			 
			 $result = $this->master_model->login('admin_user',$user_name, $hash_val);
			 
			 if($result)
			 {
				 if ($result->email == $user_name && $result->pwd ==  $hash_val) 
				 {  			
					 
					 redirect(base_url()."admin/about_page");
					   
 
				 }  
			 }
			 else
			 { 
				 $data['error']  = 'Your Account is Invalid';  
					 $this->load->view('admin/login',$data); 
			 }  
 
		 }
		 else
		 {
			 $data['error']= "";
			 $this->load->view('admin/login',$data);
		 }	
 
	 }
	 public function log_out()
	 {
		$this->session->unset_userdata('email',$user_name); 
		redirect(base_url()."admin/login");
		
	 }
 
 
}
