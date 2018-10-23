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
<div class="card mx-auto" style="width: 35%; margin-top: 10%">

  <h5 class="card-header white-text text-center py-4" style="background-color: #800000">
    <strong>External Validator Confirmatiion</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0 py-5">

    <!-- Form -->
    <form id='codeForm' style="color: #757575;" method="POST" enctype="multipart/form-data">
      <!-- Material input -->
      <div class="md-form" >
        <input type="text" name='code' id="codeid" class="form-control">
        <label for="form1" >Enter Code</label>
      </div>

    <!-- Sign in button -->
    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" style="color: #800000!important;border: 2px #800000 solid!important" id='btnSave' type="submit">Submit</button>
<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">
  $('#btnSave').click(function(event){
     var data = $('#codeForm').serialize();
     //validate form
     if($('#codeid').val()!=''){

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
               url: '<?php echo base_url() ?>user/checkCode',
               data: data,
               async: false,
               dataType: 'json',
               success: function(data){

                   let timerInterval
                   swal({
                     type: 'success',
                     timer: 1500,
                     showConfirmButton: false
                   }).then(function() {
                      window.location.href='<?php echo base_url();?>user/form?id='+data.intDepositID+'/';
                   });
               },
               error: function(){
                 // event.preventDefault();
                 // swal({
                 //   type: 'error',
                 //   title: 'Incorrect input!',
                 //   text: 'Phylum name does not exist.'
                 // });
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
