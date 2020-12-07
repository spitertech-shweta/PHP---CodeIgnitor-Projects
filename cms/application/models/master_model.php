<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class master_model extends CI_Model{

	public function add_data($tb,$values)
	{
		 $this->db->insert($tb,$values);
		 return $last_id = $this->db->insert_id();
	}

	// Function To Fetch all Student/Admin Record
	public function show_data($tb)
	{

		$this->db->select('*');
		$this->db->from($tb);
		$this->db->where('status',1);
		$query = $this->db->get();
		$result = $query->result();
		return $result;



		// $status = array('status' => 1); 
		// $query = $this->db->get($tb);
		// $this->db->where('status', $status);
		// return $result1 =$query->result();

	}


	// Function To Fetch Selected Student Record
	function show_student_id($tb,$id)
	{
		$this->db->select('*');
		$this->db->from($tb);
		$this->db->where('id', $id);
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}

	//function for admin table
	function show_admin_id($tb,$admin_id)
	{
		$this->db->select('*');
		$this->db->from($tb);
		$this->db->where('admin_id', $admin_id);
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}

	//login function
	function login($tb,$username,$user_pwd)
	{
		$this->db->select('*');
		$this->db->from($tb);
		$this->db->where('email', $username);
		$this->db->where('pwd', $user_pwd);
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}

	public function update_admin_data($admin_id,$data)
	{
		$this->db->where('admin_id', $admin_id);
		$this->db->update('admin_user',$data);
	}

	public function update_data($id,$data)
	{
		//$this->db->where('id', $id);
		//$this->db->update('stud', $data);

		$this->db->where('id', $id);
		$this->db->update('add_stud',$data);

	}


	// on delete button event fire update query and change status=0 in database table:add_stud
				
	public function onDelete_update_data($id)
	{
		
		$status = array('status' => 0);    
		$this->db->where('id', $id);
		$this->db->update('add_stud', $status); 

	}

	// on delete button event fire update query and change status=0 in database table:admin_user

	public function onDelete_update_admin_data($admin_id)
	{
		
		$status = array('status' => 0);    
		$this->db->where('admin_id', $admin_id);
		$this->db->update('admin_user', $status); 

	}


	// on recover button event fire update query and change status=1 in database table:add_stud
	public function onRecover_update_data($id)
	{
		$status = array('status' => 1);    
		$this->db->where('id', $id);
		$this->db->update('add_stud', $status); 

	}

	// on recover button event fire update query and change status=1 in database table:admin_user
	public function onRecover_update_admin_data($admin_id)
	{
		$status = array('status' => 1);    
		$this->db->where('admin_id', $admin_id);
		$this->db->update('admin_user', $status); 

	}


	//display student record where status=0
	function trash_record_status_0($tb)
	{
		$status = 0; 
		$this->db->select('*');
		$this->db->from($tb);
		$this->db->where('status', $status);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	//display admin record where status=0
	function trash_admin_record_status_0($tb)
	{
		$status = 0; 
		$this->db->select('*');
		$this->db->from($tb);
		$this->db->where('status', $status);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}


		
	public function delete_data($tb,$id)
	{
		
		$this->db->where('id', $id);
		$this->db->delete($tb);

	}


	//function for admin_user
	public function delete_admin_data($tb,$admin_id)
	{
		
		$this->db->where('admin_id',$admin_id);
		$this->db->delete($tb);

	}



	//restrict url direct access without login
	function _validateLogin()
	{
	$CI =& get_instance();
	   $router = &load_class('Router');
	   $currentMethod = $router->fetch_method();
	  // if(in_array($currentMethod,$this->publicMethods) == false)
		//{
		  // call some login functionality
			if(!$CI->session->userdata('email'))
			{
				redirect(base_url()."admin/login");
			}

	   //}
	 }


	








}

?>
