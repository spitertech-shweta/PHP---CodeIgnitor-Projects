<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_designation extends CI_Controller
{

	var $publicMethods  = array("login","logout"); 

	function __construct()
	{
		parent::__construct();
		$this->master_model->_validateLogin();
		$this->load->library('session');
		
    }
    
    function user_designation()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/user_designation');
		$this->load->view('admin/footer');
	}

	function show_user_designation()
    {
		$user_id 		=		$this->session->userdata('user_id');	
        $where_condition = array("status"=>1,"user_id"=>$user_id);
		$result['show_user_designation'] = $this->master_model->show_data('user_designation',$where_condition);
	
        $this->load->view('admin/header');
        $this->load->view('admin/show_user_designation', $result);
		$this->load->view('admin/footer');
	}




	function add_user_designation()
    {
			
		if(isset($_POST) && !empty($_POST))
		{
			$user_id 			=		$this->session->userdata('user_id');
			$user_designation 	=       $this->input->post('user_designation');

			$result = $this->master_model->duplicate_designation('user_designation',$user_designation,$user_id);
			if($user_designation)
			{
				if($result)
				{
					if($result->user_designation == $user_designation) 
					{  	
						$this->session->set_flashdata('Repeated Designation','Already inserted');
						redirect(base_url()."admin/user_designation");
					}  
				}
				
				else{
					$data = array(
							'user_id' =>$user_id,
							'user_designation'=>$user_designation
							);
					$this->master_model->add_data('user_designation',$data);
				}
				
				redirect(base_url()."admin/show_user_designation");
			}
			else
			{
				$this->session->set_flashdata('designation Field Empty','Please enter designation');
				redirect(base_url()."admin/user_designation");
	
			}	
		}

			

    }

	function edit_user_designation($user_designation_id=NULL)
    { 
	
        $where_condition = array('user_designation_id'=>$user_designation_id);
		$result['edit_user_designation'] = $this->master_model->show_record_by_id('user_designation',$where_condition);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_user_designation',$result);
		$this->load->view('admin/footer');
    }
    function update_user_designation()
    {

		if(isset($_POST) && !empty($_POST))
		{
			$user_id 			=		$this->session->userdata('user_id');
			$user_designation 	=       $this->input->post('user_designation');

			$result = $this->master_model->duplicate_designation('user_designation',$user_designation,$user_id);
			
			if($user_designation)
			{
				if($result)
				{
					if($result->user_designation == $user_designation) 
					{  	
						$this->session->set_userdata('user_designation_id', $result->user_designation_id);
						$this->session->set_flashdata('Repeated Designation','Already inserted');
						redirect(base_url()."admin/edit_user_designation/".$result->user_designation_id);
					}  
				}
				
				else{
					$data = array(
							'user_id' =>$user_id,
							'user_designation'=>$user_designation
							);
					$this->master_model->add_data('user_designation',$data);
				}
				
				redirect(base_url()."admin/show_user_designation");
			}
			else
			{

				$user_designation_id = $this->session->userdata('user_designation_id');
				$this->session->set_flashdata('designation Field Empty','Please enter designation');
				redirect(base_url()."admin/edit_user_designation/".$user_designation_id);
	
			}	
		}


			$data = array(
				'user_designation'=>$user_designation
            );
			
          

			$user_designation_id = $this->input->post('user_designation_id');
			$where_condition = array('user_designation_id'=>$user_designation_id);
			$this->master_model->update_data('user_designation',$where_condition,$data);
			redirect(base_url()."admin/show_user_designation");


    }

    function onDelete_update_user_designation($user_designation_id=NULL)
    {
            $data =array('status'=>0);
			$where_condition = array('user_designation_id'=>$user_designation_id);
			$this->master_model->onDelete_update_data('user_designation',$where_condition,$data);
			redirect(base_url()."admin/show_user_designation");

    }

    function trash_user_designation_0()
    {
        $where_condition = array('status'=>0);
		$result['user_designation_trash']= $this->master_model->show_data('user_designation',$where_condition);

		$this->load->view('admin/header');
		$this->load->view('admin/user_designation_trash',$result);
		$this->load->view('admin/footer');

    }


    function recover_user_designation($user_designation_id=NULL)
    {
            $where_condition = array('user_designation_id'=>$user_designation_id);	
			$data = array('status' => 1);    		
			$this->master_model->onRecover_update_data('user_designation',$where_condition,$data);
			redirect(base_url()."admin/show_user_designation");

    }

    function view_user_designation($user_designation_id=NULL)
    {
        $where_condition = array('user_designation_id'=>$user_designation_id);	
		$row['view_user_designation']= $this->master_model->show_record_by_id('user_designation',$where_condition);	
		$this->load->view('admin/header');
		$this->load->view('admin/view_user_designation',$row);
		$this->load->view('admin/footer');

    }

    function delete_user_designation($user_designation_id=NULL)
    {
        $where_condition = array('user_designation_id'=>$user_designation_id);	
		$this->master_model->delete_data('user_designation',$where_condition);
		redirect(base_url()."admin/show_user_designation");

    }

}

?>