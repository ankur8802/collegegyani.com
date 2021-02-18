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
				<h1>Why Study MBBS in the Philippines</h1>
			</div>
			<div class="col-md-8">
				<p style="font-size: 16px;">There are approximately 400 MBBS colleges that offer nearly 50000 seats. Despite this many seats, many students are unable to get admission. so for those students, the Philippines will be the topmost choice for the medical students.</p>

				<p style="font-size:16px;">Pursuing MBBS in the Philippines is becoming popular amongst medical students. The Country offers high-quality medical education and this is a huge reason for the success of the medical students. The Philippines has acquired 46 ranks in terms of education standards. The medical degree provided by the Philippines is acceptable globally. Also, you as a student will also enjoy pursuing the MBBS course. Indian food is also available easily in this country. The living expenses are also very low as compared to other countries.</p>
                
                <h3>Popular Courses offered by Philippines Medical universities:</h3>
                <ul class="abroad" style="list-style-type: disc;list-style-position: inside;">
					 <li>MD Program</li>
					 <li>Dentistry Program</li>
					 <li>Bachelor In Pharmacy</li>
					 <li>Bachelors in Nursing</li>
					 <li>MDS Program</li>
				</ul> 
			</div>

			<div class="col-md-4" style="border: 1px solid #333333;border-radius:8px;background: #e6e6e6;">
				<div class="abroad-form form-group">
					   <form action="<?= base_url('User/insertabroadapplication')?>" method="post">
					   	<h3 class="text-center">Enquiry</h3>
                       <ul class="abroad-input">
                       	<li>
                       		 <input type="text" class="form-control" name="name" placeholder="Name" required>
                       		 <input type="hidden" name="source" value="Philippines">
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

             

				<h3>Top Medical Universities in the Philippines:</h3>
                   <ul class="abroad" style="list-style-type: disc;list-style-position: inside;">
					 <li>University of Perpetual Help</li>
					 <li>Our Lady of Fatima University</li>
					 <li>Manila Central University</li>
					 <li>Lyceum Northwestern University</li>
					 <li>AMA School of Medicine</li>
				</ul> 
			</div>
		</div>
	</div>
</section>




<?php include('footer.php');?>