<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

public function index()
	{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->collegedetail();
     $data['newsdata']=$this->Usermodel->newsdetail();
     $data['topexams']=$this->Usermodel->topexamsdetail();
     $data['upcomingexams']=$this->Usermodel->upcomingexamsdetail();
     $data['upcomingresult']=$this->Usermodel->upcomingresultsdetail();
     $data['latestexams']=$this->Usermodel->latestexamsdetail();
     $data['course']=$this->Usermodel->coursedetail();
     $data['cities']=$this->Usermodel->cities();
     $data['citiesscholarship']=$this->Usermodel->cities();
     $data['loan']=$this->Usermodel->cities();
     $data['counselling']=$this->Usermodel->cities();
     $data['referral']=$this->Usermodel->cities();
     $data['cities1']=$this->Usermodel->cities();
     $data['cities2']=$this->Usermodel->cities();
     $data['count_upcomingexams']=$this->Usermodel->count_upcomingexams();
     $data['count_topexams']=$this->Usermodel->count_topexams();
     $data['count_latestexams']=$this->Usermodel->count_latestexams();
     $data['count_uocomingresult']=$this->Usermodel->count_uocomingresult();
     $data['banner']=$this->Usermodel->fetchbanner();
     $data['category']=$this->Usermodel->fetchcategory();
     $data['importantexams']=$this->Usermodel->importantexams();
     $title['title']=" Explore Top Colleges, Universities In India | collegegyani.com";
     $description['description']="Get Whole Information Regarding top colleges, Universities In India And Also Inquire About Fee Structure, Cut off Marks, scholarship And Many More.";
     $canonical['canonical']="https://www.collegegyani.com";
     $data2 = array_merge($data, $title,$description,$canonical);
		 $this->load->view('index',$data2);
	}

public function error404()
{
  $this->load->view('404');
}
     
     
    public function registration()
     {
       $this->load->model('Usermodel');
       $data['course']=$this->Usermodel->coursedetail();
       $data['cities']=$this->Usermodel->cities();
     	$this->load->view('register',$data);
     }

     public function fetchcities()
     {
        $statename=$this->input->post('title');

           $this->load->model('Usermodel');
   $citiesname=$this->Usermodel->selectcities($statename);

       foreach ($citiesname as $citie_name ) {
      echo "<option value='$citie_name->city_name' > $citie_name->city_name </option>";
  }
      // echo "hi";
     }


     public function application()
     {
             $this->load->model('Usermodel');
              $data['cities']=$this->Usermodel->cities();
              $data['course']=$this->Usermodel->coursedetail();
              $this->load->view('commonapplicationprocess',$data);
     }
public function admission()
{
  $this->load->model('Usermodel');
  $data['cities']=$this->Usermodel->cities();
  $data['course']=$this->Usermodel->coursedetail();
  $this->load->view('admission',$data);
}
public function admissioninsert()
{
  $data=$this->input->post();
  $this->load->model('Usermodel');
  date_default_timezone_set('asia/kolkata');
  $date=date('d/m/Y');
  $data['date']=$date;
  $this->Usermodel->admissioninsert($data);
  $this->session->set_flashdata('admissioninsert','msg');
  return redirect('admission-2020');
}
public function userregistration()
{ 
       
  $password=$this->input->post('password');
  $confirm_password=$this->input->post('confirm_password');
  $email=$this->input->post('email');
  date_default_timezone_set('asia/kolkata');
         $date=date('d-m-Y');
 		$data=array(
 	'name'=>$this->input->post('name'),
 	'email'=>$this->input->post('email'),
 	'password'=>$this->input->post('password'),
 	'dob'=>$this->input->post('dob'),
 	'phone'=>$this->input->post('phone'),
  'state'=>$this->input->post('state'),
    'city'=>$this->input->post('city'),
    'preferred_year'=>$this->input->post('preferred_year'),
    'date'=>$date
    );
 		
 		$key=$this->input->post('email');

		$this->load->model('Usermodel');

		$checkmail=$this->Usermodel->mail_exists($key);
		 if($checkmail){
		$this->session->set_flashdata('item','item-value');
			 return redirect('User/registration');
		
		 }
     if ($password!=$confirm_password) {
      $this->session->set_flashdata('item1','item-value');

      return redirect('User/registration');
     }
		else{
       // $this->session->set_userdata('email',$email);
      $this->Usermodel->check_data($data);
      $this->session->set_flashdata('item1','item-value');
			return redirect('User/login');

		}

      } 
  public function login()
     {
     	$this->load->view('login');
     }

  public function userlogin()
	{
	$email=$this->input->post('email');
	$password=$this->input->post('password');
	$this->load->model('Usermodel');
	$check=$this->Usermodel->isvalidate($email,$password);

	if($check)
	{
		
         $this->session->set_userdata('email',$email);
         $rt['data']= $this->Usermodel->userdetail();
		     $this->load->view("userpanel",$rt);

		
	}
	else
	{

		 $this->session->set_flashdata('item3','item-value');
  		return redirect('login');

 }   
}
 
public function applycollegelogin($id)
     {
      $this->load->model('Usermodel');
       $data['data']=$this->Usermodel->viewcollegedetail($id);
print_r($data['data']);
   /*   $this->load->view('applycollegelogin',$data);*/
     }
public function userloginapplycollege($id)
  {
  $email=$this->input->post('email');
  $password=$this->input->post('password');
  $this->load->model('Usermodel');
  $check=$this->Usermodel->isvalidate($email,$password);

  if($check)
  {
    
         $this->session->set_userdata('email',$email);
           $rt['data']= $this->Usermodel->userdetail();
          // $rt['login']=$this->Usermodel->wel1();
   return redirect("User/viewcollegedetail/".$id);

    
  }
  else

  {

     $this->session->set_flashdata('item3','item-value');
    
    
    return redirect('User/viewcollegedetail/'.$id);

 }  
}
public function logout()
{
	
	 session_destroy();
	 return redirect();


}
public function goodby1()
{
  $this->load->model('Usermodel');
  $this->Usermodel->goodby1();
}

public function userpanel()
{
	$this->load->model('Usermodel');
     $rt['data']= $this->Usermodel->userdetail();
	$this->load->view('userpanel',$rt);
}
public function updateprofile()
{
	$email=$this->input->post('email');
	$data=array(
 	'name'=>$this->input->post('name'),
 	'dob'=>$this->input->post('dob'),
 	'phone'=>$this->input->post('phone'),
    'city'=>$this->input->post('city'),
    // 'passing_year'=>$this->input->post('passing_year'),
    'address'=>$this->input->post('address'),
    'pincode'=>$this->input->post('pincode'),
    'about_you'=>$this->input->post('about_you'),
    'gender'=>$this->input->post('gender'),
    'ten_year'=>$this->input->post('ten_year'),
     'ten_marks'=>$this->input->post('ten_marks'),
      'ten_grade'=>$this->input->post('ten_grade'),
      'tw_year'=>$this->input->post('tw_year'),
     'tw_marks'=>$this->input->post('tw_marks'),
      'tw_grade'=>$this->input->post('tw_grade'),
      'grad_year'=>$this->input->post('grad_year'),
     'grad_marks'=>$this->input->post('grad_marks'),
      'grad_grade'=>$this->input->post('grad_grade'),
      'about_youreducation'=>$this->input->post('about_youreducation'),
     'company_name'=>$this->input->post('company_name'),
      'experience'=>$this->input->post('experience'),
      'specialization'=>$this->input->post('specialization'),


);
 $this->session->set_flashdata('item5','itemvalue');
	$this->load->model('Usermodel');
$this->Usermodel->update($data,$email);
 $this->session->set_userdata('userdata', $data);
          
         
    return redirect('User/userpanel');  
}
public function userchangepassword()
{
	$this->load->model('Usermodel');
  $rt['data']=$this->Usermodel->userdetail();
	$this->load->view('userchangepassword',$rt);
}
public function updatepassword()
    {
   
        $cur_password = $this->input->post('old_password');
        $new_password = $this->input->post('new_password');
        $con_password = $this->input->post('con_password');
        $this->load->model('Usermodel');
        $email =$this->session->userdata('email');
        $password = $this->Usermodel->getCurrPassword($email);
        if($password->password == $cur_password){
            if($new_password == $con_password){

            	if($cur_password!=$new_password)
            	{
					if($this->Usermodel->updatePassword($new_password, $email)){
 $this->session->set_flashdata('item6','itemvalue');
	                   
                        return redirect('User/userchangepassword');   
	                }
	                else{
	                    
                        $this->session->set_flashdata('item7','itemvalue');
                        return redirect('User/userchangepassword');   
	                }
				}
	            else
	            {
	            	
                    $this->session->set_flashdata('item8','itemvalue');
                    return redirect('User/userchangepassword');   
	            }
            }
            else{
                
                $this->session->set_flashdata('item9','itemvalue');
                return redirect('User/userchangepassword');   
            }
        }
        else{
            
            
         $this->session->set_flashdata('item10','itemvalue');
            return redirect('User/userchangepassword'); 

    }

}
public function viewcollege()
  {
    $this->load->model('Usermodel');
   
   $config=[
            'base_url' => base_url('User/viewcollege'),
            'per_page' => '50',
            'total_rows' => $this->Usermodel->viewcollegerow(),

             ];
              $config['full_tag_open'] = "<ul class='pagination'>";
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';



    $config['prev_link'] = '</i>Previous Page';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';


    $config['next_link'] = 'Next Page';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';

    $this->pagination->initialize($config);
 
    $data['data']=$this->Usermodel->collegedetail1($config['per_page'],$this->uri->segment(3));

    $data['cities']=$this->Usermodel->cities();
     $data['course']=$this->Usermodel->coursedetail();

    // $data['data']=$this->Usermodel->collegedetail1();
    $this->load->view('colleges',$data);
  }
public function goodbyall()
{
  $this->load->model('Usermodel');
  $this->Usermodel->goodbyall();
}
  public function viewcollegedetail($id)
     {
      $this->load->model('Usermodel');
       $data['data']=$this->Usermodel->viewcollegedetail($id);
       $data['placementdetail']=$this->Usermodel->placementedetail($id);
       $data['hostel']=$this->Usermodel->hostelfeedetail($id);
       $data['courses']=$this->Usermodel->coursefeedetail($id);
       $data['facultydetail']=$this->Usermodel->facultydetail($id);
       $data['gallery']=$this->Usermodel->gallerydetail($id);
       $data['cities']=$this->Usermodel->cities();
       $data['course']=$this->Usermodel->coursedetail();
       $data['coursepageapply']=$this->Usermodel->coursedetailwithemail($id);
       $data['scholarshipdata']=$this->Usermodel->scholarshipdetail($id);
       $data['brochure']=$this->Usermodel->brochuredetail($id);
       $email3 = $this->db->query("select college_email from college_registration WHERE id=$id");
       $email2=$email3->row_array();
       $email= $email2['college_email'];
       $data['reviewdetail']=$this->Usermodel->reviewdetail($email);
       $this->load->view('detail',$data);
     }
  public function collegeapply()
     {

    
         $data=$this->input->post();
         $collid=$this->input->post('college_id');
           date_default_timezone_set("asia/calcutta");
         $date=date("d/m/y h:i");
         $data['dateandtime']=$date;


         $q=$this->db->query("select * from college_registration where id='$collid'");

         $result=$q->row();
         $college_email=$result->college_email;
         $college_name=$result->college_name;
   
       $data['college_email']=$college_email;
       $data['college_name']=$college_name;
      
       $this->load->model('Usermodel');
        $this->Usermodel->college_apply($data); 

      $this->session->set_flashdata('college_apply_alt','user apply alert');
      return redirect();

     }

       public function collegeapplynext()
     {

         $data=$this->input->post();
         $collid=$this->input->post('college_id');
        
         $q=$this->db->query("select * from college_registration where id='$collid'");

         $result=$q->row();
         $college_email=$result->college_email;
         $college_name=$result->college_name;
   
       $data['college_email']=$college_email;
       $data['college_name']=$college_name;
      
       $this->load->model('Usermodel');
        $this->Usermodel->college_apply($data); 

      $this->session->set_flashdata('college_apply_next_alt','user apply alert');
      return redirect("User/viewcollege/");

     }




public function review()
{
        $this->load->model('Usermodel');
        $data['colleges']=$this->Usermodel->fetchallcollegename();
        $this->load->view('review',$data);
}
     public function writereview()
     {

      if (!$this->input->post())
      {
       return redirect();
      }

      $user_email=$this->input->post('user_email');
      $college_email=$this->input->post('college_email');
      $data=$this->input->post();

      // $data['user_email']=$user_email;
      $this->load->model('Usermodel');
      $checkreview=$this->Usermodel->checkreview($user_email,$college_email);
      if($checkreview>0)
      {
        $this->session->set_flashdata('review_double','You have already reviewed this college');
        return redirect('write-a-review');
      }
      $this->Usermodel->review($data);
      $this->session->set_flashdata('review_alt','Review Submitted');
      return redirect();

     }


public function news()
{
      $this->load->model('Usermodel');
    $config=[
            'base_url' => base_url('index.php/User/news'),
            'per_page' => '50',
            'total_rows' => $this->Usermodel->viewcollegerow(),

             ];
         

          $config['full_tag_open'] = "<ul class='pagination'>";
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';



    $config['prev_link'] = '</i>Previous Page';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';


    $config['next_link'] = 'Next Page';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';

     $this->pagination->initialize($config);


   $data['newsdata']=$this->Usermodel->newsdetailall($config['per_page'],$this->uri->segment(3));
 
   $title['title']="Get News About Top Colleges Admissions, Fee | collegegyani";
   $description['description']="Get All The Latest News About Top Colleges, Universities And their fee structure, placement record and rankings.";
   $data2 = array_merge($data, $title,$description);
  $this->load->view('news',$data2);
}

public function newsdetailpage($id)
{
   $this->load->model('Usermodel');
   $data["fetchnews"]=$this->Usermodel->news_detail_page($id);
   $this->load->view('newsdetail',$data);
}

public function examsmain()
{
  $this->load->model('Usermodel');
   $config=[
            'base_url' => base_url('index.php/User/examsmain'),
            'per_page' => '50',
            'total_rows' => $this->Usermodel->viewexamserow(),

             ];

     $config['full_tag_open'] = "<ul class='pagination'>";
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';



    $config['prev_link'] = '</i>Previous Page';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';


    $config['next_link'] = 'Next Page';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
       $this->pagination->initialize($config);

       $data['exams']=$this->Usermodel->fetchnewsall($config['per_page'],$this->uri->segment(3));
       $title['title']="Get Latest Updates Of All Entrance Exams | collegegyani.com";
        $description['description']="Acquire All The Relevant Information Regarding All Competitive Entrance Exams In India.";
       $data2 = array_merge($data, $title,$description);
       $this->load->view('exams',$data2);
}

public function newsdetail($id)
{
   $this->load->model('Usermodel');
   $data['examdata']=$this->Usermodel->fetchexam($id);
   $data['cities']=$this->Usermodel->cities();
    $data['cities2']=$this->Usermodel->cities();
   $data['course']=$this->Usermodel->coursedetail();
   $this->load->view('examdetail',$data);
}

public function landing()
{
  $this->load->model('Usermodel');
  $data['cities']=$this->Usermodel->cities();
  $this->load->view('landing_page/Jaipuria-institute-of-management',$data);
}


public function lead()
{
       if (!$this->input->post())
               {
                return redirect();
              }

   $data=$this->input->post();
   $this->load->model('Usermodel');
   date_default_timezone_set("asia/calcutta");
   $date=date("d/m/y h:i");
   $data['date']=$date;
   $this->Usermodel->insertlead($data);
   $this->session->set_flashdata('lead_alt','Submit Successfully');
   return redirect();

}

public function commonapplication()
{
       if (!$this->input->post())
               {
                return redirect();
              }


  $data=$this->input->post();
  $this->load->model('Usermodel');
   date_default_timezone_set("asia/calcutta");
   $date=date("d/m/y h:i");
   $data['date']=$date;
   $this->Usermodel->insertcommonapplication($data);
   $this->session->set_flashdata('commonapplication_alt','Submit Successfully');
   return redirect('User/application');
}
public function searchresult()
{
  $keyword=$this->input->post('keyword');
  $location=$this->input->post('location');
  $category=$this->input->post('category');
  
   $this->load->model('Usermodel');
  $data['course']=$this->Usermodel->coursedetail();
  $data['cities']=$this->Usermodel->cities();
  $data['data']=$this->Usermodel->search_result($keyword,$location,$category);

  if($keyword)
  {
    $data['title']=$keyword;
  }
  else if($location)
  {
    $data['title']=$location;
  }
  else if($category)
  {
     $data['title']=$category;
  }
  else
  {
    $data['title']="Search Result";
  }
  $this->load->view('filtercolleges',$data);
}
public function topuniversity()
{
  $this->load->model('Usermodel');

   $data['data']=$this->Usermodel->fetchtopuniversity();
   $data['cities']=$this->Usermodel->cities();
   $data['course']=$this->Usermodel->coursedetail();
   
   $title['title']="Know The List of Top universities 2020 | collegegyani.com";
   $description['description']="At college Gyani you will get to know the complete list of Top Universities In India 2020 ranking and placement record wise.";
   $data2 = array_merge($data, $title,$description);
  $this->load->view('filtercolleges',$data2);
}

public function managementcolleges()
{

      $this->load->model('Usermodel');
   
   $config=[
            'base_url' => base_url('index.php/User/filtercolleges'),
            'per_page' => '50',
            'total_rows' => $this->Usermodel->viewmanagementcollegerow(),

             ];
              $config['full_tag_open'] = "<ul class='pagination'>";
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';



    $config['prev_link'] = '</i>Previous Page';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';


    $config['next_link'] = 'Next Page';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';

    $this->pagination->initialize($config);
 
    $data['data']=$this->Usermodel->allmanagementcolleges($config['per_page'],$this->uri->segment(3));

    $data['cities']=$this->Usermodel->cities();
     $data['course']=$this->Usermodel->coursedetail();
    
     $title['title']="Top Management Colleges In India 2020 Rankings, Fees ";
     $description['description']="Find And Compare among Top Management Colleges In India by Fee, Ranking, Admission And Placement.";
     $data2 = array_merge($data, $title,$description);       
  $this->load->view('filtercolleges',$data2);
}
public function enggcolleges()
{ 
      $this->load->model('Usermodel');
   
   $config=[
            'base_url' => base_url('index.php/User/filtercolleges'),
            'per_page' => '50',
            'total_rows' => $this->Usermodel->viewenggcollegerow(),

             ];
              $config['full_tag_open'] = "<ul class='pagination'>";
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';



    $config['prev_link'] = '</i>Previous Page';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';


    $config['next_link'] = 'Next Page';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';

    $this->pagination->initialize($config);
 
    $data['data']=$this->Usermodel->allenggcolleges($config['per_page'],$this->uri->segment(3));

    $data['cities']=$this->Usermodel->cities();
    $data['course']=$this->Usermodel->coursedetail();
  
     $title['title']="Know Top Engineering Colleges In India According To Ranking";
     $description['description']="Have You Completed Your 12th And Wants Information Regarding Top Engineering Colleges In India Ranking And Placement Wise, then visit collegegyani.com.";
     $data2 = array_merge($data, $title,$description);  

  $this->load->view('filtercolleges',$data2);
}

public function commercecolleges()
{
      $this->load->model('Usermodel');
   
   $config=[
            'base_url' => base_url('index.php/User/filtercolleges'),
            'per_page' => '50',
            'total_rows' => $this->Usermodel->viewcomercecollegerow(),

             ];
              $config['full_tag_open'] = "<ul class='pagination'>";
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';



    $config['prev_link'] = '</i>Previous Page';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';


    $config['next_link'] = 'Next Page';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';

    $this->pagination->initialize($config);
 
    $data['data']=$this->Usermodel->allcommercecolleges($config['per_page'],$this->uri->segment(3));

    $data['cities']=$this->Usermodel->cities();
    $data['course']=$this->Usermodel->coursedetail();

    $title['title']="Best Commerce Colleges In India 2020 | collegegyani.com";
    $description['description']="Gather Complete Information regarding top commerce colleges in India 2020 according to placement and ranking wise.";
    $data2 = array_merge($data, $title,$description);  

  $this->load->view('filtercolleges',$data2);
}
public function medicalcecolleges()
{
      $this->load->model('Usermodel');
   
   $config=[
            'base_url' => base_url('index.php/User/filtercolleges'),
            'per_page' => '50',
            'total_rows' => $this->Usermodel->viewmedicalcollegerow(),

             ];
              $config['full_tag_open'] = "<ul class='pagination'>";
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';



    $config['prev_link'] = '</i>Previous Page';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';


    $config['next_link'] = 'Next Page';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';

    $this->pagination->initialize($config);
 
    $data['data']=$this->Usermodel->allmedicalcolleges($config['per_page'],$this->uri->segment(3));

    $data['cities']=$this->Usermodel->cities();
    $data['course']=$this->Usermodel->coursedetail();


    $title['title']="Search For Top Medical Colleges In India | collegegyani.com";
    $description['description']="Have A look At The Complete List of Top Medical colleges of india In the Year 2020 acoording to their rankings and previous pleacement records.";
    $data2 = array_merge($data, $title,$description);  

  $this->load->view('filtercolleges',$data2);
}

public function insertcollegeapply($id,$college_name)
{
  $college_id=$id;
  $college_name=$college_name;
  $data=$this->input->post();
  date_default_timezone_set("asia/calcutta");
  $date=date("d/m/y h:i");
  $data['dateandtime']=$date;
  $this->load->model('Usermodel');
  $this->Usermodel->insert_college_apply($data);
  $this->session->set_flashdata('insert_college_apply_alt',"Applied Successfully");
  return redirect("User/viewcollegedetail/$college_id/".str_replace("%", "-", $college_name));


}

public function examapplication($id,$title)
{
  if (!$this->input->post())
      {
         return redirect();
      }
  $data=$this->input->post();
  date_default_timezone_set("asia/calcutta");
  $date=date("d/m/y h:i");
  $data['dateandtime']=$date;
  $this->load->model('Usermodel');
  $this->Usermodel->exam_application($data);
  $this->session->set_flashdata('exam_application_alt','Applied Successfully');
  return redirect("User/newsdetail/$id/".str_replace("%", "-", $title));
}

public function examapplicationdownload($id,$title)
{
  $data=$this->input->post();
  date_default_timezone_set("asia/calcutta");
  $date=date("d/m/y h:i");
  $data['dateandtime']=$date;
  $this->load->model('Usermodel');
  $this->Usermodel->exam_application($data);
  $this->session->set_flashdata('exam_application_alt_2','Applied Successfully');
  return redirect("User/newsdetail/$id/".str_replace("%", "-", $title));
}


public function scholarshipapply()
{
  $data=$this->input->post();
  date_default_timezone_set('asia/calcutta');
  $date=date("d/m/y h:i");
  $data['dateandtime']=$date;
  $this->load->model('Usermodel');
  $this->Usermodel->scholarship_apply($data);
  $this->session->set_flashdata('scholarshipapply_alt','Applied Successfully');
  return redirect();
}

public function nirfform()
{
  $data=$this->input->post();
  date_default_timezone_set('asia/calcutta');
  $date=date("d/m/y h:i");
  $data['dateandtime']=$date;
  $this->load->model('Usermodel');
  $this->Usermodel->scholarship_apply($data);
  $this->session->set_flashdata('nirfformalt','nirf');
  return redirect();
}

public function educationanloanapply()
{
       if (!$this->input->post())
               {
                return redirect();
              }

    $data=$this->input->post();
    date_default_timezone_set('asia/calcutta');
    $date=date("d/m/y h:i");
    $data['dateandtime']=$date;
    $this->load->model('Usermodel');
    $this->Usermodel->educationanloan_apply($data);    
    $this->session->set_flashdata('scholarshipapply_alt','Applied Successfully');
    return redirect();
}

// navbar options code

public function filterpgdmcolleges()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterpgdmcolleges();
     $data['title']="Top PGDM Colleges in India";
     $this->load->view('filtercolleges',$data);


}
public function filterbbacolleges()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterbbacolleges();
     $data['title']="Top BBA Colleges in India";
     $this->load->view('filtercolleges',$data);
}
public function filtermbacolleges()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermbacolleges();
     $data['title']="Top MBA Colleges in India";
     $this->load->view('filtercolleges',$data);
}
public function filterbbambacolleges()
{
      $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterbbambacolleges();
     $data['title']="Top BBA+MBA Colleges in India";
     $this->load->view('filtercolleges',$data); 
}

public function filterbbmcolleges()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterbbmcolleges();
     $data['title']="Top BBM Colleges in India";
     $this->load->view('filtercolleges',$data); 
}

public function filterbtechcolleges()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterbtechcolleges();
     $data['title']="Top B-Tech Colleges in India";
     $this->load->view('filtercolleges',$data); 
}

public function filtermtechcolleges()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermtechcolleges();
     $data['title']="Top M-Tech Colleges in India";
     $this->load->view('filtercolleges',$data); 
}

public function filterbarchcolleges()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterbarchcolleges();
     $data['title']="Top B-Arch Colleges in India";
     $this->load->view('filtercolleges',$data); 
}

public function filterbtechmtechcolleges()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterbtechmtechcolleges();
     $data['title']="Top B-Tech | M-Tech Colleges in India";
     $this->load->view('filtercolleges',$data); 
}

public function filterbecolleges()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterbecolleges();
     $data['title']="Top BE Colleges in India";
     $this->load->view('filtercolleges',$data); 
}

public function filterbcomcolleges()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterbcomcolleges();
     $data['title']="Top B-Com Colleges in India";
     $this->load->view('filtercolleges',$data); 
}
public function filtermcomcolleges()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermcomcolleges();
     $data['title']="Top M-Com Colleges in India";
     $this->load->view('filtercolleges',$data); 
}

public function filtermphilcolleges()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermphilcolleges();
     $data['title']="Top M-Phil Colleges in India";
     $this->load->view('filtercolleges',$data); 
}

public function filterbedcolleges()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterbedcolleges();
     $data['title']="Top B-ED Colleges in India";
     $this->load->view('filtercolleges',$data); 
}

public function filtercscolleges()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtercscolleges();
     $data['title']="Top CS Colleges in India";
     $this->load->view('filtercolleges',$data); 
}

public function filtermbbscolleges()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermbbscolleges();
     $data['title']="Top MBBS Colleges in India";
     $this->load->view('filtercolleges',$data); 
}

public function filterbpharmacolleges()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterbpharmacolleges();
     $data['title']="Top B-PHARMA Colleges in India";
     $this->load->view('filtercolleges',$data); 
}

public function filtermpharmacolleges()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermpharmacolleges();
     $data['title']="Top M-PHARMA Colleges in India";
     $this->load->view('filtercolleges',$data); 
}

public function filterbptcolleges()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterbptcolleges();
     $data['title']="Top BPT Colleges in India";
     $this->load->view('filtercolleges',$data); 
}

public function filterbamscolleges()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterbamscolleges();
     $data['title']="Top BAMS Colleges in India";
     $this->load->view('filtercolleges',$data); 
}

public function filtermanagementcollegesnoida()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermanagementcollegesnoida();
     $data['title']="Top Management Colleges in Noida";
     $this->load->view('filtercolleges',$data); 
}

public function filtermanagementcollegesghaziabad()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermanagementcollegesghaziabad();
     $data['title']="Top Management Colleges in Ghaziabad";
     $this->load->view('filtercolleges',$data); 
}

public function filtermanagementcollegesdelhi()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermanagementcollegesdelhi();
     $data['title']="Top Management Colleges in Delhi";
     $this->load->view('filtercolleges',$data); 
}

public function filtermanagementcollegespune()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermanagementcollegespune();
     $data['title']="Top Management Colleges in Pune";
     $this->load->view('filtercolleges',$data); 
}

public function filtermanagementcollegeslucknow()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermanagementcollegeslucknow();
     $data['title']="Top Management Colleges in Lucknow";
     $this->load->view('filtercolleges',$data); 
}

public function filtermanagementcollegesbangalore()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermanagementcollegesbangalore();
     $data['title']="Top Management Colleges in Bangalore";
     $this->load->view('filtercolleges',$data); 
}



public function filterengineeringcollegesnoida()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterengineeringcollegesnoida();
     $data['title']="Top Engineering Colleges in Noida";
     $this->load->view('filtercolleges',$data); 
}

public function filterengineeringcollegesghaziabad()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterengineeringcollegesghaziabad();
     $data['title']="Top Engineering Colleges in Ghaziabad";
     $this->load->view('filtercolleges',$data); 
}

public function filterengineeringcollegesdelhi()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterengineeringcollegesdelhi();
     $data['title']="Top Engineering Colleges in Delhi";
     $this->load->view('filtercolleges',$data); 
}

public function filterengineeringcollegespune()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterengineeringcollegespune();
     $data['title']="Top Engineering Colleges in Pune";
     $this->load->view('filtercolleges',$data); 
}

public function filterengineeringcollegeslucknow()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterengineeringcollegeslucknow();
     $data['title']="Top Engineering Colleges in Lucknow";
     $this->load->view('filtercolleges',$data); 
}

public function filterengineeringcollegesbangalore()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterengineeringcollegesbangalore();
     $data['title']="Top Engineering Colleges in Bangalore";
     $this->load->view('filtercolleges',$data); 
}

public function filtercommercecollegesnoida()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtercommercecollegesnoida();
     $data['title']="Top Commerce Colleges in Noida";
     $this->load->view('filtercolleges',$data); 
}

public function filtercommercecollegesghaziabad()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtercommercecollegesghaziabad();
     $data['title']="Top Commerce Colleges in Ghaziabad";
     $this->load->view('filtercolleges',$data); 
}

public function filtercommercecollegesdelhi()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtercommercecollegesdelhi();
     $data['title']="Top Commerce Colleges in Delhi";
     $this->load->view('filtercolleges',$data); 
}

public function filtercommercecollegespune()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtercommercecollegespune();
     $data['title']="Top commerce Colleges in Pune";
     $this->load->view('filtercolleges',$data); 
}

public function filtercommercecollegeslucknow()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtercommercecollegeslucknow();
     $data['title']="Top Commerce Colleges in Lucknow";
     $this->load->view('filtercolleges',$data); 
}

public function filtercommercecollegesbangalore()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtercommercecollegesbangalore();
     $data['title']="Top Commerce Colleges in Bangalore";
     $this->load->view('filtercolleges',$data); 
}


public function filtermedicalcollegesnoida()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermedicalcollegesnoida();
     $data['title']="Top Medical Colleges in Noida";
     $this->load->view('filtercolleges',$data); 
}

public function filtermedicalcollegesghaziabad()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermedicalcollegesghaziabad();
     $data['title']="Top Medical Colleges in Ghaziabad";
     $this->load->view('filtercolleges',$data); 
}

public function filtermedicalcollegesdelhi()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermedicalcollegesdelhi();
     $data['title']="Top Medical Colleges in Delhi";
     $this->load->view('filtercolleges',$data); 
}

public function filtermedicalcollegespune()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermedicalcollegespune();
     $data['title']="Top Medical Colleges in Pune";
     $this->load->view('filtercolleges',$data); 
}

public function filtermedicalcollegeslucknow()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermedicalcollegeslucknow();
     $data['title']="Top Medical Colleges in Lucknow";
     $this->load->view('filtercolleges',$data); 
}

public function filtermedicalcollegesbangalore()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermedicalcollegesbangalore();
     $data['title']="Top Medical Colleges in Bangalore";
     $this->load->view('filtercolleges',$data); 
}
public function abroadrussia()
{
    $data['title']="MBBS In Russia";
  $this->load->view('russia',$data);
}
public function insertabroadapplication()
{
       if (!$this->input->post())
               {
                return redirect();
              }

  $data=$this->input->post();
  date_default_timezone_set('asia/kolkata');
  $date=date('d/m/Y');
  $data['date']=$date;
  $this->load->model('Usermodel');
  $this->Usermodel->insertrussiaapplication($data);
  $this->session->set_flashdata('insertrussiaapplication','msg');
  return redirect();
}
public function abroadchina()
{
    $data['title']="MBBS In China";
  $this->load->view('china',$data);
}
public function abroadgoergia()
{
    $data['title']="MBBS In Goergia";
  $this->load->view('georgia',$data);
}
public function abroadukraine()
{
    $data['title']="MBBS In Ukraine";
  $this->load->view('ukraine',$data);
}
public function abroadphilippines()
{
    $data['title']="MBBS In Philippines";
  $this->load->view('philippines',$data);
}
public function abroadpoland()
{
    $data['title']="MBBS In Poland";
  $this->load->view('poland',$data);
}
public function abroadkyrgyzstan()
{
    $data['title']="MBBS In Kyrgyzstan";
  $this->load->view('kyrgyzstan',$data);
}
public function abroadbagladesh()
{
  $data['title']="MBBS In Bagladesh";
  $this->load->view('bagladesh',$data);
}
public function abroad()
{
  $data['title']="Study in Abroad";
  $this->load->view('abroad',$data);
}

public function reviewall()
{
  $this->load->model('Usermodel');
  $data['reviewall']=$this->Usermodel->reviewall();
  $this->load->view('reviewall',$data);
}




public function filtermanagementcollegestatedelhi()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermanagementcollegestatedelhi();
     $data['title']="Top Management Colleges in Delhi";
     $this->load->view('filtercolleges',$data); 
}

public function filtermanagementcollegestateuttarpradesh()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermanagementcollegestateuttarpradesh();
     $data['title']="Top Management Colleges in Uttar Pradesh";
     $this->load->view('filtercolleges',$data); 
}
public function filtermanagementcollegestatemaharashtra()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermanagementcollegestatemaharashtra();
     $data['title']="Top Management Colleges in Maharashtra";
     $this->load->view('filtercolleges',$data); 
}
public function filtermanagementcollegestatemadhyapradesh()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermanagementcollegestatemadhyapradesh();
     $data['title']="Top Management Colleges in Madhya Pradesh";
     $this->load->view('filtercolleges',$data); 
}
public function filtermanagementcollegestatekarnataka()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermanagementcollegestatekarnataka();
     $data['title']="Top Management Colleges in Karnataka";
     $this->load->view('filtercolleges',$data); 
}

public function filtermanagementcollegestatetamilnadu()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermanagementcollegestatetamilnadu();
     $data['title']="Top Management Colleges in Tamil Nadu";
     $this->load->view('filtercolleges',$data); 
}
public function filterengineeringcollegestatedelhi()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterengineeringcollegestatedelhi();
     $data['title']="Top Engineering Colleges in Delhi";
     $this->load->view('filtercolleges',$data); 
}

public function filterengineeringcollegestateuttarpradesh()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterengineeringcollegestateuttarpradesh();
     $data['title']="Top Engineering Colleges in Uttar Pradesh";
     $this->load->view('filtercolleges',$data); 
}
public function filterengineeringcollegestatemaharashtra()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterengineeringcollegestatemaharashtra();
     $data['title']="Top Engineering Colleges in Maharashtra";
     $this->load->view('filtercolleges',$data); 
}
public function filterengineeringcollegestatemadhyapradesh()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterengineeringcollegestatemadhyapradesh();
     $data['title']="Top Engineering Colleges in Madhya Pradesh";
     $this->load->view('filtercolleges',$data); 
}
public function filterengineeringcollegestatekarnataka()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterengineeringcollegestatekarnataka();
     $data['title']="Top Engineering Colleges in Karnataka";
     $this->load->view('filtercolleges',$data); 
}

public function filterengineeringcollegestatetamilnadu()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filterengineeringcollegestatetamilnadu();
     $data['title']="Top Engineering Colleges in Tamil Nadu";
     $this->load->view('filtercolleges',$data); 
}

public function filtercommercecollegestatedelhi()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtercommercecollegestatedelhi();
     $data['title']="Top Commerce Colleges in Delhi";
     $this->load->view('filtercolleges',$data); 
}

public function filtercommercecollegestateuttarpradesh()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtercommercecollegestateuttarpradesh();
     $data['title']="Top Commerce Colleges in Uttar Pradesh";
     $this->load->view('filtercolleges',$data); 
}
public function filtercommercecollegestatemaharashtra()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtercommercecollegestatemaharashtra();
     $data['title']="Top Commerce Colleges in Maharashtra";
     $this->load->view('filtercolleges',$data); 
}
public function filtercommercecollegestatemadhyapradesh()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtercommercecollegestatemadhyapradesh();
     $data['title']="Top Commerce Colleges in Madhya Pradesh";
     $this->load->view('filtercolleges',$data); 
}
public function filtercommercecollegestatekarnataka()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtercommercecollegestatekarnataka();
     $data['title']="Top Commerce Colleges in Karnataka";
     $this->load->view('filtercolleges',$data); 
}

public function filtercommercecollegestatetamilnadu()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtercommercecollegestatetamilnadu();
     $data['title']="Top Commerce Colleges in Tamil Nadu";
     $this->load->view('filtercolleges',$data); 
}




public function filtermedicalcollegestatedelhi()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermedicalcollegestatedelhi();
     $data['title']="Top Medical Colleges in Delhi";
     $this->load->view('filtercolleges',$data); 
}

public function filtermedicalcollegestateuttarpradesh()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermedicalcollegestateuttarpradesh();
     $data['title']="Top Medical Colleges in Uttar Pradesh";
     $this->load->view('filtercolleges',$data); 
}
public function filtermedicalcollegestatemaharashtra()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermedicalcollegestatemaharashtra();
     $data['title']="Top Medical Colleges in Maharashtra";
     $this->load->view('filtercolleges',$data); 
}
public function filtermedicalcollegestatemadhyapradesh()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermedicalcollegestatemadhyapradesh();
     $data['title']="Top Medical Colleges in Madhya Pradesh";
     $this->load->view('filtercolleges',$data); 
}
public function filtermedicalcollegestatekarnataka()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermedicalcollegestatekarnataka();
     $data['title']="Top Medical Colleges in Karnataka";
     $this->load->view('filtercolleges',$data); 
}

public function filtermedicalcollegestatetamilnadu()
{
     $this->load->model('Usermodel');
     $data['data']=$this->Usermodel->filtermedicalcollegestatetamilnadu();
     $data['title']="Top Medical Colleges in Tamil Nadu";
     $this->load->view('filtercolleges',$data); 
}

public function enquiry()
{
  if(!$this->input->post())
  {
    return redirect();
  }
  $this->load->model('Usermodel');
  $data=$this->input->post();
  $this->Usermodel->enquiry($data);
  $this->session->set_flashdata('enquiry','Our Team Contact You Soon');
      
  return redirect();
  
}

public function adwithus()
{
  if(!$this->input->post())
  {
    return redirect();
  }
  $this->load->model('Usermodel');
  $data=$this->input->post();
  $this->Usermodel->adwithus($data);
  $this->session->set_flashdata('enquiry','Our Team Contact You Soon');
      
  return redirect();
  
}

public function fetchcollegename()
{
 $collegename=$this->input->post('title');
 $this->load->model('Usermodel');
 $data['collegelist']=$this->Usermodel->fetchcollegename($collegename);
 echo "<ul>";
 if ($data['collegelist']) {
 foreach ($data['collegelist'] as $collegelist) {
   echo "<li> $collegelist->college_name ";
   echo "<input type='text' name='college_email' value='$collegelist->college_email'>";
   echo " </li>";
 }}
 else
 {
   echo "<li> College Not Found</li>";
 }
 echo "</ul>";
}


public function blogs()
{
      $this->load->model('Usermodel');
    $config=[
            'base_url' => base_url('index.php/User/blogs'),
            'per_page' => '50',
            'total_rows' => $this->Usermodel->viewblogall(),

             ];
    $config['full_tag_open'] = "<ul class='pagination'>";
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';



    $config['prev_link'] = '</i>Previous Page';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';


    $config['next_link'] = 'Next Page';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';

     $this->pagination->initialize($config);


   $data['blogdata']=$this->Usermodel->blogdetailall($config['per_page'],$this->uri->segment(3));

    $this->load->view('blogs',$data);
}
public function blogdetail($title)
{
   $filtertitle=str_replace("-"," ", $title);
   $this->load->model('Usermodel');
   $data["fetchblog"]=$this->Usermodel->blog_detail_page($filtertitle);
   $this->load->view('blogdetail',$data); 
}


































}
?>