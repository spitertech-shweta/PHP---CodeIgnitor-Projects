<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller
{

	function __construct()
	{
		parent::__construct();		
    }


	public function user($user_name = NULL)
	{
		$where_condition = array('users.user_name'=>$user_name);
		$show_user = $this->master_model->show_record_by_id('users',$where_condition);
		echo json_encode($show_user);
	}
 
	public function blog($user_id = NULL)
	{
		$where_condition = array('blog.user_id'=>$user_id,"status"=>1);
		$show_user = $this->master_model->show_data('blog',$where_condition);
		echo json_encode($show_user);
	}

	public function user_clients($user_id = NULL)
	{
		$where_condition = array('user_clients.user_id'=>$user_id,"status"=>1);
		$show_user = $this->master_model->show_data('user_clients',$where_condition);
		echo json_encode($show_user);
	}

	public function client_testimonials($user_id = NULL)
	{
		$where_condition = array('client_testimonials.user_id'=>$user_id,"status"=>1);
		$show_user = $this->master_model->show_data('client_testimonials',$where_condition);
		echo json_encode($show_user);
	}

	public function work($user_id = NULL)
	{
		$where_condition = array('work.user_id'=>$user_id,"status"=>1);
		$show_user = $this->master_model->show_data('work',$where_condition);
		echo json_encode($show_user);
	}

	public function services($user_id = NULL)
	{
		$where_condition = array('services.user_id'=>$user_id,"status"=>1);
		$show_user = $this->master_model->show_data('services',$where_condition);
		echo json_encode($show_user);
	}

	public function user_designation($user_id = NULL)
	{
		$where_condition = array('user_designation.user_id'=>$user_id,"status"=>1);
		$show_user = $this->master_model->show_data('user_designation',$where_condition);
		echo json_encode($show_user);
	}

	public function show_social_sharing($user_id = NULL)
	{
		$where_condition = array('social_sharing.user_id'=>$user_id,"status"=>1);
		$show_user = $this->master_model->show_record_by_id('social_sharing',$where_condition);
		echo json_encode($show_user);
	}


	public function insert_contact()
	{
		header("Content-Type:application/json");
		// Takes raw data from the request
		$json = file_get_contents('php://input');

		// Converts it into a PHP object
		$data = json_decode($json);

		$name = $data->name;
		$mobile = $data->mobile;
		$email = $data->email;
		$message = $data->message;
		$address = $data->address;
		$user_name = $data->user_name;

		$where_condition =array('user_name'=>$user_name);
		$result['user_id'] = $this->master_model->show_record_by_id('users',$where_condition);

		$user_id = $result['user_id']->user_id;

		 $data1 = array(
			'contact_name' => $name,
			'contact_email' => $email,
			'contact_mobile' => $mobile,
			'contact_msg' =>$message,
			'contact_address' =>$address,
			'user_id' =>$user_id

		);

		print_r($data1);

	
		
		$this->master_model->add_data('contact_enquiry',$data1);
	}

}
?>