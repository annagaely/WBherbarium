
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
            <center><p class=" grey-text font-weight-light"> Got a question? </p></center>
          </div>

          <div class="details">

          </div>
  
           
    </div>
  </div>
</div>
</div>
