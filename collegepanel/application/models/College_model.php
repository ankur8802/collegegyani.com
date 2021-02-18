
<?php
class College_model extends CI_model
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
      public function userdetail()
  {
        
         $q=$this->db->select()
                 ->from('user_registration')
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
public function isvalidate($email,$password) 
{
  
 /* $q=$this->db->where(['emp_email'=>$email,'password'=>$password])
                ->get('company_registration');*/
                 $q=$this->db->select()
                         ->from('college_registration')
                         ->where(['college_email'=>$email,'password'=>$password])
                         ->get();
                if($q->num_rows())
                {
                  return $q->row();
                }
                else
                {
                  return false;
                }
  //true
}
 public function collegedetail()
    {
         $email=$this->session->userdata('college_email');
         $q=$this->db->select()
                 ->from('college_registration')
                 ->where('college_email',$email)
                 ->get();

                 return $q->row(); 
                
}
public function updatecollege($data)
{


   $email=$this->session->userdata('college_email');
       $q = $this->db->where(['college_email'=>$email])
             ->update('college_registration',$data);
}
public function coursedetail($data)
{

   $this->db->insert('college_course',$data);
} 
      public function editdetail()
    {
        $email=$this->session->userdata('college_email');
         $q=$this->db->select()
                 ->from('college_course')
                 ->where(['college_email'=>$email])
                 ->get();
                 return $q->result(); 
                
}
public function updatecoursedetail($id,$data)
    {
        
         $email=$this->session->userdata('college_email');
       $q = $this->db->where(['id'=>$id])
                 ->update('college_course',$data);
                
}
public function deletecourserow($id){
    $this ->db-> where('id',$id)
              -> delete('college_course');
}


 public function user_application()
 {

        $collegeemail=$this->session->userdata('college_email');
        $query= $this->db->select()
                          ->from('user_application')
                          ->where("college_email",$collegeemail)
                          ->get();

                           return $query->result();
                    
 }

 public function delete_user_application($id)
 {
  $this->db->where('id',$id)
           ->delete('user_application');
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

public function insert_course($data)
{
  $this->db->insert('course',$data);
}

public function fetchcoursedetail()
{
  $q= $this->db->select()
           ->from('course')
           ->where('college_email',$this->session->userdata('college_email'))
           ->get();

           return $q->result();

}

public function fetchscholarship()
{
 $q=$this->db->select()
          ->from('scholarship')
          ->where('college_email',$this->session->userdata('college_email'))
          ->get();
          return $q->result();
}
public function delete_course($courseid)
{
  $this->db->where('courseid',$courseid)
           ->delete('course');
}

public function coursedetailfetch()
{

   $this->db->distinct();
  $q=$this->db->select('course_name')
              ->where('college_email',$this->session->userdata('college_email'))
              ->from('course')
              ->get();

              return $q->result();
}

public function statedetailfetch()
{
     $this->db->distinct();
       $q=$this->db->select('city_state')
                    ->from('cities')
                    ->get();
                    return $q->result();
}

public function selectcitiesfetch($statename)
{
    $q=$this->db->select('city_name')
           ->from('cities')
           ->where('city_state',$statename)
           ->get();
           return $q->result();
}

public function insert_placement($data)
{
  $this->db->insert('placement',$data);
}

public function fetchplacement()
{


  $college_email=$this->session->userdata('college_email');

  $q=$this->db->select()
              ->from('placement')
              ->where('college_email',$college_email)
              ->get();
              return $q->result();
}
public function fetchplacementrow()
{
   $college_email=$this->session->userdata('college_email');


  $q=$this->db->select()
              ->from('placement')
              ->where('college_email',$college_email)
              ->get();
              return $q->num_rows();
}

public function delete_placement($id)
{
  $this->db->where('id',$id)
           ->delete('placement');
}

public function update_placement($data)
{

    $college_email=$this->session->userdata('college_email');
  $this->db->where('college_email',$college_email)
            ->update('placement',$data);


}

public function fetchhostelfeerow()
{
  $college_email=$this->session->userdata('college_email');

  $q=$this->db->select()
              ->from('hostel')
              ->where('college_email',$college_email)
              ->get();
              return $q->num_rows();

}

public function insert_hostel($data)
{
  $this->db->insert('hostel',$data);
}

public function update_hostel($data)
{
  $college_email=$this->session->userdata('college_email');
  $this->db->where('college_email',$college_email)
           ->update('hostel',$data);
}

public function delete_hostel_fee($id)
{
  $this->db->where('id',$id)
           ->delete('hostel');
}

public function fetchhostelfee()
{

  $college_email=$this->session->userdata('college_email');

  $q=$this->db->select()
              ->from('hostel')
              ->where('college_email',$college_email)
              ->get();
              return $q->result();

}

public function insert_faculty($data)
{
  $this->db->insert('faculty',$data);
}
public function fetchfaculty($college_email)
{
  $q=$this->db->select()
              ->where('college_email',$college_email)
              ->from('faculty')
              ->get();

              return $q->result();
}
public function delete_faculty($id)
{
  $this->db->where('id',$id)
            ->delete('faculty');
}

public function insert_gallery($data)
{
  
  $this->db->insert('college_gallery',$data);
}
public function fetchdetail()
{
  $college_email=$this->session->userdata('college_email');

  $q= $this->db->select()
                ->where('college_email',$college_email)
                ->from('college_gallery')
                ->get();
                return $q->result();
}
public function deletegallery($id)
{
  $this->db->where("id",$id)
           ->delete('college_gallery');
}

public function insertscholarshipdata($data)
{
  $this->db->insert('scholarship',$data);
}
public function delete_scholarship($id)
{
  $this->db->where('id',$id)
           ->delete('scholarship');
}
public function edits_cholarship($id)
{
  $q=$this->db->select()
           ->from("scholarship")
           ->where('id',$id)
           ->get();

           return $q->row();
}

public function updates_cholarship($data,$id)
{
   $this->db->where('id',$id)
             ->update('scholarship',$data);
}

public function check_brochure()
{
    $college_email=$this->session->userdata('college_email');
  
  $q= $this->db->select()
            ->where('college_email',$college_email)
            ->from('brochure')
            ->get();

        return $q->num_rows();
}

public function insert_brochure($data)
{ 
  $college_email=$this->session->userdata('college_email');
  $data['college_email']=$college_email;


  $this->db->insert('brochure',$data);
}

public function update_brochure($data)
{
   $college_email=$this->session->userdata('college_email');
  $data['college_email']=$college_email;


  $this->db->where('college_email',$college_email)
          ->update('brochure',$data);

}
public function fetchbrochure()
{
   $college_email=$this->session->userdata('college_email');
   
  $q=$this->db->select()
              ->where('college_email',$college_email)
              ->from('brochure')
              ->get();
              return $q->row();

}

public function edit_course($courseid)
{
  $q=$this->db->select()
              ->from('course')
              ->where('courseid',$courseid)
              ->get();
              return $q->row();
}
public function update_course($data,$courseid)
{
  $this->db->where('courseid',$courseid)
           ->update('course',$data);
}
public function fetchcoursecollegeid()
{
  $email=$this->session->userdata('college_email');
  $q=$this->db->select('id')
           ->from('college_registration')
           ->where('college_email',$email)
           ->get();
         return $q->row();
}
























}
  ?>