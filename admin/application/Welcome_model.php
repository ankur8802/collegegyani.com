<?php
class Welcome_model extends CI_model
{
	  function  __construct()
   {
   	parent::__construct();

  
   	$this->custTable ="customers";
   		$this->ordTable ="orders";
   			$this->ordItemsTable ="order_items";
   			$this->paymentDetail="payment";
  
   }
   function update_bal($bal)
 {
 	$email = $this->session->userdata('user_email');
$q=$this->db->set('s_wallet',$bal)
		->where('userid',$email)
		->update('income');
				}

 function s_wallet_history_ecommerce($amount)
{

	date_default_timezone_set('asia/calcutta');
	$date = date('d/m/Y h:i:s', time());

	$post=array(
		'user'=>$this->session->userdata('user_email'),
		'amount'=>$amount,
		'type'=>'E-Commerce Shopping',
		'credit'=>'',
		'debit'=>'Dr',
		'date'=>$date
	);

	$this->db->insert('s_wallet_history', $post);
}

function get_bal()
 {
    $email = $this->session->userdata('user_email');
  $query = $this->db->select()
                    ->where('userid',$email)
                    ->from('income')
                    ->get();
          return $query->row();
        
 }
 function s_wallet_history($amount)
{

	date_default_timezone_set('asia/calcutta');
	$date = date('d/m/Y h:i:s', time());

	$post=array(
		'user'=>$this->session->userdata('user_email'),
		'amount'=>$amount,
		'type'=>'E-wallet',
		'credit'=>'Cr',
		'debit'=>'',
		'date'=>$date
	);

	$this->db->insert('s_wallet_history', $post);
}

function e_wallet_history($amount)
{

		date_default_timezone_set('asia/calcutta');
	$date = date('d/m/Y h:i:s', time());

	$post=array(
		'user'=>$this->session->userdata('user_email'),
		'amount'=>$amount,
		'type'=>'Transfer In S-wallet',
		'credit'=>'',
		'debit'=>'Dr',
		'date'=>$date
	);

	$this->db->insert('e_wallet_history', $post);
}
public function add_money_s_wallet($amount)
{
	$email = $this->session->userdata('user_email');
		$q =$this->db->select()
			        ->where('userid',$email)
			->from('income')
			->get();

		$swallet=$q->row()->s_wallet;

		$ewallet=$q->row()->remaining_bal;

		$s_wallet=$swallet+$amount;
		$e_wallet=$ewallet-$amount;

$data=array(
'remaining_bal'=>$e_wallet,
's_wallet'=>$s_wallet
);

		$q=$this->db->where('userid',$email)
				   ->update('income',$data);

	$q =$this->db->select()
			        ->where('userid',$email)
			->from('income')
			->get();

		return $q->row()->s_wallet;
}


	 public function sublime_product()
	 {
         $res=$this->db->select()
	         ->from('product')
	         ->where('prod_cat','sublime_product')
	         ->get();
              return $res->result(); 
	 }
	 public function other_product()
	 {
      $ress=$this->db->select()
	         ->from('product')
	         ->where('prod_cat','others')
	         ->get();
              return $ress->result();
	 }

	 public function single_product($id)
	 {
	 	  $res=$this->db->select()
	         ->from('product')
	         ->where('id',$id)
	         ->get();
	         return $res->row();
	 }

	  public function get_all($cat)
	 {
	 	  $res=$this->db->select()
	         ->from('product')
	         ->where('prod_cat',$cat)
	         ->limit(6)
	         ->get();
	         return $res->result();
	 }
/*
	 public function check_pin($id,$availibilty)
	 {
       $res=$this->db->select()
	         ->from('product')
	         ->where('id',$id)
	         ->get();
             $array=explode(',',$res->row()->availibilty);
             $length=count($array);
for($i=0;$i<$length;$i++)
{
	if($availibilty==$array[$i])
	{
		$j=1;
	     break;

		
	}
	else
	{
		$j=0;
		
	}
}


	    if($j==1)
	    {

	    }
	    else
	    {

	    }
	         


	 }*/

	 public function login_check($email,$password)

	 {
	 	 $res=$this->db->select()
	         ->from('user')
	         ->where('email',$email)
	         ->where('password',$password)
	         ->get();

	           if($res->row())

	         {
	         	return true;
	         }

	         else
	         {
	         	return false;
	         }

	 }

	 public function getrows($prodid)
	 {
	 	   $query=$this->db->select("*")
                   ->from('product')
                   ->where('id',$prodid)
                   ->get();


              $result=$query->row_array();
                    
                     return $result;

	 }

public function insertCustomer($data)
{

	if(!array_key_exists("created",$data))
	{
		$data['created'] =date("Y-m-d H:i:s");
	}
	if(!array_key_exists("modified",$data))
	{
		$data['modified'] =date("Y-m-d H:i:s");
	}

	$insert=$this->db->insert($this->custTable,$data);

	return $insert?$this->db->insert_id():false;

}



public function insertOrder($data)
{

	if(!array_key_exists("created",$data))
	{
		$data['created'] =date("Y-m-d H:i:s");
	}
	if(!array_key_exists("modified",$data))
	{
		$data['modified'] =date("Y-m-d H:i:s");
	}

$insert=$this->db->insert($this->ordTable,$data);


	return $insert?$this->db->insert_id():false;
}


public function insertOrderItems($data=array())
{
     $insert=$this->db->insert_batch($this->ordItemsTable,$data);

       return $insert?true:false;

}

public function get_total_price($orderid)

     {    

	 	   $query=$this->db->select("*")
                   ->from('orders')
                   ->where('id',$orderid)
                   ->get();


              $result=$query->row();
                    
                     return $result;

	 }
public function get_swallet($email)
{
	  $query=$this->db->select("*")
                   ->from('income')
                   ->where('userid',$email)
                   ->get();


              $result=$query->row();
                    
                     return $result;
}

public function insert_payment_data($data)
{    


     $insert=$this->db->insert($this->paymentDetail,$data);
     return $insert?true:false;


}

public function get_shipping_address($userid,$id)
{
    $query=$this->db->select("*")
                   ->from('customers')
                   ->where('id',$id)
                   ->get();

            
              $result=$query->row();
                    
                     return $result; 	
}

public function get_order_info($order_id)
{
    $query=$this->db->select("*")
                   ->from('orders')
                   ->where('id',$order_id)
                   ->get();

            
              $result=$query->row();
                    
                     return $result; 	
}

public function get_product_info($order_id)
{
	  $query=$this->db->select("*")
                   ->from('order_items')
                   ->where('order_id',$order_id)
                   ->get();

            
              $result=$query->row();
                    
                     return $result; 
}





}
?>