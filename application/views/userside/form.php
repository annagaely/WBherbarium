<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo $title; ?></title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>assets/bower_components/mdbootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url();?>assets/bower_components/mdbootstrap/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url();?>assets/bower_components/mdbootstrap/css/style.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/bower_components/logo1.ico">
</head>

<body>
  <!-- /Start your project here-->
  <!-- Material form login -->
<div class="card my-5 mx-auto" style="width: 60%">

  <h5 class="card-header white-text text-center py-4" style="background-color: #800000">
    <strong>External Validation</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0 py-5">

    <!-- Form -->
    <label><span style="color: red">*Refer to the Images and details attached to the email that was sent to you. </span></label>
    <form  style="color: #757575;">
      <ol>

        <li>Is the condition of the specimen okay?</li>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="yes">
            <label class="custom-control-label" for="yes">Yes</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="no">
            <label class="custom-control-label" for="no">No</label>
        </div>
        <li>Is the specimen identifiable using the images?</li>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="yes">
            <label class="custom-control-label" for="yes">Yes</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="no">
            <label class="custom-control-label" for="no">No</label>
        </div>

        <li>Does the flower of the specimen match the indicated Specie?</li>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="yes">
            <label class="custom-control-label" for="yes">Yes</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="no">
            <label class="custom-control-label" for="no">No</label>
        </div>
        <li>Does the stem of the specimen match the indicated Specie?</li>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="yes">
            <label class="custom-control-label" for="yes">Yes</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="no">
            <label class="custom-control-label" for="no">No</label>
        </div>
        <li>Does the leaf of the specimen match the indicated Specie?</li>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="yes">
            <label class="custom-control-label" for="yes">Yes</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="no">
            <label class="custom-control-label" for="no">No</label>
        </div>
        <li>Does the fruit of the specimen match the indicated Specie?</li>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="yes">
            <label class="custom-control-label" for="yes">Yes</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="no">
            <label class="custom-control-label" for="no">No</label>
        </div>


        <li>Are the indicated details of Herbarium Sheet accurate? (e.g Description, Scientific Name, Common Name)</li>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="yes">
            <label class="custom-control-label" for="yes">Yes</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="no">
            <label class="custom-control-label" for="no">No</label>
        </div>

<!--         <li>Does the digital photo of the Herbarium Sheet matches the actual Herbarium Sheet?</li>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="yes">
            <label class="custom-control-label" for="yes">Yes</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="no">
            <label class="custom-control-label" for="no">No</label>
        </div> -->

<!--         <li>Is the quality of the digital photo of Herbarium Sheet acceptable?</li>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="yes">
            <label class="custom-control-label" for="yes">Yes</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="no">
            <label class="custom-control-label" for="no">No</label>
        </div> -->

<!--         <li>How about the dryness of the specimen? Does it reached the right amount of dryness?</li>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="yes">
            <label class="custom-control-label" for="yes">Yes</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="no">
            <label class="custom-control-label" for="no">No</label>
        </div> -->
        <div class="md-form mt-3">
          <textarea type="text" class="md-textarea form-control" rows="2"></textarea>
          <label for="form7">Comments/Corrections</label>
        </div>
        <label>Remarks: </label>
         <div class="md-form mt-3">
         <select class="md-select form-control">
           <option>Approved</option>
           <option>Disapproved</option>
           <option>Needs Correction</option>
         </select>
        </div>
      </ol>
      <!-- Default unchecked -->




      <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" style="color: #800000!important;border: 2px #800000 solid!important" type="submit">Submit</button>


    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/js/mdb.min.js"></script>
</body>

</html>
