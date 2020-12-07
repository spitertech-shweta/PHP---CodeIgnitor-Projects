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
	


	function add_stud()
	{	
		
		$this->load->view('admin/header'); 
		$this->load->view('admin/add_stud');
		$this->load->view('admin/footer');

	}
	
	function add_stud_data()
	{

	
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$gender=$this->input->post('gender');


		if(!empty($_FILES['img']['name']))
		{
				

				$config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['img']['name'];

				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				
				if($this->upload->do_upload('img'))
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
			'name'=> $name,
			'email'=>$email,
			'gender'=>$gender,
			'img'=>$img_path
		);

		$this->master_model->add_data('add_stud',$data);
		redirect(base_url()."admin/show_stud");

		
	}

	public function show_stud()
	{

		$data['h'] = $this->master_model->show_data('add_stud');

		$this->load->view('admin/header');
		$this->load->view('admin/show_stud',$data);
		$this->load->view('admin/footer');
		
	}

	

	public function edit_stud_data($id=NULL)
	{
		
		$result['h'] = $this->master_model->show_student_id('add_stud',$id);

		$this->load->view('admin/header');
		$this->load->view('admin/edit_stud_details',$result);
		$this->load->view('admin/footer');
	}
	
		public function update_stud_data()
		{

			if(!empty($_FILES['img']['name']))
			{
		
				$config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['img']['name'];

				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				
				if($this->upload->do_upload('img'))
				{
					$uploadData = $this->upload->data();
					$img = $uploadData['file_name'];
					$img_path = "images/".$img;
					$data['img']= $img_path;

				}
				else
				{
					$img = '';
					echo $this->upload->display_errors('<p>', '</p>');
				
                }
			}
				


			$id = $this->input->post('id');
			
			$data = array(
					'name' =>$this->input->post('name'),
					'email'=> $this->input->post('email'),
					'gender'=> $this->input->post('gender'),
					'img'=>$data['img']
					);
			
				
			
			$this->master_model->update_data($id,$data);
			redirect(base_url()."admin/show_stud");

		}

       // update function
		public function onDelete_update_data($id=NULL)
		{
			//on delete button call "update_data()" in model and change status=0
			$this->master_model->onDelete_update_data($id);
			redirect(base_url()."admin/show_stud");

		}


		public function trash_record_status_0()
		{

			$data['h'] = $this->master_model->trash_record_status_0('add_stud');
			$this->load->view('admin/header');
			$this->load->view('admin/trash_view',$data);
			$this->load->view('admin/footer',$data);

		}

		public function recover($id=NULL)
		{
			$this->master_model->onRecover_update_data($id);
			redirect(base_url()."admin/show_stud");

		}

		public function view($id=NULL)
		{
			$row['h']= $this->master_model->show_student_id('add_stud',$id);
			
			$this->load->view('admin/header');
			$this->load->view('admin/view',$row);
			$this->load->view('admin/footer');
			
			//redirect(base_url()."admin/show_stud");

		}


		public function delete_stud_data($id=NULL)
		{
			
			$this->master_model->delete_data('add_stud',$id);

			redirect(base_url()."admin/show_stud");

		}
	

	function add_admin()
	{	
		

		$this->load->view('admin/header'); 
		$this->load->view('admin/add_admin_user');
		$this->load->view('admin/footer');
		
	}
	

	function add_admin_user()
	{	
		    echo $this->session->userdata('admin_role'); exit;
			$data = array(
			'name' =>$this->input->post('name'),
			'email' =>$this->input->post('email'),
			'mobile'=>$this->input->post('mobile'),
			'pwd'=> md5($this->input->post('pwd')),
			'admin_role'=>$this->input->post('admin_role')
			);

			$this->session->userdata('admin_role'); 
			
			$this->master_model->add_data('admin_user',$data);
			redirect(base_url()."admin/login");
		
	}
	

	
			
	


	
	

	
	function show_admin_user()
	{
		
			$data['h'] = $this->master_model->show_data('admin_user');
		
			$this->load->view('admin/header');
			$this->load->view('admin/show_admin_user',$data);
			$this->load->view('admin/footer');
		
	}

	
	public function edit_admin_data($admin_id=NULL)
	{
		$result['h'] = $this->master_model->show_admin_id('admin_user',$admin_id);
		
		$this->load->view('admin/header');
		$this->load->view('admin/edit_admin_data',$result);
		$this->load->view('admin/footer');
	}
	
		 public function update_admin_data()
		 {
			$admin_id = $this->input->post('admin_id');

			$admin_role = $this->input->post('admin_role');

			if($admin_role == "Super Admin")
			{
				$admin_role = "1";
			}
			else if($admin_role == "Admin")
			{
				$admin_role = "2";
			}
			else if($admin_role == "Manager")
			{
				$admin_role = "3";
			}

		 	$data = array(
		 			'name' =>$this->input->post('name'),
		 			'email'=> $this->input->post('email'),
		 			'pwd'=> md5($this->input->post('pwd')),
		 			'mobile'=> $this->input->post('mobile'),
		 			'admin_role'=>$admin_role
					 );
		
			print_r($data);
		 	$this->master_model->update_admin_data($admin_id,$data);

		    redirect(base_url()."admin/show_admin_user");

		 }

		  // update function
		public function onDelete_update_admin_data($admin_id=NULL)
		{
			//on delete button call "update_data()" in model and change status=0
			$this->master_model->onDelete_update_admin_data($admin_id);
			redirect(base_url()."admin/show_admin_user");

		}

		public function trash_admin_record_status_0()
		{

			$data['h'] = $this->master_model->trash_admin_record_status_0('admin_user');
			$this->load->view('admin/header');
			$this->load->view('admin/admin_trash_view',$data);
			$this->load->view('admin/footer');

		}


		public function recover_admin_data($admin_id=NULL)
		{
			$this->master_model->onRecover_update_admin_data($admin_id);
			redirect(base_url()."admin/show_admin_user");

		}

		public function view_admin($admin_id=NULL)
		{
			$row['h']= $this->master_model->show_admin_id('admin_user',$admin_id);
			
			$this->load->view('admin/header');
			$this->load->view('admin/view_admin',$row);
			$this->load->view('admin/footer');
			
			//redirect(base_url()."admin/show_admin_user");

		}


		public function delete_admin_data($admin_id=NULL)
		{
			
			$this->master_model->delete_admin_data('admin_user',$admin_id);

			redirect(base_url()."admin/show_admin_user");

		}
	

		public function logout()  
   		 {  
			//removing session  
			 //echo $this->session->userdata('email');

			$this->session->unset_userdata('email');  
			
			 echo $this->session->userdata('email');

			//$this->load->view('admin/logout');

        	redirect(base_url()."admin/login");
   		}  

	
}	// end of class Home






