
<!DOCTYPE html>
<html lang="en">
<!--
<?php
    header('Content-Type: text/html; charset=utf-8' );
    ini_set('default_charset', 'utf-8');
?> -->

<head>
<!--
 <meta http-equiv="Content-Type" content="text/html; charset= utf-8"> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <title><?php echo $title; ?></title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!--PREMIUM-->
      <!--SWAL-->
      <script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.all.min.js"></script>
      <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
      <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
      <script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.js"></script>
      <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.css">



    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/demo/d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-4/vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/demo/d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-4/vendor/font-awesome/css/font-awesome.min.css">
  <!-- Fontastic Custom icon font-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/demo/d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-4/css/fontastic.css">
  <!-- Google fonts - Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <!-- DataTables CSS-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/demo/d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-4/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/demo/d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-4/vendor/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

  <!-- jQuery Circle-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/demo/d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-4/css/grasp_mobile_progress_circle-1.0.0.min.css">
  <!-- Custom Scrollbar-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/demo/d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-4/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
  <!-- theme stylesheet-->
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/demo/d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-4/css/style.default.premium.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/demo/d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-4/css/custom.css">
    <!--END PREMIUM-->


    <!-- Favicon-->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/bower_components/logo1.ico">
    <link rel="stylesheet" href="<?php echo base_url();?> https://use.fontawesome.com/releases/v5.1.0/css/solid.css" integrity="sha384-TbilV5Lbhlwdyc4RuIV/JhD8NR+BfMrvz4BL5QFa2we1hQu6wvREr3v6XSRfCTRp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?> https://use.fontawesome.com/releases/v5.1.0/css/regular.css" integrity="sha384-avJt9MoJH2rB4PKRsJRHZv7yiFZn8LrnXuzvmZoD3fh1aL6aM6s0BBcnCvBe6XSD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>https://use.fontawesome.com/releases/v5.1.0/css/brands.css" integrity="sha384-7xAnn7Zm3QC1jFjVc1A6v/toepoG3JXboQYzbM0jrPzou9OFXm/fY6Z/XiIebl/k" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>https://use.fontawesome.com/releases/v5.1.0/css/fontawesome.css" integrity="sha384-ozJwkrqb90Oa3ZNb+yKFW2lToAWYdTiF1vt8JiH5ptTGHTGcN7qdoR1F95e0kYyG" crossorigin="anonymous">

</head>
<body>

    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="<?php echo base_url();?>assets/bower_components/logo1.ico" alt="person" class="img-fluid rounded-circle">
             <h2 class="h5">
              <?php
                  echo $this->session->userdata('strFirstname'),' ',$this->session->userdata('strMiddleinitial'),' ',$this->session->userdata('strLastname');
              ?>
            </h2>
              <span>

                <?php
                  echo $this->session->userdata('strRole');
              ?>
              </span>
          </div>

          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="<?php echo base_url(); ?>admin/Dashboard" class="brand-small text-center"> <img src = "<?php echo base_url();?>assets/bower_components/logoto.png"> </a>

         </div>

        </div>


        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>

          <ul id="side-main-menu" class="side-menu list-unstyled">
            <li><a href="<?php echo base_url(); ?>admin/Dashboard" > <i class="fa fa-home"></i>Home</a></li>
<?php if(($this->session->userdata('strRole')=='CURATOR') || ($this->session->userdata('strRole')=='ADMINISTRATOR')):?>
            <li class="active"><a href="#MaintenanceDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-cogs"></i>Maintenance </a>
              <ul id="MaintenanceDropdown" class="collapse list-unstyled show">

                <li class="active"><a href="#TaxHierDropdown" data-toggle="collapse">Taxonomic Hierarchy</a>
                  <ul id="TaxHierDropdown" class="collapse list-unstyled show">

                    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Phylum"> &nbsp; &nbsp; &nbsp; &nbsp; Phylum</a></li>

                    <li class="active" style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Class"> &nbsp; &nbsp; &nbsp; &nbsp; Class</a></li>

                    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Order"> &nbsp; &nbsp; &nbsp; &nbsp; Order</a></li>

                    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Family"> &nbsp; &nbsp; &nbsp; &nbsp; Family</a></li>

                    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Genus"> &nbsp; &nbsp; &nbsp; &nbsp; Genus</a></li>

                    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Species"> &nbsp; &nbsp; &nbsp; &nbsp; Species</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo base_url(); ?>admin/Familyboxes">Family Boxes</a></li>
                <!--<li><a href="<?php echo base_url(); ?>admin/Locality">Locality</a></li>-->
                <li><a href="<?php echo base_url(); ?>admin/Collector">Collector</a></li>

                <li><a href="<?php echo base_url(); ?>admin/accounts">Access Accounts</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Staffmgt">Staff Management</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/Speciesauthor">Species Author</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/PlantType">Plant Type</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/SpeciesAltName">Species Alternate Name</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/Plantborrower">Plant Borrower</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Externalvalidator">External Validators</a></li>
                <li><a href="<?php echo base_url(); ?>admin/CalendarManagement">Calendar Management</a></li>
<!--                 <li><a href="<?php echo base_url(); ?>admin/Featuredplant">Featured Plant</a></li> -->

              </ul>
            </li>
            <li><a href="#TransactionDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-undo"></i>Transaction </a>
              <ul id="TransactionDropdown" class="collapse list-unstyled ">

                <li><a href="<?php echo base_url(); ?>admin/Depositplant">Deposit Plant</a></li>
                <!--<li><a href="<?php echo base_url(); ?>admin/Loanplant">Loan Plant</a></li>-->
                <li><a href="#ExValidationDropdown" data-toggle="collapse">External Validation</a>
  <ul id="ExValidationDropdown" class="collapse list-unstyled">
    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Externalvalidation"> &nbsp; &nbsp; &nbsp; &nbsp; Send to External Validator</a></li>
    <li style="background-color: #303030;"><a href=""> &nbsp; &nbsp; &nbsp; &nbsp; Answers (tempo)</a></li>
  </ul>
</li>
                <li><a href="<?php echo base_url(); ?>admin/Visits">Visits</a>

                </li>
              </ul>
            </li>
              <li><a href="<?php echo base_url(); ?>admin/Queries"> <i class="fa fa-database"></i>Queries</a></li>
            <li><a href="<?php echo base_url(); ?>admin/Reports"> <i class="fa fa-file"></i>Reports</a></li>



          <!-- STUDENT ASSISTANT PART-->
          <?php elseif($this->session->userdata('strRole')==='STUDENT ASSISTANT'):?>
             <li><a href="#MaintenanceDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-cogs"></i>Maintenance </a>
              <ul id="MaintenanceDropdown" class="collapse list-unstyled ">


              <!--  <li><a href="<?php echo base_url(); ?>admin/Locality">Locality</a></li>-->
                <li><a href="<?php echo base_url(); ?>admin/Collector">Collector</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Externalvalidator">External Validators</a></li>


              </ul>
            </li>
            <li><a href="#TransactionDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-undo"></i>Transaction </a>
              <ul id="TransactionDropdown" class="collapse list-unstyled ">

                <li><a href="<?php echo base_url(); ?>admin/Depositplant">Deposit Plant</a></li>
                <!--<li><a href="<?php echo base_url(); ?>admin/Loanplant">Loan Plant</a></li>-->


                </li>
              </ul>
            </li>
              <li><a href="<?php echo base_url(); ?>admin/Queries"> <i class="fa fa-database"></i>Query</a></li>
            <li><a href="<?php echo base_url(); ?>admin/Reports"> <i class="fa fa-file"></i>Reports</a></li>
            <?php endif;?>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="<?php echo base_url(); ?>admin/Dashboard" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>PUP</span><strong class="text-primary">HERBARIUM</strong>
                  </div></a>
              </div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">

                <!-- Notifications dropdown-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell" id='clicknotif'></i><span id="BellIcon" class="badge badge-warning count"></span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item">
          <div class="notification d-flex justify-content-between">
          <div class="notification-content"></i>No New Notifications
          </div>
          </div></a></li>
                  </ul>
                </li>
                <!-- Messages dropdown-->
                <!--<li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i onclick="myFunction1()" class="fa fa-envelope"></i><span id= "MessageIcon" class="badge badge-info">3</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                        <div class="msg-profile"> <img src="<?php echo base_url();?>assets/bower_components/Nins.png" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ni&ntildeo Escueta</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                        <div class="msg-profile"> <img src="<?php echo base_url();?>assets/bower_components/sheng.png" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Rhisiel Valle</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                        <div class="msg-profile"> <img src="<?php echo base_url();?>assets/bower_components/mai.png" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Maica Ope&ntildea</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                  </ul>
                </li>-->
                <!-- Log out-->
                 <li class="nav-item"><a href="<?php echo base_url()?>admin/logout" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" >
                        <span class="d-none d-sm-inline-block">Logout</span>&nbsp<i class="fa fa-sign-out"></i></a>

                           <form id="logout-form" action="<?php echo base_url()?>admin/logout" method="POST" style="display: none;">

                           </form>
                  </li>
              </ul>

<script>

function myFunction() {
    var x = document.getElementById("BellIcon");
    if (x.style.display === "none") {
        x.style.display = "none";
    } else {
        x.style.display = "none";
    }
}

function myFunction1() {
    var y = document.getElementById("MessageIcon");
    if (y.style.display === "none") {
        y.style.display = "none";
    } else {
        y.style.display = "none";
    }
}
</script>
 <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
<script>
$(document).ready(function(){

 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"<?php echo base_url();?>admin/showNotif",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {

   var html = '';
   var i;

  for(i=0; i<data.length; i++){
  html +='<li><a rel="nofollow" href="#" class="dropdown-item">'+
          '<div class="notification d-flex justify-content-between">'+
          '<div class="notification-content"><i class="fa fa-envelope"></i>'+data[i].strNotifContent+''+
          '</div>'+
          '</div></a></li>';
    }
    $('.dropdown-menu').html(html);

   }
  });
 }

load_unseen_notification();

$('#clicknotif').click(function(){
  $('.badge').html('');
  load_unseen_notification('yes');

 });

 countunreadnotif();
 function  countunreadnotif ()
 {
  $.ajax({
   url:"<?php echo base_url();?>admin/showNotifCount",
   method:"POST",
   dataType:"json",
   success:function(data)
   {
if(data.intcount!=0){
  $('.count').html(data.intcount);
}


   }
  });
 }

 // setInterval(function(){
 // load_unseen_notification();
 // countunreadnotif();
 // }, 5000);

});
</script>


     </div>
      </div>
      </nav>
      </header>

       <div class="breadcrumb-holder">
       <div class="container-fluid">
         <ul class="breadcrumb">
           <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/Dashboard" >Home</a></li>
           <li class="breadcrumb-item">Maintenance</li>
           <li class="breadcrumb-item">Taxonomic Hierarchy</li>
           <li class="breadcrumb-item active">Class </li>
         </ul>
       </div>
     </div>
 <!--ADD Class MODAL-->
     <div class="card mx-4">
       <div class="card-header d-flex align-items-center">
         <button type="button" button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Class</button>
       </div>
       <!-- Modal-->
       <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide"  data-backdrop="static" data-keyboard="false">
         <div role="document" class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
               <h5 id="exampleModalLabel" class="modal-title">Add Class</h5>
               <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()"><span aria-hidden="true">&times;</span></button>
             </div>
             <div class="modal-body">
               <form id= "addClassForm" method="POST" enctype="multipart/form-data"> <!--dito ka magbabago sa loob nito-->
                 <div class="form-group">
                   <label>Phylum Name:</label> <label style="color: red">*</label>
                     <input list="phylumname" name ="spID" placeholder="Phylum Name" class="form-control" autocomplete=off>
                     <datalist id ='phylumname'>
                     </datalist>
                 </div>
                 <div class="form-group">
                   <label>Class Name:</label> <label style="color: red">*</label>
                   <input type="text" name="txtCName" id='classid' placeholder="Class Name" class="form-control">
                 </div><!--HANGGANG DITO LANG BOI-->
                 <div class="modal-footer">
                   <input type="reset" value="Clear" class="btn btn-secondary">
                   <input type="submit" value="Save" id="btnSave" class="btn btn-primary">
                 </div>
               </form>

             </div>
           </div>
         </div>
       </div>
     </div>
     <!--END PHYLUM MODAL-->
     <!--ADD EDIT CLASS MODAL-->

       <!-- Modal-->
       <div id="myEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
         <div role="document" class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">

               <h5 id="exampleModalLabel" class="modal-title">Edit Phylum</h5>
               <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
             </div>
             <div class="modal-body">

               <form id= "editClassForm" method="POST" enctype="multipart/form-data">
                 <!-- <input type="hidden" name="act" id="act" value=""> -->
                 <div class="form-group">
                   <label>
                     <input type="hidden" name="txtId" value="0">
                   </label>
                   <label>Phylum Name:</label> <label style="color: red">*</label>
                     <input list="phylumname" name ="speID" placeholder="Phylum Name" class="form-control">
                     <datalist id ='phylumname'>
                     </datalist>
                 </div>
                 <div class="form-group">
                   <label>Class Name:</label> <label style="color: red">*</label>
                   <input type="text" id="classid2" name="txteCName" placeholder="Class Name" class="form-control">
                 </div>
                 <div class="modal-footer">
                   <input type="reset" value="Clear" class="btn btn-secondary">
                   <input type="submit" value="Save" id='btnEditSave' class="btn btn-primary">
                 </div>

               </form>
             </div>
           </div>
         </div>
       </div>
     <!--END EDIT CLASS MODAL-->
     <div class="card mx-4">

               <div class="card-body">
                 <div class="table-responsive">
                   <table class="table table-striped" id="manageClasstbl">
                     <thead>
                       <tr>
                         <!-- <th scope="col" width= "10%">Class ID</th> -->
                         <th scope="col" width= "10%">  Phylum Name</th>
                         <th scope="col" width= "10%">Class Name</th>
                         <th scope="col" width= "10%">Actions</th>
                       </tr>
                     </thead>
<!--                       <tbody tbody id="showdata">
                     </tbody> -->
                   </table>
                 </div>
               </div>
             </div>


<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/popper.js/umd/popper.min.js"> </script>

<!--Table-->
<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.dataTables.min.js"></script>

             <script>
             function resetForm() {
                 document.getElementById("addPhylumForm").reset();
             }

             </script>


<script type="text/javascript">

 function showAllClass()
 {
   $('#manageClasstbl').dataTable().fnClearTable();
   $('#manageClasstbl').dataTable().fnDraw();
   $('#manageClasstbl').dataTable().fnDestroy();
   $('#manageClasstbl').dataTable({
    "autoWidth":false,
        "processing": true,
        "serverSide": false,
        "sAjaxSource": "<?php echo base_url('admin/showAllClass')?>",
        "deferLoading": 10,
        "bPaginate": true,
        "aaSorting": [],
        "fnInitComplete": function(){

        }
    });
  }
   $(document).ready(function(){

   //show
   showAllClass();
   showClassPhylumName();

     function showClassPhylumName(){
     $.ajax({
       type: 'ajax',
       url: '<?php echo base_url() ?>admin/showClassPhylumName',
       async: false,
       dataType: 'json',
       success: function(data){
         var html = '';
         var i;
         for(i=0; i<data.length; i++){
           html +='<option value="'+data[i].strPhylumName+'">'+data[i].strPhylumName+'</option>';
         }
         $('#showClassPhylumName').html(html);
         $('#phylumname').html(html);
       },
       error: function(){
         alert('Could not get Data from Database');
       }
     });
   };

   $('#btnSave').click(function(event){
     var data = $('#addClassForm').serialize();
     //validate form
     if($('#phylumid').val()!=''){
       if($('#classid').val()!=''){
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
               url: '<?php echo base_url() ?>admin/addClass',
               data: data,
               async: false,
               dataType: 'json',
               success: function(response){
                 if(response.success){
                   $('#addClassForm').modal('hide');
                   $('#addClassForm')[0].reset();
                   if(response.type=='add'){
                     var type = 'added'
                   }else if(response.type=='update'){
                     var type ="updated"
                   }
                   let timerInterval
                   swal({
                     title: 'Saved',
                     text: 'Class has been saved.',
                     type: 'success',
                     timer: 1500,
                     showConfirmButton: false
                   }).then(function() {
                     location.reload();
                   });
                 }else {
                   event.preventDefault();
                   swal({
                     type: 'error',
                     title: 'Error!',
                     text: 'Class name already exists.'
                   });
                 }
               },
               error: function(){
                 event.preventDefault();
                 swal({
                   type: 'error',
                   title: 'Incorrect input!',
                   text: 'Phylum name does not exist.'
                 });
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


    });
   //update class
 $('#btnEditSave').click(function(event){
     var data = $('#editClassForm').serialize();
     if($('#phylumid2').val()!=''){
       if($('#classid2').val()!=''){
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
         url: '<?php echo base_url() ?>admin/updateClass',
         data: data,
         async: false,
         dataType: 'json',
         success: function(response){
           if(response.success){
             $('#editClassForm').modal('hide');
             $('#editClassForm')[0].reset();
             if(response.type=='add'){
               var type = 'added'
             }else if(response.type=='update'){
               var type ="updated"
             }
             let timerInterval
             swal({
               title: 'Saved',
               text: 'Class has been updated.',
               type: 'success',
               timer: 1500,
               showConfirmButton: false
             }).then(function() {
               location.reload();
             });
             showAllClass();
           }else {
             event.preventDefault();
             swal({
               type: 'error',
               title: 'Error!',
               text: 'Class name already exists.'
             });
           }
         },
         error: function(){
           event.preventDefault();
           swal({
             type: 'error',
             title: 'Incorrect input!',
             text: 'Phylum name does not exist.'
           });
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
   });
   //edit class
  $(document).on('click', '.class-edit', function(event){
     var id = $(this).attr('data');
     $('#myEditModal').modal('show');
     $('#myEditModal').find('.modal-title').text('Edit Class');
     $.ajax({
       type: 'ajax',
       method: 'get',
       url: '<?php echo base_url() ?>admin/editClass',
       data: {id: id},
       async: false,
       dataType: 'json',
       success: function(data){

         $('input[name=speID]').val(data.strPhylumName);
         $('input[name=txteCName]').val(data.strClassName);
         $('input[name=txtId]').val(data.intClassID);

       },
       error: function(){
         alert('Could not Edit Data');
       }

   });

 });
 });
</script>
