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

<div class="container" style="margin-top:54px;">
<div class="news">
	<div class="news-title">
		<h3 class="color-orange text-center"><?= $fetchnews->title;?></h3>
	</div>
	<div class="news-image">
		
		<div class="row">
			 <div class="col-md-6">
			 			<img src="<?= base_url()?>/admin/<?= $fetchnews->image;?>" alt="News Image" width="100%">
			 </div>
			 <div class="col-md-6 text-left">
			 	<p class="justify"> <?= $fetchnews->disc;?> </p>
			 </div>
			   <div class="col-md-2"></div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<p class="justify">	<?= $fetchnews->link;?></p>
			</div>
		</div>
	</div>
</div>
</div>






<?php include('footer.php');?>