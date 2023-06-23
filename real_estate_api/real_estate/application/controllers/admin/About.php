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
        $this->load->view('admin/about_page');
		$this->load->view('admin/footer');
    }

    function add_page()
    {
		$page_name   =   $this->input->post('page_name');
		
		$page_name	=	$this->master_model->clean_name($page_name);

		$page_description  =       $this->input->post('page_description');

		$page_url	=	$this->master_model->clean_url($page_name);


		
		if(!empty($_FILES['page_img']['name']))
		{
				

				$config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['page_img']['name'];

				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				
				if($this->upload->do_upload('page_img'))
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
			'page_name'=> $page_name,
			'page_url'=>$page_url,
			'page_description'=>$page_description,
			'page_img'=>$img_path,
			'meta_description' => $this->input->post('meta_description'),
			'meta_keyword' => $this->input->post('meta_keyword')

		);

	 
		$this->master_model->add_data('pages',$data);
		redirect(base_url()."admin/show_page");

    }


    function show_page()
    {
        $data =array("status"=>1);
        $result['show_page'] = $this->master_model->show_data('pages',$data);
        $this->load->view('admin/header');
        $this->load->view('admin/show_page',$result);
        $this->load->view('admin/footer');

    }

    
    function edit_page($page_id=NULL)
    {
       
        $where_condition = array('page_id'=>$page_id);
       
		$result['page'] = $this->master_model->show_record_by_id('pages',$where_condition);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_page',$result);
		$this->load->view('admin/footer');


    }
    function update_page()
    {
        $page_name         =       $this->input->post('page_name');
		$page_url          =       $this->input->post('page_url');
		$page_description  =       $this->input->post('page_description');
			
	
			if(!empty($_FILES['page_img']['name']))
			{
				$config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['page_img']['name'];

				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if($this->upload->do_upload('page_img'))
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

					$img_name=$this->input->post('old_img');
					$img_path = $img_name;
			}

	
			$data = array(
                'page_name'=> $page_name,
                'page_url'=>$page_url,
                'page_description'=>$page_description,
                'page_img'=>$img_path
            );
			
          

			$page_id = $this->input->post('page_id');
			$where_condition = array('page_id'=>$page_id);
			$this->master_model->update_data('pages',$where_condition,$data);
			redirect(base_url()."admin/show_page");


    }

    function onDelete_update_page($page_id=NULL)
    {
            $data =array('status'=>0);
			$where_condition = array('page_id'=>$page_id);
			$this->master_model->onDelete_update_data('pages',$where_condition,$data);
			redirect(base_url()."admin/show_page");

    }

    function trash_page_0()
    {
        $where_condition = array('status'=>0);
		$result['page_trash']= $this->master_model->show_data('pages',$where_condition);

		$this->load->view('admin/header');
		$this->load->view('admin/page_trash',$result);
		$this->load->view('admin/footer');

    }


    function recover_page($page_id=NULL)
    {
            $where_condition = array('page_id'=>$page_id);	
			$data = array('status' => 1);    		
			$this->master_model->onRecover_update_data('pages',$where_condition,$data);
			redirect(base_url()."admin/show_page");

    }

    function view_page($page_id=NULL)
    {
        $where_condition = array('page_id'=>$page_id);	
		$row['view_page']= $this->master_model->show_record_by_id('pages',$where_condition);	
		$this->load->view('admin/header');
		$this->load->view('admin/view_page',$row);
		$this->load->view('admin/footer');

    }

    function delete_page($page_id=NULL)
    {
        $where_condition = array('page_id'=>$page_id);	
		$this->master_model->delete_data('pages',$where_condition);
		redirect(base_url()."admin/show_page");

    }




}
?>
