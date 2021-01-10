<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class gallery extends CI_Controller
{

	var $publicMethods  = array("login","logout"); 

	function __construct()
	{
		parent::__construct();
		$this->master_model->_validateLogin();
		
    }
    
    function gallery_page()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/gallery');
		$this->load->view('admin/footer');
	}

	function add_gallery()
    {
    
        $files = $_FILES;
        $count = count($_FILES['gallery_latest_app_image']['name']);
        for($i=0; $i<$count; $i++)
          {
              
                  $_FILES['gallery_latest_app_image']['name']= $files['gallery_latest_app_image']['name'][$i];
                  $_FILES['gallery_latest_app_image']['type']= $files['gallery_latest_app_image']['type'][$i];
                  $_FILES['gallery_latest_app_image']['tmp_name']= $files['gallery_latest_app_image']['tmp_name'][$i];
                  $_FILES['gallery_latest_app_image']['error']= $files['gallery_latest_app_image']['error'][$i];
                  $_FILES['gallery_latest_app_image']['size']= $files['gallery_latest_app_image']['size'][$i];
                  $config['upload_path'] = 'images/';
                  $config['allowed_types'] = 'gif|jpg|png|jpeg';
                  $config['max_size'] = '2000000';
                  $config['remove_spaces'] = true;
                  $config['overwrite'] = false;
                  $config['max_width'] = '';
                  $config['max_height'] = '';
                  $this->load->library('upload', $config);
                  $this->upload->initialize($config);

                  if($this->upload->do_upload('gallery_latest_app_image'))
                  {
                      $uploadData = $this->upload->data();
                      $fileName = $uploadData['file_name'];
                      $images[] = "images/".$fileName;
                  }
                 
                    if (!$this->upload->do_upload('gallery_latest_app_image ')) {
                        $error = array('error' => $this->upload->display_errors());
                  }
              
          }
    
         
        foreach($images as $key=>$p_value) 
        {
           $this->db->insert('gallery', array('gallery_latest_app_image'=>$p_value));
        }
		redirect(base_url()."admin/show_gallery");

    }


    function show_gallery()
    {
        $data =array("status"=>1);
        $result['show_gallery'] = $this->master_model->show_data('gallery',$data);
        $this->load->view('admin/header');
        $this->load->view('admin/show_gallery',$result);
        $this->load->view('admin/footer');

    }

	function edit_gallery($gallery_id=NULL)
    {
       
        $where_condition = array('gallery_id'=>$gallery_id);
       
		$result['edit_gallery'] = $this->master_model->show_record_by_id('gallery',$where_condition);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_gallery',$result);
		$this->load->view('admin/footer');


    }
    function update_gallery()
    {
		
        if(!empty($_FILES['gallery_latest_app_image']['name']))
        {
            $config['upload_path'] = 'images/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['gallery_latest_app_image']['name'];

            $this->load->library('upload',$config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('gallery_latest_app_image'))
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
            'gallery_latest_app_image'=>$img_path
           
        );
        
      

        $gallery_id = $this->input->post('gallery_id');
        $where_condition = array('gallery_id'=>$gallery_id);
        $this->master_model->update_data('gallery',$where_condition,$data);
        redirect(base_url()."admin/show_gallery");


    }

    function onDelete_update_gallery($gallery_id=NULL)
    {
            $data =array('status'=>0);
			$where_condition = array('gallery_id'=>$gallery_id);
			$this->master_model->onDelete_update_data('gallery',$where_condition,$data);
			redirect(base_url()."admin/show_gallery");

    }

    function trash_gallery_0()
    {
        $where_condition = array('status'=>0);
		$result['gallery_trash']= $this->master_model->show_data('gallery',$where_condition);

		$this->load->view('admin/header');
		$this->load->view('admin/gallery_trash',$result);
		$this->load->view('admin/footer');

    }


    function recover_gallery($gallery_id=NULL)
    {
            $where_condition = array('gallery_id'=>$gallery_id);	
			$data = array('status' => 1);    		
			$this->master_model->onRecover_update_data('gallery',$where_condition,$data);
			redirect(base_url()."admin/show_gallery");

    }

    function view_gallery($gallery_id=NULL)
    {
        $where_condition = array('gallery_id'=>$gallery_id);	
		$row['view_gallery']= $this->master_model->show_record_by_id('gallery',$where_condition);	
		$this->load->view('admin/header');
		$this->load->view('admin/view_gallery',$row);
		$this->load->view('admin/footer');

    }

    function delete_gallery($gallery_id=NULL)
    {
        $where_condition = array('gallery_id'=>$gallery_id);	
		$this->master_model->delete_data('gallery',$where_condition);
		redirect(base_url()."admin/show_gallery");

    }


}

?>