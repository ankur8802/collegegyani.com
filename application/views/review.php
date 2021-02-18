
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
<link rel="stylesheet" href="<?= base_url()?>assets/css/flatpickr.min.css">

    <title>Reviews</title>
    <style>
      .review label
      {
        color: #000;
      }
      .white-on-active
      {
        color: #000;
      }
      .review 
      {
        padding:50px;
        background:#fff;
      }
     .collegelist ul
      {
        background: #eee;
        cursor: pointer;
        max-height:500px;
        overflow: scroll;
      }
     .collegelist ul li
      {
        padding:12px;
      }
      .collegelist input
      {
        display: none;
      }
      @media only screen and (max-width:767px)
      {
          .review
          {
            padding-left:0;
            padding-right: 0; 
            padding-bottom:20px;
            padding-top: 50px;
          }
          .formint h3
          {
            text-align: center!important;
          }

      }
    </style>
<body>

	<section class="review">
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8 col-sm-12 col-12">

					 <div class="formint conForm">
            <form action="<?=base_url('index.php/User/writereview')?>"  method="post">
            	<div class="row">
                <h3 style="margin-left:15px; ">Review Form</h3>
            	<div class="col-md-6 input-wrap">
            		<label>Name of the College</label> 
                <input type="text" class="removeafterselect" required style="display:none;">
                <input type="text" id="collegename" autocomplete="no" autofill="off" class="form-control" placeholder="Select College Name..." required>
                <div class="collegelist2" style="display:none;"> </div>
                <div class="collegelist" style="position:absolute;z-index:9999;"> </div>
              </div>
             <div class="col-md-6 input-wrap">
             	<label>Name of the Student</label> 
                <input type="text" required="" name="student_name" placeholder="Enter Your Name" title="Allowing only Alphabets"  pattern="[a-zA-Z\s]+" class="form-control">
              </div>

              <div class="col-md-6 input-wrap">
              <label>Student Phone No.</label> 
                <input type="text" required="" name="phone" placeholder="Enter Your Phone NO." pattern="[789][0-9]{9}" maxlength="10" minlength="10" class="form-control">
              </div>

               <div class="col-md-6 input-wrap">
              <label>Student Email</label> 
                <input type="email"  name="user_email" placeholder="Enter Your Email"  class="form-control" required>
              </div>

              <div class="col-md-6 input-wrap">
              <label>Share your Facebook/LinkedIn Profile link.</label> 
                <input type="text" required="" name="socialurl" placeholder="Profile Url" class="form-control">
              </div>

              <div class="col-md-6 input-wrap">
              <label>Course</label> 
                <input type="text" required="" name="course" placeholder="Enter Course Name" class="form-control">
              </div>

              <div class="col-md-6 input-wrap">
              <label>Batch Year</label> 
                <input type="text" required="" pattern="[0-9/-]+" name="batch" placeholder="Enter Batch Year like 2015-2018" class=" form-control">
              </div>

              <div class="col-md-6 input-wrap">
              <label> Academic Rating </label> 
                <input type="number" name="academic" required  placeholder="Enter Academic Rating Out of 10" class="form-control checkmaxnum checkmaxnum1" min="0" max='10'>
              </div>

              <div class="col-md-6 input-wrap">
              <label>  Accommodation & food Rating </label> 
                <input type="number"  name="accommodation" required  placeholder="Enter Accommodation Rating Out of 10" class="form-control checkmaxnum checkmaxnum2" min="0" max='10'>
              </div>
              <div class="col-md-6 input-wrap">
              <label>  Faculty Rating </label> 
                <input type="number"  name="faculty" required  placeholder="Enter Faculty Rating Out of 10" class="form-control checkmaxnum checkmaxnum3" min="0" max='10'>
              </div>
              <div class="col-md-6 input-wrap">
              <label>  Infrastructure Rating </label> 
                <input type="number"  name="infrastructure" required  placeholder="Enter Infrastructure Rating Out of 10" class="form-control checkmaxnum checkmaxnum4" min="0" max='10'>
              </div>
              <div class="col-md-6 input-wrap">
              <label> Placement Rating </label> 
                <input type="number"  name="placement" required  placeholder="Enter Placement Rating Out of 10" class="form-control checkmaxnum checkmaxnum5" min="0" max='10'>
              </div>
              <div class="col-md-6 input-wrap">
              <label>  Extracurriculars Rating </label> 
                <input type="number"  name="social" required  placeholder="Enter Social Rating Out of 10" class="form-control checkmaxnum checkmaxnum6 " min="0" max='10'>
              </div>

              <div class="col-md-12 input-wrap">
                <label>Write about your college</label>
                 <textarea class="form-control" name="description" rows="3" maxlength="800" required></textarea>
              </div>

            
          </div>
          
              <div class="col-md-12 text-center">
                <input type="submit" class="btn btn-primary reviewsbtn text-center" value="Register" style="background-color:#ff7900;padding:1em 2em">
                </div>
             
            </form>
          </div>


				</div>
			</div>

		</div>
	</section>



<?php include('footer.php');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
  $('#collegename').keyup(function()
  {
    var collegename=$(this).val();
    if (collegename!='')
     {
        $.ajax({
        url: "<?= base_url("index.php/User/fetchcollegename")?>",
        type: "POST",
         data: ({ title:collegename }),
        success: function (response) {
        // alert(response);
          $('.collegelist').fadeIn();
          $('.collegelist').html(response);
        },
        error: function(jqXHR, textStatus, errorThrown) {
           alert(errorThrown);
        }
    })
     }
     else
     {
          $('.collegelist').fadeOut();
          $('.collegelist').html("");
     }
  });
  $(document).on('click','li',function(){
    var revdata=$(this).html();
    $('.collegelist2').html(revdata);
    $('.removeafterselect').remove();
    $('#collegename').val($(this).text());
    $(".collegelist").empty();
    $('.collegelist').fadeOut();
  })
</script>

<?php
if($this->session->flashdata('review_double'))
{
?>
<script type="text/javascript">
     swal("", "<?= $this->session->flashdata('review_double');?>", "error");
</script>
<?php
}
?>
	</body>
	</html>
