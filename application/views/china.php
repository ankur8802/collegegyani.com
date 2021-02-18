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
				<h1>MBBS In China</h1>
			</div>
			<div class="col-md-8">
				<p style="font-size:16px;">If you are residing in india or some other asian contienet company and looking to pursue MBBS in a economic way then china will be the best option for you. completing MBBS in china will be less costly as compared to the other countries like USA.</p>

				<p style="font-size:16px">Why China Will Be The Best option For You For MBBS:</p>

				<p style="font-size: 16px">For MBBS course China will be the best option for those people who can't afford to pursue MBBS from UK or USA. </p>

				<p style="font-size: 16px">MBBS from china is a globally recognized degree in the feild of mediacl science and after completing the degree you as a doctor can start practicing in india as well as any other country in the world.</p>

				<h3>Eligibility for MBBS Course In China:</h3>

				<p style="font-size: 16px">A candidate must acquire minimum 50% in 12th standard with PCB stream</p>

				<p style="font-size: 16px">No Age criteria will be there for the candidates</p>
			</div>

			<div class="col-md-4" style="border: 1px solid #333333;border-radius:8px;background: #e6e6e6;">
				<div class="abroad-form form-group">
					   <form action="<?= base_url('User/insertabroadapplication')?>" method="post">
					   	<h3 class="text-center">Enquiry</h3>
                       <ul class="abroad-input">
                       	<li>
                       		 <input type="text" class="form-control" name="name" placeholder="Name" required>
                       		 <input type="hidden" name="source" value="China">
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
			
              <h3>MCI recognized MBBS college list of China:</h3>
                
                <ul class="abroad" style="list-style-type: disc;list-style-position: inside;">
					<li>DALIAN MEDICAL UNIVERSITY</li>
					<li>CHINA MEDICAL UNIVERSITY</li>
					<li>FUDAN UNIVERSITY</li>
					<li>CAPITAL MEDICAL UNIVERSITY</li>
					<li>JIANGSU UNIVERSITY</li>
					<li>JILIN UNIVERSITY</li>
					<li>JINAN UNIVERSITY</li>
					<li>WUHAN UNIVERSITY</li>
					<li>SICHUAN UNIVERSITY</li>
					<li>FUJIAN MEDICAL UNIVERSITY  </li>
				</ul> 
				
			   <h3>List of Private MBBS Colleges In China:</h3>
			   <ul class="abroad" style="list-style-type: disc;list-style-position: inside;">
					<li>SHANDONG UNIVERSITY</li>
					<li>QINGDAO UNIVERSITY</li>
					<li>ANHUI MEDICAL UNIVERSITY</li>
					<li>NANJING UNIVERSITY</li>
					<li>QIGIHAR MEDICAL UNIVERSITY</li>
					<li>SHENYANG MEDICAL COLLEGE </li>
				</ul> 

				<h3>Topmost MBBS Colleges In china List:</h3>
				 <ul class="abroad" style="list-style-type: disc;list-style-position: inside;">
					<li>DALIAN MEDICAL UNIVERSITY</li>
					<li>CHINA MEDICAL UNIVERSITY</li>
					<li>JILIN MEDICAL UNIVERSITY</li>
					<li>BEIHAU UNIVERSITY</li>
					<li>JIAMUSI UNIVERSITY</li>
					<li>QINGDAO UNIVERSITY</li>
					<li>FUJIAN UNIVERSITY</li>
					<li>NANJING MEDICAL UNIVERSITY</li>
					<li>NINGXIA MEDICAL UNIVERSITY</li>
					<li>SHANDONG UNIVERSITY</li>
					<li>WUHAN UNIVERSITY</li>
					<li>JIHAN UNIVERSITY</li>
					<li>SICHUAN UNIVERSITY</li>
					<li>HEBEL MEDICAL UNIVERSITY</li>
					<li>TONGJI UNIVERSITY</li>
					<li>ANHUI MEDICAL UNIVERSITY</li>
					<li>XIAMEN UNIVERSITY</li>
					<li>KUNMING MEDICAL UNIVERSITY</li>
					<li>SOUTHEAST UNIVERSITY</li>
					<li>SHIHEZI UNIVERSITY</li>
					<li>NINGBO UNIVERSITY</li>
				</ul> 

			</div>
		</div>
	</div>
</section>




<?php include('footer.php');?>