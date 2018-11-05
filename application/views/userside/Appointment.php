<img src="<?php echo base_url()?>assets/bower_components/mdbootstrap/img/calendar.jpg" style="height: 60vh; width: 100%;"  class="banner">
<div class="row">
  <div class="col-md-5 py-5">
    <div class=" pl-5">
      <div class="card px-auto">
        <div class="card-body">
          <form id="addAppointmentForm">
            <p class="card-header white-text text-center py-4 h4" style="background-color: #800000;">Visit</p>


            <div class="md-form">
              <span style="color: red">Click the calendar events to view all the details of the event.</span>
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
                    <input type="radio" class="custom-control-input" value="Loaning" id="radioOthers" name="radios" onchange="others()">
                    <label class="custom-control-label" for="radioOthers">Loaning</label>
                  </div>
                </div>
              </div>
            </div>
              <div class="md-form">
              <textarea type="text" id="strVisitDescription" name="txtappdesc" class="md-textarea form-control" rows="2" ></textarea>
              <label for="strVisitDescription" class="font-weight-light">Visit Description<span style="color: red"> *</span></label>
              <div class="invalid-feedback">
                Please provide visit description.
              </div>
            </div>
            <div class="form-group">
                  <label for="p-in" class="col-md-4 label-heading">Start Time:</label>
                  <div class="col-md-8">
                      <select class="form-control" id='start_time' name="start_time">
                        <option>08:00</option>
                        <option>08:30</option>
                        <option>09:00</option>
                        <option>09:30</option>
                        <option>10:00</option>
                        <option>10:30</option>
                        <option>11:00</option>
                        <option>11:30</option>
                        <option>13:00</option>
                        <option>13:30</option>
                        <option>14:00</option>
                        <option>14:30</option>
                        <option>15:00</option>
                        <option>15:30</option>
                        <option>16:00</option>
                        <option>16:30</option>
                        <option>17:00</option>
                        <option>17:30</option>
                      </select>
                  </div>
          </div>
                    <div class="form-group">
                  <label for="p-in" class="col-md-4 label-heading">End time:</label>
                  <div class="col-md-8">
                      <select class="form-control" id='end_time' name="end_time">
                        <option>08:00</option>
                        <option>08:30</option>
                        <option>09:00</option>
                        <option>09:30</option>
                        <option>10:00</option>
                        <option>10:30</option>
                        <option>11:00</option>
                        <option>11:30</option>
                        <option>13:00</option>
                        <option>13:30</option>
                        <option>14:00</option>
                        <option>14:30</option>
                        <option>15:00</option>
                        <option>15:30</option>
                        <option>16:00</option>
                        <option>16:30</option>
                        <option>17:00</option>
                        <option>17:30</option>
                      </select>
                  </div>
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
    $('#btnSubmit').click(function(event){
      var data = $('#addAppointmentForm').serialize();

var todayadd3 = new Date();
var dd = todayadd3.getDate()+3;
var mm = todayadd3.getMonth()+1; //January is 0!
var yyyy = todayadd3.getFullYear();

if(dd<10) {
    dd = '0'+dd
} 

if(mm<10) {
    mm = '0'+mm
} 

todayadd3 = yyyy + '-' + mm + '-' +dd ;

      if($('#dtAppointmentDate').val()<todayadd3){
                 event.preventDefault();
                  swal({
                     type: 'error',
                     title: 'Invalid Date!',
                     text: 'The appointment should be 3 days from now.'
                   });
      }else{
      if($('#end_time').val()>$('#start_time').val()){
        if($('#dtAppointmentDate').val()!=''){
        if($('input[name=radios]:checked').length){
          if($('#strVisitDescription').val()!=''){
            event.preventDefault();
            swal({
              title: 'Are you sure?',
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, save it!'
            }).then((result) => {
              if(result.value) {
                $.ajax({
                  type: 'ajax',
                  method: 'post',
                  url: '<?php echo base_url() ?>user/addAppointment',
                  data: data,
                  async: false,
                  dataType: 'json',
                success: function(data){
                    if(data==true){
                      let timerInterval
                      swal({
                        title: "Sent!",
                        text: "Your application has been sent.",
                        type: "success",
                        timer: 1500,
                        showConfirmButton: false
                      }).then(function() {
                        document.getElementById("addAppointmentForm").reset();
                        event.preventDefault();
                        
                      });

                 }else{
                  event.preventDefault();
                  swal({
                    type: 'error',
                    title: 'Invalid Date!',
                    text: 'The Herbarium center is not available on the selected date.',
                    showConfirmButton: true
                  });
                 }

                  },
                  error: function(){
                    alert('Could not save Data');
                  }
              });
              }
            })
          }else{
            event.preventDefault();
            swal({
              type: 'error',
              title: 'Incomplete input!',
              text: 'Please fill up all the required fields.'
            });
            }
        }else{
          event.preventDefault();
          swal({
            type: 'error',
            title: 'Incomplete input!',
            text: 'Please fill up all the required fields.'
          });
          }
      }else{
        event.preventDefault();
        swal({
          type: 'error',
          title: 'Incomplete input!',
          text: 'Please fill up all the required fields.'
        });
        }
           }else{
            event.preventDefault();
          swal({
            type: 'error',
            title: 'Incorrect input!',
            text: 'Please set a correct time.'
          });
        }


      }

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
