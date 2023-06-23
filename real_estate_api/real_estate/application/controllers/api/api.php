<?php
if(!defined('BASEPATH'))  exit('No direct script access allowed');

class Api extends CI_Controller
{
	function __construct()
	  {
	 	parent::__construct();
		
		$this->load->helper("url");
 	  }


	function get_properties()
	{
		$data =array("status"=>1);
		$properties = $this->master_model->show_data('property',$data);

		echo json_encode($properties); 

	}

	function get_property_details($seo_url = NULL)
	{
		$data =array("status"=>1);
        $result['hot_property'] = $this->master_model->top_5_hot_properties('property',$data);

        $where_condition1 =array("property.status"=>1,"property.seo_url"=>$seo_url);
        $result['property_details'] = $this->master_model->show_record_by_id('property',$where_condition1);

        $property_id = $result['property_details']->property_id;

        $where_condition1 =array("property_id"=> $property_id);

		$result['images'] = $this->master_model->show_data('images',$where_condition1);
		

        $agent_id = $result['property_details']->agent_id; 
        $where_condition1 =array("agent_id"=> $agent_id );
        $result['agent_details'] = $this->master_model->show_record_by_id('agents',$where_condition1);


		$arrytest = 
			array('hot_property'=> $result['hot_property'],'property_details'=> $result['property_details'],'images'=> $result['images'] ,'agent_details' => $result['agent_details'] 
		     );

			echo json_encode($arrytest , JSON_FORCE_OBJECT);
		  
	}

	function get_about_page()
	{
		$data =array("status"=>1);
        $about_page = $this->master_model->show_data('pages',$data);

		echo json_encode($about_page); 

	}

	function get_agent()
	{
		$data 	=	array("status"=>1);
        $agent  = 	$this->master_model->show_data('agents',$data);

		echo json_encode($agent); 

	}

	function get_blog()
	{
		$data 	=	array("status"=>1);
	    $blog 	= 	$this->master_model->show_data('blog',$data);

		echo json_encode($blog); 
	}

	 function get_blog_detail($seo_url=NULL)
    {

        $where_condition	=	array("seo_url"=>$seo_url);
        $blog_detail     	= 	$this->master_model->show_record_by_id('blog',$where_condition);

		echo json_encode($blog_detail); 
    }


	function get_hot_properties()
	{
		$data			 =		array("status"=>1);
        $hot_property	 = 		$this->master_model->top_5_hot_properties('property',$data);

		echo json_encode($hot_property); 
	}

	function get_property_type()
	{
		$where 			=		array("status"=>1);
        $data1 			= 		('property_type');
		$property_type 	= 		$this->master_model->show_distinct_data('property',$where,$data1);

		echo json_encode($property_type); 
	}

	function insert_contact()
	{
		header("Content-Type:application/json");
		// Takes raw data from the request
		$json = file_get_contents('php://input');

		// Converts it into a PHP object
		$data = json_decode($json);
				
		//print_r($data);

		 $contact = $data->contact; 

		 $name = $contact->name;
		 $phone_no = $contact->phone_no;
		 $email = $contact->email;
		 $msg = $contact->msg;

		 $data1 = array(
			'name' => $name,
			'email' => $email,
			'phone_no' => $phone_no,
			'msg' =>$msg
		);

		$this->master_model->add_data('contact',$data1);

	}

	public function property_enquiry()
    {
		header("Content-Type:application/json");
		// Takes raw data from the request
		$json = file_get_contents('php://input');

		// Converts it into a PHP object
		$data = json_decode($json);
		

		 $property_enquiry = $data->property_enquiry; 
		 $property_id = $property_enquiry->property_id;
		 $property_name = $property_enquiry->property_name;
		 $name = $property_enquiry->name;
		 $mobile = $property_enquiry->mobile;
		 $email = $property_enquiry->email;
		 $msg = $property_enquiry->msg;

		 $data1 = array(
            'property_id'    =>  	$property_id,
            'property_name'  =>  	$property_name,
            'name'           =>  	$name,
            'email'          =>  	$email,
            'mobile'         =>  	$mobile,
             'msg'           =>  	$msg
			);
			
		$this->master_model->add_data('property_enquiry',$data1);


		 $return_array[]	=	array(
		 	'property_id'    =>  	$property_id,
		 	'property_name'  =>  	$property_name,
		 	'name'           =>  	$name,
		 	'email'          =>  	$email,
		 	'mobile'         =>  	$mobile,
		 	 'msg'           =>  	$msg
		);

		echo json_encode($return_array);
	} 

	public function property_pagination($page = NULL) 
	{
		header("Content-Type:application/json");
		// Takes raw data from the request
		$json = file_get_contents('php://input');

		// Converts it into a PHP object
		$data = json_decode($json);
	
		$price1 = $data->price;

		$price = array_pad(explode('-', $price1),2,NULL);
		$min = $price[0];
		$max = $price[1];

		$property_type = $data->property_type;

		$search_property = $data->search_properties;
		$sorting= $data->sorting;	
		

		$config = array();
        $config["base_url"] = 'http://localhost/real_estate_api/api/services';
        $config["total_rows"] = $this->master_model->get_count('property');
        $config["per_page"] = 6;
		$config["uri_segment"] = 4;
		$config["use_page_numbers"] = TRUE;
        $config["full_tag_open"] = '<ul class="pagination">';
        $config["full_tag_close"] = '</ul>';
        $config["first_tag_open"] = '<li><a href ="http://localhost/real_estate_api/api/services">';
        $config["first_tag_close"] = '</li>';
        $config["last_tag_open"] = '<li>';
        $config["last_tag_close"] = '</li>';
        $config['next_link'] = '&gt;';
        $config["next_tag_open"] = '<li>';
        $config["next_tag_close"] = '</li>';
        $config["prev_link"] = "&lt;";
        $config["prev_tag_open"] = "<li>";
        $config["prev_tag_close"] = "</li>";
        $config["cur_tag_open"] = "<li class='active'>  <a href='#'>";
        $config["cur_tag_close"] = "</a></li>";
        $config["num_tag_open"] = "<li>";
        $config["num_tag_close"] = "</li>";
		$config["num_links"] = 1;

		$this->load->library("pagination");
		$this->pagination->initialize($config);

		$start = ($page - 1) * $config["per_page"];
        if(!$page)
        {
            $start = 0;
        }

		$status = array('status'=>1);
	  
		$data1["property_listing"] = $this->master_model->get_property_by_pagination($config["per_page"],$start,'property',$status,$min,$max,$property_type,$search_property,$sorting);
		$data1["links"] = $this->pagination->create_links();

		$arrytest = array('property_listing'=> $data1['property_listing'],'links'=> $data1['links']);
		
		//echo json_encode($arrytest , JSON_FORCE_OBJECT);
		echo json_encode($arrytest);
	}
	
	public function fetch()
	{
		echo $this->master_model->fetch_query($this->uri->segment(4));
	}


}
?>