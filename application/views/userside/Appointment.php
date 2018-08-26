<img src="<?php echo base_url()?>assets/bower_components/mdbootstrap/img/calendar.jpg" style="height: 50vh; width: 100%;"  class="banner">
<div class="row">
  <div class="col-md-5">
    <div class="py-5 pl-5">
      <div class="card px-auto">
        <div class="card-body">
          <form id="addAppointmentForm">
            <p class="card-header white-text text-center py-4 h4" style="background-color: #800000;">Appointment</p>
            <div class="md-form pl-5">

              <label>Type of Appointment:</label><br />
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="typeVisit" name="appType" value="Visit">
                <label class="custom-control-label" for="typeVisit">Visit</label></div>
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" id="typeLoan" name="appType" value="Loan">
                  <label class="custom-control-label" for="typeLoan">Loan</label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" id="typeDeposit" name="appType" value="Deposit">
                  <label class="custom-control-label" for="typeDeposit">Deposit</label>
              </div>
            </div>

            <div class="md-form">
              <label>Date of Appointment</label><br /><br />

              <input type="date" name="dateAppointment" id= "dtAppointmentDate" class="form-control grey-text font-weight-light" value="">

              </label>
            </div>

            <div class="md-form">
              <i class="fas fa-pencil-alt prefix grey-text"></i>
              <textarea type="text"  id="strVisitDescription" name = "txtappdesc" class="md-textarea form-control" rows="3" blur> </textarea>
              <label for="strPlantDesc" class="font-weight-light">Appointment Description</label>
            </div>

            <div class="text-center py-4 mt-3">
              <button class="btn btn-danger" type="reset">Reset</button>
              <button id = "btnSubmit" class="btn btn-primary" type="submit" >Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-7">
    <iframe src="<?php echo site_url('user/view_calendar');?>" width="100%" height="800px" style="border: none;"></iframe>

  </div>
</div>

<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>

    <script type="text/javascript">

$(function(){
    $('#btnSubmit').click(function(){
      var data = $('#addAppointmentForm').serialize();
      //validate form
     // $('input[name=appType]').change(function() {
   //   if($(this).val() == "Loan") {
    //  window.location.href = "http://localhost:8080/WBherbarium/user/Loans";
   //   } else{
    //    alert('ayaw')
   //   });
  $.ajax({
    type: 'ajax',
    method: 'post',
    url: '<?php echo base_url() ?>user/addAppointment',
    data: data,
    async: false,
    dataType: 'json',
  success: function($response){
      if(response.success){
        $('#addAppointmentForm').modal('hide');
        $('#addAppointmentForm')[0].reset();
        if(response.type=='add'){
          var type = 'added'
        }else if(response.type=='update'){
          var type ="updated"
     }
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
