 <?php
 defined('BASEPATH') OR  exit('No direct script access allowed');

class Agent extends CI_Controller
{

    var $publicMethods  = array("login","logout"); 

	function __construct()
	{
		parent::__construct();
		$this->master_model->_validateLogin();
		
    }
    
    function agent()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/add_agent');
		$this->load->view('admin/footer');
    }

    function add_agent()
    {
		$agent_name   =   $this->input->post('agent_name');
		
		//$agent_name	=	$this->master_model->clean_name($agent_name);

		$agent_description  =       $this->input->post('agent_desc');

		//$agent_url	=	$this->master_model->clean_name($agent_name);


		$agent_mobile  =       $this->input->post('agent_mobile');
		$agent_email  =       $this->input->post('agent_email');
		$agent_description  =       $this->input->post('agent_desc');

		
		if(!empty($_FILES['agent_img']['name']))
		{
				

				$config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['agent_img']['name'];

				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				
				if($this->upload->do_upload('agent_img'))
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
			'agent_name'=> $agent_name,
			//'agent_url'=>$agent_url,
			'agent_desc'=>$agent_description,
			'agent_email'=> $agent_email,
			'agent_mobile'=> $agent_mobile,

			'agent_img'=>$img_path
		);

	 

		$this->master_model->add_data('agents',$data);
		redirect(base_url()."admin/show_agent");

    }


    function show_agent()
    {
        $data =array("status"=>1);
		$result['agent'] = $this->master_model->show_data('agents',$data);
		
        $this->load->view('admin/header');
        $this->load->view('admin/show_agent',$result);
        $this->load->view('admin/footer');

    }

    
    function edit_agent($agent_id=NULL)
    {
       
        $where_condition = array('agent_id'=>$agent_id);
       
		$result['edit_agent'] = $this->master_model->show_record_by_id('agents',$where_condition);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_agent',$result);
		$this->load->view('admin/footer');


    }
    function update_agent()
    {
        $agent_name   =   $this->input->post('agent_name');
		
		//$agent_name	=	$this->master_model->clean_name($agent_name);

		$agent_description  =       $this->input->post('agent_desc');

		//$agent_url	=	$this->master_model->clean_name($agent_name);


		$agent_mobile  =       $this->input->post('agent_mobile');
		$agent_email  =       $this->input->post('agent_email');
		$agent_description  =       $this->input->post('agent_desc');
			
	
			if(!empty($_FILES['agent_img']['name']))
			{
				$config['upload_path'] = 'images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['agent_img']['name'];

				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if($this->upload->do_upload('agent_img'))
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
				'agent_name'=> $agent_name,
				//'agent_url'=>$agent_url,
				'agent_desc'=>$agent_description,
				'agent_email'=> $agent_email,
				'agent_mobile'=> $agent_mobile,
	
				'agent_img'=>$img_path
			);
			
          

			$agent_id = $this->input->post('agent_id');
			$where_condition = array('agent_id'=>$agent_id);
			$this->master_model->update_data('agents',$where_condition,$data);
			redirect(base_url()."admin/show_agent");


    }

    function onDelete_update_agent($agent_id=NULL)
    {
            $data =array('status'=>0);
			$where_condition = array('agent_id'=>$agent_id);
			$this->master_model->onDelete_update_data('agents',$where_condition,$data);
			redirect(base_url()."admin/show_agent");

    }

    function trash_agent_0()
    {
        $where_condition = array('status'=>0);
		$result['agent_list']= $this->master_model->show_data('agents',$where_condition);

		$this->load->view('admin/header');
		$this->load->view('admin/agent_trash',$result);
		$this->load->view('admin/footer');

    }


    function recover_agent($agent_id=NULL)
    {
            $where_condition = array('agent_id'=>$agent_id);	
			$data = array('status' => 1);    		
			$this->master_model->onRecover_update_data('agents',$where_condition,$data);
			redirect(base_url()."admin/show_agent");

    }

    function view_agent($agent_id=NULL)
    {
        $where_condition = array('agent_id'=>$agent_id);	
		$row['view_agent']= $this->master_model->show_record_by_id('agents',$where_condition);	
		$this->load->view('admin/header');
		$this->load->view('admin/view_agent',$row);
		$this->load->view('admin/footer');

    }

    function delete_agent($agent_id=NULL)
    {
        $where_condition = array('agent_id'=>$agent_id);	
		$this->master_model->delete_data('agents',$where_condition);
		redirect(base_url()."admin/show_agent");

    }






}


?>