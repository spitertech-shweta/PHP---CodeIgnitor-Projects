<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');   
        
        $this->load->helper(array('seo_helper'));
    }
   
    public function index()
    {
    
         $this->load->view('header/header');
         $this->load->view('index/index');
         $this->load->view('footer/footer');
    }


    public function about()
    {
        $data =array("status"=>1);
        $result['home_page'] = $this->master_model->show_data('pages',$data);

        $this->load->view('header/header');
        $this->load->view('about/about',$result);
        $this->load->view('footer/footer');
    }


    public function agents()
    {
        $data =array("status"=>1);
        $result['agent'] = $this->master_model->show_data('agents',$data);

        $this->load->view('header/header');
        $this->load->view('agents/agents',$result);
        $this->load->view('footer/footer');
    }

    public function blog()
    {
        $data =array("status"=>1);
        $result['blog'] = $this->master_model->show_data('blog',$data);

        $this->load->view('header/header');
        $this->load->view('blog/blog',$result);
        $this->load->view('footer/footer');
    }

    public function blog_detail($seo_url=NULL)
    {

        $where_condition=array("seo_url"=>$seo_url);
        $result['blog_detail'] = $this->master_model->show_record_by_id('blog',$where_condition);

        $this->load->view('header/header');
        $this->load->view('blog_detail/blog_detail',$result);
        $this->load->view('footer/footer');
    }

    public function services()
    {
       
        $data =array("status"=>1);
        $result['hot_property'] = $this->master_model->top_5_hot_properties('property',$data);

        $where =array("status"=>1);
        $data1 = ('property_type');
        $result['property_type'] = $this->master_model->show_distinct_data('property',$where,$data1);

        $result['total_rows'] = $this->master_model->get_count('property');
        $result['per_page'] = 6;

        $this->load->view('header/header');
        $this->load->view('buysalerent/buysalerent',$result);
        $this->load->view('footer/footer');
    }


     function pagination()
    {
        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = "#";
        $config["total_rows"] = $this->master_model->get_count('property');
        $config["per_page"] = 6;
        $config["uri_segment"] = 3;
        $config["use_page_numbers"] = TRUE;
        $config["full_tag_open"] = '<ul class="pagination">';
        $config["full_tag_close"] = '</ul>';
        $config["first_tag_open"] = '<li>';
        $config["first_tag_close"] = '</li>';
        $config["last_tag_open"] = '<li>';
        $config["last_tag_close"] = '</li>';
        $config['next_link'] = '&gt;';
        $config["next_tag_open"] = '<li>';
        $config["next_tag_close"] = '</li>';
        $config["prev_link"] = "&lt;";
        $config["prev_tag_open"] = "<li>";
        $config["prev_tag_close"] = "</li>";
        $config["cur_tag_open"] = "<li class='active'><a href='#'>";
        $config["cur_tag_close"] = "</a></li>";
        $config["num_tag_open"] = "<li>";
        $config["num_tag_close"] = "</li>";
        $config["num_links"] = 1;
        $this->pagination->initialize($config);

        $page = $this->uri->segment(3);
        $start = ($page - 1) * $config["per_page"];
        if(!$page)
        {
            $start = 0;
        }
        
    $search_data =$this->uri->segment(4);

    $sort_order =$this->uri->segment(5);

    $min =$this->uri->segment(6);

    $max =$this->uri->segment(7);
       
    $property_type =$this->uri->segment(8);

    $col_name = ('property_price');

    $data1 = array("status"=>1);

           $output = array(

             'property_data'    => $this->master_model->show_property_details_by_pagination('property',$data1,$config["per_page"], $start,$search_data,$sort_order,$col_name,$min,$max,$property_type),
              'pagination_link'  => $this->pagination->create_links()
           );
      
         echo json_encode($output);

    }

    public function contact()
    {      
        $this->load->view('header/header');
        $this->load->view('contact/contact');
        $this->load->view('footer/footer');
    }

    public function insert_contact()
    {
      
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('phone_no', 'phone_no', 'required');

        if ($this->form_validation->run() == FALSE)
		{
            $this->session->set_flashdata('error','please fill details'); 
			$this->load->view('header/header');
            $this->load->view('contact/contact');
            $this->load->view('footer/footer');   
            $this->session->set_flashdata('error','please fill details'); 
            redirect(base_url().'contact');
        }
		else
		{
            $data1 = array(
                'name' =>$this->input->post('name'),
                'email' =>$this->input->post('email'),
                'phone_no' =>$this->input->post('phone_no'),
                'msg' =>$this->input->post('msg')
            );
            
            $this->master_model->add_data('contact',$data1);
            redirect(base_url().'contact');
		}

    }


    public function property_details($seo_url=NULL)
    {
        $data =array("status"=>1);
        $result['hot_property'] = $this->master_model->top_5_hot_properties('property',$data);

        $where_condition1 =array("property.status"=>1,"property.seo_url"=>$seo_url);
        $result['property_details'] = $this->master_model->show_record_by_id('property',$where_condition1);

        $property_id = $result['property_details']->property_id;

        $where_condition1 =array("images.property_id"=> $property_id);

        $result['images'] = $this->master_model->show_data('images',$where_condition1);

        $agent_id = $result['property_details']->agent_id; 
        $where_condition1 =array("agents.agent_id"=> $agent_id );
        $result['agent_details'] = $this->master_model->show_record_by_id('agents',$where_condition1);

        $this->load->view('header/header');
        $this->load->view('property_details/property_details',$result);
        $this->load->view('footer/footer');
    }


    public function property_enquiry()
    {
       
        $this->form_validation->set_rules('msg', 'msg', 'required');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('mobile', 'mobile', 'required');

        if ($this->form_validation->run() == FALSE)
		{
         $this->session->set_flashdata('error','please fill details'); 
        }
        else
        {
            $data = array(
            'property_id'    =>  $this->input->post('property_id'),
            'property_name'    =>  $this->input->post('property_name'),
            'name'           =>  $this->input->post('name'),
            'email'          =>  $this->input->post('email'),
            'mobile'         =>  $this->input->post('mobile'),
             'msg'            =>  $this->input->post('msg')
            );

            $this->master_model->add_data('property_enquiry',$data);
        }


     

    }



    function fetch()
    {
     $this->load->model('master_model');
     echo $this->master_model->fetch_data($this->uri->segment(3));




     
    }





}

?>
