
<head>
<meta charset='utf-8' />
<link href='<?php echo base_url();?>assets/bower_components/fullcalendar/fullcalendar.min.css' rel='stylesheet' />
<link href='<?php echo base_url();?>assets/bower_components/fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='<?php echo base_url();?>assets/bower_components/fullcalendar/lib/moment.min.js'></script>
<script src='<?php echo base_url();?>assets/bower_components/fullcalendar/lib/jquery.min.js'></script>
<script src='<?php echo base_url();?>assets/bower_components/fullcalendar/fullcalendar.min.js'></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/distribution/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/distribution/vendor/font-awesome/css/font-awesome.min.css">
        <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/distribution/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
<style>

  body {
  
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }
    #calendar {
    max-width: 675px;
    margin: 0 auto;
  }


.modal2 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    
    background-color: #fefefe; /* Black w/ opacity */
}

/* Modal Content */
.modal-content2 {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body>
<!--  <div class="row">
  <div class="col-md-5 mx-0 px-5 py-5">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h4>Add Event</h4>
      </div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label>Event Name</label>
            <input type="text" id="eventname" placeholder="Event Name" class="form-control">
          </div>
          <div class="form-group">
            <label>Date</label>
            <input type="date" name ="start_date" class="form-control">
          </div>
          <div class="form-group">
            <label>Event Description</label>
            <textarea id="description" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Signin" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>-->
        <div class="card">
        <div class="card-header d-flex align-items-center">
          <button type="button" data-toggle="modal" data-target="#addModal" class="btn btn-primary">Add Event</button>
        </div>
      </div>
  <div class="modal" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Add Calendar Event</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      <?php echo form_open(base_url("admin/add_event"), array("class" => "form-horizontal")) ?>
      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Event Name</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="name" value="" autocomplete="off">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Description</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="description">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Start Date</label>
                <div class="col-md-8">
                    <input type="date" class="form-control" name="start_date">
                </div>
        </div>
      </div>
      <div class="modal-footer">
        <input type="button" class="btn btn-secondary" value="Close" data-dismiss="modal">
        <input type="submit" class="btn btn-primary" value="Add Event">
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>
      <div class="col-md-13 mx-0 px-0">
<div class="container">
    <div id="calendar"></div></div>   

  <div class="modal" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Update Calendar Event</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      <?php echo form_open(base_url("admin/edit_event"), array("class" => "form-horizontal")) ?>
      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Event Name</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="name" value="" id="eventname">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Description</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="description" id="description">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="start_date" id="start_date">
                </div>
        </div>
        <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Delete Event</label>
                    <div class="col-md-8">
                        <input type="checkbox" name="delete" value="1">
                    </div>
            </div>
            <input type="hidden" name="eventid" id="event_id" value="0" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Update Event">
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>
</div>
</body>
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
          $('#eventname').val(event.title);
          $('#description').val(event.description);
          $('#start_date').val(moment(event.start).format('YYYY/MM/DD'));
          if(event.end) {
            $('#end_date').val(moment(event.end).format('YYYY/MM/DD'));
          } else {
            $('#end_date').val(moment(event.start).format('YYYY/MM/DD'));
          }
          $('#event_id').val(event.id);
          $('#editModal').modal();

},

  });


});


</script>

<!--   $('#calendar').fullCalendar({

        dayClick: function(date, jsEvent, view) { 
            alert('Clicked on: ' + date.getDate()+"/"+date.getMonth()+"/"+date.getFullYear());  
        },

    }); -->