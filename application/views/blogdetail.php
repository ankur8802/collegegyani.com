
<?php
    error_reporting(E_ALL);
?>
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
     <title><?= $fetchblog->title;?></title>

<div class="container" style="margin-top:54px;">
<div class="blog">
	<div class="blog-title">
		<h3 class="color-orange text-center"><?= $fetchblog->title;?></h3>
	</div>
	<div class="blog-image">
		
		<div class="row text-center">
			<div class="col-md-4"></div>
			 <div class="col-md-4">
			 			<img src="<?= base_url()?>/uploads/blog/<?= $fetchblog->image;?>" alt="News Image" width="100%">
			 </div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<p class="justify">	<?= $fetchblog->blogdetail;?></p>
			</div>
		</div>
	</div>
</div>
</div>






<?php include('footer.php');?>