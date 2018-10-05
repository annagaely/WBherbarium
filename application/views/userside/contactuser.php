<div class= "pt-5 mx-5">
  <div class="card my-5 mx-5">
    <div class="card-body px-0 py-0">
      <div class="container-fluid">
        <form class="needs-validation"  method="POST"  enctype="multipart/form-data" novalidate id="contactusForm">
        <p class="card-header white-text text-center py-4 h4" style="background-color: #800000;"> Contact Us </p>
          
          <div class= "md-form" id="caption">
            <center><p class=" grey-text font-weight-light"> Got a question? We'd love to hear from you. Send us a message and we will respond as soon as possiible.</p></center>
          </div>

             <div class="md-form">
                <div class="col-md-6">
                  <input type="text" name="txtContactName" id="strContactName" class="form-control" required>
                  <label for="strContactName" class="font-weight-light ml-3"> Name:<span style="color: red"> *</span></label>
                  <div class="invalid-feedback">
                    Please enter your name.
                  </div>
                </div>
            </div>
             <div class="md-form">
                <div class="col-md-6">
                  <input type="text" name="txtContactEmailAddress" id="strContactEmailAddress" class="form-control" required>
                  <label for="strContactEmailAddress" class="font-weight-light ml-3"> Email Address:<span style="color: red"> *</span></label>
                  <div class="invalid-feedback">
                    Please enter your email address.
                  </div>
                </div>
            </div>
             <div class="md-form">
                <div class="col-md-6">
                   <textarea type="text" id="strContactUsMessage" name="txtContactUsMessage" class="md-textarea form-control" rows="2" required></textarea>
                    <label for="strContactUsMessage" class="font-weight-light" style="margin-left: 15px">Message:<span style="color: red"> *</span></label>
                    <div class="invalid-feedback">
                        Please provide your message.
                    </div>
                </div>
            </div>

            <div class=" py-4 mt-3" style="margin-left: 250px">
              <button class="btn btn-danger" type="reset">Clear</button>
              <input class="btn btn-primary" type="submit" id="btnSend" value=" Send Message">
              <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
                     <script type="text/javascript">
                            $('#btnSend').click(function(){
                                var data = $('#contactusForm').serialize();
                                
                                  $.ajax({
                                  type: 'ajax',
                                  method: 'post',
                                  url: '<?php echo base_url() ?>user/ContactUsEmail',
                                  data: data,
                                  async: false,
                                  dataType: 'json',
                                  success: function(){
                                  },
                                  error: function(){
                                    alert('Email Sent');
                                  }
                                });
                            });
                          </script>
            </div>

        </form>
      </div>
    </div>
  </div>
</div>


<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
'use strict';
window.addEventListener('load', function() {
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.getElementsByClassName('needs-validation');
  // Loop over them and prevent submission
  var validation = Array.prototype.filter.call(forms, function(form) {
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
}, false);
})();
</script>