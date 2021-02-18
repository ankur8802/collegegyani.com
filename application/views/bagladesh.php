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
				<h1>MBBS In Bagladesh</h1>
			</div>
			<div class="col-md-8">
			    
			     <p style="font-size:16px;">Bangladesh is a South Asian country situated in the east of India on the Bay of Bengal. The country is known for its lush greenery and many waterways. The three largest rivers of Asia, the Ganges (locally known as the Padma), the Brahmaputra (locally known as the Jamuna) and the Meghna, flow through Bangladesh and form the fertile Bengal delta which is the largest delta in the world.</p>
                 
                 <h3>MBBS In Bangladesh</h3>

                 <p style="font-size:16px;">Bangladesh nowadays becoming the popular destination for the people who are thinking to Pursue MBBS Abroad. The number of MBBS aplicants are increasing year by year in bangladesh. so if you are also thinking for MBBS abroad, then bangladesh will be the best option for you. The cost of living is very affordable as compared to the other countries. The Medical colleges of bangladesh are recognized by the MCI and ECFMG</p>
                
                 <h3>List of Top MBBS Colleges And Universities OF Bangladesh:</h3>
				  <ul class="abroad" style="list-style-type: disc;list-style-position: inside;">
			           <li>Z.H. Sikder Women’s Medical College</li>
			           <li>Enam Medical College and Hospital</li>
			           <li>Shahabuddin Medical College</li>
			           <li>MH Samorita Medical College</li>
			           <li>Medical College for Women and Hospital</li>
			           <li>Dr. Sirajul Islam Medical College & Hospital</li>
			           <li>Anwer Khan Modern Medical College</li>
			           <li>Bangladesh University of Professionals</li>
			           <li>Gono Bishwabiddalay, Bangladesh</li>
			           <li>Shahjalal University of Science and Technology</li>
			           <li>University of Dhaka</li>
			           <li>University of Rajshahi</li>
			           <li>University of Science & Technology Chittagong</li>
			           <li>Khwaja Yunus Ali Medical College</li>
			           <li>Dhaka National Medical College</li>
			           <li>Southern Medical College </li>
				</ul> 
			</div>

			<div class="col-md-4" style="border: 1px solid #333333;border-radius:8px;background: #e6e6e6;">
				<div class="abroad-form form-group">
					   <form action="<?= base_url('User/insertabroadapplication')?>" method="post">
					   	<h3 class="text-center">Enquiry</h3>
                       <ul class="abroad-input">
                       	<li>
                       		 <input type="text" class="form-control" name="name" placeholder="Name" required>
                       		 <input type="hidden" name="source" value="Bagladesh">
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

            	<ul class="abroad" style="list-style-type: disc;list-style-position: inside;">
			         
				</ul>
            </div>
		</div>
	</div>
</section>




<?php include('footer.php');?>