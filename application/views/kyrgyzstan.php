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
				<h1>MBBS in Kyrgystan</h1>
			</div>
			<div class="col-md-8">
			
               <p style="font-size:16px;">Kyrgyzstan, also known as the Kyrgyz Republic is an awesome country located in Central Asia. It is also known for its natural beauty and various traditions. </p>

				<h3>Why Kyrgystan Is The Most favourite Destination For MBBS Abroad:</h3>

				<p style="font-size:16px;">Kyrgystan is amongst the top priority for the students those who wants to pursue MBBS Abroad as it has a very low cost with good infrastructure. Many students from asian countries mainly from india apply in the medical university of kyrgystan to pursue the medical degree in the kyrgystan. Good quality of medical education will be provided in the kyrgystan as compared to the other countries.</p>
                
                <h3>List of reputed Medical University In Kyrgystan:</h3>
				  <ul class="abroad" style="list-style-type: disc;list-style-position: inside;">
			         <li>Osh State University</li>
			         <li>Jalal-Abad State University</li>
			         <li>International School of Medicine</li>
			         <li>Kyrgyz State Medical Academy</li>
			         <li>Kyrgyz Russian Slavic University</li>
			         <li>Asian Medical Institute</li>
				</ul> 
			</div>

			<div class="col-md-4" style="border: 1px solid #333333;border-radius:8px;background: #e6e6e6;">
				<div class="abroad-form form-group">
					   <form action="<?= base_url('User/insertabroadapplication')?>" method="post">
					   	<h3 class="text-center">Enquiry</h3>
                       <ul class="abroad-input">
                       	<li>
                       		 <input type="text" class="form-control" name="name" placeholder="Name" required>
                       		 <input type="hidden" name="source" value="Kyrgystan">
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
            	<h3>Benefits of Studying MBBS In Kyrgystan:</h3>
            	<ul class="abroad" style="list-style-type: disc;list-style-position: inside;">
			         <li>The country offers various advantages to the students those who enroll for the MBBS program in kyrgystan and these are:</li>
			         <li>The teacher student ration maintained properly for the better understanding </li>
			         <li>various extra curricular activites like sports and cultural program will be conducted for the refreshment</li>
			         <li>There is no need to clear any entrance exam to get Enrolled in MBBS colleges of kyrgystan.</li>
				</ul>
            </div>
		</div>
	</div>
</section>




<?php include('footer.php');?>