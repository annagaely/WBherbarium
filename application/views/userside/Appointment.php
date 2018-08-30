<img src="<?php echo base_url()?>assets/bower_components/mdbootstrap/img/calendar.jpg" style="height: 50vh; width: 100%;"  class="banner">
<div class="row">
  <div class="col-md-5 py-5">
    <div class=" pl-5">
      <div class="card px-auto">
        <div class="card-body">
          <form id="addAppointmentForm">
            <p class="card-header white-text text-center py-4 h4" style="background-color: #800000;">Visit</p>


            <div class="md-form">
              <div class="row">
                <div class="col-md-5 pl-4">
                  <p class="font-weight-light">Date of Visit:<span style="color: red"> *</span></p>
                  <input type="date" name="dateAppointment" id= "dtAppointmentDate" class="form-control grey-text font-weight-light" style="font-size: 15px;">
                </div>
                <div class="col-md-7 pl-4">
                  <p class="font-weight-light mb-0">Purpose of Visit:<span style="color: red"> *</span></p>
                  <div class="custom-control custom-radio"  style="margin-left: 38px;">
                    <input type="radio" class="custom-control-input" value="Academic" id="radioAcademic" name="radios">
                    <label class="custom-control-label" for="radioAcademic">Academic</label>
                  </div>
                  <div class="custom-control custom-radio"  style="margin-left: 38px;">
                    <input type="radio" class="custom-control-input" value="Research" id="radioResearch" name="radios">
                    <label class="custom-control-label" for="radioResearch">Research</label>
                  </div>
                  <div class="custom-control custom-radio"  style="margin-left: 38px;">
                    <input type="radio" class="custom-control-input" value="Others" id="radioOthers" name="radios" onchange="others()">
                    <label class="custom-control-label" for="radioOthers">Others</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="md-form">
              <i class="fas fa-pencil-alt prefix grey-text"></i>
              <input type="text" name="txtappdesc" id="strVisitDescription"  class="form-control" >
              <label for="strOthers" class="font-weight-light">Visit Description</label>
            </div>

            <div class="text-center py-4 mt-3">
              <button class="btn btn-danger" type="reset">Clear</button>
              <button id = "btnSubmit" class="btn btn-primary" type="submit" >Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-7 py-5">
    <iframe src="<?php echo site_url('user/view_calendar');?>" width="100%" height="555px" style="border: none;"></iframe>
  </div>
</div>

<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>

    <script type="text/javascript">

$(function(){
    $('#btnSubmit').click(function(){
      var data = $('#addAppointmentForm').serialize();
      alert(data)
  $.ajax({
    type: 'ajax',
    method: 'post',
    url: '<?php echo base_url() ?>user/addAppointment',
    data: data,
    async: false,
    dataType: 'json',
  success: function(data){
      if(data==true){
           swal({
       title: "Good job!",
       text: "Congratulations! Your request has been sent.",
       icon: "success",
       button: "OK!"
     });
     location.reload();
   
   }else{
        alert('Error');
      }
    },
    error: function(){
      alert('Could not save Data');
    }
});
});
    });
</script>
<!-- <script>
// function others() {
//   var check = document.getElementById('radioOthers');
//   var area = document.getElementById('strVisitDescription');
//   if (check.checked) {
//     area.disabled = false;
//   } else {
//     area.disabled = true;
//   }
// }
// </script>
 -->
