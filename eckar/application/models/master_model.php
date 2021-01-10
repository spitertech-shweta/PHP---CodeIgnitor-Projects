<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class master_model extends CI_Model{

	public function add_data($tb,$values)
	{
		 $this->db->insert($tb,$values);
		 return $last_id = $this->db->insert_id();
	}


	public function show_data($tb,$where_condition=NULL)
	{

		$this->db->select('*');
		$this->db->from($tb);
		$this->db->where($where_condition);
		$query = $this->db->get();
		$result = $query->result();
		return $result;

	}



	function show_record_by_id($tb,$where_condition)
	{
		$this->db->select('*');
		$this->db->from($tb);
		$this->db->where($where_condition);
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}

	

	function login($tb,$username,$user_pwd)
	{
		$this->db->select('*');
		$this->db->from($tb);
		$this->db->where('email', $username);
		$this->db->where('password',$user_pwd);
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}


	public function update_data($tb,$where_condition,$data)
	{
		$this->db->where($where_condition);
		$this->db->update($tb,$data);

	}


	// on delete button event fire update query and change status=0 in database table:add_stud
				
	public function onDelete_update_data($tb,$where_condition,$data)
	{
		
		$this->db->where($where_condition);
		$this->db->update($tb, $data); 

	}

	
	// on recover button event fire update query and change status=1 in database table:add_stud
	public function onRecover_update_data($tb,$where_condition,$data)
	{
		  
		$this->db->where($where_condition);
		$this->db->update($tb, $data); 

	}


	//display student record where status=0
	function trash_record_status_0($tb,$where_condition)
	{
	
		$this->db->select('*');
		$this->db->from($tb);
		$this->db->where($where_condition);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	
	public function delete_data($tb,$where_condition)
	{
		$this->db->where($where_condition);
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

