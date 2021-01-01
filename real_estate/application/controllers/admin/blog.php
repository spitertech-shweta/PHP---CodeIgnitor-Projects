<?php
 defined('BASEPATH') OR  exit('No direct script access allowed');

class Blog extends CI_Controller
{

    var $publicMethods  = array("login","logout"); 

	function __construct()
	{
		parent::__construct();
		$this->master_model->_validateLogin();
		
    }
    
    function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/add_blog');
		$this->load->view('admin/footer');
    }

    function add_blog()
    {
		$blog_name   	=   $this->input->post('blog_name');
		$seo_url        =        $this->master_model->clean_url($blog_name);
		$blog_content  =       $this->input->post('blog_content');
		$blog_img	 =       $this->input->post('blog_img');
		$blog_date 	 =      date('d-m-y h:i:s');
		

		
		if(!empty($_FILES['blog_img']['name']))
		{
				

				$config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['blog_img']['name'];

				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				
				if($this->upload->do_upload('blog_img'))
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
			'blog_name'=> $blog_name,
			'blog_content'=>$blog_content,
			'blog_img'=> $img_path,
			'blog_date'=> $blog_date,
			'seo_url'=>$seo_url
		);

	 

		$this->master_model->add_data('blog',$data);
		redirect(base_url()."admin/show_blog");

    }


    function show_blog()
    {
        $data =array("status"=>1);
        $result['blog'] = $this->master_model->show_data('blog',$data);
        $this->load->view('admin/header');
        $this->load->view('admin/show_blog',$result);
        $this->load->view('admin/footer');

    }

    
    function edit_blog($blog_id=NULL)
    {
       
        $where_condition = array('blog_id'=>$blog_id);
       
		$result['edit_blog'] = $this->master_model->show_record_by_id('blog',$where_condition);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_blog',$result);
		$this->load->view('admin/footer');


    }
    function update_blog()
    {
		$blog_name   =   $this->input->post('blog_name');
		$seo_url   =   $this->master_model->clean_url($blog_name);
		$blog_content  =    $this->input->post('blog_content');
		$blog_date  =      date('d-m-y h:i:s');

		
	
			if(!empty($_FILES['blog_img']['name']))
			{
				$config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['blog_img']['name'];

				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if($this->upload->do_upload('blog_img'))
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
				'blog_name'=> $blog_name,
				'blog_content'=>$blog_content,
				'blog_date'=>$blog_date,
				'blog_img'=>$img_path,
				'seo_url'=>$seo_url
			);
			
          

			$blog_id = $this->input->post('blog_id');
			$where_condition = array('blog_id'=>$blog_id);
			$this->master_model->update_data('blog',$where_condition,$data);
			redirect(base_url()."admin/show_blog");


    }

    function onDelete_update_blog($blog_id=NULL)
    {
            $data =array('status'=>0);
			$where_condition = array('blog_id'=>$blog_id);
			$this->master_model->onDelete_update_data('blog',$where_condition,$data);
			redirect(base_url()."admin/show_blog");

    }

    function trash_blog_0()
    {
        $where_condition = array('status'=>0);
		$result['blog_list']= $this->master_model->show_data('blog',$where_condition);

		$this->load->view('admin/header');
		$this->load->view('admin/blog_trash',$result);
		$this->load->view('admin/footer');

	}
	

	function blog_detail()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/blog_trash',$result);
		$this->load->view('admin/footer');

    }


    function recover_blog($blog_id=NULL)
    {
            $where_condition = array('blog_id'=>$blog_id);	
			$data = array('status' => 1);    		
			$this->master_model->onRecover_update_data('blog',$where_condition,$data);
			redirect(base_url()."admin/show_blog");

    }

    function view_blog($blog_id=NULL)
    {
        $where_condition = array('blog_id'=>$blog_id);	
		$row['view_blog']= $this->master_model->show_record_by_id('blog',$where_condition);	
		$this->load->view('admin/header');
		$this->load->view('admin/view_blog',$row);
		$this->load->view('admin/footer');

    }

    function delete_blog($blog_id=NULL)
    {
        $where_condition = array('blog_id'=>$blog_id);	
		$this->master_model->delete_data('blog',$where_condition);
		redirect(base_url()."admin/show_blog");

    }
}
?>