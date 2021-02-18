<?php
    if ($this->session->userdata('email') )
    {
       include('usernav.php');
    }
    else
    {
        
        include('nav.php');
    }
    ?> 
     <title><?= $fetchnews->title;?></title>
<style type="text/css">
	.abroad li
	{
		margin: 10px;
	}
	.abroad-form
	{
      
	}
	.abroad-input
	{
		margin:20px;
	}

	.abroad-input li
	{
		margin-bottom:10px;
	} 
</style>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>MBBS in Ukraine From Top Medical Institutes:</h1>

			</div>
			<div class="col-md-8">
				<p style="font-size:16px;">Ukraine has been the topmost destination for international students specially India for the MBBS course. Ukraine occupies nearly 30 positions in the top 100 medical universities according to the WHO. The reason for choosing Russian medical colleges is that it has a highly low fee compared to the other countries. High-quality education is also provided to the students. There are nearly 60 medical universities all across Ukraine. The student to teacher ratio is 7:1 in all the medical universities of Ukraine.</p>

			   <h3>Benefits of MBBS In Ukraine For Indian Students:</h3>

			   <ul class="abroad" style="list-style-type: disc;list-style-position: inside;">
					<li>No Entrance Exam </li>
					<li>No Donation in Fee</li>
					<li>Low Fee </li>
					<li>Worldwide And MCI recognized medical degree</li>
					<li>Indian food is available in all medical universities of Ukraine</li>
					<li>100% Visa Assistance</li>
					<li>All universities are govt recognized </li>
				</ul> 
			</div>

			<div class="col-md-4" style="border: 1px solid #333333;border-radius:8px;background: #e6e6e6;">
				<div class="abroad-form form-group">
					   <form action="<?= base_url('User/insertabroadapplication')?>" method="post">
					   	<h3 class="text-center">Enquiry</h3>
                       <ul class="abroad-input">
                       	<li>
                       		 <input type="text" class="form-control" name="name" placeholder="Name" required>
                       		 <input type="hidden" name="source" value="Ukraine">
                       	</li>

                       	<li>
                       		 <input type="email" class="form-control" name="email" placeholder="Email" required>
                       	</li>

                       	<li>
                       		 <input type="text" class="form-control" name="phone" placeholder="Phone" pattern="[789][0-9]{9}" minlength="10" maxlength="10" required>
                       	</li>

                       	<li>
                       		 <input type="text" class="form-control" name="city" placeholder="Your City" required>
                       	</li>

                       	<li>
                       		 <textarea class="form-control" name="message" placeholder="Enter Your Message" rows="3" required></textarea>
                       	</li>

                       	<li class="text-center">
                       		<button type="submit" class="btn btn-primary" style="padding:0.5em 3em">Submit</button>
                       	</li>


                       </ul>
					   </form>
				</div>
			</div>

			<div class="col-md-12">
			    <h3>Top MBBS Universities And institute In Ukraine:</h3>
                
                <ul class="abroad" style="list-style-type: disc;list-style-position: inside;">
					<li>Zaporozhye State Medical University</li>
					<li>VN Karazin Kharkiv National University</li>
					<li>Kharkiv National Medical University</li>
					<li>O.O. Bogomolets National Medical University</li>
					<li>Dnepropetrovsk State Medical Academy</li>
					<li>Lugansk State Medical University</li>
					<li>Kyiv Medical University of UAFM</li>
					<li>Donestk National Medical University</li>
					<li>Ternopil State Medical University</li>
					<li>Odessa National Medical University</li>
					<li>Black Sea National University</li>
					<li>Ivano-Frankivsk National Medical University</li>
					<li>Sumy State University</li>
					<li>Kharkiv International Medical University</li>
				</ul> 
				
                  <h3>Documents Required For MBBS Admission In Ukraine</h3>
                 
                  <ul class="abroad" style="list-style-type: disc;list-style-position: inside;">

                   <li>10th and 12th mark sheet</li>
                   <li>Photos</li>
                   
                  </ul>
			</div>
		</div>
	</div>
</section>




<?php include('footer.php');?>