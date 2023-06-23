<?php
 defined('BASEPATH') OR  exit('No direct script access allowed');

class Property extends CI_Controller
{

    var $publicMethods  = array("login","logout"); 

	function __construct()
	{
		parent::__construct();
		$this->master_model->_validateLogin();
		
    }
    
    function property()
    {
		$data =array("status"=>1);
		$result['agents'] = $this->master_model->show_data('agents',$data);
		
        $this->load->view('admin/header');
        $this->load->view('admin/add_property',$result);
		$this->load->view('admin/footer');
    }

    function add_property()
    {
		$agent_id				=			$this->input->post('agent_id');

		$property_name           =          $this->input->post('property_name');
		$seo_url                 =          $this->master_model->clean_url($property_name);

        $property_details        =          $this->input->post('property_details');

		$property_details		=	        $this->master_model->clean_url($property_details);
		$property_address		=	        $this->input->post('property_address');


		$property_price         =            $this->input->post('property_price');
	    $property_kitchen        =          $this->input->post('property_kitchen');
		$property_living_room    =          $this->input->post('property_living_room');
		$property_bedroom        =          $this->input->post('property_bedroom');
        $property_parking        =          $this->input->post('property_parking');
		$property_type           =          $this->input->post('property_type');

	
            // Main Images   

			if(!empty($_FILES['property_main_img']['name']))
			{
				
					$config['upload_path'] = 'images/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['file_name'] = $_FILES['property_main_img']['name'];
					$config['max_size'] = '2000000';
	
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
					
					if($this->upload->do_upload('property_main_img'))
					{
						$uploadData = $this->upload->data();
						$img = $uploadData['file_name'];
						$img_path = "images/".$img;
					}
					if (!$this->upload->do_upload('property_main_img')) {
						$error = array('error' => $this->upload->display_errors());
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
			 'property_name'=> $property_name,
			 'property_price'=> $property_price,
			 'property_bedroom'=>$property_bedroom,
			 'property_living_room'=>$property_living_room,
			 'property_parking'=> $property_parking,
			 'property_kitchen'=> $property_kitchen,
			 'property_details'=> $property_details,
			 'property_address'=> $property_address,
			 'seo_url'         => $seo_url,
			 'agent_id'		=> $agent_id,
			 'property_main_img' =>$img_path,
			 'property_type'=> $property_type,
			 'meta_description' => $this->input->post('meta_description'),
			'meta_keyword' => $this->input->post('meta_keyword')
			 );
			 

		
			 $this->master_model->add_data('property',$data);
			 $last_property_id = $this->db->insert_id();	

			 
			// Slider Images
			$files = $_FILES;
			$count = count($_FILES['property_slider_img']['name']);
			for($i=0; $i<$count; $i++)
			  {
				  
					  $_FILES['property_slider_img']['name']= $files['property_slider_img']['name'][$i];
					  $_FILES['property_slider_img']['type']= $files['property_slider_img']['type'][$i];
					  $_FILES['property_slider_img']['tmp_name']= $files['property_slider_img']['tmp_name'][$i];
					  $_FILES['property_slider_img']['error']= $files['property_slider_img']['error'][$i];
					  $_FILES['property_slider_img']['size']= $files['property_slider_img']['size'][$i];
					  $config['upload_path'] = 'images/';
					  $config['allowed_types'] = 'gif|jpg|png|jpeg';
					  $config['max_size'] = '2000000';
					  $config['remove_spaces'] = true;
					  $config['overwrite'] = false;
					  $config['max_width'] = '';
					  $config['max_height'] = '';
					  $this->load->library('upload', $config);
					  $this->upload->initialize($config);

					  if($this->upload->do_upload('property_slider_img'))
					  {
						  $uploadData = $this->upload->data();
						  $fileName = $uploadData['file_name'];
						  $images[] = "images/".$fileName;
					  }
					 
						if (!$this->upload->do_upload('property_slider_img')) {
							$error = array('error' => $this->upload->display_errors());
					  }
				  
			  }
			  
		 
		 
			foreach($images as $key=>$p_value) 
			{
			   $this->db->insert('images', array('property_id'=>$last_property_id,'property_slider_img'=>$p_value));
			   
            }
		

		redirect(base_url()."admin/show_property");


    }


    function show_property()
    {
         $data =array("status"=>1);
		 $result['property'] = $this->master_model->show_data('property',$data);
	
        $this->load->view('admin/header');
        $this->load->view('admin/show_property',$result);
        $this->load->view('admin/footer');

    }

    
    function edit_property($property_id=NULL)
    {
       
        $where_condition = array('property_id'=>$property_id);
		$result['edit_property'] = $this->master_model->show_record_by_id('property',$where_condition);

		$result['images']= $this->master_model->show_data('images',$where_condition);

		$this->load->view('admin/header');
		$this->load->view('admin/edit_property',$result);
		$this->load->view('admin/footer');


    }
    function update_property()
    {
		$agent_id				=			$this->input->post('agent_id');

		$property_name   =         $this->input->post('property_name');
		$seo_url         =         $this->master_model->clean_url($property_name);

		$property_details  =       $this->input->post('property_details');

		$property_details	= 		$this->master_model->clean_url($property_details);
		$property_address		=	$this->input->post('property_address');

        $property_kitchen  =       $this->input->post('property_kitchen');
		$property_living_room  =   $this->input->post('property_living_room');
		$property_bedroom  =       $this->input->post('property_bedroom');
		$property_parking  =       $this->input->post('property_parking');
		$property_price  =       	$this->input->post('property_price');
		$property_type           =             $this->input->post('property_type');
	
	//propert_main_img
		if(!empty($_FILES['property_main_img']['name']))
			{
				$config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['property_main_img']['name'];

				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if($this->upload->do_upload('property_main_img'))
				{
					$uploadData = $this->upload->data();
					$img_name1 = $uploadData['file_name'];
					$img_path1 = "images/".$img_name1;
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());

				}
			}
			else
			{

					$img_name1=$this->input->post('old_main_img');
					$img_path1 = $img_name1;
			}
 

			
		
			  $data = array(
				'property_name'=> $property_name,
				'property_price'=> $property_price,
				'property_bedroom'=>$property_bedroom,
				'property_living_room'=>$property_living_room,
				'property_parking'=> $property_parking,
				'property_kitchen'=> $property_kitchen,
				'property_details'=> $property_details,
				'property_address'=> $property_address,
				'seo_url'         => $seo_url,
				'property_main_img' => $img_path1,
				'agent_id'		=> $agent_id,
				'property_type'=> $property_type
				);
          

			$property_id = $this->input->post('property_id');
			$where_condition = array('property_id'=>$property_id);
			$this->master_model->update_data('property',$where_condition,$data);



			//propert_slider_img

			$files = $_FILES;
			$count = count($_FILES['property_slider_img']['name']);
			for($i=0; $i<$count; $i++)
			{
				
					$_FILES['property_slider_img']['name']= $files['property_slider_img']['name'][$i];
					$_FILES['property_slider_img']['type']= $files['property_slider_img']['type'][$i];
					$_FILES['property_slider_img']['tmp_name']= $files['property_slider_img']['tmp_name'][$i];
					$_FILES['property_slider_img']['error']= $files['property_slider_img']['error'][$i];
					$_FILES['property_slider_img']['size']= $files['property_slider_img']['size'][$i];
					$config['upload_path'] = 'images/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size'] = '2000000';
					$config['remove_spaces'] = true;
					$config['overwrite'] = false;
					$config['max_width'] = '';
					$config['max_height'] = '';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					if($this->upload->do_upload('property_slider_img'))
					{
						$uploadData = $this->upload->data();
						$fileName = $uploadData['file_name'];
						$images[] = "images/".$fileName;
					}
				
			}
			

			foreach($images as $key=>$p_value) 
			{
			   $this->db->insert('images', array('property_id'=>$property_id,'property_slider_img'=>$p_value));
			   
            }

				


			redirect(base_url()."admin/show_property");


    }

    function onDelete_update_property($property_id=NULL)
    {
            $data =array('status'=>0);
			$where_condition = array('property_id'=>$property_id);
			$this->master_model->onDelete_update_data('property',$where_condition,$data);
			redirect(base_url()."admin/show_property");

    }

    function trash_property_0()
    {
        $where_condition = array('status'=>0);
		$result['property_list']= $this->master_model->show_data('property',$where_condition);

		$this->load->view('admin/header');
		$this->load->view('admin/property_trash',$result);
		$this->load->view('admin/footer');

    }


    function recover_property($property_id=NULL)
    {
            $where_condition = array('property_id'=>$property_id);	
			$data = array('status' => 1);    		
			$this->master_model->onRecover_update_data('property',$where_condition,$data);
			redirect(base_url()."admin/show_property");

    }

    function view_property($property_id=NULL)
    {
        $where_condition = array('property_id'=>$property_id);	
		$result['view_property']= $this->master_model->show_record_by_id('property',$where_condition);	

		$result['images']= $this->master_model->show_data('images',$where_condition);

		$this->load->view('admin/header');
		$this->load->view('admin/view_property',$result);
		$this->load->view('admin/footer');

    }

    function delete_property($property_id=NULL)
    {
        $where_condition = array('property_id'=>$property_id);	
		$this->master_model->delete_data('property',$where_condition);
		redirect(base_url()."admin/show_property");

	}
	
	function delete_slider_img($img_id=NULL,$property_id=NULL)
    {
        $where_condition = array('images.img_id'=>$img_id);	 
		$this->master_model->delete_data('images',$where_condition);
		redirect(base_url()."admin/edit_property/".$property_id);

	}

	function show_property_enquiry()
	{
		$result['property_enquiry'] = $this->master_model->show_enquiry_by_product_id();
		$this->load->view('admin/header');
		$this->load->view('admin/property_enquiry_view',$result);
		$this->load->view('admin/footer');
	}

	function show_contact_enquiry()
	{
		$where_condition = array();
		$result['contact'] = $this->master_model->show_data('contact',$where_condition);
		$this->load->view('admin/header');
		$this->load->view('admin/contact_view',$result);
		$this->load->view('admin/footer');
	}
}
?>

    


