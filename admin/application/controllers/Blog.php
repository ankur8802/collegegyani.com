<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
 
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Blogmodel','model');
		if(!$this->session->userdata('miitadmin2020'))
		{
            return redirect('Admincontroller/index');
		}
	}

public function blog()
{
	$data['blog']=$this->model->fetchblog();
	$this->load->view('blog',$data);
}
public function bloginst()
{
	  $config['upload_path'] = '../uploads/blog/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        if($this->upload->do_upload('image'))
         {
            $post=$this->upload->data();
            $blogimage=$post['raw_name'].$post['file_ext'];
            $data=$this->input->post();
            $data['image']=$blogimage;
            $this->model->bloginst($data);
            $this->session->set_flashdata('success','Successfully Submitted');
            return redirect('Blog/blog');
          }
         else
         { 
         	$this->session->set_flashdata('error','Wrong File Formate');
         	return redirect('Blog/blog');
         }
}

public function deleteblog($id)
{
    $this->model->deleteblog($id);
	$this->session->set_flashdata('success','blog Delete Successfully');
    return redirect('Blog/blog');
}



}