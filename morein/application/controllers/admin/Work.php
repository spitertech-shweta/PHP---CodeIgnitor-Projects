<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Work extends CI_Controller
{

	var $publicMethods  =   array("login","logout"); 

	function __construct()
	{
		parent::__construct();
		$this->master_model->_validateLogin();		
    }
    
    function work()
    {
        $where = array();
        $result['work_category'] = $this->master_model->show_data('work_category',$where);   

        $this->load->view('admin/header');
        $this->load->view('admin/work',$result);
        $this->load->view('admin/footer');
	}

	function add_work()
    {

            $work_title = $this->input->post('work_title');
       
            $work_desc = $this->input->post('work_desc');

            $work_category_name = $this->input->post('work_category_name');

           
            $user_id = $this->session->userdata('user_id');

        
            if(!empty($_FILES['work_video']['name']))
            {
              $configVideo['upload_path'] = 'videos/';
              $configVideo['max_size'] = '102400';
              $configVideo['allowed_types'] = 'mp4'; # add video extenstion on here
              $configVideo['overwrite'] = FALSE;
              $configVideo['remove_spaces'] = TRUE;
              $configVideo['file_name'] = $_FILES['work_video']['name'];
      
              $this->load->library('upload',$configVideo);
              $this->upload->initialize($configVideo);
      
              if($this->upload->do_upload('work_video'))
              {
                $uploadData = $this->upload->data();
                $video_name = $uploadData['file_name'];
                $video_path = "videos/".$video_name;
              }
              else
              {
                $error = array('error' => $this->upload->display_errors());
      
              }
            }
            else{
              $video_path = "";
            }
              

      if(!empty($_FILES['work_img']['name']))
			{
				$config['upload_path'] = 'images/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['work_img']['name'];

				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if($this->upload->do_upload('work_img'))
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
      else{
        $img_path = "";
      }
        
            $data = array(
                        'user_id' => $user_id,
                        'work_category_id' =>$work_category_name,
                        'work_title' =>$work_title,
                        'work_desc' =>$work_desc,
                        'work_img' =>$img_path,
                        'work_video' =>$video_path
            );

            
            $this->master_model->add_data('work',$data);
          
            redirect(base_url()."admin/show_work");
        
    }

    function show_work()
    {
        $user_id = $this->session->userdata('user_id');

        $where_condition = array("user_id"=>$user_id,"status"=>1);
        $result['show_work'] = $this->master_model->show_data('work',$where_condition);
        
        $this->load->view('admin/header');
        $this->load->view('admin/show_work',$result);
        $this->load->view('admin/footer');
      
    }



	function edit_work($work_id=NULL)
    {
        // $where_condition1 =array("work_img.work_id"=> $work_id);
        // $result['work_image'] = $this->master_model->show_data('work_img',$where_condition1);

        $where_condition = array('work_id'=>$work_id);
        $result['edit_work'] = $this->master_model->show_record_by_id('work',$where_condition);
        $this->load->view('admin/header');
        $this->load->view('admin/edit_work',$result);
        $this->load->view('admin/footer');
	}


	function update_work()
  {
            $work_id    = $this->input->post('work_id');

            $work_title = $this->input->post('work_title');
       
            $work_desc = $this->input->post('work_desc');

            $work_category_name = $this->input->post('work_category_name');

           
			if($work_category_name == "Images")
            {
              $work_category_name1 = 1;
            }
            if($work_category_name == "Services")
            {
              $work_category_name1 = 2;
            }
            if($work_category_name == "Content")
            {
              $work_category_name1 = 3;
            }
            if($work_category_name == "Video")
            {
              $work_category_name1 = 4;
            }
            if($work_category_name == "Gallery")
            {
              $work_category_name1 = 5;
            }
            if($work_category_name == "Music")
            {
              $work_category_name1 = 6;
            }  
      

            if(!empty($_FILES['work_video']['name']))
            {
              $configVideo['upload_path'] = 'videos/';
              $configVideo['max_size'] = '102400';
              $configVideo['allowed_types'] = 'mp4'; # add video extenstion on here
              $configVideo['overwrite'] = FALSE;
              $configVideo['remove_spaces'] = TRUE;
              $configVideo['file_name'] = $_FILES['work_video']['name'];
      
              $this->load->library('upload',$configVideo);
              $this->upload->initialize($configVideo);
      
              if($this->upload->do_upload('work_video'))
              {
                $uploadData = $this->upload->data();
                $video_name = $uploadData['file_name'];
                $video_path = "videos/".$video_name;
              }
              else
              {
                $error = array('error' => $this->upload->display_errors());
      
              }
            }
            else
            {
      
                $video_name=$this->input->post('old_work_video');
                $video_path = $video_name;
            }
      


			if(!empty($_FILES['work_img']['name']))
			{
				$config['upload_path'] = 'images/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['work_img']['name'];

				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if($this->upload->do_upload('work_img'))
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

					$img_name=$this->input->post('old_work_img');
					$img_path = $img_name;
			}

	
            $data = array(
                'work_id' => $work_id,
                'work_category_id' => $work_category_name1,
                'work_title' =>$work_title,
                'work_desc' =>$work_desc,
                'work_img' =>$img_path,
                'work_video' =>$video_path
               );
    
          
			$where_condition = array('work_id'=>$work_id);
			$this->master_model->update_data('work',$where_condition,$data);
			redirect(base_url()."admin/show_work");
	}
	
	function onDelete_update_work($work_id=NULL)
    {
      $data =array('status'=>0);
			$where_condition = array('work_id'=>$work_id);
			$this->master_model->onDelete_update_data('work',$where_condition,$data);
			redirect(base_url()."admin/show_work");

    }

    function trash_work_0()
    {
        $where_condition = array("status"=>0);
		$result['work_trash']= $this->master_model->show_data('work',$where_condition);

		$this->load->view('admin/header');
		$this->load->view('admin/work_trash',$result);
		$this->load->view('admin/footer');

    }


    function recover_work($work_id=NULL)
    {
      $where_condition = array('work_id'=>$work_id);	
			$data = array('status' => 1);    		
			$this->master_model->onRecover_update_data('work',$where_condition,$data);
			redirect(base_url()."admin/show_work");

    }

    function view_work($work_id=NULL)
    {
        $where_condition = array('work_id'=>$work_id);	
        $result['view_work']= $this->master_model->show_record_by_id('work',$where_condition);	
        // echo "<pre>";
        // print_r($result); exit;
        $this->load->view('admin/header');
        $this->load->view('admin/view_work',$result);
        $this->load->view('admin/footer');

    }

    function delete_work($work_id=NULL)
    {
        $where_condition = array('work_id'=>$work_id);	
		$this->master_model->delete_data('work',$where_condition);
		redirect(base_url()."admin/show_work");

    }





	    
}

?>
