<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller_extra extends CI_Controller
    {
 	
    	 function  __construct()
                    {
                	parent::__construct();
                  $this->load->model('Admin_model');

                    }

    

 public function index()
 {
     	$this->load->view('login');
  }

 public function logincheck()
  {
  $user=$this->input->post('username');
  $pass=$this->input->post('password');
  $check=$this->Admin_model->check($user,$pass);

  if($check)
  {
    $this->session->set_userdata('miitadmin2020',$user);
    return redirect('/Admin_controller/index');
  }
  else
  {
    $this->session->set_flashdata('item','item-value');
    return redirect('Admin_controller_extra/index');
}
 }











}
?>