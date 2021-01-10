<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller
{

	var $publicMethods  = array("login","logout"); 

	function __construct()
	{
		parent::__construct();
		$this->master_model->_validateLogin();
		
    }
    
    function about_page()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/about');
		$this->load->view('admin/footer');
	}

	function add_about()
    {
        
        $about_icon_title =       $this->input->post('about_icon_title');
        $about_icon_desc =       $this->input->post('about_icon_desc');

	
		if(!empty($_FILES['about_icon_img']['name']))
		{
				

				$config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['about_icon_img']['name'];
				$config['allowed_size'] = 1000;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				
				if($this->upload->do_upload('about_icon_img'))
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
			'about_icon_title'=>$about_icon_title,
            'about_icon_img'=>$img_path,
            'about_icon_desc'=>$about_icon_desc
		);

	
		$this->master_model->add_data('about',$data);
		redirect(base_url()."admin/show_about");

    }


    function show_about()
    {
        $data =array("status"=>1);
        $result['show_about'] = $this->master_model->show_data('about',$data);
        $this->load->view('admin/header');
        $this->load->view('admin/show_about',$result);
        $this->load->view('admin/footer');

    }

	function edit_about($about_id=NULL)
    {
       
        $where_condition = array('about_id'=>$about_id);
       
		$result['edit_about'] = $this->master_model->show_record_by_id('about',$where_condition);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_about',$result);
		$this->load->view('admin/footer');


    }
    function update_about()
    {
		$about_icon_desc  =       $this->input->post('about_icon_desc');
		$about_icon_title  =       $this->input->post('about_icon_title');
			
	
			if(!empty($_FILES['about_icon_img']['name']))
			{
				$config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['about_app_img']['name'];

				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if($this->upload->do_upload('about_icon_img'))
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
                'about_icon_desc'=>$about_icon_desc,
				'about_icon_img'=>$img_path,
				'about_icon_title'=>$about_icon_title
            );
			
          

			$about_id = $this->input->post('about_id');
			$where_condition = array('about_id'=>$about_id);
			$this->master_model->update_data('about',$where_condition,$data);
			redirect(base_url()."admin/show_about");


    }

    function onDelete_update_about($about_id=NULL)
    {
            $data =array('status'=>0);
			$where_condition = array('about_id'=>$about_id);
			$this->master_model->onDelete_update_data('about',$where_condition,$data);
			redirect(base_url()."admin/show_about");

    }

    function trash_about_0()
    {
        $where_condition = array('status'=>0);
		$result['about_trash']= $this->master_model->show_data('about',$where_condition);

		$this->load->view('admin/header');
		$this->load->view('admin/about_trash',$result);
		$this->load->view('admin/footer');

    }


    function recover_about($about_id=NULL)
    {
            $where_condition = array('about_id'=>$about_id);	
			$data = array('status' => 1);    		
			$this->master_model->onRecover_update_data('about',$where_condition,$data);
			redirect(base_url()."admin/show_about");

    }

    function view_about($about_id=NULL)
    {
        $where_condition = array('about_id'=>$about_id);	
		$row['view_about']= $this->master_model->show_record_by_id('about',$where_condition);	
		$this->load->view('admin/header');
		$this->load->view('admin/view_about',$row);
		$this->load->view('admin/footer');

    }

    function delete_about($about_id=NULL)
    {
        $where_condition = array('about_id'=>$about_id);	
		$this->master_model->delete_data('about',$where_condition);
		redirect(base_url()."admin/show_about");

    }


}

?>