<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pricing extends CI_Controller
{

	var $publicMethods  = array("login","logout"); 

	function __construct()
	{
		parent::__construct();
		$this->master_model->_validateLogin();
		
    }
    
    function pricing_page()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/pricing');
		$this->load->view('admin/footer');
	}

	function add_pricing()
    {
    
         $pricing_desc= $this->input->post('pricing_desc'); 

		$data = array(
			'pricing_title'=> $this->input->post('pricing_title'),
            'pricing_desc'=> $pricing_desc,
            'price'=> $this->input->post('price')

		);
       
	
		$this->master_model->add_data('price',$data);
		redirect(base_url()."admin/show_pricing");

    }


    function show_pricing()
    {
        $data =array("status"=>1);
        $result['show_pricing'] = $this->master_model->show_data('price',$data);
        $this->load->view('admin/header');
        $this->load->view('admin/show_pricing',$result);
        $this->load->view('admin/footer');

    }

	function edit_pricing($pricing_id=NULL)
    {
       
        $where_condition = array('pricing_id'=>$pricing_id);
       
		$result['edit_pricing'] = $this->master_model->show_record_by_id('price',$where_condition);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_pricing',$result);
		$this->load->view('admin/footer');


    }
    function update_pricing()
    {
        $pricing_desc= $this->input->post('pricing_desc'); 

		$data = array(
			'pricing_title'=> $this->input->post('pricing_title'),
            'pricing_desc'=> $pricing_desc,
            'price'=> $this->input->post('price')

		);
       
          

			$pricing_id = $this->input->post('pricing_id');
			$where_condition = array('pricing_id'=>$pricing_id);
			$this->master_model->update_data('price',$where_condition,$data);
			redirect(base_url()."admin/show_pricing");


    }

    function onDelete_update_pricing($pricing_id=NULL)
    {
            $data =array('status'=>0);
			$where_condition = array('pricing_id'=>$pricing_id);
			$this->master_model->onDelete_update_data('price',$where_condition,$data);
			redirect(base_url()."admin/show_pricing");

    }

    function trash_pricing_0()
    {
        $where_condition = array('status'=>0);
		$result['pricing_trash']= $this->master_model->show_data('price',$where_condition);

		$this->load->view('admin/header');
		$this->load->view('admin/pricing_trash',$result);
		$this->load->view('admin/footer');

    }


    function recover_pricing($pricing_id=NULL)
    {
            $where_condition = array('pricing_id'=>$pricing_id);	
			$data = array('status' => 1);    		
			$this->master_model->onRecover_update_data('price',$where_condition,$data);
			redirect(base_url()."admin/show_pricing");

    }

    function view_pricing($pricing_id=NULL)
    {
        $where_condition = array('pricing_id'=>$pricing_id);	
		$row['view_pricing']= $this->master_model->show_record_by_id('price',$where_condition);	
		$this->load->view('admin/header');
		$this->load->view('admin/view_pricing',$row);
		$this->load->view('admin/footer');

    }

    function delete_pricing($pricing_id=NULL)
    {
        $where_condition = array('pricing_id'=>$pricing_id);	
		$this->master_model->delete_data('price',$where_condition);
		redirect(base_url()."admin/show_pricing");

    }


}

?>