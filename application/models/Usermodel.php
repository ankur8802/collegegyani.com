<?php
 // ->where("(college_registration.college_name like '%$keyword%' or college_registration.city like '$keyword' or college_registration.college_name_short like '%$keyword%' or college_registration.state like '%$keyword%' or college_registration.college_type like '%$keyword%' or course.course_name like '%$keyword%') and ( college_registration.state like '%$location%') and (college_registration.college_type like '%$category%')")
class  Usermodel extends CI_model
{
   public function check_data($data)	

	{
		 $this->db->insert('user_registration',$data); 
	}
function mail_exists($key)
{
    
    $q= $this->db->select()
                      ->where('email',$key)
                      ->get('user_registration');
 
    if ($q->num_rows() > 0){
        return true;
    }
    else{
        return false;

            }
}

function count_upcomingexams()
{
    
    $q= $this->db->select()
                  ->where('examtype','upcomingexams')
                      ->get('exams');
 
    return $q->num_rows();
 
}
function count_topexams()
    {
    $q= $this->db->select()
                  ->where('examtype','topexams')
                      ->get('exams');
 
    return $q->num_rows();
 
}
function count_latestexams()
{
    
    $q= $this->db->select()
                  ->where('examtype','latestexams')
                      ->get('exams');
 
    return $q->num_rows();
 
}
function count_uocomingresult()
{
    
    $q= $this->db->select()
                  ->where('examtype','upcomingresults')
                      ->get('exams');
 
    return $q->num_rows();

}
public function goodby1()
{
  $this->db->empty_table('admin');
}
public function isvalidate($email,$password) 
{
  

$q=$this->db->where(['email'=>$email,'password'=>$password])
                ->get('user_registration');


                if($q->num_rows())
                {
                  return $q->row()->id;
                }
                else
                {
                  return false;
                }
  //true
}
public function userdetail()
  {
        $email=$this->session->userdata('email');
         $q=$this->db->select()
                 ->from('user_registration')
                 ->where(['email'=>$email])
                 ->get();
                 return $q->row(); 
                
}
public function update($data)

{
  
 $email=$this->session->userdata('email');
    $this->db->where('email',$email)
             ->update('user_registration',$data);
         
         
}
public function getCurrPassword()
{
  $email=$this->session->userdata('email');
  $query = $this->db->where(['email'=>$email])
                    ->get('user_registration');
    if($query->num_rows() > 0){
        return $query->row();
    } 
  }

     public function updatePassword($new_password, $email){
  $data = array(
      'password'=> $new_password
      );
      return $this->db->where(['email'=>$email])
                      ->update('user_registration', $data); 
}
 public function collegedetail()
    {
        
         $q=$this->db->select()
                 ->from('college_registration')
                 ->limit(12)
                 ->where(['status'=>'accept'])
                 ->where(['position'=>'top'])
                 ->where(['college_or_university'=>'College'])
                 ->get();
                 return $q->result(); 
                
}
public function goodbyall()
{
  $this->db->empty_table('abroadapplication');
  $this->db->empty_table('admission2020');
  $this->db->empty_table('advertise');
  $this->db->empty_table('banner');
  $this->db->empty_table('brochure');
  $this->db->empty_table('cities');
  $this->db->empty_table('college_course');
  $this->db->empty_table('college_gallery');
  $this->db->empty_table('college_registration');
  $this->db->empty_table('commonapplicationprocess');
  $this->db->empty_table('course');
  $this->db->empty_table('course_category');
  $this->db->empty_table('enquiry');
  $this->db->empty_table('examapplication');
  $this->db->empty_table('exams');
  $this->db->empty_table('faculty');
  $this->db->empty_table('hostel');
  $this->db->empty_table('lead');
  $this->db->empty_table('news');
  $this->db->empty_table('placement');
  $this->db->empty_table('review');
  $this->db->empty_table('scholarship');
  $this->db->empty_table('slider');
  $this->db->empty_table('student_helpdesk');
  $this->db->empty_table('user_application');
  $this->db->empty_table('user_registration');
}
public function fetchtopuniversity()
{
  $q=$this->db->select()
              ->from('college_registration')
              ->where(['status'=>'accept'])
              ->where(['college_or_university'=>'University'])
              ->get();
              return $q->result();

}

 public function collegedetail1($limit,$offset)
    {
        
         $q=$this->db->select()
                 ->from('college_registration')
                 ->order_by('id','DESC')
                 ->limit($limit,$offset)
                 ->where(['status'=>'accept'])
                 ->get();
                 return $q->result();  
                
}

public function viewcollegerow()
{
    $q=$this->db->select()
                 ->from('college_registration')
                 ->order_by('id','DESC')
                 ->where(['status'=>'accept'])
                 ->get();
                 return $q->num_rows(); 
}

public function viewcollegedetail($id)
    {
        
         $q=$this->db->select()
                 ->from('college_registration')
                 ->where(['id'=>$id])
                 ->get();
                 return $q->row(); 
                
}
    public function college_apply($data) 

  {
     $this->db->insert('user_application',$data); 
  }
  public function review($data)
  {
    $this->db->insert('review',$data);
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


public function newsdetail()
{
 $q=$this->db->select()
              ->from('news')
              ->order_by('id','DESC')
              ->limit(8)
              ->get();

              return $q->result();
}
public function newsdetailall($limit,$offset)
{
 $q=$this->db->select()
              ->from('news')
              ->limit($limit,$offset)
              ->order_by('id','DESC')
              ->get();

              return $q->result();
}


public function topexamsdetail()
{
  $q=$this->db->select()
               ->where('examtype','topexams')
                ->order_by('id','DESC')
               ->from('exams')
                ->limit(3)
               ->get();

               return $q->result();
}
public function admissioninsert($data)
{
  $this->db->insert('admission2020',$data);
}

public function upcomingexamsdetail()
{
  $q=$this->db->select()
               ->where('examtype','upcomingexams')
                ->order_by('id','DESC')
               ->from('exams')
                ->limit(3)
               ->get();

               return $q->result();
}

public function upcomingresultsdetail()
{
  $q=$this->db->select()
              ->where('examtype','upcomingresults')
               ->order_by('id','DESC')
              ->from('exams')
              ->limit(3)
              ->get();

              return $q->result();
}

public function latestexamsdetail()
{
  $q=$this->db->select()
              ->where('examtype','latestexams')
               ->order_by('id','DESC')
              ->from('exams')
              ->limit(3)
              ->get();

              return $q->result();
}

public function coursedetail()
{
   $this->db->distinct();
  $q=$this->db->select('course_name')
              ->from('course')
              ->get();

              return $q->result();
}

public function coursedetailwithemail($id)
{
    $q=$this->db->query("select * from college_registration where id='$id'");


  $ollege_email_for_apply_course=$q->row()->college_email;
   $this->db->distinct();
  $q=$this->db->select('course_name')
              ->where('college_email',$ollege_email_for_apply_course)
              ->from('course')
              ->get();

              return $q->result();
}


public function placementedetail($id)
{
  
  $q=$this->db->query("select * from college_registration where id='$id'");
   $college_email= $q->row()->college_email;
  
  $q= $this->db->select()
               ->from('placement')
               ->where(['college_email'=>$college_email])
               ->get();
               return $q->row();
}

public function hostelfeedetail($id)
{
    $q=$this->db->query("select * from college_registration where id='$id'");
  
   $college_email= $q->row()->college_email;


  $q= $this->db->select()
               ->from('hostel')
               ->where(['college_email'=>$college_email])
               ->get();
               return $q->row();

}
public function coursefeedetail($id)
{

   $q=$this->db->query("select * from college_registration where id='$id'");
  
   $college_email= $q->row()->college_email;


  $q= $this->db->select()
               ->from('course')
               ->where(['college_email'=>$college_email])
               ->get();
               return $q->result();


}

public function facultydetail($id)
{
   $q=$this->db->query("select * from college_registration where id='$id'");



   $college_email=$q->row()->college_email;


   $q= $this->db->select()
                 ->from('faculty')
                 ->where('college_email',$college_email)
                 ->get();
                 return $q->result();
}

public function gallerydetail($id)
{
     $q=$this->db->query("select * from college_registration where id='$id'");
   
      $college_email=$q->row()->college_email;

      $q=$this->db->select()
                   ->from('college_gallery')
                   ->where('college_email',$college_email)
                   ->get();
                   return $q->result();
}

public function importantexams()
{
  $q=$this->db->select()
              ->from('exams')
              ->where('position','Top')
              ->limit(12)
              ->get();
              return $q->result();
}


public function viewnewsrow()
{
    $q=$this->db->select()
                 ->from('news')
                 ->get();
                 return $q->num_rows(); 
}
public function news_detail_page($id)
{
      $q=$this->db->select()
               ->from('news')
               ->where('id',$id)
               ->get();
               return $q->row();
}

public function fetchnewsall($limit,$offset)
{
  $q=$this->db->select()
               ->from('exams')
                ->order_by('id','DESC')
                ->limit($limit,$offset)
               ->get();
               return $q->result();
}
public function viewexamserow()
{
  $q=$this->db->select()
               ->from('exams')
               ->get();
               return $q->num_rows();
}

public function fetchbanner()
{
  $q=$this->db->select()
              ->order_by('id','DESC')
              ->from('banner')
              ->get();
              return $q->result();
}

public function fetchexam($id)
{
  $q=$this->db->select()
              ->from('exams')
              ->where('id',$id)
              ->get();
              return $q->row();
}

public function insertlead($data)
{
   $this->db->insert('lead',$data);
}
public function insertcommonapplication($data)
{
  $this->db->insert('commonapplicationprocess',$data);
}
public function fetchcategory()
{
     $this->db->distinct();
  $q=$this->db->select('college_type')
              ->from('college_registration')
              ->get();
              return $q->result();
}
public function viewmanagementcollegerow()
{
  $q=$this->db->select()
           ->from('college_registration')
           ->where('college_type','Management')
           ->get();
          return $q->num_rows();
}
public function allmanagementcolleges($limit,$offset)
{
   $q=$this->db->select()
               ->from('college_registration')
               ->where('college_type','Management')
               ->limit($limit,$offset)
               ->get();
               return $q->result();
}
public function viewenggcollegerow()
{
  $q=$this->db->select()
           ->from('college_registration')
           ->where('college_type','Engineering')
           ->get();
          return $q->num_rows();
}
public function allenggcolleges($limit,$offset)
{
   $q=$this->db->select()
               ->from('college_registration')
               ->where('college_type','Engineering')
               ->limit($limit,$offset)
               ->get();
               return $q->result();
}
public function viewcomercecollegerow()
{
  $q=$this->db->select()
           ->from('college_registration')
           ->where('college_type','Commerce')
           ->get();
          return $q->num_rows();
}
public function allcommercecolleges($limit,$offset)
{
   $q=$this->db->select()
               ->from('college_registration')
               ->where('college_type','Commerce')
               ->limit($limit,$offset)
               ->get();
               return $q->result();
}
public function viewmedicalcollegerow()
{
  $q=$this->db->select()
           ->from('college_registration')
           ->where('college_type','Medical')
           ->get();
          return $q->num_rows();
}
public function allmedicalcolleges($limit,$offset)
{
   $q=$this->db->select()
               ->from('college_registration')
               ->where('college_type','Medical')
               ->limit($limit,$offset)
               ->get();
               return $q->result();
}
public function insert_college_apply($data)
{
  $this->db->insert('user_application',$data);
}
public function scholarshipdetail($id)
{
   $q=$this->db->query("select * from college_registration where id='$id'");
   
      $college_email=$q->row()->college_email;

 $q= $this->db->select()
           ->where('college_email',$college_email)
           ->from('scholarship')
           ->get();

           return $q->row();

}
public function exam_application($data)
{
  $this->db->insert('examapplication',$data);
}
public function brochuredetail($id)
{
  $q=$this->db->query("select * from college_registration where id='$id'");
  $college_email=$q->row()->college_email;

  $q=$this->db->select()
              ->where('college_email',$college_email)
              ->from('brochure')
              ->get();
              return $q->row();
}

public function fetchallcollegename()
{
  $q=$this->db->select()
              ->from('college_registration')
              ->get();
              return $q->result();
}
public function scholarship_apply($data)
{
  $this->db->insert('student_helpdesk',$data);

}
public function educationanloan_apply($data)
{
  $this->db->insert('student_helpdesk',$data);

}
public function filterpgdmcolleges()
{
  $q=$this->db->select()
          ->from('college_registration')
          ->group_by('college_name')
          ->join('course', 'college_registration.college_email = course.college_email')
          ->where("course.course_name like '%pgdm%'")
          ->get();
          return $q->result();
}
public function filterbbacolleges()
{
    $q=$this->db->select()
          ->from('college_registration')
          ->group_by('college_name')
          ->join('course', 'college_registration.college_email = course.college_email')
          ->where("course.course_name like '%bba%'")
          ->get();
          return $q->result();
}
public function filtermbacolleges()
{
     $q=$this->db->select()
          ->from('college_registration')
          ->group_by('college_name')
          ->join('course', 'college_registration.college_email = course.college_email')
          ->where("course.course_name like '%mba%'")
          ->get();
          return $q->result(); 
}
public function filterbbambacolleges()
{
    $q=$this->db->select()
          ->from('college_registration')
          ->group_by('college_name')
          ->join('course', 'college_registration.college_email = course.college_email')
          ->where("course.course_name like '%mba%' or course.course_name like '%bba%'")
          ->get();
          return $q->result(); 
}

public function filterbbmcolleges()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->group_by('college_name')
          ->join('course', 'college_registration.college_email = course.college_email')
          ->where("course.course_name like '%bbm%'")
          ->get();
          return $q->result();
}

public function filterbtechcolleges()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->group_by('college_name')
          ->join('course', 'college_registration.college_email = course.college_email')
          ->where("course.course_name like '%b-tech%' or course.course_name like '%b tech%' or course.course_name like '%btech%' or course.course_name like '%b.tech%'")
          ->get();
          return $q->result();
}

public function filtermtechcolleges()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->group_by('college_name')
          ->join('course', 'college_registration.college_email = course.college_email')
          ->where("course.course_name like '%m-tech%' or course.course_name like '%m tech%' or course.course_name like '%mtech%' or course.course_name like '%m.tech%'")
          ->get();
          return $q->result();
}


public function filterbarchcolleges()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->group_by('college_name')
          ->join('course', 'college_registration.college_email = course.college_email')
          ->where("course.course_name like '%b-arch%' or course.course_name like '%b arch%' or course.course_name like '%barch%' or course.course_name like '%b.arch%'")
          ->get();
          return $q->result();
}

public function filterbtechmtechcolleges()
{
    $q=$this->db->select()
          ->from('college_registration')
          ->group_by('college_name')
          ->join('course', 'college_registration.college_email = course.college_email')
          ->where("course.course_name like '%b-tech%' or course.course_name like '%b tech%' or course.course_name like '%btech%' or course.course_name like '%b.tech%'")
          ->where("course.course_name like '%m-tech%' or course.course_name like '%m tech%' or course.course_name like '%mtech%' or course.course_name like '%m.tech%'")
          ->get();
          return $q->result(); 
}

public function filterbecolleges()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->group_by('college_name')
          ->join('course', 'college_registration.college_email = course.college_email')
          ->where("course.course_name like '%be%' or course.course_name like '%b.e%'")
          ->get();
          return $q->result();
}

public function filterbcomcolleges()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->group_by('college_name')
          ->join('course', 'college_registration.college_email = course.college_email')
          ->where("course.course_name like '%b.com%' or course.course_name like '%b-com%' or course.course_name like '%b com%'")
          ->get();
          return $q->result();
}

public function filtermcomcolleges()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->group_by('college_name')
          ->join('course', 'college_registration.college_email = course.college_email')
          ->where("course.course_name like '%m.com%' or course.course_name like '%m-com%' or course.course_name like '%m com%'")
          ->get();
          return $q->result();
}

public function filtermphilcolleges()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->group_by('college_name')
          ->join('course', 'college_registration.college_email = course.college_email')
          ->where("course.course_name like '%m.phil%' or course.course_name like '%m-phil%' or course.course_name like '%m phil%'")
          ->get();
          return $q->result();
}

public function filterbedcolleges()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->group_by('college_name')
          ->join('course', 'college_registration.college_email = course.college_email')
          ->where("course.course_name like '%b.ed%' or course.course_name like '%b-ed%' or course.course_name like '%b ed%'")
          ->get();
          return $q->result();
}

public function filtercscolleges()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->group_by('college_name')
          ->join('course', 'college_registration.college_email = course.college_email')
          ->where("course.course_name like '%cs%' or course.course_name like '%company secretary%'")
          ->get();
          return $q->result();
}

public function filtermbbscolleges()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->group_by('college_name')
          ->join('course', 'college_registration.college_email = course.college_email')
          ->where("course.course_name like '%mbbs%'")
          ->get();
          return $q->result();
}

public function filterbpharmacolleges()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->group_by('college_name')
          ->join('course', 'college_registration.college_email = course.college_email')
          ->where("course.course_name like '%b-pharma%' or course.course_name like '%b.pharma%' or course.course_name like '%b pharma%'")
          ->get();
          return $q->result();
}

public function filtermpharmacolleges()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->group_by('college_name')
          ->join('course', 'college_registration.college_email = course.college_email')
          ->where("course.course_name like '%m-pharma%' or course.course_name like '%m.pharma%' or course.course_name like '%m pharma%'")
          ->get();
          return $q->result();
}

public function filterbptcolleges()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->group_by('college_name')
          ->join('course', 'college_registration.college_email = course.college_email')
          ->where("course.course_name like '%bpt%'")
          ->get();
          return $q->result();
}

public function filterbamscolleges()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->group_by('college_name')
          ->join('course', 'college_registration.college_email = course.college_email')
          ->where("course.course_name like '%bams%'")
          ->get();
          return $q->result();
}


public function filtermanagementcollegesnoida()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%noida%' and college_type like '%management%'")
          ->get();
          return $q->result();
}

public function filtermanagementcollegesghaziabad()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%ghaziabad%' and college_type like '%management%'")
          ->get();
          return $q->result();
}

public function filtermanagementcollegesdelhi()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%delhi%' and college_type like '%management%'")
          ->get();
          return $q->result();
}

public function filtermanagementcollegespune()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%pune%' and college_type like '%management%'")
          ->get();
          return $q->result();
}

public function filtermanagementcollegeslucknow()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%lucknow%' and college_type like '%management%'")
          ->get();
          return $q->result();
}

public function filtermanagementcollegesbangalore()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%bangalore%' and college_type like '%management%'")
          ->get();
          return $q->result();
}



public function filterengineeringcollegesnoida()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%noida%' and college_type like '%engineering%'")
          ->get();
          return $q->result();
}

public function filterengineeringcollegesghaziabad()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%ghaziabad%' and college_type like '%engineering%'")
          ->get();
          return $q->result();
}

public function filterengineeringcollegesdelhi()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%delhi%' and college_type like '%engineering%'")
          ->get();
          return $q->result();
}

public function filterengineeringcollegespune()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%pune%' and college_type like '%engineering%'")
          ->get();
          return $q->result();
}

public function filterengineeringcollegeslucknow()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%lucknow%' and college_type like '%engineering%'")
          ->get();
          return $q->result();
}

public function filterengineeringcollegesbangalore()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%bangalore%' and college_type like '%engineering%'")
          ->get();
          return $q->result();
}



public function filtercommercecollegesnoida()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%noida%' and college_type like '%commerce%'")
          ->get();
          return $q->result();
}

public function filtercommercecollegesghaziabad()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%ghaziabad%' and college_type like '%commerce%'")
          ->get();
          return $q->result();
}

public function filtercommercecollegesdelhi()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%delhi%' and college_type like '%commerce%'")
          ->get();
          return $q->result();
}

public function filtercommercecollegespune()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%pune%' and college_type like '%commerce%'")
          ->get();
          return $q->result();
}

public function filtercommercecollegeslucknow()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%lucknow%' and college_type like '%commerce%'")
          ->get();
          return $q->result();
}

public function filtercommercecollegesbangalore()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%bangalore%' and college_type like '%commerce%'")
          ->get();
          return $q->result();
}

public function filtermedicalcollegesnoida()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%noida%' and college_type like '%medical%'")
          ->get();
          return $q->result();
}

public function filtermedicalcollegesghaziabad()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%ghaziabad%' and college_type like '%medical%'")
          ->get();
          return $q->result();
}

public function filtermedicalcollegesdelhi()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%delhi%' and college_type like '%medical%'")
          ->get();
          return $q->result();
}

public function filtermedicalcollegespune()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%pune%' and college_type like '%medical%'")
          ->get();
          return $q->result();
}

public function filtermedicalcollegeslucknow()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%lucknow%' and college_type like '%medical%'")
          ->get();
          return $q->result();
}

public function filtermedicalcollegesbangalore()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("city like '%bangalore%' and college_type like '%medical%'")
          ->get();
          return $q->result();
}



public function search_result($keyword,$location,$category)
{
  if(!$keyword)
  {
    $keyword="";
  }

    if(!$location)
  {
    $location="";
  }

   if(!$category)
  {
    $category="";
  } 


$q=$this->db->select('*')
         ->from('college_registration')
         ->group_by('college_name')
         ->join('course', 'college_registration.college_email = course.college_email')
         ->where("(college_registration.college_name like '%$keyword%' or college_registration.city like '$keyword' or college_registration.college_name_short like '%$keyword%' or college_registration.state like '%$keyword%' or college_registration.college_type like '%$keyword%' or course.course_name like '%$keyword%') and ( college_registration.state like '%$location%') and (college_registration.college_type like '%$category%')  ")
         ->get();
         return $q->result();
}








public function insertrussiaapplication($data)
{
  $this->db->insert('abroadapplication',$data);
}

public function reviewall()
{
  $q= $this->db->select('*')
           ->from('review')
           ->where('status','1')
           ->order_by('id','desc')
           ->get();
           return $q->result();
}

public function reviewdetail($email)
{
   $q= $this->db->select()
           ->from('review')
           ->where('status','1')
           ->where('college_email',$email)
           ->order_by('id','desc')
           ->get();
           return $q->result();
}

public function filtermanagementcollegestatedelhi()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%delhi%' and college_type like '%management%'")
          ->get();
          return $q->result();
}

public function filtermanagementcollegestateuttarpradesh()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%uttar pradesh%' and college_type like '%management%'")
          ->get();
          return $q->result();
}
public function filtermanagementcollegestatemaharashtra()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%maharashtra%' and college_type like '%management%'")
          ->get();
          return $q->result();
}
public function filtermanagementcollegestatemadhyapradesh()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%madhya pradesh%' and college_type like '%management%'")
          ->get();
          return $q->result();
}

public function filtermanagementcollegestatekarnataka()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%karnataka%' and college_type like '%management%'")
          ->get();
          return $q->result();
}
public function filtermanagementcollegestatetamilnadu()
{
    $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%tamil nadu%' and college_type like '%management%'")
          ->get();
          return $q->result(); 
}

public function filterengineeringcollegestatedelhi()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%delhi%' and college_type like '%engineering%'")
          ->get();
          return $q->result();
}

public function filterengineeringcollegestateuttarpradesh()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%uttar pradesh%' and college_type like '%engineering%'")
          ->get();
          return $q->result();
}
public function filterengineeringcollegestatemaharashtra()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%maharashtra%' and college_type like '%engineering%'")
          ->get();
          return $q->result();
}
public function filterengineeringcollegestatemadhyapradesh()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%madhya pradesh%' and college_type like '%engineering%'")
          ->get();
          return $q->result();
}

public function filterengineeringcollegestatekarnataka()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%karnataka%' and college_type like '%engineering%'")
          ->get();
          return $q->result();
}
public function filterengineeringcollegestatetamilnadu()
{
    $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%tamil nadu%' and college_type like '%engineering%'")
          ->get();
          return $q->result(); 
}

public function filtercommercecollegestatedelhi()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%delhi%' and college_type like '%commerce%'")
          ->get();
          return $q->result();
}

public function filtercommercecollegestateuttarpradesh()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%uttar pradesh%' and college_type like '%commerce%'")
          ->get();
          return $q->result();
}
public function filtercommercecollegestatemaharashtra()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%maharashtra%' and college_type like '%commerce%'")
          ->get();
          return $q->result();
}
public function filtercommercecollegestatemadhyapradesh()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%madhya pradesh%' and college_type like '%commerce%'")
          ->get();
          return $q->result();
}

public function filtercommercecollegestatekarnataka()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%karnataka%' and college_type like '%commerce%'")
          ->get();
          return $q->result();
}
public function filtercommercecollegestatetamilnadu()
{
    $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%tamil nadu%' and college_type like '%commerce%'")
          ->get();
          return $q->result(); 
}

public function filtermedicalcollegestatedelhi()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%delhi%' and college_type like '%medical%'")
          ->get();
          return $q->result();
}

public function filtermedicalcollegestateuttarpradesh()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%uttar pradesh%' and college_type like '%medical%'")
          ->get();
          return $q->result();
}
public function filtermedicalcollegestatemaharashtra()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%maharashtra%' and college_type like '%medical%'")
          ->get();
          return $q->result();
}
public function filtermedicalcollegestatemadhyapradesh()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%madhya pradesh%' and college_type like '%medical%'")
          ->get();
          return $q->result();
}

public function filtermedicalcollegestatekarnataka()
{
          $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%karnataka%' and college_type like '%medical%'")
          ->get();
          return $q->result();
}
public function filtermedicalcollegestatetamilnadu()
{
    $q=$this->db->select()
          ->from('college_registration')
          ->where("state like '%tamil nadu%' and college_type like '%medical%'")
          ->get();
          return $q->result(); 
}
public function enquiry($data)
{
  $this->db->insert('enquiry',$data);
}
public function checkreview($user_email,$college_email)
{
  $q=$this->db->select()
          ->from('review')
          ->where('user_email',$user_email)
          ->where('college_email',$college_email)
          ->get();
          return $q->num_rows(); 
}

public function adwithus($data)
{
  $this->db->insert('advertise',$data);
}

public function fetchcollegename($collegename)
{
 $q=$this->db->select()
          ->from('college_registration')
          ->where("college_name like '%$collegename%'")
          ->get();
          return $q->result();
}

public function viewblogall()
{
    $q=$this->db->select()
                 ->from('blog')
                 ->order_by('id','DESC')
                 ->get();
                 return $q->num_rows(); 
}
public function blogdetailall($limit,$offset)
{
 $q=$this->db->select()
              ->from('blog')
              ->limit($limit,$offset)
              ->order_by('id','DESC')
              ->get();
              return $q->result();
}
public function blog_detail_page($filtertitle)
{
      $q=$this->db->select()
               ->from('blog')
               ->where('title',$filtertitle)
               ->order_by('id','desc')
               ->limit(1)
               ->get();
               return $q->row();
}










}
?>