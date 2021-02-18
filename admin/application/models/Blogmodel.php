<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogmodel extends CI_Model {
 

public function bloginst($data)
{
   $this->db->insert('blog',$data);
}
public function fetchblog()
{
	$q=$this->db->select()
	            ->from('blog')
	            ->order_by('id','desc')
	            ->get();
	            return $q->result();
}
public function deleteblog($id)
{
	$this->db->where('id',$id)
	         ->delete('blog');
}



}
