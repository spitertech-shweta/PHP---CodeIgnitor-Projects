<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_enquiry extends CI_Controller
{

	var $publicMethods  = array("login","logout"); 

	function __construct()
	{
		parent::__construct();
		$this->master_model->_validateLogin();	
    }
    
    function show_user_enquiry()
    {
		$where_condition = array('status'=>1);
		$result['show_user_enquiry'] = $this->master_model->show_data('user_enquiry',$where_condition);
        $this->load->view('admin/header');
        $this->load->view('admin/show_user_enquiry',$result);
		$this->load->view('admin/footer');
	}

	function view_user_enquiry()
    {
		$where_condition = array();
		$result['view_user_enquiry'] = $this->master_model->show_record_by_id('user_enquiry',$where_condition);
        $this->load->view('admin/header');
        $this->load->view('admin/view_user_enquiry',$result);
		$this->load->view('admin/footer');
	}


	function onDelete_update_user_enquiry($enquiry_id=NULL)
    {
            $data =array('status'=>0);
			$where_condition = array('enquiry_id'=>$enquiry_id);
			$this->master_model->onDelete_update_data('user_enquiry',$where_condition,$data);
			redirect(base_url()."admin/show_user_enquiry");

    }

    function trash_user_enquiry_0()
    {
        $where_condition = array('status'=>0);
		$result['user_enquiry_trash']= $this->master_model->show_data('user_enquiry',$where_condition);

		$this->load->view('admin/header');
		$this->load->view('admin/user_enquiry_trash_0',$result);
		$this->load->view('admin/footer');

    }


    function recover_user_enquiry($enquiry_id=NULL)
    {
            $where_condition = array('enquiry_id'=>$enquiry_id);	
			$data = array('status' => 1);    		
			$this->master_model->onRecover_update_data('user_enquiry',$where_condition,$data);
			redirect(base_url()."admin/show_user_enquiry");

    }


    function delete_user_enquiry($enquiry_id=NULL)
    {
        $where_condition = array('enquiry_id'=>$enquiry_id);	
		$this->master_model->delete_data('user_enquiry',$where_condition);
		redirect(base_url()."admin/show_user_enquiry");

    }



	











}
?>