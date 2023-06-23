<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller
{

	var $publicMethods  = array("login","logout"); 

	function __construct()
	{
		parent::__construct();
		$this->master_model->_validateLogin();
		
    }
    
    function service()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/service');
		$this->load->view('admin/footer');
	}

	function add_service()
    {
        $user_id 		=		$this->session->userdata('user_id');	
        $service_title 	=       $this->input->post('service_title');
        $service_desc 	=       $this->input->post('service_desc');

	
		if(!empty($_FILES['service_img']['name']))
		{
				

				$config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['service_img']['name'];
				$config['allowed_size'] = 1000;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				
				if($this->upload->do_upload('service_img'))
				{
					$uploadData = $this->upload->data();
					$img = $uploadData['file_name'];
					$img_path = "images/".$img;
				}
				else
				{
					$img = '';
					echo $this->upload->display_errors('<p>', '</p>');
				
                }
			}
				else
				{
					$img = '';
					
           		 }

		$data = array(
			'user_id' =>$user_id,
			'service_title'=>$service_title,
            'service_img'=>$img_path,
            'service_desc'=>$service_desc
		);

	 
		$this->master_model->add_data('services',$data);
		redirect(base_url()."admin/show_service");

    }


    function show_service()
    {
		$user_id 		=		$this->session->userdata('user_id');	
        $data =array("status"=>1,"user_id"=>$user_id);
        $result['show_service'] = $this->master_model->show_data('services',$data);
        $this->load->view('admin/header');
        $this->load->view('admin/show_service',$result);
        $this->load->view('admin/footer');
    }

	function edit_service($service_id=NULL)
    { 
	
        $where_condition = array('service_id'=>$service_id);
		$result['edit_service'] = $this->master_model->show_record_by_id('services',$where_condition);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_service',$result);
		$this->load->view('admin/footer');
    }
    function update_service()
    {

		$service_desc  =       $this->input->post('service_desc');
		$service_title  =       $this->input->post('service_title');

	
			if(!empty($_FILES['service_img']['name']))
			{
				$config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['service_img']['name'];

				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if($this->upload->do_upload('service_img'))
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

					$img_name=$this->input->post('old_service_img');
					$img_path = $img_name;
			}

	
			$data = array(
                'service_desc'=>$service_desc,
				'service_img'=>$img_path,
				'service_title'=>$service_title
            );
			
          

			$service_id = $this->input->post('service_id');
			$where_condition = array('service_id'=>$service_id);
			$this->master_model->update_data('services',$where_condition,$data);
			redirect(base_url()."admin/show_service");


    }

    function onDelete_update_service($service_id=NULL)
    {
            $data =array('status'=>0);
			$where_condition = array('service_id'=>$service_id);
			$this->master_model->onDelete_update_data('services',$where_condition,$data);
			redirect(base_url()."admin/show_service");

    }

    function trash_service_0()
    {
        $where_condition = array('status'=>0);
		$result['service_trash']= $this->master_model->show_data('services',$where_condition);

		$this->load->view('admin/header');
		$this->load->view('admin/service_trash',$result);
		$this->load->view('admin/footer');

    }


    function recover_service($service_id=NULL)
    {
            $where_condition = array('service_id'=>$service_id);	
			$data = array('status' => 1);    		
			$this->master_model->onRecover_update_data('services',$where_condition,$data);
			redirect(base_url()."admin/show_service");

    }

    function view_service($service_id=NULL)
    {
        $where_condition = array('service_id'=>$service_id);	
		$row['view_service']= $this->master_model->show_record_by_id('services',$where_condition);	
		$this->load->view('admin/header');
		$this->load->view('admin/view_service',$row);
		$this->load->view('admin/footer');

    }

    function delete_service($service_id=NULL)
    {
        $where_condition = array('service_id'=>$service_id);	
		$this->master_model->delete_data('services',$where_condition);
		redirect(base_url()."admin/show_service");

    }

}

?>