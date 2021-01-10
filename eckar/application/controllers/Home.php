<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        //home
        $where_condition1 = array('status'=>1);
        $result['show_home'] = $this->master_model->show_record_by_id('home',$where_condition1);
       

       //about
        $where_condition1 = array('status'=>1);
        $result['show_about'] = $this->master_model->show_data('about',$where_condition1);
   
       
        //gallery
        $where_condition2 = array('status'=>1);
        $result['show_gallery'] = $this->master_model->show_data('gallery',$where_condition2);

         //blog
         $where_condition3 = array('status'=>1);
         $result['show_blog'] = $this->master_model->show_data('blog',$where_condition3);


          //price
          $where_condition3 = array('status'=>1);
          $result['show_price'] = $this->master_model->show_data('price',$where_condition3);


          $this->load->view('home', $result);
       
    }
           
        //  echo "<pre>";
        //  print_r($result1); exit;
       
        public function contact_enquiry()
        {

            
        $data = array(
           
            'contact_name'           =>  $this->input->post('contact_name'),
            'contact_email'          =>  $this->input->post('contact_email'),
            'contact_mobile'         =>  $this->input->post('contact_mobile'),
             'contact_message'            =>  $this->input->post('contact_message')
            );

            $this->master_model->add_data('contact_enquiry',$data);

            $return_array[] = array(
           
                'contact_name'           =>  $this->input->post('contact_name'),
                'contact_email'          =>  $this->input->post('contact_email'),
                'contact_mobile'         =>  $this->input->post('contact_mobile'),
                 'contact_message'            =>  $this->input->post('contact_message')
                );
    
           
                echo json_encode($return_array);
       
            }
    
             
        public function user_enquiry()
        {

            
        $data = array(
           
            'enquiry_name'           =>  $this->input->post('enquiry_name'),
            'enquiry_email'          =>  $this->input->post('enquiry_email'),
            'enquiry_mobile'         =>  $this->input->post('enquiry_mobile'),
             'enquiry_message'            =>  $this->input->post('enquiry_message'),
             'enquiry_about'            =>  $this->input->post('enquiry_about')
            );


           

            $this->master_model->add_data('user_enquiry',$data);

            $return_array[] = array(
           
                'enquiry_name'           =>  $this->input->post('enquiry_name'),
                'enquiry_email'          =>  $this->input->post('enquiry_email'),
                'enquiry_mobile'         =>  $this->input->post('enquiry_mobile'),
                 'enquiry_message'            =>  $this->input->post('enquiry_message'),
                 'enquiry_about'            =>  $this->input->post('enquiry_about')
                );
    
           
                echo json_encode($return_array);
       
            }
    
            public function email_newsletter()
            {
                $email_newsletter = $this->input->post('email_newsletter');
        
                $data = array('email_newsletter' =>$email_newsletter);
                $this->master_model->add_data('subscription',$data);
                
               
        
                $return_array[] = array(
                   
                    'email_newsletter'   => $email_newsletter
                
                    );
        
               
                    echo json_encode($return_array);
        
            }

    
}
    
?>