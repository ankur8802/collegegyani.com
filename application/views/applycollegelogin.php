<?php include('nav.php');?>
<!--header start end--> 

<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h1>Login</h1>
  </div>
</div>
<!--inner heading end--> 

<!--login start-->
<div class="inner-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-2"></div>
      <div class="col-md-6 col-sm-8">
        <div class="login">
          <div class="contctxt">User Login</div>
          <div class="formint conForm">

            <form action="<?=base_url('index.php/User/userloginapplycollege/').$data->id?>" method="post">
              <div class="input-wrap">
                <input type="email" name="email" required="" placeholder="User Email" class="form-control">
              </div>
              <div class="input-wrap">
                <input type="password" name="password" required="" placeholder="Password" class="form-control">
              </div>
              <div class="sub-btn">
                <input type="submit" class="sbutn" value="Login">
              </div>
              <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> New User? <a href="<?= base_url('index.php/User/registration');?>">Register Here</a></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-2"></div>
    </div>
  </div>
</div>
<!--login end--> 

<!--footer start-->
<?php include('footer.php');?>