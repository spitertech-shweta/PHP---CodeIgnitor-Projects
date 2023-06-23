<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_client extends CI_Controller
{

	var $publicMethods  = array("login","logout"); 

	function __construct()
	{
		parent::__construct();
		$this->master_model->_validateLogin();
		
    }
    
    function client()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/client');
		$this->load->view('admin/footer');
	}

	function add_client()
    {
        $user_id 		=		$this->session->userdata('user_id');	
        $client_title 	=       $this->input->post('client_title');
	
		if(!empty($_FILES['client_img']['name']))
		{
				

				$config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['client_img']['name'];
				$config['allowed_size'] = 1000;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				
				if($this->upload->do_upload('client_img'))
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
					$img_path = '';
					
           		 }

		$data = array(
			'user_id' =>$user_id,
			'client_title'=>$client_title,
            'client_img'=>$img_path 
		);

	 
		$this->master_model->add_data('user_clients',$data);
		redirect(base_url()."admin/show_client");

    }


    function show_client()
    {
		$user_id 					=		$this->session->userdata('user_id');	
        $data 						=		array("status"=>1,"user_id"=>$user_id);
        $result['show_client']	    = 		$this->master_model->show_data('user_clients',$data);
        $this->load->view('admin/header');
        $this->load->view('admin/show_client',$result);
        $this->load->view('admin/footer');
    }

	function edit_client($client_id=NULL)
    { 
	
        $where_condition = array('client_id'=>$client_id);
		$result['edit_client'] = $this->master_model->show_record_by_id('user_clients',$where_condition);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_client',$result);
		$this->load->view('admin/footer');
    }
    function update_client()
    {
		$client_title  =       $this->input->post('client_title');

			if(!empty($_FILES['client_img']['name']))
			{
				$config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['client_img']['name'];

				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if($this->upload->do_upload('client_img'))
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

					$img_name=$this->input->post('old_client_img');
					$img_path = $img_name;
			}

	
			$data = array(
                
				'client_img'=>$img_path,
				'client_title'=>$client_title
            );
			
          

			$client_id = $this->input->post('client_id');
			$where_condition = array('client_id'=>$client_id);
			$this->master_model->update_data('user_clients',$where_condition,$data);
			redirect(base_url()."admin/show_client");


    }

    function onDelete_update_client($client_id=NULL)
    {
            $data =array('status'=>0);
			$where_condition = array('client_id'=>$client_id);
			$this->master_model->onDelete_update_data('user_clients',$where_condition,$data);
			redirect(base_url()."admin/show_client");

    }

    function trash_client_0()
    {
        $where_condition = array('status'=>0);
		$result['client_trash']= $this->master_model->show_data('user_clients',$where_condition);

		$this->load->view('admin/header');
		$this->load->view('admin/client_trash',$result);
		$this->load->view('admin/footer');

    }


    function recover_client($client_id=NULL)
    {
            $where_condition = array('client_id'=>$client_id);	
			$data = array('status' => 1);    		
			$this->master_model->onRecover_update_data('user_clients',$where_condition,$data);
			redirect(base_url()."admin/show_client");

    }

    function view_client($client_id=NULL)
    {
        $where_condition = array('client_id'=>$client_id);	
		$row['view_client']= $this->master_model->show_record_by_id('user_clients',$where_condition);	
		$this->load->view('admin/header');
		$this->load->view('admin/view_client',$row);
		$this->load->view('admin/footer');

    }

    function delete_client($client_id=NULL)
    {
        $where_condition = array('client_id'=>$client_id);	
		$this->master_model->delete_data('user_clients',$where_condition);
		redirect(base_url()."admin/show_client");

    }

}

?>