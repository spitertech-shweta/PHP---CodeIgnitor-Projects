<?php
if(!defined('BASEPATH'))  exit('No direct script access allowed');

class Login_controller extends CI_Controller
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
		 $data = array(
		  'name' =>$this->input->post('name'),
		  'email' =>$this->input->post('email'),
		  'mobile'=>$this->input->post('mobile'),
		   'password'=>md5($this->input->post('password')),
		
		 );
		 
		 
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
			 $this->session->set_userdata('password',$user_pwd);  
  
			 
			 $result = $this->master_model->login('admin_user',$user_name, $hash_val);
			 
			 if($result)
			 {
				 if ($result->email == $user_name && $result->password ==  $hash_val) 
				 {  			
					 
					 redirect(base_url()."admin/show_home");
					   
 
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
 


	 public function forget_password()
	 {
		 $email = $this->input->post('email');
		 $new_password = $this->input->post('new_password');
		 $hash_val1 = md5($new_password);
		
		 $re_enter_new_password = $this->input->post('re_enter_new_password');
		 $hash_val2 = md5($re_enter_new_password);

		 if($hash_val1 == $hash_val2)
		 {
			 $where_condition = array('email'=> $email);
			 $data = array('password'=>$hash_val1);
             $this->master_model->update_data('admin_user',$where_condition, $data);
			 redirect(base_url()."admin/login");
		 }
		 else{
			 
			redirect(base_url()."admin/login");
		 }
	 }
 
}
