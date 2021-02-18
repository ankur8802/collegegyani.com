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
<section style="margin-top: 50px;"> 
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Study In Abroad</h1>
			</div>
			<div class="col-md-12">
			<p class="text-center" style="font-size:16px;"><b> Studying abroad </b>will be a dream come true thing for a student planning to pursue a graduation in Medical, engineering or any other stream. Studying abroad provides students to study in foreign countries.</p>
			
			<h3 class="text-center">Benefits of Studying Abroad:</h3>	
			<p class="text-center" style="font-size:16px;"><b>Exploring The World:</b> By studying abroad you as a student will get the opportunity to explore yourself outside the country</p>

			<p class="text-center" style="font-size:16px;"><b>Education:</b> Studying Abroad will give you a chance to experience different aspects of education.</p>

            <p class="text-center" style="font-size:16px;font-weight: bold;">Adapts To New Culture OF The Foreign Country:</p>
		    <p class="text-center" style="font-size:16px;">Those students who are leaving their homes for the first time have to adapt to the foreign country culture. You as a student will find new things like food, social life, etc.</p>
		    <p class="text-center" style="font-size:16px;font-weight: bold;">Your Foreign Language Skills Will Be Improved:</p>
		    <p class="text-center" style="font-size:16px;">Study abroad will enhance your foreign language skills that mean you will get to learn different languages.</p>
		    <p class="text-center" style="font-size:16px;font-weight: bold;">Career Opportunities:</p>
		    <p class="text-center" style="font-size:16px;">After completion of your study abroad program, you will get ample of opportunities related to your career in your home country.</p>
			</div>

		


		</div>
	</div>
</section>

<section style="background:#e6e6e6;padding:50px;">
	<div class="row">
		<div class="container">
			<h3 class="text-center">Top Places to Study Abroad </h3>
			<div class="col-md-3">
<a href="<?= base_url('mbbs-in-russia')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
    <img src="<?= base_url()?>/assets/images/abroad/russia.svg" alt="MBBS in Russia" style="width:50%">
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in Russia</h4>
  </div>
  </div>
  </a>

</div>


<div class="col-md-3">
  <a href="<?= base_url('mbbs-in-china')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
    <img src="<?= base_url()?>/assets/images/abroad/china.svg" alt="MBBS in China" style="width:50%">
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in China</h4>
  </div>
  </div>
  </a>
</div>

<div class="col-md-3">
  <a href="<?= base_url('mbbs-in-georgia')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
    <img src="<?= base_url()?>/assets/images/abroad/georgia.svg" alt="MBBS in Georgia" style="width:50%">
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in Georgia</h4>
  </div>
  </div>
  </a>
</div>

<div class="col-md-3">
  <a href="<?= base_url('mbbs-in-ukraine')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
    <img src="<?= base_url()?>/assets/images/abroad/ukraine.svg" alt="MBBS in Ukraine" style="width:50%">
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in Ukraine</h4>
  </div>
  </div>
  </a>
</div>

<div class="col-md-3">
  <a href="<?= base_url('mbbs-in-philippines')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
    <img src="<?= base_url()?>/assets/images/abroad/philippines.svg" alt="MBBS in Philippines" style="width:50%">
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in Philippines</h4>
  </div>
  </div>
  </a>
</div>

<div class="col-md-3">
  <a href="<?= base_url('mbbs-in-poland')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
    <img src="<?= base_url()?>/assets/images/abroad/poland.svg" alt="MBBS in Poland" style="width:50%">
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in Poland</h4>
  </div>
  </div>
  </a>
</div>

<div class="col-md-3">
 <a href="<?= base_url('mbbs-in-kyrgyzstan')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
    <img src="<?= base_url()?>/assets/images/abroad/kyrgyzstan.svg" alt="MBBS in kyrgyzstan" style="width:50%">
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in kyrgyzstan</h4>
  </div>
  </div>
  </a>
</div>

<div class="col-md-3">
   <a href="<?= base_url('mbbs-in-bagladesh')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
    <img src="<?= base_url()?>/assets/images/abroad/bangladesg.svg" alt="MBBS in Bangladesh" style="width:50%">
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in Bangladesh</h4>
  </div>
  </div>
  </a>
</div>
		</div>
		
	</div>
</section>




<?php include('footer.php');?>