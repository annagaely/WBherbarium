<img src="<?php echo base_url()?>assets/bower_components/mdbootstrap/img/loan.jpg" style="height: 50vh; width: 100%;"  class="banner">
<div class="py-5">
  <div class="card mx-auto px-4" style="width: 80%;">
    <div class="card-body">
      <form>
        <p class="card-header white-text text-center py-4 h4" style="background-color: #800000;">Deposit</p>
        <div class="md-form">
          <div class="row">
            <div class="col-md-6">

				    </div>
          </div>
          <div class="col-md-6">
            <div class="md-form">
              <label>Upload Image here:</label>
              <input type="file" name="imgFeaturedPlant" id = "imgFP" onchange="readURL(this);">
            </div>
          </div>
        </div>
        <div class="text-center py-4 mt-3">
          <button class="btn btn-danger" type="submit">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>

  <script type="text/javascript">
      function readURL(input) {
              if (input.files && input.files[0]) {
                  var reader = new FileReader();

                  reader.onload = function (e) {
                      $('#FPimg')
                          .attr('src', e.target.result)
                          .width('200px')
                          .height('200px');
                  };
                  reader.readAsDataURL(input.files[0]);
              }
          }
  $("imgFP").change(function()
  {
  	readURL(this);
  });
        </script>
