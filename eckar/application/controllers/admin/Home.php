<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
	var $publicMethods  = array("login","logout"); 

	function __construct()
	{
		parent::__construct();
		$this->master_model->_validateLogin();
		
    }
    
    function home_page()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/home');
		$this->load->view('admin/footer');
	}

	function add_home()
    {
        
		$home_desc =       $this->input->post('home_desc');

	
		if(!empty($_FILES['home_app_img']['name']))
		{
				

				$config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['home_app_img']['name'];

				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				
				if($this->upload->do_upload('home_app_img'))
				{
					$uploadData = $this->upload->data();
					$img = $uploadData['file_name'];
					$img_path = "images/".$img;
				}
				else
				{
					$img = '';
					$error = array('error' => $this->upload->display_errors());
				
                }
			}
				

		$data = array(
			'home_desc'=>$home_desc,
			'home_app_img'=>$img_path
		);

	 
		$this->master_model->add_data('home',$data);
		redirect(base_url()."admin/show_home");

    }


    function show_home()
    {
        $data =array("status"=>1);
        $result['show_home'] = $this->master_model->show_data('home',$data);
        $this->load->view('admin/header');
        $this->load->view('admin/show_home',$result);
        $this->load->view('admin/footer');

    }

	function edit_home($home_id=NULL)
    {
       
        $where_condition = array('home_id'=>$home_id);
       
		$result['edit_home'] = $this->master_model->show_record_by_id('home',$where_condition);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_home',$result);
		$this->load->view('admin/footer');


    }
    function update_home()
    {
		$home_desc  =       $this->input->post('home_desc');
			
	
			if(!empty($_FILES['home_app_img']['name']))
			{
				$config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['home_app_img']['name'];

				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if($this->upload->do_upload('home_app_img'))
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
                'home_desc'=>$home_desc,
                'home_app_img'=>$img_path
            );
			
          

			$home_id = $this->input->post('home_id');
			$where_condition = array('home_id'=>$home_id);
			$this->master_model->update_data('home',$where_condition,$data);
			redirect(base_url()."admin/show_home");


    }

    function onDelete_update_home($home_id=NULL)
    {
            $data =array('status'=>0);
			$where_condition = array('home_id'=>$home_id);
			$this->master_model->onDelete_update_data('home',$where_condition,$data);
			redirect(base_url()."admin/show_home");

    }

    function trash_home_0()
    {
        $where_condition = array('status'=>0);
		$result['home_trash']= $this->master_model->show_data('home',$where_condition);

		$this->load->view('admin/header');
		$this->load->view('admin/home_trash',$result);
		$this->load->view('admin/footer');

    }


    function recover_home($home_id=NULL)
    {
            $where_condition = array('home_id'=>$home_id);	
			$data = array('status' => 1);    		
			$this->master_model->onRecover_update_data('home',$where_condition,$data);
			redirect(base_url()."admin/show_home");

    }

    function view_home($home_id=NULL)
    {
        $where_condition = array('home_id'=>$home_id);	
		$row['view_home']= $this->master_model->show_record_by_id('home',$where_condition);	
		$this->load->view('admin/header');
		$this->load->view('admin/view_home',$row);
		$this->load->view('admin/footer');

    }

    function delete_home($home_id=NULL)
    {
        $where_condition = array('home_id'=>$home_id);	
		$this->master_model->delete_data('home',$where_condition);
		redirect(base_url()."admin/show_home");

    }


}

?>