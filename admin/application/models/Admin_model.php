<?php
class Admin_model extends CI_model
{

      public function check($user,$pass)
      {

      	  $q=$this->db->select("*")
      	              ->from("admin")
      	              ->where("username",$user)
      	              ->where("password",$pass)
      	              ->get();
      	              return $q->row(); 
      }
      public function add_slider()
    {
        
         $q=$this->db->select()
                 ->from('slider')
                 ->get();
                 return $q->result(); 
                
}
  public function cities()
  {

       $this->db->distinct();
       $q=$this->db->select('city_state')
                    ->from('cities')
                    ->get();
  return $q->result();
  }               

public function selectcities($statename)
{
    $q=$this->db->select('city_name')
           ->from('cities')
           ->where('city_state',$statename)
           ->get();
           return $q->result();
}


      public function userdetail()
  {
        
         $q=$this->db->select()
                 ->from('user_registration')
                 ->get();
                 return $q->result(); 
                
}

public function fetchnews()
{
  $q=$this->db->select()
              ->from('news')
              ->order_by('id','desc')
              ->get();
              return $q->result();
}
public function check_data($data)  

  {
     $this->db->insert('college_registration',$data);
  }
function mail_exists($key)
{
    
    $q= $this->db->select()
                      ->where('college_email',$key)
                      ->get('college_registration');

    if ($q->num_rows() > 0){
        return true;
    }
    else{
        return false;

            }
}

      public function collegedetail()
    {
        
         $q=$this->db->select()
                 ->from('college_registration')
                 ->order_by('id','desc')
                 ->get();
                 return $q->result(); 
                
}
 public function editcollegedetail($id)
    {
        
         $q=$this->db->select()
                 ->from('college_registration')
                 ->where(['id'=>$id])
                 ->get();
                 return $q->row(); 
                
}
public function updatecollege($id,$data)
{
       $q = $this->db->where('id',$id)
             ->update('college_registration',$data);
}
// public function wel1()
//     {
        
//          $q=$this->db->select()
//                  ->from('candidate_registration')
//                  ->get();
//                  return $q->result(); 
                
// }
// public function wel3()
//     {
        
//          $q=$this->db->select()
//                  ->from('applied_job')
//                  ->get();
//                  return $q->result(); 
                
// }
public function statusaccept($id)
{
        
        $data=array(
                    'status'=>'accept'
            
        );
         $q=$this->db->where('id',$id)
                     ->update('college_registration',$data);
                     
                
}
public function admissiondata()
{
  $q=$this->db->select()
              ->from('admission2020')
              ->get();
              return $q->result();
}




public function statusreject($id)
{
        
        $data=array(
                    'status'=>'reject'
            
        );
         $q=$this->db->where('id',$id)
                     ->update('college_registration',$data);
                     
                
}
public function statusblock($id)
{
$data=array(
            'status'=>'block'
            
        );
         $q=$this->db->where('id',$id)
                     ->update('college_registration',$data);
}
public function statusunblock($id)
{
$data=array(
            'status'=>'unblock'
            
        );
         $q=$this->db->where('id',$id)
                     ->update('college_registration',$data);
}  


 public function user_application()
 {
     
        
        $query= $this->db->select()
                         ->order_by('id', 'DESC')
                          ->from('user_application')
                          ->get();
                           return $query->result();
                    
 }

  public function delete_user_application($id)
 {
  $this->db->where('id',$id)
           ->delete('user_application');
 }

 public function insert_news($data)
 {
    $this->db->insert('news',$data); 

 }
 public function delete_news($id)
 {
  $this->db->where('id',$id)
           ->delete('news');
 }

 public function insert_exams($data)
 {
  $this->db->insert('exams',$data);
 }
 public function fetch_exam()
 {
  $q=$this->db->select()
              ->from('exams')
              ->get();
              return $q->result();
 }
             


public function delete_exams($id)
{
  $this->db->where('id',$id)
           ->delete('exams');
}
public function insert_banner($data)
{
   $this->db->insert('banner',$data);
}

public function fetchbanner()
{
  $q=$this->db->select()
              ->from('banner')
              ->get();
              return $q->result();
}

public function deletebanner($id)
{
  $this->db->where('id',$id)
            ->delete('banner');
}     

public function changepositiontop($id)
{
   $data=array(
                    'position'=>'top'
            
        );
      $this->db->where('id',$id)
               ->update('college_registration',$data);
                     
}
public function changepositionnormal($id)
{
   $data=array(
                    'position'=>'normal'
            
        );
      $this->db->where('id',$id)
               ->update('college_registration',$data);
                     
}
public function fetchexamsforedit($id)
{
  $q=$this->db->select()
              ->from('exams')
              ->where('id',$id)
              ->get();
              return $q->row();
}
public function editexamshere($id,$data)
{
  $this->db->where('id',$id)
           ->update('exams',$data);
}

public function fetchnewsforedit($id)
{
  $q=$this->db->select()
              ->from('news')
              ->where('id',$id)
              ->get();
              return $q->row();
}

public function editnewshere($id,$data)
{
     $this->db->where('id',$id)
           ->update('news',$data);
}
public function fetchleaddata()
{
  $q=$this->db->select()
              ->from('lead')
             ->order_by('id','desc')
              ->get();
            return $q->result();
}

public function fetchcommonapplicationdata()
{
  $q=$this->db->select()
              ->from('commonapplicationprocess')
              ->order_by('id','desc')
              ->get();
              return $q->result();
}  
public function delete_college($id)
{
   $this->db->where('id',$id)
            ->delete('college_registration');
}
public function insert_city($data)
{
  $this->db->insert('cities',$data);
}
public function exam_application_detail()
{
  $q=$this->db->select()
              ->from('examapplication')
              ->order_by('id','desc')
              ->get();
              return $q->result();
}

public function helpdeskdata()
{
  $q=$this->db->select()
              ->from('student_helpdesk')
              ->get();
              return $q->result();
}
public function abroaddata()
{
  $q=$this->db->select()
              ->from('abroadapplication')
              ->get();
              return $q->result();
}
public function fetchreviewsall()
{
  $q= $this->db->select('*')
           ->from('review')
           ->order_by('id','desc')
           ->where('status','0')
           ->get();
           return $q->result();
}
public function reviewsapproved()
{
  $q= $this->db->select('*')
           ->from('review')
           ->order_by('id','desc')
           ->where('status','1')
           ->get();
           return $q->result();
}

public function reviewshide()
{
  $q= $this->db->select('*')
           ->from('review')
           ->order_by('id','desc')
           ->where('status','2')
           ->get();
           return $q->result();
}

public function reviewapproved($id)
{
  $status=1;
  $reviewstatus=array('status'=>$status);
  $this->db->where('id',$id)
           ->update('review',$reviewstatus);
}
public function reviewhide($id)
{
  $status=2;
  $reviewstatus=array('status'=>$status);
  $this->db->where('id',$id)
           ->update('review',$reviewstatus);
}

public function reviewunhide($id)
{
  $status=1;
  $reviewstatus=array('status'=>$status);
  $this->db->where('id',$id)
           ->update('review',$reviewstatus);
}

public function reviewdelete($id)
{
  $this->db->where('id',$id)
            ->delete('review');
}

public function reviewreject($id)
{
  $status=3;
  $reviewstatus=array('status'=>$status);
  $this->db->where('id',$id)
           ->update('review',$reviewstatus);
}

public function enquiry()
{
      $q= $this->db->select()
                        ->order_by('id', 'DESC')
                        ->from('enquiry')
                        ->get();
         return $q->result();
                    
}
public function totalcollegesnum()
{
   $q= $this->db->select()
                ->from('college_registration')
                ->get();
         return $q->num_rows();
}
public function totalmanagementcollege()
{
   $q= $this->db->select()
                ->from('college_registration')
                ->where('college_type','Management')
                ->get();
         return $q->num_rows();
}
public function totalmedicalcollege()
{
   $q= $this->db->select()
                ->from('college_registration')
                ->where('college_type','Medical')
                ->get();
         return $q->num_rows();
}
public function totalenggcollege()
{
   $q= $this->db->select()
                ->from('college_registration')
                ->where('college_type','Engineering')
                ->get();
         return $q->num_rows();
}
public function totallawcollegesnum()
{
   $q= $this->db->select()
                ->from('college_registration')
                ->where('college_type','Law')
                ->get();
         return $q->num_rows();
}
public function totalcommercecollege()
{
   $q= $this->db->select()
                ->from('college_registration')
                ->where('college_type','Commerce')
                ->get();
         return $q->num_rows();
}
public function totalusers()
{
   $q= $this->db->select()
                ->from('user_registration')
                ->get();
         return $q->num_rows();
}
public function totalexamapplication()
{
   $q= $this->db->select()
                ->from('examapplication')
                ->get();
         return $q->num_rows();
}
public function totaluserapplication()
{
   $q= $this->db->select()
                ->from('user_application')
                ->get();
         return $q->num_rows();
}
public function totaladmission2020()
{
   $q= $this->db->select()
                ->from('admission2020')
                ->get();
         return $q->num_rows();
}
public function totalabroadapplication()
{
   $q= $this->db->select()
                ->from('abroadapplication')
                ->get();
         return $q->num_rows();
}
public function totalleadapplication()
{
   $q= $this->db->select()
                ->from('lead')
                ->get();
         return $q->num_rows();
}
public function totalstudenthelpdeskapplication()
{
   $q= $this->db->select()
                ->from('student_helpdesk')
                ->get();
         return $q->num_rows();
}
public function totalexam()
{
   $q= $this->db->select()
                ->from('exams')
                ->get();
         return $q->num_rows();
}
public function totalinquiry()
{
   $q= $this->db->select()
                ->from('enquiry')
                ->get();
         return $q->num_rows();
}
public function advertisewithus()
{
   $q= $this->db->select()
                ->order_by('add_id', 'DESC')
                ->from('advertise')
                ->get();
         return $q->result();
                    
}
public function collegebycategory($category)
{
  $q=$this->db->select()
              ->from('college_registration')
              ->where('college_type',$category)
              ->order_by('id','desc')
              ->get();
     return $q->result(); 
                
}



}

  ?>