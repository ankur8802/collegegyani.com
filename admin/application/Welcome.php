<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
   function  __construct()
   {
   	parent::__construct();

   	$this->load->library('cart');


   }

	public function index()
	{

		$this->load->model('Welcome_model');
		$data['sublime']=$this->Welcome_model->sublime_product();
             

	    $data['others']=$this->Welcome_model->other_product();

		$this->load->view('index',$data);
	}
 function add_money_s_wallet($am)
    {
        $amount = $am; 

$this->load->model('Welcome_model');

          $data['bal']=$this->Welcome_model->get_bal();

          

          if($data['bal']->remaining_bal<$amount)
          {
            $this->session->set_flashdata('balancelow','Insuffi');
            echo "Sorry you don't have enough amount in E-Wallet";
          }
          else
          {


              $this->Welcome_model->s_wallet_history($amount);
            $this->Welcome_model->e_wallet_history($amount);

            $this->session->set_flashdata('balancedone','Amount Update');
            $amount=$this->Welcome_model->add_money_s_wallet($amount);
          
            echo $amount;
          }

    }
	public function product_detail($id)
	{


		$this->load->model('Welcome_model');
		$data['res']=$this->Welcome_model->single_product($id);
		      $cat=$data['res']->prod_cat;
		$data['all']=$this->Welcome_model->get_all($cat);
		$this->load->view('single_product',$data);
	}

/*	public function search_avail()
	{
	
            
          $id=$this->input->post('id');
          $availibilty=$this->input->post('availibilty');
          echo $id;
          echo $availibilty;
         $this->load->model('Welcome_model');
		$this->Welcome_model->check_pin($id,$availibilty);
             



	}*/

	public function login()
	{    $id=$this->input->post('id');
         $email=$this->input->post('email');
         $password=$this->input->post('password');
           $this->load->model('Welcome_model');
           $data=$this->Welcome_model->login_check($email,$password);

            if($data)
            {
            	  $this->session->set_userdata('user_email',$email);
                 $this->session->set_flashdata('msg1','successful');
                 return redirect("welcome/product_detail/$id");
            }

            else
            {
              $this->session->set_flashdata('msg2','unsuccessful');
                 return redirect("welcome/product_detail/$id");

            }

	}

	public function cart($prodid)
	{
         $data=array();
		 $this->load->model('Welcome_model');
		 $product=$this->Welcome_model->getrows($prodid);
          $prod_img=explode(',',$product['prod_img']);
                $img=$prod_img[0];

          $price=$product['prod_price'];

            
                     
            

		 $data=array(
          'id'=>$product['id'],
           'qty'=>'1',
           'price'=>$price,
           'name'=>$product['Prod_name'],
           'image'=>$img
		 );

       

		 $this->cart->insert($data);

		 /*redirect to cart page*/

		    redirect('cart/');



     
	}

 public function logout()
 {
 	session_destroy();
   return redirect('welcome/index');
 }



	
}
?>

