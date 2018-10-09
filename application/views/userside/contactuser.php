
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


<div class= "pt-5 mx-5">
  <div class="card my-5 mx-5">
    <div class="card-body px-0 py-0">
      <div class="container-fluid">
       
        <p class="card-header white-text text-center py-4 h4" style="background-color: #800000;"> Contact Us </p>
          
          <div class= "md-form" id="caption">
            <center><p class=" grey-text font-weight-light"> Got a question? Feel free to message us so that we can help you. </p></center>
            <hr>
          </div>

          <div class="details" style="">
          <center>
            <h4 style="padding-bottom: 20px"> <span style="color: #800000"><strong>PUP </strong></span>Herbarium Center</h4>
            
            <p>
              <i class="fas fa-map-marker-alt" style="color: #800000"></i>: South Wing, Room 403-B<br>
              <i class="fas fa-clock"style="color: #800000"></i>: 9:00 AM - 6:00 PM <br>
              <i class="fas fa-envelope" style="color: #800000"></i>: WBHerbariumTA@gmail.com <br>
              <i class="fas fa-phone" style="color: #800000"></i>: 09999999999
            </p>

          </center>  
          </div>
  
           
    </div>
  </div>
</div>
</div>
