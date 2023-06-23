<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Testimonial extends CI_Controller
{

	var $publicMethods  = array("login","logout"); 

	function __construct()
	{
		parent::__construct();
		$this->master_model->_validateLogin();		
    }
    
    function testimonial()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/testimonial');
		$this->load->view('admin/footer');
	}

	function add_testimonial()
    {
		$user_id 			    =		$this->session->userdata('user_id');
        $client_quote 		    =       $this->input->post('client_quote');
		$client_name 			=       $this->input->post('client_name');
		$client_designation 	=		$this->input->post('client_designation');
		
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
					$img = '';
					
           		 }

		$data = array(
			'user_id' =>$user_id,
			'client_quote'=>$client_quote,
            'client_name'=>$client_name,
            'client_designation'=>$client_designation,
            'client_img' =>$img_path
		);

	
		$this->master_model->add_data('client_testimonials',$data);
		redirect(base_url()."admin/show_testimonial");

    }


	function show_testimonial()
	{
		$user_id 			    =		$this->session->userdata('user_id');
        $data =array("status"=>1,"user_id"=>$user_id);
		$result['show_testimonial'] = $this->master_model->show_data('client_testimonials',$data);
		$this->load->view('admin/header');
		$this->load->view('admin/show_testimonial',$result);
		$this->load->view('admin/footer');
		
	}

	function edit_testimonial($client_id=NULL)
    {
        $where_condition = array('client_id'=>$client_id); 
		$result['edit_testimonial'] = $this->master_model->show_record_by_id('client_testimonials',$where_condition);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_testimonial',$result);
		$this->load->view('admin/footer');
    }
    function update_testimonial()
    {
		$user_id 			    =		$this->session->userdata('id');;
        $client_quote 		    =       $this->input->post('client_quote');
		$client_name 			=       $this->input->post('client_name');
		$client_designation 	=		$this->input->post('client_designation');
        
			if(!empty($_FILES['testimonial_img']['name']))
			{
				$config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['testimonial_app_img']['name'];

				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if($this->upload->do_upload('testimonial_img'))
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

					$img_name=$this->input->post('old_main_img');
					$img_path = $img_name;
			}

	
			$data = array(
                'user_id' =>$user_id,
                'client_quote'=>$client_quote,
                'client_name'=>$client_name,
                'client_designation'=>$client_designation,
                'client_img' =>$img_path
            );
			
          

			$client_testimonial_id = $this->input->post('client_testimonial_id');
			$where_condition = array('client_id'=>$client_id);
			$this->master_model->update_data('client_testimonials',$where_condition,$data);
			redirect(base_url()."admin/show_testimonial");


    }

    function onDelete_update_testimonial($client_id=NULL)
    {
            $data =array('status'=>0);
			$where_condition = array('client_id'=>$client_id);
			$this->master_model->onDelete_update_data('client_testimonials',$where_condition,$data);
			redirect(base_url()."admin/show_testimonial");

    }

    function trash_testimonial_0()
    {
        $where_condition = array('status'=>0);
		$result['testimonial_trash']= $this->master_model->show_data('client_testimonials',$where_condition);

		$this->load->view('admin/header');
		$this->load->view('admin/testimonial_trash',$result);
		$this->load->view('admin/footer');

    }


    function recover_testimonial($client_id=NULL)
    {
            $where_condition = array('client_id'=>$client_id);	
			$data = array('status' => 1);    		
			$this->master_model->onRecover_update_data('client_testimonials',$where_condition,$data);
			redirect(base_url()."admin/show_testimonial");

    }

    function view_testimonial($client_id=NULL)
    {
        $where_condition = array('client_id'=>$client_id);	
		$row['view_testimonial']= $this->master_model->show_record_by_id('client_testimonials',$where_condition);	
		$this->load->view('admin/header');
		$this->load->view('admin/view_testimonial',$row);
		$this->load->view('admin/footer');

    }

    function delete_testimonial($client_id=NULL)
    {
        $where_condition = array('client_id'=>$client_id);	
		$this->master_model->delete_data('client_testimonials',$where_condition);
		redirect(base_url()."admin/show_testimonial");

    }


}

?>