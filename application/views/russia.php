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
				<h1>Enroll In Best MBBS Colleges of Russia</h1>
			</div>
			<div class="col-md-8">
				<p style="font-size:16px;">Bachelor of Medicine, Bachelor of Surgery also known as MBBS is the top most  bachelor degree in the medical field. Pursuing your MBBS degree from top colleges of russia will be an added advantage as the country is known for providing the best medical education across the globe.</p>

				<h3>Here are some of the top MBBS colleges in russia listed below:</h3>
				<ul class="abroad" style="list-style-type: disc;list-style-position: inside;">
					<li>CRIMEA FEDERAL UNIVERSITY</li>
					<li>RYAZAN STATE MEDICAL UNIVERSITY</li>
					<li>BASHKIR STATE MEDICAL UNIVERSITY</li>
					<li>NIZHNY NOVGOROD STATE MEDICAL UNIVERSITY</li>
					<li>TVER STATE MEDICAL UNIVERSITY</li>
					<li>RYAZAN STATE MEDICAL UNIVERSITY</li>
					<li>PEOPLE’S FRIENDSHIP UNIVERSITY</li>
					<li>ORENBURG STATE MEDICAL UNIVERSITY</li>
				</ul>
			</div>

			<div class="col-md-4" style="border: 1px solid #333333;border-radius:8px;background: #e6e6e6;">
				<div class="abroad-form form-group">
					   <form action="<?= base_url('User/insertabroadapplication')?>" method="post">
					   	<h3 class="text-center">Enquiry</h3>
                       <ul class="abroad-input">
                       	<li>
                       		 <input type="text" class="form-control" name="name" placeholder="Name" required>
                       		 <input type="hidden" name="source" value="Russia">
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
				<h3>Below is the list of colleges with a low budget:</h3>
				<p style="font-size:16px;">Pursuing a Medical course itself is a huge investment financially. So for your ease we are suggesting a list of those MBBS colleges in Russia which have a low fee comparatively to others.</p>
				<ul class="abroad" style="list-style-type: disc;list-style-position: inside;">
					<li>CRIMEA FEDERAL UNIVERSITY</li>
					<li>SYKTYVKAR STATE UNIVERSITY</li>
					<li>DAGESTAN STATE MEDICAL UNIVERSITY</li>
					<li>FAR EASTERN FEDERAL UNIVERSITY</li>
					<li>NORTHERN STATE MEDICAL UNIVERSITY</li>
				</ul>

				<h3>If somehow candidate fails to get into the govt medical colleges than don't panic we have a list of Private Medical colleges of russia:</h3>
				<ul class="abroad" style="list-style-type: disc;list-style-position: inside;">
					<li>TVER STATE MEDICAL UNIVERSITY</li>
					<li>PEOPLE’S FRIENDSHIP UNIVERSITY</li>
					<li>MARI STATE UNIVERSITY</li>
					<li>PERM STATE MEDICAL UNIVERSITY</li>
					<li>NIZHNY NOVGOROD STATE MEDICAL UNIVERSITY</li>
					<li>OMSK STATE MEDICAL UNIVERSITY</li>
					<li>PAVLOV FIRST SAINT PETERBOROUGH STATE MEDICAL UNIVERSITY</li>
					<li>KAZAN STATE MEDICAL UNIVERSITY</li>
				</ul>

				<h3>Also Top Listed Medical Courses colleges of russia are listed below:</h3>
				<ul class="abroad" style="list-style-type: disc;list-style-position: inside;">
					<li>PERM STATE MEDICAL UNIVERSITY</li>
					<li>NIZHNY NOVGOROD STATE MEDICAL UNIVERSITY</li>
					<li>KAZAKH NATIONAL MEDICAL UNIVERSITY</li>
					<li>MARI STATE UNIVERSITY</li>
					<li>LOMONOSOV MOSCOW STATE UNIVERSITY</li>
					<li>ALTAI STATE MEDICAL UNIVERSITY</li>
					<li>OMSK STATE MEDICAL UNIVERSITY</li>
					<li>CRIMEA FEDERAL UNIVERSITY</li>
					<li>M. SECHENOV MOSCOW STATE MEDICAL UNIVERSITY</li>
					<li>ORENBURG STATE MEDICAL UNIVERSITY</li>
					<li> LOMONOSOV MOSCOW STATE UNIVERSITY</li>
					<li>FAR EASTERN FEDERAL UNIVERSITY</li>
					<li>SIBERIAN STATE MEDICAL UNIVERSITY</li>
					<li>DAGESTAN STATE MEDICAL UNIVERSITY</li>
					<li>VOLGOGRAD STATE MEDICAL UNIVERSITY</li>
					<li>NORTHERN STATE MEDICAL UNIVERSITY</li>
					<li>RYAZAN STATE MEDICAL UNIVERSITY</li>
					<li>KAZAN STATE MEDICAL UNIVERSITY</li>
					<li>KURSK STATE MEDICAL UNIVERSITY</li>
					<li>PEOPLE’S FRIENDSHIP UNIVERSITY</li>
					<li>BASHKIR STATE MEDICAL UNIVERSITY</li>
					<li>ORENBURG STATE MEDICAL UNIVERSITY</li>
				</ul>
				<h3>MCI Recognized Medical colleges in Russia Listed Below:</h3>
				<ul class="abroad" style="list-style-type: disc;list-style-position: inside;">
					<li>BASHKIR STATE MEDICAL UNIVERSITY</li>
					<li>CECENJA STATE UNIVERSITY</li>
					<li>CITA STATE MEDICAL UNIVERSITY</li>
					<li>JEWISH STATE ACADEMY</li>
					<li>MOSCOW STATE UNIVERSITY</li>
					<li>OREL STATE UNIVERSITY MEDICAL INSTITUTE</li>
					<li>TVER STATE MEDICAL UNIVERSITY</li>
					<li>BELGOROD STATE UNIVERSITY</li>
					<li>VOLGOGRAD STATE MEDICAL UNIVERSITY</li>
				</ul>
			</div>
		</div>
	</div>
</section>




<?php include('footer.php');?>