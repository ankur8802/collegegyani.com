<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller
    {        
    	 function  __construct()
  {
    	parent::__construct();
      $this->load->model('Admin_model'); 
      $this->load->library('pagination');
      if(!$email=$this->session->userdata('miitadmin2020')) 
       {
         return redirect('Admin_controller_extra/index');
       }

  }
  
public function index()
{
      $data['totalcollege']= $this->Admin_model->totalcollegesnum();
      $data['totalmanagementcollege']= $this->Admin_model->totalmanagementcollege();
      $data['totalmedicalcollege']= $this->Admin_model->totalmedicalcollege();
      $data['totalenggcollege']= $this->Admin_model->totalenggcollege();
      $data['totallawcollege']= $this->Admin_model->totallawcollegesnum();
      $data['totalcommercecollege']= $this->Admin_model->totalcommercecollege();
      $data['totalusers']= $this->Admin_model->totalusers();
      $data['totalexamapplication']= $this->Admin_model->totalexamapplication();
      $data['totaluserapplication']= $this->Admin_model->totaluserapplication();
      $data['totaladmission2020']= $this->Admin_model->totaladmission2020();
      $data['totalabroadapplication']= $this->Admin_model->totalabroadapplication();
      $data['totalleadapplication']= $this->Admin_model->totalleadapplication();
      $data['totalstudenthelpdeskapplication']= $this->Admin_model->totalstudenthelpdeskapplication();
      $data['totalexam']= $this->Admin_model->totalexam();
      $data['totalinquiry']= $this->Admin_model->totalinquiry();
      $this->load->view('index',$data);
}

 public function userdetail()
 {
   $rt['data']= $this->Admin_model->userdetail();
  $this->load->view('userdetail',$rt);
 }
public function authenticate() 
{
    $list['data']=$this->Admin_model->collegedetail();
    $this->load->view('collegeauthenticate',$list);
}
function del_slider($id)
{
  $this->db->query("delete from slider where id='$id'");
     $this->session->set_flashdata("delete",'delete');
    return redirect('Admin_controller/add_slider');
}
function add_slider()
{
  $list['res']=$this->Admin_model->add_slider();
  $this->load->view('add_slider',$list);
}

function insert_add_slider()
{
  $config['upload_path']='upload/slider';
     $config['allowed_types'] ='gif|jpg|png|jpeg|';
       $this->load->library('upload',$config);
       if( $this->upload->do_upload('image'))

  {
          
    $data=$this->upload->data();
    $image_path=$data['raw_name'].$data['file_ext'];
    $url=$this->input->post('url');

    $this->db->query("insert into slider(image,url)values('$image_path','$url')");
    $this->session->set_flashdata("add",'add');
    return redirect('Admin_controller/add_slider');
  }
  else
  {
    $this->session->set_flashdata("nadd",'nadd');
    return redirect('Admin_controller/add_slider');
  } 
}
function accept($id)
{

 $this->Admin_model->statusaccept($id);
return redirect('Admin_controller/authenticate');
}
function reject($id)
{
  
  $this->Admin_model->statusreject($id);
  return redirect('Admin_controller/authenticate');
}
function block($id)
{
  $this->Admin_model->statusblock($id);
   return redirect('Admin_controller/authenticate');
}
function unblock($id)
{
  $this->Admin_model->statusunblock($id);
   return redirect('Admin_controller/authenticate');
}
// function view_employer()
// {
//   $list['res']=$this->Admin_model->wel();
//   $this->load->view('view_employer',$list);
// }
public function logout()
{
  
   session_destroy();
   return redirect('Admin_controller_extra/index');


}
   public function fetchcities()
     {
        $statename=$this->input->post('title');

   $citiesname=$this->Admin_model->selectcities($statename);

       foreach ($citiesname as $citie_name ) {
      echo "<option value='$citie_name->city_name' > $citie_name->city_name </option>";
  }
      // echo "hi";
     }

public function fetchcollegecitie()
{
  $statename=$this->input->post('title');


   $citiesname=$this->Admin_model->selectcities($statename);

   
  foreach ($citiesname as $citie_name) {
   echo "<option value='$citie_name->city_name' > $citie_name->city_name </option>";
  }


}

public function news()
{
   $data['allnews']= $this->Admin_model->fetchnews();
   $this->load->view('news',$data);
}

public function managecollegedetails()
{
 
  // $rt['data']=$this->Admin_model->wel2();
   $data['cities']=$this->Admin_model->cities();
  $this->load->view('managedetails',$data);
}
public function collegeregistration()
     {
       $config['upload_path']='../upload/';
     $config['allowed_types'] ='gif|jpg|png|jpeg|';
date_default_timezone_set('asia/kolkata');
         $date=date('d-m-Y');
    $this->load->library('upload',$config);
  if( $this->upload->do_upload('image'))

  {
    $data=$this->upload->data();
    $image_path=$data['raw_name'].$data['file_ext'];
if($image_path)
{
          
  $course=$this->input->post('course');
 
  $email=$this->input->post('college_email');
    $data=array(
  'college_name'=>$this->input->post('college_name'),
  'college_email'=>$this->input->post('college_email'),
   'state'=>$this->input->post('state'),
  'address'=>$this->input->post('address'),
  'password'=>$this->input->post('password'),
  'phone'=>$this->input->post('phone'),
  'description'=>$this->input->post('description'),
    'city'=>$this->input->post('city'),
    'state'=>$this->input->post('state'),
     'image'=>$image_path,
    'date'=>$date

);
    
    $key=$this->input->post('college_email');

    $checkmail=$this->Admin_model->mail_exists($key);
     if($checkmail){
    $this->session->set_flashdata('item','item-value');
       return redirect('Admin_controller/managecollegedetails');
    
     }
     // if ($password!=$confirm_password) {
     //  $this->session->set_flashdata('item1','item-value');

     //   return redirect('Admin_controller/managecollegedetails');
     // }
    else{
       $this->session->set_flashdata('item2','item-value');
      $this->Admin_model->check_data($data);
     return redirect('Admin_controller/managecollegedetails');

    }

      } 
    }
  }
  public function edit($id)
  {


    $list['data']=$this->Admin_model->editcollegedetail($id);
       $list['cities']=$this->Admin_model->cities();
    $this->load->view('editcollege',$list);
  }

  public function updatecollegedetail($id)
     {
       

   $data=$this->input->post();

        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

      if($this->upload->do_upload('image'))
      {
        $imagedata=$this->upload->data();
        $imagesname=$imagedata['raw_name'].$imagedata['file_ext'];
        $data['image']=$imagesname;
      }
      if($this->upload->do_upload('logo'))
      {
        $imagedata2=$this->upload->data();
        $imagesname2=$imagedata2['raw_name'].$imagedata2['file_ext'];
        $data['logo']=$imagesname2;

      }

 



     $this->session->set_flashdata('item','item-value');  
     $this->Admin_model->updatecollege($id ,$data);
     return redirect('Admin_controller/edit/'.$id);
}


 public function addcollege()
    {
      $this->load->view('addcollege');
    }
   public function addcollegedetail()
    {
       $data=array(
  'college_name'=>$this->input->post('college_name'),
   'college_email'=>$this->input->post('college_email'),
   
  
  'password'=>$this->input->post('password'),
  'phone'=>$this->input->post('phone'),
  'college_id'=> "CG".rand(),
);

 $this->Admin_model->check_data($data);
     return redirect('Admin_controller/addcollege');
    }


public function userapplication()
{
  $data['userapp']=$this->Admin_model->user_application();

  $this->load->view('userapplication',$data);
}


public function deleteuserapplication($id)
{
     $this->Admin_model->delete_user_application($id);
     $this->session->set_flashdata('delete_user_application_alt','delete user application');
     return redirect('Admin_controller/userapplication');
}


public function insertnews()
{
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

if($this->upload->do_upload('image'))
    {
      $post=$this->upload->data();
      $newsimage="upload/".$post['raw_name'].$post['file_ext'];
    }

else
    {
             $this->session->set_flashdata('wrong_format',"Wrong File Format");
              return redirect('Admin_controller/news');
    }

        $data=$this->input->post();
        $data['image']=$newsimage;
        $this->Admin_model->insert_news($data);
        $this->session->set_flashdata('new_alt','News Successfilly Added');
        return redirect('Admin_controller/news');


}

public function deletenews($id)
{
  $this->Admin_model->delete_news($id);
  $this->session->set_flashdata('delete_news_alt','news deleted seccessfully');
  return redirect('Admin_controller/news');
}

public function topexams()
{
  $data['exam']=$this->Admin_model->fetch_exam();
  $this->load->view('top_exam',$data);
}

public function insertexams()
{

    $data=$this->input->post();

        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);


 if($this->upload->do_upload('image'))
    {
      $post=$this->upload->data();
      $examimage="upload/".$post['raw_name'].$post['file_ext'];
      $data['image']=$examimage;
    }

  if($this->upload->do_upload('logo'))
    {
      $image2=$this->upload->data();
      $logo="upload/".$image2['raw_name'].$image2['file_ext'];
      $data['logo']=$logo;
    }

    

      $this->Admin_model->insert_exams($data);
      $this->session->set_flashdata('exam_alt','Exam Successfilly Submitted');
      return redirect('Admin_controller/topexams');


}

public function deleteexams($id)
{
   $this->Admin_model->delete_exams($id);
   $this->session->set_flashdata('delete_exams_alt','Exam Delete Successfilly ');
 return redirect('Admin_controller/topexams');
}
public function add_banner()
{
  $data['banner']=$this->Admin_model->fetchbanner();
  $this->load->view('banner',$data);
}

public function insert_add_banner()
{

         $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

 if($this->upload->do_upload('image'))
    {
      $post=$this->upload->data();
      $bannerimage="upload/".$post['raw_name'].$post['file_ext'];
    }
 else
 {
     $this->session->set_flashdata('wrong_format',"Wrong File Format");
     return redirect('Admin_controller/add_banner');
 }
 
 $data=$this->input->post();
 $data['image']=$bannerimage;
$this->Admin_model->insert_banner($data);
$this->session->set_flashdata('banner_alt','Banner Successfilly Submitted');

return redirect('Admin_controller/add_banner');

}
public function del_banner($id)
{
  $this->Admin_model->deletebanner($id);
  $this->session->set_flashdata('dlt_banner_alt','Banner Delete Successfilly');
  return redirect('Admin_controller/add_banner');

}
public function positiontop($id)
{

 $this->Admin_model->changepositiontop($id);
return redirect('Admin_controller/authenticate');
}

public function positionnormal($id)
{

 $this->Admin_model->changepositionnormal($id);
return redirect('Admin_controller/authenticate');
}

public function editexam($id)
{
  $data['exams']=$this->Admin_model->fetchexamsforedit($id);
  $this->load->view('edit_top_exam',$data);
}
public function updateexams($id)
{
     $data=$this->input->post();

        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);


 if($this->upload->do_upload('image'))
    {
        $post=$this->upload->data();
        $examimage="upload/".$post['raw_name'].$post['file_ext'];
        $data['image']=$examimage;
       
    }
   if($this->upload->do_upload('logo'))
    {
         $image2=$this->upload->data();
         $logo="upload/".$image2['raw_name'].$image2['file_ext'];
         $data['logo']=$logo;
       
    }

 
        $this->Admin_model->editexamshere($id,$data);
        $this->session->set_flashdata('edit_exams','Update Exam Successfilly');
        return redirect('Admin_controller/topexams');
}
public function editnews($id)
{
   $data['news']=$this->Admin_model->fetchnewsforedit($id);
   $this->load->view('editnews',$data);
}
public function updatenews($id)
{
  $data=$this->input->post();
  $this->Admin_model->editnewshere($id,$data);
  $this->session->set_flashdata('edit_news','Update News Successfilly');
  return redirect('Admin_controller/news');
}

public function lead()
{
  $data['lead']=$this->Admin_model->fetchleaddata();
  $this->load->view('lead',$data);
}

public function commonapplication()
{
  $data['commonapplication']=$this->Admin_model->fetchcommonapplicationdata();
  $this->load->view('commonapplication',$data);
}
public function deletecollege($id)
{
    $this->Admin_model->delete_college($id);
    $this->session->set_flashdata('delete_college_alt','College Deleted');
    return redirect('Admin_controller/authenticate');

}

public function Citymanagement()
{
  $data['cities']=$this->Admin_model->cities();
  $this->load->view('addcity',$data);
}

public function insertcity()
{
  $data=$this->input->post();
  $this->Admin_model->insert_city($data);
  $this->session->set_flashdata('insert_city_alt','City Successfully Add');
  return redirect('Admin_controller/Citymanagement');
}
public function examapplication()
{
  $data['examapplicationdetail']=$this->Admin_model->exam_application_detail();
  $this->load->view('examapplication',$data);
}
public function helpdesk()
{
  $data['helpdesk']=$this->Admin_model->helpdeskdata();
  $this->load->view('helpdesk',$data);
}
public function admission()
{
  $data['admission']=$this->Admin_model->admissiondata();
  $this->load->view('admission',$data);
}
public function abroad()
{
  $data['abroad']=$this->Admin_model->abroaddata();
  $this->load->view("abroad",$data);
}

public function reviews()
{
  $data['reviews']=$this->Admin_model->fetchreviewsall();
  $this->load->view('reviews',$data);
}
public function reviewapproved($id)
{
  $this->Admin_model->reviewapproved($id);
  return redirect('Admin_controller/reviews');
}
public function reviewhide($id)
{
  $this->Admin_model->reviewhide($id);
  return redirect('Admin_controller/reviewsapproved');
}

public function reviewunhide($id)
{
   $this->Admin_model->reviewunhide($id);
  return redirect('Admin_controller/reviewshide');
}

public function reviewdelete($id)
{
  $this->Admin_model->reviewdelete($id);
  return redirect('Admin_controller/reviews');
}



public function reviewreject($id)
{
  $this->Admin_model->reviewreject($id);
  return redirect('Admin_controller/reviews');
}
public function enquiry()
{
   $data['enquiry']=$this->Admin_model->enquiry();
  $this->load->view('enquiry',$data);
}
public function reviewsapproved()
{
  $data['reviews']=$this->Admin_model->reviewsapproved();
  $this->load->view('reviewsapproved',$data);
}
public function reviewshide()
{
  $data['reviews']=$this->Admin_model->reviewshide();
  $this->load->view('reviewshide',$data);
}

public function advertisewithus()
{
  $data['advertisewithus']=$this->Admin_model->advertisewithus();
  $this->load->view('advertisewithus',$data);
}
public function collegebycategory($category)
{
    $list['data']=$this->Admin_model->collegebycategory($category);
    $this->load->view('collegeauthenticate',$list);
}




































}
?>
    	 

      
      
