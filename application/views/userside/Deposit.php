<img src="<?php echo base_url()?>assets/bower_components/mdbootstrap/img/loan.jpg" style="height: 60vh; width: 100%;"  class="banner">
<div class="row">
  <div class="col-md-5 py-5">
    <div class="pl-5 pr-0 mr-0">
      <div class="card px-4">
        <div class="card-body">

          <form class="needs-validation" id="addDepositForm" method="POST"  enctype="multipart/form-data" novalidate>

            <p class="card-header white-text text-center py-4 h4" style="background-color: #800000;">Deposit</p>
    <!--         <div class="md-form">
              <input type="file" id="picHerbariumSheet" name="picPlant" class="font-weight-light">
            </div> -->

            <div class="md-form">
              <span style="color: red">Click the calendar events to view all the details of the event.</span>
             <br>
                <br>
              <div class="row">
                <div class="col-md-6">
                  <input type="text" name="txtScientificName" id="strScientificName" autocomplete = "off"class="form-control" required>
                  <label for="strScientificName" class="font-weight-light ml-3">Scientific Name<span style="color: red"> *</span></label>
                  <div class="invalid-feedback">
                    Please enter the scientific name.
                  </div>
                </div>
                <div class="col-md-6">
                  <input type="text" name="txtCommonName" id="strCommonName" class="form-control"  autocomplete="off"  required>
                  <label for="strCommonName" class="font-weight-light ml-3">Common Name<span style="color: red"> *</span></label>
                  <div class="invalid-feedback">
                    Please enter the common name.
                  </div>
                </div>
              </div>
            </div>


            <div class="md-form">
              <input  autocomplete="off"  type="text" id="strLocation" name="txtLocation" class="form-control" required>
              <label  for="strLocation" class="font-weight-light">Location<span style="color: red"> *</span></label>
              <div class="invalid-feedback">
                Please enter the location.
              </div>
            </div>
            <div class="md-form">
              <p class="font-weight-light">
                Date Collected:<span style="color: red"> *</span>
              </p>
              <input type="date" name="txtDateCollected" id= "dtDateCollected" class="form-control grey-text font-weight-light" value="" required>
              <div class="invalid-feedback">
                Please enter the date collected.
              </div>
            </div>

            <div class="md-form">
              <textarea type="text" id="strPlantDesc" name="txtplantDesc" class="md-textarea form-control" rows="2" required></textarea>
              <label for="strPlantDesc" class="font-weight-light">Plant Description<span style="color: red"> *</span></label>
              <div class="invalid-feedback">
                Please provide plant description.
              </div>
            </div>
            <div class="md-form">
              <p class="font-weight-light">
                Desired Date of Deposit:<span style="color: red" > *</span>
              </p>
              <input type="date" name="txtDateDesired" id= "dtAppointmentDate" class="form-control grey-text font-weight-light" value="" required >
              <div class="invalid-feedback">
                Please choose a date of deposit.
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
                        <option>12:00</option>
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
              <button class="btn btn-primary" type="submit" id="btnDeposit">Deposit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-7 py-5 pr-5">
    <div id="calendar"></div>
  </div>
</div>

<div class="modal" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">View Event</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      <!-- ?php echo form_open(base_url("admin/edit_event"), array("class" => "form-horizontal")) ?> -->
      <form id= "edit_event" method="POST" enctype="multipart/form-data">
      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Event Name</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="name" value="" id="eeventname" disabled>
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Description</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="description" id="edescription" disabled>
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="estart_date" id="estart_date" disabled>
                </div>
        </div>
                <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Start Time</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="estart_time" id="estart_time" disabled>
                </div>
        </div>
                <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">End Time</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="eend_time" id="eend_time" disabled>
                </div>
        </div>
<!--         <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Delete Event</label>
                    <div class="col-md-8">
                        <input type="checkbox" name="delete" value="1">
                    </div>
            </div> -->
            <input type="hidden" name="eventid" id="event_id" value="0" />
            </form>
      </div>


        <!-- <?php echo form_close() ?> -->
      
      
    </div>
  </div>
</div>

<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
      $('#btnDeposit').click(function(event){
        var data = $('#addDepositForm').serialize();
        //validate form
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd = '0'+dd
} 

if(mm<10) {
    mm = '0'+mm
} 

today = yyyy + '-' + mm + '-' +dd ;


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
        if($('#dtDateCollected').val()>=today){
                 event.preventDefault();
                  swal({
                     type: 'error',
                     title: 'Invalid Date!',
                     text: 'Invalid date collected.'
                   });
        }else{
           if($('#end_time').val()>$('#start_time').val()){
          if($('#strScientificName').val()!=''){
          if($('#strCommonName').val()!=''){
            if($('#strLocation').val()!=''){
              if($('#dtDateCollected').val()!=''){
                if($('#strPlantDesc').val()!=''){
                  if($('#dtAppointmentDate').val()!=''){
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
                          url: '<?php echo base_url() ?>user/addDeposit',
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
                                document.getElementById("addDepositForm").reset();
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
          });}

        }
        
      }


        
      });
    });

</script>
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

<!--  -->
<script type="text/javascript">
            $(document).ready(function() {
              var date_last_clicked = null;
              $('#calendar').fullCalendar({
                eventSources: [
                {
                  events: function(start, end, timezone, callback) {
                    $.ajax({
                      url: '<?php echo base_url() ?>admin/get_events',
                      dataType: 'json',
                      data: {
                      // our hypothetical feed requires UNIX timestamps
                      start: start.unix(),
                      end: end.unix()
                    },
                    success: function(msg) {
                      var events = msg.events;
                      callback(events);
                    }
                  });
                  }
                },
                ],
                eventClick: function(event, jsEvent, view) {
                      $('#eeventname').val(event.title);
                      $('#edescription').val(event.description);
                      $('#estart_date').val(moment(event.start).format('YYYY-MM-DD'));
                      if(event.end) {
                        $('#end_date').val(moment(event.end).format('YYYY-MM-DD'));
                      } else {
                        $('#end_date').val(moment(event.start).format('YYYY-MM-DD'));
                      }
                      $('#event_id').val(event.id);
                      $('#estart_time').val(event.start_time);
                      $('#eend_time').val(event.end_time);
                      $('#editModal').modal();

            },

              });


            });


            </script>