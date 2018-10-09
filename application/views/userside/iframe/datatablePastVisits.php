<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.18/b-1.5.4/b-flash-1.5.4/b-print-1.5.4/r-2.2.2/rg-1.1.0/sc-1.5.0/sl-1.2.6/datatables.min.css"/>

  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.18/b-1.5.4/b-flash-1.5.4/b-print-1.5.4/r-2.2.2/rg-1.1.0/sc-1.5.0/sl-1.2.6/datatables.min.js"></script>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>assets/bower_components/mdbootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url();?>assets/bower_components/mdbootstrap/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->

  <!-- Bootstrap cor/e JavaScript -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/js/mdb.min.js"></script>
<!-- Footer -->
<body>
  <div class="table-responsive">
    <table id="managepastVisits" class="table table-striped"  width="100%">
    <thead>
      <tr>
        <th class="th-sm">Date
          <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th class="th-sm">Type of Visit
          <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th class="th-sm">Description
          <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th class="th-sm">Action
          <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>


      </tr>
    </thead>

  </table>
  </div>

</body>
<script type="text/javascript">
$(document).ready(function () {
  $('#managepastVisits').dataTable().fnClearTable();
  $('#managepastVisits').dataTable().fnDraw();
  $('#managepastVisits').dataTable().fnDestroy();
  $('#managepastVisits').dataTable({
   "autoWidth":false,
       "processing": true,
       "serverSide": false,
       "sAjaxSource": "<?php echo base_url('user/showAllVisitsLog')?>",
       "deferLoading": 10,
       "bPaginate": true,
       "aaSorting": [],
       "fnInitComplete": function(){

       }
   });
});
</script>
</html>
