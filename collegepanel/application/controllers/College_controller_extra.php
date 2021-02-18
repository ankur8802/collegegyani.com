<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class College_controller_extra extends CI_Controller
    {
          
          function  __construct()
                    {
                    parent::__construct();
                    $this->load->model('College_model'); 
                    }


    	 public function index()
    	 {
        
    	 	$this->load->view('login'); 
    	 }

    
        public function register()
       {
        $data['cities']=$this->College_model->cities();
        $this->load->view('register',$data);
       }

public function login()
{
      $this->load->view('login');
}

public function loginbyadmin($email)
{
   $this->session->set_userdata('college_email',$email);
   return redirect('College_controller/collegeprofile');
}

           public function collegeregistration()
     {
       $config['upload_path']='../upload/';
     $config['allowed_types'] ='gif|jpg|png|jpeg|docx|pdf';
date_default_timezone_set('asia/kolkata');
         $date=date('d-m-Y');
    $this->load->library('upload',$config);
  if( $this->upload->do_upload('image'))

  {
    $data=$this->upload->data();
    $image_path=$data['raw_name'].$data['file_ext'];
   
if($image_path)
{
          
  $password=$this->input->post('password');
  $confirm_password=$this->input->post('confirm_password');
  $email=$this->input->post('college_email');
    $data=array(
  'college_name'=>$this->input->post('college_name'),
  'college_email'=>$this->input->post('college_email'),
   'state'=>$this->input->post('state'),
  'address'=>$this->input->post('address'),
  'password'=>$this->input->post('password'),
  'phone'=>$this->input->post('phone'),
    'city'=>$this->input->post('city'),
     'image'=>$image_path,
     'college_id'=> "CG".rand(),
    'date'=>$date

); 
    
    $key=$this->input->post('college_email');

    $checkmail=$this->College_model->mail_exists($key);
     if($checkmail){

       $this->session->set_flashdata('item','item-value');
       return redirect('College_controller_extra/register');

     }
     else if ($password!=$confirm_password) {
      $this->session->set_flashdata('item1','item-value');

       return redirect('College_controller_extra/register');
     }
    else{

   
       $this->session->set_flashdata('alt_reg-sec','item-value');
      $this->College_model->check_data($data);
     return redirect('College_controller_extra/index');

       }

      } 
    }
  }



  public function collegelogin()
  {
  $email=$this->input->post('college_email');
  $password=$this->input->post('password');
  $this->load->model('College_model');
  $check =$this->College_model->isvalidate($email,$password);

  if($check)
  {
        $status = $check->status ;
     
         
          
            if($status=='accept')
            {
                $this->session->set_userdata('college_email',$email);
               return redirect('College_controller/collegeprofile');
            }
            elseif($status=='pending'){


                  $this->session->set_flashdata('item3','item-value');
                   return redirect('College_controller_extra/index');
            }
            elseif($status=='block'){


                 $this->session->set_flashdata('item4','item-value');
                   return redirect('College_controller_extra/index');
            }  
            elseif($status=='reject'){


                 $this->session->set_flashdata('item5','item-value');
                   return redirect('College_controller_extra/index');
            }  
        }
  else
  {
    $this->session->set_flashdata('item6','itemvalue');
           return redirect('College_controller_extra/index');
}
}



public function logout()
{
   
   session_destroy();
   return redirect('College_controller_extra/index');


}

public function fetchcities(){

   $statename =$this->input->post('title');

   
   $this->load->model('College_model');
  
   $citiesname=$this->College_model->selectcities($statename);

 foreach ($citiesname as $citie_name ) {
      echo "<option> $citie_name->city_name </option>";
  }
}















}


 ?>