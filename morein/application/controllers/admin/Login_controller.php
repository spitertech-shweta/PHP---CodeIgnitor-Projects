<?php
if(!defined('BASEPATH'))  exit('No direct script access allowed');

class Login_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();	
		$this->load->library('session');
		$this->load->library('form_validation');
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

	function sign_up_msg()
	{	
		$this->load->view('admin/sign_up_msg');
	}

	

	 

	function sign_up_insert_data()
	{
		
		$password 			=			$this->input->post('password');
		$this->session->set_userdata('user_password',$password);
		
		$confirm_password	=			$this->input->post('confirm_password');
		
		$user_email			= 		    $this->input->post('user_email');
		$this->session->set_userdata('user_email',$user_email);
		
		
		$hash_val1 = md5($password);

		$hash_val2 = md5($confirm_password);  
		

		$result = $this->master_model->unique_email('users',$user_email);

				if($user_email)
				{
					if($result)
					{
						if($result->user_email == $user_email) 
						{
							
						   echo json_encode(array('email_exist'=>'Email Id already Registered'));
						

						} 
							
					}

			
					else
					{
						if($hash_val1 == $hash_val2)
						{
							
							$user_fname = $this->input->post('user_fname');
							$this->session->set_userdata('user_fname',$user_fname);

							$user_lname = $this->input->post('user_lname');
							$this->session->set_userdata('user_lname',$user_lname);


							$user_mobile = $this->input->post('user_mobile');
							$this->session->set_userdata('user_mobile',$user_mobile);

							$user_address = $this->input->post('user_address');

							$user_gender = $this->input->post('user_gender');


							$fourdigitrandom    = 			rand(1000,9999);
							$user_name			=  			$user_fname ."_".$fourdigitrandom;
							$this->session->set_userdata('user_name',$user_name);

							$this->session->set_userdata('password',$password);

						
							$data1 = array(
								'password' =>$hash_val1,
								'user_name' =>$user_name,
								'user_fname'=>$user_fname,
								'user_lname'=>$user_lname,
								'user_mobile'=>$user_mobile,
								'user_email'=>$user_email,
								'user_address'=>$user_address,
								'user_gender'=>$user_gender	
							);

							$return_array[]   = array(
								'password' => $password,
								'user_fname' => $user_fname,
								'user_lname' => $user_lname,
								'user_gender' => $user_gender,
								'confirm_password' => $confirm_password,
								'user_mobile' => $user_mobile,
								'user_email' => $user_email,
								'user_address' => $user_address
						
							);
							
							echo json_encode($return_array);  


							$this->master_model->add_data('users',$data1);

							$last_user_id = $this->db->insert_id();

							$this->db->insert('social_sharing', array('user_id' =>$last_user_id));

							$this->send_mail_on_registration(); 
						
						}			
				    }			
			 		
		        }			
		
		
	}	



	public function login()
	{
 
		 if(isset($_POST) && !empty($_POST))
		 {

			 $user_name	 	= 	 $this->input->post('user_name');
			 $user_pwd    		=    $this->input->post('password');
			 $hash_val1 = md5($user_pwd);

			 $result = $this->master_model->check_login_by_email('users',$user_name, $hash_val1);

			 $result1 = $this->master_model->check_login_by_user_name('users',$user_name, $hash_val1);
	
			 if($result)
			 {

				 if($result->user_email == $user_name && $result->password ==  $hash_val1) 
				 {  	
					$user_id 			= 	$result->user_id;
					$user_fname			= 	$result->user_fname;
					$user_lname			= 	$result->user_lname;

					$user_full_name     =  $user_fname ." ".$user_lname;
					
					$this->session->set_userdata('user_full_name',$user_full_name);

					$this->session->set_userdata('user_id',$user_id);
					redirect(base_url()."admin/edit_user");
				 } 
				
			 }
			 else if( $result1)
			 {
				if($result1->user_name == $user_name && $result1->password ==  $hash_val1) 
				 {  	
					$user_id 			= 	$result1->user_id;
					$user_fname			= 	$result1->user_fname;
					$user_lname			= 	$result1->user_lname;

					$user_full_name     =  $user_fname ." ".$user_lname;
					
					$this->session->set_userdata('user_full_name',$user_full_name);

					$this->session->set_userdata('user_id',$user_id);
					redirect(base_url()."admin/edit_user");
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
		$this->session->unset_userdata('user_id',$user_id); 
		redirect(base_url()."admin/login");
		
	 }
 

	 public function forget_password_form()
	 {
		$this->load->view('admin/forget_password_form');
	 }

	 public function forget_password_link()
	 {
		$this->load->view('admin/forget_password');
	 }


	public function recovered_password_msg()
	{
	 	$this->load->view('admin/recovered_password_msg');
	}


	public function forget_password()
	{
	
		 $email = $this->input->post('email');
		
		 $this->session->set_userdata('email',$email);

		 $result = $this->master_model->unique_email('users',$email);
		
		 if($email)
		 {
			 if($result)
			 {
				 if($result->user_email == $email) 
				 {
					$fourdigit_otp	=	rand(1000,9999);

					$this->session->set_userdata('fourdigit_OTP',$fourdigit_otp);

					$data  = array('otp'=>$fourdigit_otp);

					$where_condition	=	array("user_email"=>$email);

					$this->master_model->update_data('users',$where_condition,$data);

					$this->send_mail_on_forget_password();
					
					$this->load->view('admin/forget_password_msg');
				 }
						 
			 }
			 else
			 {
				$this->session->set_flashdata('Repeated Email ID','Email Id does not exist');
				redirect(base_url()."admin/forget_password_form");
			
			 }
			 $this->load->view('admin/forget_password');

		 }
		

	}

	public function get_forget_password()
	{
		$email_id = $this->input->post('email_id');
		
		$this->session->set_userdata('email_id',$email_id);

		$password = $this->input->post('password');

		$this->session->set_userdata('pwd',$password);

		$hash_val1 = md5($password);

		$re_enter_password = $this->input->post('re_enter_password');
	
		$hash_val2 = md5($re_enter_password); 

		$otp	=	$this->input->post('otp');

		$where_condition =	 array("otp"=>$otp);
	

		$result		=	$this->master_model->show_record_by_id('users',$where_condition);

		if($result)
		{
			if($result->otp == $otp)
			{
				if($hash_val1 == $hash_val2)
				{
					$data = array("password" =>$hash_val1);
				
					$where_condition = array("user_email"=>$email_id);
				
					$this->master_model->update_data('users',$where_condition,$data);

					$this->send_password_to_user_in_mail();
					
				}
				else
				{
					redirect(base_url()."admin/forget_password_link");
				}
			}
				
		}
		else{

			echo json_encode(array('otp_wrong'=>'Incorrect OTP'));

		}		

		$return_array = array(
			'email_id' => $email_id,
			'password' => $password,
			're_enter_password' => $re_enter_password,
			'otp' =>$otp
		);
	
		echo json_encode($return_array);
			
	}


	 function email_config()
	 {
		$this->load->library('email');
		$config = array(
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' =>  465,
			'smtp_user' => 'shweta.spitertech@gmail.com',
			'smtp_pass' => 'Nirmala_330',
			'mailtype'  => 'html',
			'charset'   => 'utf-8'
		);
		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");
 
	 }


	 public function send_mail_on_registration() 
	 { 
		$this->email_config();

		$user_name = $this->session->userdata('user_name');
		$user_email = $this->session->userdata('user_email');
		$user_password = $this->session->userdata('user_password');
		$user_fname = $this->session->userdata('user_fname');
		$user_lname = $this->session->userdata('user_lname');

			//Email content
			$htmlContent = '<h3>Hello '. $user_fname. ' '. $user_lname.'</h3>';
			$htmlContent .= '<p> Login Link : http://localhost/morein/admin/login</p>';
			$htmlContent .= '<p>  User_name :'. $user_name . ' Or '.$user_email.'</p>';
			
			$htmlContent .= '<p>  password :'.$user_password .'</p>';

			$htmlContent .= '<p> User Card Link : http://localhost/morein_api/'.$user_name.'</p>';

			$this->email->to('shweta.spitertech@gmail.com');
			$this->email->from('shweta.spitertech@gmail.com','MyWebsite');
			$this->email->subject('Moerin helps to grow yours business');
			$this->email->message($htmlContent);

			//Send email
		    $this->email->send();  
		   
	 }



	 public function send_mail_on_forget_password() 
	 { 
		$this->email_config();

		$email = $this->session->userdata('email');
		$user_name = $this->session->userdata('user_name');
		$otp = $this->session->userdata('fourdigit_OTP');
		
			//Email content
			$htmlContent  = 'Forget Password Link : http://localhost/morein/admin/forget_password_link?'.$email.'<br>';
			$htmlContent  .= 'OTP for Forget Password : '.$otp;


			$this->email->to('shweta.spitertech@gmail.com');
			$this->email->from('shweta.spitertech@gmail.com','MyWebsite');
			$this->email->subject('Moerin helps to grow yours business');
			$this->email->message($htmlContent);

			//Send email
		    $this->email->send();  
		   
	 }

	 public function send_password_to_user_in_mail() 
	 { 
		$this->email_config();

		$email = $this->session->userdata('email_id');
		
		$recovered_password = $this->session->userdata('pwd');
		
		$user_name = $this->session->userdata('user_name');
		$user_email = $this->session->userdata('user_email');
		
			//Email content
			$htmlContent  = '<p>Your email id:  '.$email.'</p>';
			$htmlContent .= '<p>Your Recovered Password :  '.$recovered_password.'</p>';
			$htmlContent .= '<p>Login Link : http://localhost/morein/admin/login</p>';

			$this->email->to('shweta.spitertech@gmail.com');
			$this->email->from('shweta.spitertech@gmail.com','MyWebsite');
			$this->email->subject('Moerin helps to grow yours business');
			$this->email->message($htmlContent);

			//Send email
		    $this->email->send();  
		   
	 }

	 public function send_password_on_password_recovered() 
	 { 
		$this->email_config();

		$email = $this->session->userdata('email_id');
		
		$recovered_password = $this->session->userdata('pwd');
		
		$user_name = $this->session->userdata('user_name');
		$user_email = $this->session->userdata('user_email');
		
			//Email content
			$htmlContent  = '<p>Your email id:  '.$email.'</p>';
			$htmlContent .= '<p>Your Recovered Password :  '.$recovered_password.'</p>';
			$htmlContent .= '<p>Login Link : http://localhost/morein/admin/login</p>';

			$this->email->to('shweta.spitertech@gmail.com');
			$this->email->from('shweta.spitertech@gmail.com','MyWebsite');
			$this->email->subject('Moerin helps to grow yours business');
			$this->email->message($htmlContent);

			//Send email
		    $this->email->send();  
		   
	 }
 
  

	// public function validate_forget_password()
	// {
	// 	$pwd     =  $this->session->userdata('pwd');
	// 	$password =  trim($pwd);

	// 	$regex_lowercase = '/[a-z]/';
	// 	$regex_uppercase = '/[A-Z]/';
	// 	$regex_number = '/[0-9]/';
	// 	$regex_special = '/[!@#$%^&*()\-_=+{};:,<.>ยง~]/';

		
	// 	if(empty($password))
	// 	{
	// 		$this->session->set_flashdata('validate_forget_password', 'The  field is required.');
	// 		redirect(base_url()."admin/forget_password_link");
	// 	}

	// 	 if(preg_match_all($regex_lowercase, $password) < 1)
	// 	{
	// 		$this->session->set_flashdata('validate_forget_password', 'The  field must have least one lowercase letter.');
	// 	    redirect(base_url()."admin/forget_password_link"); 
	// 	}

	// 	 if(preg_match_all($regex_uppercase, $password) < 1)
	// 	{
	// 		$this->session->set_flashdata('validate_forget_password', 'The  field must have least one uppercase letter.');
	// 		redirect(base_url()."admin/forget_password_link");
	// 	}

	// 	 if(preg_match_all($regex_number, $password) < 1)
	// 	{
	// 		$this->session->set_flashdata('validate_forget_password', 'The  field must have at least one number.');
	// 		redirect(base_url()."admin/forget_password_link");
	// 	}

	// 	 if(preg_match_all($regex_special, $password) < 1)
	// 	{
	// 		$this->session->set_flashdata('validate_forget_password', 'The  field must have at least one special character !@#$%^&*()\-_=+{};:,<.>ยง~');
	// 		redirect(base_url()."admin/forget_password_link");
	// 	}

	//      if(strlen($password) < 6)
	// 	{
	// 		$this->session->set_flashdata('validate_forget_password', 'The  field must have least 6 characters in length.');
	// 		redirect(base_url()."admin/forget_password_link");
	// 	}

	// 	 if(strlen($password) > 12)
	// 	{
	// 		$this->session->set_flashdata('validate_forget_password', 'The  field cannot exceed 12 characters in length.');
	// 		redirect(base_url()."admin/forget_password_link");
	// 	}
		
	// 	return true;
	// }
	// //strong password end


 
}
