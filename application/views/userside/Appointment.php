<img src="<?php echo base_url()?>assets/bower_components/mdbootstrap/img/calendar.jpg" style="height: 50vh; width: 100%;"  class="banner">
<div class="row">
  <div class="col-md-5 pt-5">
    <div class="py-5 pl-5">
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
                  <p class="font-weight-light mb-0">Purpose of Loan:<span style="color: red"> *</span></p>
                  <div class="custom-checkbox custom-control mt-0" style="margin-left: 38px;">
                    <input type="checkbox" class="custom-control-input" id="chkAppointment" name="checkbox2" required>
                    <label class="custom-control-label font-weight-light" for="chkAppointment">Academic</label>
                  </div>
                  <div class="custom-control custom-checkbox" style="margin-left: 38px;">
                    <input type="checkbox" class="custom-control-input" id="chkResearch" name="checkResearch">
                    <label class="custom-control-label font-weight-light" for="chkResearch">Research</label>
                  </div>
                  <div class="custom-control custom-checkbox" style="margin-left: 38px;">
                    <input type="checkbox" class="custom-control-input" id="chkOthers" name="checkOthers" onchange="others()">
                    <label class="custom-control-label font-weight-light" for="chkOthers">Others</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="md-form">
              <i class="fas fa-pencil-alt prefix grey-text"></i>
              <input type="text" id="strOthers" name="txtaffpos" class="form-control" disabled>
              <label for="strOthers" class="font-weight-light">Others</label>
            </div>

            <div class="text-center py-4 mt-3">
              <button class="btn btn-danger" type="reset">Reset</button>
              <button id = "btnSubmit" class="btn btn-primary" type="submit"  onclick="Redirect();">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-7 py-5">
    <iframe src="<?php echo site_url('user/view_calendar');?>" width="100%" height="800px" style="border: none;"></iframe>
  </div>
</div>

<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>

    <script type="text/javascript">
    $('#btnSubmit').click(function(){
      var data = $('#addAppointmentForm').serialize();
      //validate form
      $('input[name=appType]').change(function() {
      if($(this).val() == "Loan") {
      $('#addAppointmentForm').attr(action,"user/loans");
      } else{
        alert('ayaw')
      });

//  $.ajax({
//    type: 'ajax',
  //  method: 'post',
//    url: '<?php echo base_url() ?>user/addAppointment',
//    data: data,
  //  async: false,
  //  dataType: 'json',
//  success: function($response){
  //    if(response.success){
  //      $('#addAppointmentForm').modal('hide');
  //      $('#addAppointmentForm')[0].reset();
  //      if(response.type=='add'){
  //        var type = 'added'
  //      }else if(response.type=='update'){
  //        var type ="updated"
  //      }
  //    }else{
//        alert('Error');
  //    }
//    },
  //  error: function(){
  //    alert('Could not save Data');
//    }
  //});
}


    });
</script>
<script>
function others() {
  var check = document.getElementById('chkOthers');
  var area = document.getElementById('strOthers');

  if (check.checked) {
    area.disabled = false;
  } else {
    area.disabled = true;
  }
}
</script>
