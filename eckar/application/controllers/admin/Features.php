<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Features extends CI_Controller
{

	var $publicMethods  = array("login","logout"); 

	function __construct()
	{
		parent::__construct();
		$this->master_model->_validateLogin();
		
    }
    
    function features_page()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/features');
		$this->load->view('admin/footer');
	}

	function add_features()
    {
        
        $features_icon_title =       $this->input->post('feature_icon_title');
        $features_icon_desc =       $this->input->post('feature_icon_desc');

	
		if(!empty($_FILES['feature_icon_img']['name']))
		{
				

				$config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['feature_icon_img']['name'];
				$config['allowed_size'] = 1000;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				
				if($this->upload->do_upload('feature_icon_img'))
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
			'feature_icon_title'=>$features_icon_title,
            'feature_icon_img'=>$img_path,
            'feature_icon_desc'=>$features_icon_desc
		);

	 
		$this->master_model->add_data('features',$data);
		redirect(base_url()."admin/show_features");

    }


    function show_features()
    {
        $data =array("status"=>1);
        $result['show_feature'] = $this->master_model->show_data('features',$data);
        $this->load->view('admin/header');
        $this->load->view('admin/show_features',$result);
        $this->load->view('admin/footer');

    }

	function edit_features($feature_id=NULL)
    {
       
        $where_condition = array('feature_id'=>$feature_id);
       
		$result['edit_feature'] = $this->master_model->show_record_by_id('features',$where_condition);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_features',$result);
		$this->load->view('admin/footer');


    }
    function update_features()
    {
		$feature_icon_desc  =       $this->input->post('feature_icon_desc');
		$feature_icon_title  =       $this->input->post('feature_icon_title');
	
			if(!empty($_FILES['feature_icon_img']['name']))
			{
				$config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['feature_icon_img']['name'];

				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if($this->upload->do_upload('feature_icon_img'))
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
                'feature_icon_desc'=>$feature_icon_desc,
				'feature_icon_img'=>$img_path,
				'feature_icon_title'=>$feature_icon_title
            );
			
          

			$feature_id = $this->input->post('feature_id');
			$where_condition = array('feature_id'=>$feature_id);
			$this->master_model->update_data('features',$where_condition,$data);
			redirect(base_url()."admin/show_features");


    }

    function onDelete_update_features($feature_id=NULL)
    {
            $data =array('status'=>0);
			$where_condition = array('feature_id'=>$feature_id);
			$this->master_model->onDelete_update_data('features',$where_condition,$data);
			redirect(base_url()."admin/show_features");

    }

    function trash_features_0()
    {
        $where_condition = array('status'=>0);
		$result['features_trash']= $this->master_model->show_data('features',$where_condition);

		$this->load->view('admin/header');
		$this->load->view('admin/features_trash',$result);
		$this->load->view('admin/footer');

    }


    function recover_features($feature_id=NULL)
    {
            $where_condition = array('feature_id'=>$feature_id);	
			$data = array('status' => 1);    		
			$this->master_model->onRecover_update_data('features',$where_condition,$data);
			redirect(base_url()."admin/show_features");

    }

    function view_features($feature_id=NULL)
    {
        $where_condition = array('feature_id'=>$feature_id);	
		$row['view_feature']= $this->master_model->show_record_by_id('features',$where_condition);	
		$this->load->view('admin/header');
		$this->load->view('admin/view_features',$row);
		$this->load->view('admin/footer');

    }

    function delete_features($feature_id=NULL)
    {
        $where_condition = array('feature_id'=>$feature_id);	
		$this->master_model->delete_data('features',$where_condition);
		redirect(base_url()."admin/show_features");

    }


}

?>