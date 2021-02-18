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
				<h1>MBBS in Poland:</h1>
			</div>
			<div class="col-md-8">
				<p style="font-size:16px;">If you as a student thinking to pursue MBBS course from abroad then Poland will be the great choice for you. Here you will get the quality medical education in a very affordable price. The fee of medical courses in poland are very low comparitvly to other european countries. Thats the reason that poland has become the great choice for the students who wants to pursue MBBS course outside the country.</p>

				<p style="font-size:16px;">Almost 50,000 students are there in poland for the MBBS course. The course pattern of MBBS course in Pattern is also just like other countries of the world. The MBBS Course in poland is of 6b years and also 1 year internship program is compulsary for all the students. The poland mediacal universities has world class structure that attracts the students to enroll for the MBBS in poland</p>

				<h3>MBBS Universites In Poland For The Year 2020:</h3>

				  <ul class="abroad" style="list-style-type: disc;list-style-position: inside;">
			        <li>Medical University of Warsaw</li>
			        <li>University of Warmia and Mazury in Olsztyn, Poland</li>
			        <li>Wrocław Medical University</li>
			        <li>Medical University of Silesia</li>
			        <li>Nicolaus Copernicus University</li>
			        <li>Medical University of Lublin</li>
			        <li>Medical University of Lodz</li>
			        <li>Medical University of Gdansk, Republic of Poland</li>
			        <li>Karol Marcinkowski Medical University, Poznan</li>
			        <li>Collegium Medicum Jagiellonian University, Krakow </li>
				</ul> 
			</div>

			<div class="col-md-4" style="border: 1px solid #333333;border-radius:8px;background: #e6e6e6;">
				<div class="abroad-form form-group">
					   <form action="<?= base_url('User/insertabroadapplication')?>" method="post">
					   	<h3 class="text-center">Enquiry</h3>
                       <ul class="abroad-input">
                       	<li>
                       		 <input type="text" class="form-control" name="name" placeholder="Name" required>
                       		 <input type="hidden" name="source" value="Poland">
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

		</div>
	</div>
</section>




<?php include('footer.php');?>