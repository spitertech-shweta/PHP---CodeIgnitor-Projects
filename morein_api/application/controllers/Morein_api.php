<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Morein_api extends CI_Controller {

	public function _construct()
    {
        parent::construct();
        $this->load->library('curl','url','session');
    }

	public function index($user_name = NULL)
	{   
        $this->session->set_userdata('user_name',$user_name);

        $base_url = base_url();

        if($base_url =='http://localhost/morein_api/'.$user_name)
        {
            redirect("http://localhost/morein/admin/sign_up");
        }
        else
        {

        $user_data['users'] = $this->get_data('http://localhost/morein/api/api/user/'.$user_name);
        $user_id= $user_data['users']->user_id;
        $user_name= $user_data['users']->user_name;
        $url_user_name = $this->session->userdata('user_name');
        if($user_name ==  $url_user_name)
        {
        }
        else 
        {
          redirect("http://localhost/morein/admin/sign_up");
        }

    }

        $user_data['blog'] = $this->get_data('http://localhost/morein/api/api/blog/'.$user_id);

        $user_data['user_clients'] = $this->get_data('http://localhost/morein/api/api/user_clients/'.$user_id); 

        $user_data['client_testimonials'] = $this->get_data('http://localhost/morein/api/api/client_testimonials/'.$user_id);

        $user_data['work'] = $this->get_data('http://localhost/morein/api/api/work/'.$user_id);

        $user_data['work_images'] = $this->get_data('http://localhost/morein/api/api/show_work_image/'.$user_id);

        $user_data['work_videos'] = $this->get_data('http://localhost/morein/api/api/show_work_video/'.$user_id);

        $user_data['services'] = $this->get_data('http://localhost/morein/api/api/services/'.$user_id);

        $user_data['user_designation'] = $this->get_data('http://localhost/morein/api/api/user_designation/'.$user_id);

        $user_data['social_sharing'] = $this->get_data('http://localhost/morein/api/api/show_social_sharing/'.$user_id);

        $this->load->view('morein',$user_data);

    }

    function contact()
    {
       
        //contact form data
        $data = json_encode(array(
            'name'           =>  $this->input->post('name'),
            'email'          =>  $this->input->post('email'),
            'mobile'         =>  $this->input->post('mobile'),
            'message'        =>  $this->input->post('message'),
            'address'        =>  $this->input->post('address'),
            'user_name'      =>  $this->session->userdata('user_name')
        ));

       
        $url = "http://localhost/morein/api/api/insert_contact";

        $contact = $this->send_data($data,$url);     
        echo json_encode($contact);

        $this->send_mail();  

    }


    public function send_mail() 
    { 
       $this->load->library('email');

       $config = array(
           'protocol'  => 'smtp',
           'smtp_host' => 'ssl://smtp.googlemail.com',
           'smtp_port' =>  465,
           'smtp_user' => 'shweta.spitertech@gmail.com',
           'smtp_pass' => 'Spiter-tech154',
           'mailtype'  => 'html',
           'charset'   => 'utf-8'
       );
       $this->email->initialize($config);
       $this->email->set_mailtype("html");
       $this->email->set_newline("\r\n");


       //Email content
       $htmlContent =  '<h1>Sending email via SMTP server</h1>';
       $htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';

       $this->email->to('shweta.spitertech@gmail.com');
       $this->email->from('shweta.spitertech@gmail.com','MyWebsite');
       $this->email->subject('How to send email via SMTP server in CodeIgniter');
       $this->email->message($htmlContent);

       //Send email
       $this->email->send();     
          
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