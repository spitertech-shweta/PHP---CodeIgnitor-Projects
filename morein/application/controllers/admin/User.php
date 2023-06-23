<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{

	var $publicMethods  = array("login","logout"); 

	function __construct()
	{
		parent::__construct();
		$this->master_model->_validateLogin();
		$this->load->library('session');			
    }
    
	
	public function edit_user()
    { 

		$user_id = $this->session->userdata('user_id');

		$where_condition = array('user_id'=>$user_id);
		$result['edit_user'] = $this->master_model->show_record_by_id('users',$where_condition);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_user',$result);
		$this->load->view('admin/footer');
	}


	function update_user()
	{
		$user_fname				=	$this->input->post('user_fname');
		$user_lname				=	$this->input->post('user_lname');		
		$user_mobile			=	$this->input->post('user_mobile');	
		$user_email 			=	$this->input->post('user_email');
		$user_address			=   $this->input->post('user_address');
		$user_working_time		=	$this->input->post('user_working_time');
		$user_city				=	$this->input->post('user_city');
		$user_state				=	$this->input->post('user_state');
		$user_country			=	$this->input->post('user_country');
		$user_quote				=	$this->input->post('user_quote');
		$user_info				=	$this->input->post('user_info');

		$user_id = $this->session->userdata('user_id');
	
			if(!empty($_FILES['user_img']['name']))
			{
				$config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['user_img']['name'];

				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if($this->upload->do_upload('user_img'))
				{
					$uploadData = $this->upload->data();
					$img_name = $uploadData['file_name'];
					$img_path = "images/".$img_name;
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());

				}
			}
			else
			{

					$img_name=$this->input->post('old_user_img');
					$img_path = $img_name;
			}


			$user_map				=	$this->input->post('user_map');
		
			if(preg_match('/^https?\:\/\/(www\.|maps\.)?google\.[a-z]+\/maps\/?\?([^&]+&)*(ll=-?[0-9]{1,2}\.[0-9]+,-?[0-9]{1,2}\.[0-9]+|q=[^&]+)+($|&)/', $user_map ) ) 
			{
				$data1 =  array('user_map' => $user_map);

				$where_condition1 = array('user_id'=>$user_id);
				$this->master_model->update_data('users',$where_condition1,$data1);
					
			}
			else
			{
				//  $data1 =  array('user_map' => '');

				//  $where_condition1 = array('user_id'=>$user_id);
				//  $this->master_model->update_data('users',$where_condition1,$data1);

				if($user_map=='')
				{
				
				}
				else
				{
					$this->session->set_flashdata('user_map_variable',$user_map);
					$this->session->set_flashdata('user_map','You Entered Invalid Map Api');

				}

			}


			$data = array(
				'user_fname'=>$user_fname,
				'user_lname'=>$user_lname,
				'user_mobile'=>$user_mobile,
				'user_email'=>$user_email,
				'user_address'=>$user_address,
				'user_working_time'=>$user_working_time,
				'user_state'=>$user_state,
				'user_city'=>$user_city,
				'user_country'=>$user_country,
				'user_quote'=>$user_quote,
				'user_info'=>$user_info,
				'user_img'=>$img_path
			);
			
          
			$where_condition = array('user_id'=>$user_id);
			$this->master_model->update_data('users',$where_condition,$data);
			

			redirect(base_url()."admin/edit_user");
	}
	
	function onDelete_update_user($user_id=NULL)
    {
        $data =array('status'=>0);
		$where_condition = array('user_id'=>$user_id,);
		$this->master_model->onDelete_update_data('users',$where_condition,$data);
		redirect(base_url()."admin/show_user");

    }

    function trash_user_0()
    {
		$user_id = $this->session->userdata('id');
        $where_condition = array('status'=>0,'user_id'=>$user_id);
		$result['user_trash']= $this->master_model->show_data('users',$where_condition);

		$this->load->view('admin/header');
		$this->load->view('admin/user_trash',$result);
		$this->load->view('admin/footer');

    }


    function recover_user($user_id=NULL)
    {
            $where_condition = array('user_id'=>$user_id);	
			$data = array('status' => 1);    		
			$this->master_model->onRecover_update_data('users',$where_condition,$data);
			redirect(base_url()."admin/show_user");

    }

    function view_user($user_id=NULL)
    {
        $where_condition = array('user_id'=>$user_id);	
		$row['view_user']= $this->master_model->show_record_by_id('users',$where_condition);	
		$this->load->view('admin/header');
		$this->load->view('admin/view_user',$row);
		$this->load->view('admin/footer');

    }

    function delete_user($user_id=NULL)
    {
        $where_condition = array('user_id'=>$user_id);	
		$this->master_model->delete_data('users',$where_condition);
		redirect(base_url()."admin/show_user");

    }
	    
}

?>
