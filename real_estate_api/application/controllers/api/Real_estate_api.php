<?php
//require APPPATH.'libraries/REST_controller.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class Real_estate_api extends CI_controller{

    public function _construct()
    {
        parent::construct();
        $this->load->library('curl','form_validation','session');
    }

    public function index()
    {  
        // $this->seo_url(); 
         $this->load->view('header/header');
         $this->load->view('index/index');
         $this->load->view('footer/footer');
    }

    public function seo_url()
    {
        $controller_name = $this->router->fetch_class();
        $method_name = $this->router->fetch_method();

        $data1 = json_encode(array("controller_name"=>$controller_name,
                                "method_name" =>$method_name ));

      // print_r($data1); exit;
                              
        $url = 'http://localhost/real_estate/api/api/seo_url';

        $seo_data = $this->send_data($data1,$url);

        print_r($seo_data); 
    
        $seo  = json_decode($seo_data);
        print_r($seo); exit;

         //$this->load->view('header/header',$seo);  
    }


    function about()
    {
        $result['home_page'] = $this->get_data('http://localhost/real_estate/api/api/get_about_page');  
        $this->load->view('header/header');
        $this->load->view('about/about',$result);
        $this->load->view('footer/footer');
    }

    public function fetch()
    {
        $result = $this->get_data('http://localhost/real_estate/api/api/fetch');  
        $this->load->view('header/header',$result);   
    }

    function services($page = NULL)
    {
       
        $url = "http://localhost/real_estate/api/api/property_pagination/".$page;
 
        $data1 = json_encode(array("price"=>$this->input->post('price'),
                                "property_type" =>$this->input->post('property_type'),
                                "search_properties"=>$this->input->post('search_properties'),
                                "sorting" => $this->input->post('sorting')


    ));

     $properties_data = $this->send_data($data1,$url);
     //print_r($properties_data); exit;
  
     $properties = json_decode($properties_data);

   
  
        $result['property_listing']     = $properties->property_listing;
        
        $result['links']                = $properties->links;
  

        //hot properties
        $result['hot_properties'] = $this->get_data('http://localhost/real_estate/api/api/get_hot_properties');
        $result['property_type'] = $this->get_data('http://localhost/real_estate/api/api/get_property_type');


        $this->load->view('header/header');
        $this->load->view('buysalerent/buysalerent',$result);
        $this->load->view('footer/footer');
        
    }
   


    function property_details($seo_url =NULL)
    {
        $result['property'] = $this->get_data('http://localhost/real_estate/api/api/get_property_details/'.$seo_url);

        $result['property_details'] = $result['property']->property_details;

        $result['images'] = $result['property']->images;

        $result['agent_details'] = $result['property']->agent_details;

        $result['hot_property'] = $result['property']->hot_property;    
    
        $this->load->view('header/header');
        $this->load->view('property_details/property_details',$result);
        $this->load->view('footer/footer');
    }


    function agent()
    {
        $result['agent'] = $this->get_data('http://localhost/real_estate/api/api/get_agent');
        $this->load->view('header/header');
        $this->load->view('agents/agents',$result);
        $this->load->view('footer/footer');

    }

    function blog()
    {
        $result['blog'] = $this->get_data('http://localhost/real_estate/api/api/get_blog');
        $this->load->view('header/header');
        $this->load->view('blog/blog',$result);
        $this->load->view('footer/footer');
    }

    function blog_detail($seo_url = NULL)
    {
        $result['blog_detail'] = $this->get_data('http://localhost/real_estate/api/api/get_blog_detail/'.$seo_url);
         
          $this->load->view('header/header');
          $this->load->view('blog_detail/blog_detail',$result);
          $this->load->view('footer/footer');
    }


    public function contact()
    {      
        $this->load->view('header/header');
        $this->load->view('contact/contact');
        $this->load->view('footer/footer');
    }

    public function insert_contact()
    {

        $data = json_encode(array(
            'name'           =>  $this->input->post('name'),
            'email'          =>  $this->input->post('email'),
            'phone_no'        =>  $this->input->post('phone_no'),
            'msg'            =>  $this->input->post('msg')
        ));



    $url = "http://localhost/real_estate/api/api/insert_contact";

    $contact = $this->send_data($data,$url);
    echo json_encode($contact);
        
    }


    public function property_enquiry()
    {         
    
        $data = json_encode(array(
            'property_id'    =>  $this->input->post('property_id'),
            'property_name'  =>  $this->input->post('property_name'),
            'name'           =>  $this->input->post('name'),
            'email'          =>  $this->input->post('email'),
            'mobile'         =>  $this->input->post('mobile'),
            'msg'            =>  $this->input->post('msg')
            ));   



        $url = "http://localhost/real_estate/api/api/property_enquiry";
      
       $property_enquiry =  $this->send_data($data,$url);

      echo json_encode($property_enquiry);

    
     }
    



    public function send_data($data,$url)
    {
        $ch = curl_init($url);
        # Setup request to send json via POST.
       
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt( $ch, CURLOPT_POSTFIELDS,$data );
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
        curl_setopt( $ch, CURLOPT_HTTPHEADER,array('Content-Type:application/json'));
        # Return response instead of printing.
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER,true);
        # Send request.
        $result = curl_exec($ch);
        curl_close($ch);
         return $result;
        # Print response.
        //echo "<pre>" . $result. "</pre>";
        
    
    }




    public function get_data($target_url)
    {   
        $ch = curl_init();

        if ($ch !== false)
        {
            curl_setopt($ch, CURLOPT_URL,$target_url);
            curl_setopt($ch, CURLOPT_POST,1);
            curl_setopt($ch, CURLOPT_ENCODING, '');

           //$args['file'] = new CurlFile($_SERVER['DOCUMENT_ROOT'].'/file/'.'sample.docx');
           // curl_setopt($ch, CURLOPT_POSTFIELDS, $args);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

            $response = curl_exec($ch);
    
            if ($response === false)
            {  
                print_r('Curl error: ' . curl_error($ch));
                die;
            }
            return json_decode($response);
            die('--------------here-----------------');
        }
        else
        {
            // ERROR
        }
    } 

}



?>