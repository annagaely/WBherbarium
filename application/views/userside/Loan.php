<style>
.autocomplete-items {
  position: relative;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff;
  border-bottom: 1px solid #d4d4d4;
}

.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9;
}

.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important;
  color: #ffffff;
}
</style>
<img src="<?php echo base_url()?>assets/bower_components/mdbootstrap/img/loan.jpg" style="height: 50vh; width: 100%;"  class="banner">
<div class="row">
  <div class="col-md-5 py-5 mr-0">
    <div class="pl-5 pr-0">
      <div class="card px-4">
        <div class="card-body">
            <p class="card-header white-text text-center py-4 h4" style="background-color: #800000;">Loan</p>

          <form id= "tableForm" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="md-form">
              <table class="table table-bordered" id="crud_table">
                <tr>
                  <th width="90%">Scientific Name</th>

                  <th width="10%"></th>
                </tr>
                <tr>
                  <td class='SciName'>
                    <select name='sSciName[]'  id='sciname' class='form-control grey-text font-weight-light' style='font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;'>
                  </td>

                  <td></td>
                </tr>
              </table>
            </div>
          <div align="right">
            <button type="button" name="add" id="add" class="btn btn-primary btn-sm">+</button>
          </div>
        </form>
            <div class="md-form">
<form id= "textForms" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="md-form">
                  <div class="row">
                    <div class="col-md-6">
                      <p class="font-weight-light">Desired Date of Claiming:<span style="color: red"> *</span></p>
                        <input type="date" name="dateAppointment" id= "dtAppointmentDate" class="form-control grey-text font-weight-light" style="font-size: 15px">
                      </div>
                      <div class="col-md-6">
                        <p class="font-weight-light mb-0">Purpose of Loan:<span style="color: red"> *</span> </p>
                        <div class="custom-control custom-radio"  style="margin-left: 38px;">
                          <input type="radio" class="custom-control-input" id="radioAcademic" value='Academic' name="radios">
                          <label class="custom-control-label" for="radioAcademic">Academic</label>
                        </div>
                        <div class="custom-control custom-radio"  style="margin-left: 38px;">
                          <input type="radio" class="custom-control-input" id="radioResearch" value='Research' name="radios">
                          <label class="custom-control-label" for="radioResearch">Research</label>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="text-center pt-4 mt-3">
                    <button class="btn btn-danger" type="reset">Clear</button>
                    <button class="btn btn-primary" style="background-color: #800000;" type="submit"  id="save">Submit</button>
                  </div>
                </div>
              </form>
            </div>

        </div>
      </div>
  </div>
  <div class="col-md-7 py-5">
    <iframe src="<?php echo site_url('user/view_calendar');?>" width="100%" height="100%" style="border: none;"></iframe>
  </div>
</div>




<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>

<script>
$(document).ready(function(){
 var count = 1;
 $('#add').click(function(){

  count = count + 1;
  var html_code ="<tr id='row"+count+"'>";
   html_code += "<td class='SciName'>"+
                "<select name='sSciName[]'  id='sciname"+count+"' class='form-control grey-text font-weight-light' style='font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;'>"+

                "</select>"+"</td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-sm remove'>-</button></td>";
   html_code += "</tr>";
   $('#crud_table').append(html_code);
    showSciName(count);
 });

 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });



 $('#save').click(function(event){

var data=$('#tableForm').serialize()+ "&"+ $('#textForms').serialize();
event.preventDefault();
  $.ajax({
   url:'<?php echo base_url() ?>user/addLoanReq', //lol dikolam tooo :<
   method:"POST",
 data:data,
  success:function(data){
  if(data=true){
     //$('#numDuration').val('');
     //$('#purpose').val('');
     alert('Request Sent');
     location.reload();

   }

   }
 });
 });

    showSciName();
      function showSciName(count){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>user/showSciName',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<option value="'+data[i].strSciName+'">'+data[i].strSciName+'</option>';
          }
          $('#sciname').html(html);
          $('#sciname'+count).html(html);
        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }
});
</script>
