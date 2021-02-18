<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class College_controller extends CI_Controller
    {
    	 function  __construct()
                    {
                	parent::__construct();
                    $this->load->model('College_model'); 
                    $this->load->library('pagination');

                    if(!$email=$this->session->userdata('college_email'))
                    {
                         return redirect('College_controller_extra/index');
                    }

             }

 
//   public function logincheck()
//   {
//   $user=$this->input->post('username');
//   $pass=$this->input->post('password');
//   $check=$this->College_model->check($user,$pass);

//   if($check)
//   {
//     $this->load->view('index');
//   }
//   else
//   {
    
//     return redirect('College_controller/login');
// }
//  }
 // public function userdetail()
 // {
 //   $rt['data']= $this->College_model->userdetail();


 //  $this->load->view('userdetail',$rt);
 // }
 
// public function authenticate()
// {
//     $list['res']=$this->College_model->wel();
//     $this->load->view('emp_auth',$list);
// }
// function accept($id)
// {

//  $this->College_model->status($id);
// return redirect('College_controller/authenticate');
// }
// function reject($id)
// {
  
//   $this->College_model->status1($id);
//   return redirect('College_controller/authenticate');
// }
// function block($id)
// {
//   $this->College_model->status2($id);
//    return redirect('College_controller/authenticate');
// }
// function unblock($id)
// {
//   $this->College_model->status3($id);
//    return redirect('College_controller/authenticate');
// }
// function view_employer()
// {
//   $list['res']=$this->College_model->wel();
//   $this->load->view('view_employer',$list);
// }
 


public function collegeprofile()
 {
   $list['data']=$this->College_model->collegedetail();
   $list['course']=$this->College_model->coursedetailfetch();
   $list['state']=$this->College_model->statedetailfetch();
  $this->load->view('index',$list);
 }
public function updatecollegedetail()
{

  
       $config['upload_path']='../upload/';
     $config['allowed_types'] ='gif|jpg|png|jpeg|docx|pdf';

    $this->load->library('upload',$config);
  if( $this->upload->do_upload('image'))

  {
    $data=$this->upload->data();
    $image_path=$data['raw_name'].$data['file_ext'];
   
if($image_path)
{

  
          
  $course=$this->input->post('course');
$courseset=implode(',',$course);
 
  
    $data=array(
  'college_name'=>$this->input->post('college_name'),
  'college_name_short'=>$this->input->post('college_name_short'),
  'college_or_university'=>$this->input->post('college_or_university'),
  
   'state'=>$this->input->post('state'),
  'address'=>$this->input->post('address'),
  'password'=>$this->input->post('password'),
  'phone'=>$this->input->post('phone'),
  'college_type'=>$this->input->post('college_type'),
  'description'=>$this->input->post('description'),
    'city'=>$this->input->post('city'),
     'image'=>$image_path,
     'course'=>$courseset,
    'date'=>$date

);
    

     $this->session->set_flashdata('item','item-value');
// $this->load->model('College_model');
    $this->College_model->updatecollege($data);
 return redirect('college_controller/collegeprofile');
  }
   }
     
    else{
       $course=$this->input->post('course');
      $courseset=implode(',',$course);
 
  
    $data=array(
  'college_name'=>$this->input->post('college_name'),
  'college_name_short'=>$this->input->post('college_name_short'),
    'college_or_university'=>$this->input->post('college_or_university'),


  
   'state'=>$this->input->post('state'),
  'address'=>$this->input->post('address'),
  'password'=>$this->input->post('password'),
  'phone'=>$this->input->post('phone'),
  'college_type'=>$this->input->post('college_type'),
  'description'=>$this->input->post('description'),
    'city'=>$this->input->post('city'),
    
     'course'=>$courseset,
    

);

 if( $this->upload->do_upload('logo'))

  {
    $datalogo=$this->upload->data();
    $logo=$datalogo['raw_name'].$datalogo['file_ext'];
    $data['logo']= $logo;
   
  }

   $this->session->set_flashdata('item','item-value');  
   // $this->load->model('College_model');
    $this->College_model->updatecollege($data);
 return redirect('college_controller/collegeprofile');

    }

}



 public function collegecoursedetail()
{
 
   $data['data']=$this->College_model->collegedetail();
  $this->load->view('collegecoursedetail',$data);
}
public function coursedetail()
{
  // $email=$this->input->post('college_name');
  date_default_timezone_set('asia/kolkata');
         $date=date('d-m-Y');
 $data=array(
  'college_name'=>$this->input->post('college_name'),
   'college_email'=>$this->input->post('college_email'),
  'course_name'=>$this->input->post('course_name'),
  'course_year'=>$this->input->post('course_year'),
  'course_fee'=>$this->input->post('course_fee'),
    'date'=>$date
);
 $this->session->set_flashdata('item','item-value');            
  $this->College_model->coursedetail($data,$email);
  return redirect('college_controller/collegecoursedetail');
}
 public function editcoursedetail()
{
  
  $data['data']=$this->College_model->editdetail();
  $this->load->view('editcoursedetail',$data);
}
public function updatecoursedetail($id)
{
$data=array(
  'course_name'=>$this->input->post('course_name'),
  'course_year'=>$this->input->post('course_year'),
  'course_fee'=>$this->input->post('course_fee'),
);



$this->session->set_flashdata('item','item-value');  
$this->College_model->updatecoursedetail($id,$data);
return redirect('college_controller/editcoursedetail');
}
public function deletecoursedetail($id)
 {   
  $this->session->set_flashdata('item1','item-value');  
    $this->College_model->deletecourserow($id);
   return redirect('college_controller/editcoursedetail');
}

public function userapplication()
{
  $data['userapplication']=$this->College_model->user_application();

  $this->load->view('user_applied',$data);
}

public function deleteuserapplication($id)
{
     $this->College_model->delete_user_application($id);
     $this->session->set_flashdata('delete_user_application_alt','delete user application');
     return redirect('college_controller/userapplication');
} 

public function coursesadd()
{
  $data['collegeid']=$this->College_model->fetchcoursecollegeid();
  $data['coursedetails']=$this->College_model->fetchcoursedetail();
  $this->load->view('addcourses',$data);
}

public function insertcourse()
{

  $data=$this->input->post();
  $college_email=$this->session->userdata('college_email');
  $data['college_email']=$college_email;
  $this->College_model->insert_course($data);
  $this->session->set_flashdata('addcourse_alt','course add Successfully');
  return redirect('college_controller/coursesadd');

  
}

public function deletecourse($courseid)
{
  $this->College_model->delete_course($courseid);
  $this->session->set_flashdata('delete_course_alt','delete course');
  return redirect('College_controller/coursesadd');

}

     public function fetchcities()
     {
        $statename=$this->input->post('title');

           $this->load->model('College_model');
   $citiesname=$this->College_model->selectcitiesfetch($statename);

       foreach ($citiesname as $citie_name ) {
      echo "<option value='$citie_name->city_name' > $citie_name->city_name </option>";
  }
      // echo "hi";
     }


  public function placement()
  {
    $data['placement']=$this->College_model->fetchplacement();
    $this->load->view('placement',$data);
  }
  public function insertplacement()
{
  $college_email=$this->session->userdata('college_email');
  $data=$this->input->post();
  $data['college_email']=$college_email;

  $numberofplacement=$this->College_model->fetchplacementrow();

  if($numberofplacement==0)
  {
  $this->College_model->insert_placement($data);
  }
  else
  {
      $this->College_model->update_placement($data);
  }


 $this->session ->set_flashdata('insert_placement_alt','Placement Successfully Submitted');
  return redirect('College_controller/placement');

}

public function deleteplacement($id)
{
  $this->College_model->delete_placement($id);
  $this->session ->set_flashdata('delete_placement_alt','Placement delete Successfully');
  return redirect('College_controller/placement');
}

public function hostel()
{
  $data['hostel']=$this->College_model->fetchhostelfee();
  $this->load->view('hostel',$data);
}

public function inserthostelfee()
{
    $college_email=$this->session->userdata('college_email');
    $data=$this->input->post();
    $data['college_email']=$college_email;

    $numberofhostelfee=$this->College_model->fetchhostelfeerow();

    if($numberofhostelfee==0)
  {
  $this->College_model->insert_hostel($data);
    
  }
  else
  {
      $this->College_model->update_hostel($data);

      
  
  }

   $this->session ->set_flashdata('insert_hostel_alt','Hostel Fee Successfully Submitted');
  return redirect('College_controller/hostel');

}

public function deletehostelfee($id)
{
   $this->College_model->delete_hostel_fee($id);
  $this->session ->set_flashdata('delete_hostel_alt','Placement delete Successfully');
  return redirect('College_controller/hostel');
}

public function faculty()
{
   $college_email=$this->session->userdata('college_email');
  $data['faculty']=$this->College_model->fetchfaculty($college_email);
  $this->load->view('faculty',$data);
}

public function insertfaculty()
{
  $data=$this->input->post();
  $college_email=$this->session->userdata('college_email');
  $data['college_email']=$college_email;
  $this->College_model->insert_faculty($data);
  $this->session ->set_flashdata('insert_faculty_alt','Faculty Information Submitted Successfully');
  return redirect('College_controller/faculty');


}

public function deletefaculty($id)
{
   $this->College_model->delete_faculty($id);
   $this->session ->set_flashdata('delete_faculty_alt','Faculty delete Successfully');
  return redirect('College_controller/faculty');
}

public function gallery()
{
  $data['gallery']=$this->College_model->fetchdetail();
  $this->load->view('gallery',$data);
}
public function insertgallery()
{

      $data=$this->input->post('college_image');
     
         $config['upload_path']          = './upload/';
         $config['allowed_types']        = 'gif|jpg|png|jpeg';

       $this->load->library('upload', $config);

           if ($this->upload->do_upload('college_image'))
           {
               $post=$this->upload->data();
               $college_image=$post['raw_name'].$post['file_ext'];
               $data['college_image']=$college_image;
             
                    
           }
           else
           {
             $this->session->set_flashdata('wrong_format_alt','Wrong File Format');
             return redirect('College_controller/gallery');
           }

       $college_email=$this->session->userdata('college_email');
        
        $data['college_email']=$college_email;
          
       $this->College_model->insert_gallery($data);


         $this->session->set_flashdata('insert_gallery_alt','Wrong File Format');
             return redirect('College_controller/gallery');
      

}

public function deletegallery($id)
{
   $this->College_model->deletegallery($id);
   $this->session->set_flashdata('deletegallery_alt','delete gallery image');
   return redirect('College_controller/gallery');
}

public function fetchcollegecitie()
{
  $collegestatename=$this->input->post('title');

  $collegecitiesname=$this->College_model->selectcitiesfetch($collegestatename);

  foreach ($collegecitiesname as $citie_name) {
   echo "<option value='$citie_name->city_name' > $citie_name->city_name </option>";
  }


}

public function scholarship()
{
  $data['scholarshipdata']=$this->College_model->fetchscholarship();
  $this->load->view('scholarship',$data);
}
public function insertscholarship()
{
  $college_email=$this->session->userdata('college_email');
  $data=$this->input->post();
  $data['college_email']=$college_email;
  $this->College_model->insertscholarshipdata($data);
  $this->session->set_flashdata('insert_scholarship_alt','Scholarship successfully Submitted');
  return redirect('College_controller/scholarship');
}
public function deletescholarship($id)
{
  $this->College_model->delete_scholarship($id);
  $this->session->set_flashdata('delete_scholarship_alt','Delete Scholarship Detail Successfully');
  return redirect('College_controller/scholarship');
}
public function editscholarship($id)
{
  $data['scholarshipdata']=$this->College_model->edits_cholarship($id);
  $this->load->view('editscholarship',$data);
}
public function updatescholarship($id)
{
   $data=$this->input->post();
   $this->College_model->updates_cholarship($data,$id);
   $this->session->set_flashdata('update_scholarship_alt','Update Scholarship Successfully');
   return redirect('College_controller/scholarship');

}

public function brochure()
{
   $data['brochure']=$this->College_model->fetchbrochure();
    $this->load->view('brochure',$data);
}
public function insertbrochure()
{
     $data=$this->input->post('brochure_file');
     
         $config['upload_path']          = './upload/';
         $config['allowed_types']        = 'jpg|png|jpeg|pdf';

       $this->load->library('upload', $config);

           if ($this->upload->do_upload('brochure_file'))
           {
               $post=$this->upload->data();
               $brochure_file=$post['raw_name'].$post['file_ext'];
               $data['brochure_file']=$brochure_file;                  
           }
           else
           {
             $this->session->set_flashdata('wrong_format_alt','Wrong File Format');
             return redirect('College_controller/brochure');
           }

            $check_brochure=$this->College_model->check_brochure();
            if($check_brochure==0)
            {
              $this->College_model->insert_brochure($data);
            }
            else
            {
              $this->College_model->update_brochure($data);
            }
            
       $this->session->set_flashdata('brochure_alt','brochure Successfully Update');
       return redirect('College_controller/brochure');

}

public function editcourse($courseid)
{

   $data['course']= $this->College_model->edit_course($courseid);
  $this->load->view('editcourse',$data);
}
public function updatecourse($courseid)
{
  $data=$this->input->post();
  $this->College_model->update_course($data,$courseid);

  $this->session->set_flashdata('update_course_alt',' Successfully ');
       return redirect('College_controller/coursesadd');


}


















}
?>
    	 

      
      
