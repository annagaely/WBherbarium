<section class="heroo">
	<div class="container ">
    <div class="text-center">
      <img src="<?php echo base_url();?>assets/bower_components/logoname.png" class="img-fluid" style="margin-top: 0; padding-bottom: 2%;">
    </div>
    <div class="row align-items-center  d-flex justify-content-center">
      <div class="input-group" style="width: 70%;">
        <input type="text" class="form-control" placeholder="Search this blog">
        <div class="input-group-append">
          <button class="btn btn-secondary" type="button">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- JavaScript files-->
<script src="<?php echo base_url();?>assets/bower_components/userside/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/userside/vendor/popper.js/umd/popper.min.js"> </script>
<script src="<?php echo base_url();?>assets/bower_components/userside/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/userside/vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="<?php echo base_url();?>assets/bower_components/userside/vendor/lightbox2/js/lightbox.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/userside/js/front.js"></script>
<script>
  function resetForm() {
    document.getElementById("loginForm").reset();
  }
  function resetForm2() {
    document.getElementById("signupForm").reset();
  }

</script>
</body>
</html>