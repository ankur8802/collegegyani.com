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
				<h1>MBBS In Georgia</h1>
			</div>
			<div class="col-md-8">
				<p style="font-size:16px;">Georgia is a European country located at the intersection of Eastern Europe and West Asia. This country shares its borders with the Black Sea in the west, Russia in the north, Turkey and Armenia in the south and Azerbaijan in the Southeast. The capital of Georgia is Tbilisi which is known for its diverse architecture and mazelike, cobblestone streets. The major area of the country is covered with mountains.</p>
                
                <p style="font-size: 16px;">Gerogia is a country known for its 100% literacy and thats why it will be the best place for the students looking to pursue the MBBS course outside the india. so study MBBS Abroad with one of the best colleges and universities of georgia.</p>
				
				<h3>How to Get Admission In MBBS Colleges of Georgia:</h3>

				<p style="font-size:16px;">Admission process of MBBS in Georgia is a very simple and hassle free. There is no need of giving any entrance exam to pursue MBBS course in georgia. After completetion of MBBS degree from georgia candidate can directly apply for the practicing licence. The medical university in gerogia provides quality education for the students in a very affordable fee also the universities have world wide recognition that means it is valid in all the countries.</p>
			</div>

			<div class="col-md-4" style="border: 1px solid #333333;border-radius:8px;background: #e6e6e6;">
				<div class="abroad-form form-group">
					   <form action="<?= base_url('User/insertabroadapplication')?>" method="post">
					   	<h3 class="text-center">Enquiry</h3>
                       <ul class="abroad-input">
                       	<li>
                       		 <input type="text" class="form-control" name="name" placeholder="Name" required>
                       		 <input type="hidden" name="source" value="Georgia">
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
			   <h3>Why to Pursue MBBS in Russia?</h3>
			   <p style="font-size: 16px;">Gerogia has been the favourite destination for those students who want to pursue MBBS course outside the country.</p>
			   <p style="font-size:16px;">The MBBS degree of georgia are recognized globally</p>
			   <p style="font-size:16px;">sufficient discounts will be given to the students who will pursue the MBBS cousre from georgia</p>

			   <h3>Topmost Medical colleges in Georgia:</h3>
                
                <ul class="abroad" style="list-style-type: disc;list-style-position: inside;">
					<li>Teaching University Geomedi, Georgia</li>
					<li>Tbilisi State Medical University</li>
					<li>Caucasus International University</li>
					<li>Tbilisi Medical Teaching University “Hippocrates”</li>
					<li>New Vision University, Georgia</li>
					<li>David Tvildiani Medical University</li>
					<li>David Agmashenebeli University of Georgia</li>
					<li>Akaki Tsereteli State University</li>
					<li>“AIETI” Medical School</li>
					<li> Batumi Shota Rustaveli State University</li>
					<li>Geomedi Medical University</li>
					<li>Tbilisi Medical Academy</li>
					<li>European University (Formerly: European Teaching University)</li>
					<li>East European University (EEU)</li>
					<li>University of Georgia</li>
					<li>Georgian American University</li>
				</ul> 
				


			</div>
		</div>
	</div>
</section>




<?php include('footer.php');?>