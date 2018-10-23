<!DOCTYPE html>
<html lang="en">

<head>


    <script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.css">

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
    <form id='evalForm' style="color: #757575;"  method="POST" enctype="multipart/form-data">
      <ol>

        <li>Is the condition of the specimen okay?</li>
        <input type="hidden" name="txtid" id="act" value=<?php echo $_GET['id']?>>
        <div class="custom-control custom-radio"  style="margin-left: 38px;">
          <input type="radio" class="custom-control-input" value="Yes" id="q1Yes" name="q1">
          <label class="custom-control-label" for="q1Yes">Yes</label>
        </div>
        <div class="custom-control custom-radio"  style="margin-left: 38px;">
          <input type="radio" class="custom-control-input" value="No" id="q1No" name="q1">
          <label class="custom-control-label" for="q1No">No</label>
        </div>
        <li>Is the specimen identifiable using the images?</li>
        <div class="custom-control custom-radio"  style="margin-left: 38px;">
          <input type="radio" class="custom-control-input" value="Yes" id="q2Yes" name="q2">
          <label class="custom-control-label" for="q2Yes">Yes</label>
        </div>
        <div class="custom-control custom-radio"  style="margin-left: 38px;">
          <input type="radio" class="custom-control-input" value="No" id="q2No" name="q2">
          <label class="custom-control-label" for="q2No">No</label>
        </div>

        <li>Does the flower of the specimen match the indicated Specie?</li>
        <div class="custom-control custom-radio"  style="margin-left: 38px;">
          <input type="radio" class="custom-control-input" value="Yes" id="q3Yes" name="q3">
          <label class="custom-control-label" for="q3Yes">Yes</label>
        </div>
        <div class="custom-control custom-radio"  style="margin-left: 38px;">
          <input type="radio" class="custom-control-input" value="No" id="q3No" name="q3">
          <label class="custom-control-label" for="q3No">No</label>
        </div>
        <li>Does the stem of the specimen match the indicated Specie?</li>
        <div class="custom-control custom-radio"  style="margin-left: 38px;">
          <input type="radio" class="custom-control-input" value="Yes" id="q4Yes" name="q4">
          <label class="custom-control-label" for="q4Yes">Yes</label>
        </div>
        <div class="custom-control custom-radio"  style="margin-left: 38px;">
          <input type="radio" class="custom-control-input" value="No" id="q4No" name="q4">
          <label class="custom-control-label" for="q4No">No</label>
        </div>
        <li>Does the leaf of the specimen match the indicated Specie?</li>
        <div class="custom-control custom-radio"  style="margin-left: 38px;">
          <input type="radio" class="custom-control-input" value="Yes" id="q5Yes" name="q5">
          <label class="custom-control-label" for="q5Yes">Yes</label>
        </div>
        <div class="custom-control custom-radio"  style="margin-left: 38px;">
          <input type="radio" class="custom-control-input" value="No" id="q5No" name="q5">
          <label class="custom-control-label" for="q5No">No</label>
        </div>
        <li>Does the fruit of the specimen match the indicated Specie?</li>
        <div class="custom-control custom-radio"  style="margin-left: 38px;">
          <input type="radio" class="custom-control-input" value="Yes" id="q6Yes" name="q6">
          <label class="custom-control-label" for="q6Yes">Yes</label>
        </div>
        <div class="custom-control custom-radio"  style="margin-left: 38px;">
          <input type="radio" class="custom-control-input" value="No" id="q6No" name="q6">
          <label class="custom-control-label" for="q6No">No</label>
        </div>


        <li>Are the indicated details of Herbarium Sheet accurate? (e.g Description, Scientific Name, Common Name)</li>
        <div class="custom-control custom-radio"  style="margin-left: 38px;">
          <input type="radio" class="custom-control-input" value="Yes" id="q7Yes" name="q7">
          <label class="custom-control-label" for="q7Yes">Yes</label>
        </div>
        <div class="custom-control custom-radio"  style="margin-left: 38px;">
          <input type="radio" class="custom-control-input" value="No" id="q7No" name="q7">
          <label class="custom-control-label" for="q7No">No</label>
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
          <textarea type="text" name='comments' class="md-textarea form-control" rows="2"></textarea>
          <label for="form7">Comments/Corrections</label>
        </div>
        <label>Remarks: </label>
         <div class="md-form mt-3">
         <select name='remarks' class="md-select form-control">
           <option>Approved</option>
           <option>Disapproved</option>
           <option>Needs Correction</option>
         </select>
        </div>
      </ol>
      <!-- Default unchecked -->




      <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" style="color: #800000!important;border: 2px #800000 solid!important" id=btnSave type="submit">Submit</button>
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
      <script type="text/javascript">
        $('#btnSave').click(function(event){

      var data = $('#evalForm').serialize();
      //validate form
      // if($('#strDomainName').val()!=''){
      //   if($('#strKingdomName').val()!=''){
      //     if($('#pNameid').val()!=''){
            event.preventDefault();
            swal({
              title: 'Are you sure?',
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, save it!'
            }).then((result) => {
              if (result.value) {
                $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?php echo base_url() ?>user/addAnswer',
                data: data,
                async: false,
                dataType: 'json',
                success: function(response){
                  if(response==true){

                    let timerInterval
                    swal({
                      title: 'Saved',
                      text: 'Your evaluation has been saved. Please close this window now.',
                      type: 'success',
                      // timer: 1500,
                      showConfirmButton: true
                    }).then(function() {
                      location.reload();
                    });
                  }else {
                    // event.preventDefault();
                    // swal({
                    //   type: 'error',
                    //   title: 'Error!',
                    //   text: 'Phylum name already exists.'
                    // });
                  }
                },
                error: function(){
                  alert('Could not save Data');
                }
              });
              }

            })

      //     }else{
      //       event.preventDefault();
      //       swal({
      //         type: 'error',
      //         title: 'Incomplete input!',
      //         text: 'Please fill up all the required fields.'
      //       });
      //       }
      //   }else{
      //     event.preventDefault();
      //     swal({
      //       type: 'error',
      //       title: 'Incomplete input!',
      //       text: 'Please fill up all the required fields.'
      //     });
      //     }
      // }else{
      //   event.preventDefault();
      //   swal({
      //     type: 'error',
      //     title: 'Incomplete input!',
      //     text: 'Please fill up all the required fields.'
      //   });
      //   }
    });
      </script>


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
