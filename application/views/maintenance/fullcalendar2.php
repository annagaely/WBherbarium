<!DOCTYPE html>
<html>
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
    max-width: 900px;
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
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
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
  <div class="card">
    <!-- Modal-->
            <form id= "addOrderForm" method="POST" enctype="multipart/form-data"> <!--dito ka magbabago sa loob nito-->
              <div class="form-group">
                <label>Event Name:</label>
                <input type="text" name="txtOName" placeholder="Order Name" class="form-control">
              </div>
              <div class="row">
              <div class="form-group co;-sm-6">
                <label>Start Date</label>
                <input type="date" name="txtOName" placeholder="Order Name" class="form-control">
              </div><div class="form-group co;-sm-6">
                <label>End Date</label>
                <input type="date" name="txtOName" placeholder="Order Name" class="form-control">
              </div>
            </div>

              <!--HANGGANG DITO LANG BOI-->
              <div class="modal-footer">
                <input type="reset" value="Clear" class="btn btn-primary">       
                <input type="submit" value="Save" id="btnSave" class="btn btn-primary">
              </div>
            </form>
          </div>
    
<div class="container">
    <div id="calendar"></div>

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

  });
});


</script>

</html>
