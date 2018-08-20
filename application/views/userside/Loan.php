<img src="<?php echo base_url()?>assets/bower_components/mdbootstrap/img/loan.jpg" style="height: 50vh; width: 100%;"  class="banner">
<div class="py-5">
  <div class="card mx-auto px-4" style="width: 80%;">
    <div class="card-body">
       
        <p class="card-header white-text text-center py-4 h4" style="background-color: #800000;">Loan</p>
        <div class="md-form">
          <form id= "tableForm" method="POST" enctype="multipart/form-data">
          <table class="table table-bordered" id="crud_table">
            <tr>
              <th>Family Name</th>
              <th>Genus Name</th>
              <th>Specie Name</th>
              <th width="10%"></th>
            </tr>
            <tr>
              <td class="FamName">
                <select name="sFamilyName[]" id='family' class="form-control grey-text font-weight-light" style="font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;">
                 
                </select>
              </td>
              <td class="GenusName">
                <select  name="sGenusName[]"  id='genus' class="form-control grey-text font-weight-light" style="font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;">
                  
                </select>
              </td>
              <td class="SpecieName">
                <select  name="sSpeciesName[]"  id='species' class="form-control grey-text font-weight-light" style="font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;">
                 
                </select>
              </td>
              <td></td>
            </tr>
          </table>
          <div align="right">
            <button type="button" name="add" id="add" class="btn btn-primary btn-sm">+</button>
          </div>
          </form>
          <div id="inserted_item_data"></div>
        </div>
      </div>
    

      <div class="md-form">
        <form id= "textForms" method="POST" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-2">
            <input type="number" id="numDuration" name="txtNumDuration" class="form-control" >
            <label for="numDuration" class="font-weight-light ml-3">Duration</label>
          </div>
          <div class="col-md-2 pt-1">
            <select name="txtdayweekmonth" class="form-control grey-text font-weight-light" style="font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;">
              <!--<option value="1">-- select one --</option>-->
              <option value="Day/s">Day/s</option>
              <option value="Weeks">Weeks</option>
              <option value="Months">Months</option>
            </select>
           
          </div>
          <div class="col-md-8">
            <div class="md-form">
              <i class="fas fa-pencil-alt prefix grey-text"></i>
              <textarea type="text" id="purpose" name="txtpurpose"  class="md-textarea form-control" rows="3"></textarea>
              <label for="purpose" class="font-weight-light">Purpose of Loan</label>
            </div>
          </div>

        </div>
      <div class="text-center py-4 mt-3">
        <button class="btn" style="background-color: #800000;" type="submit"  id="save">Submit</button>
      </div>
    </form>
  </div>
</div>
</div>

<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>

<script>
$(document).ready(function(){
 var count = 1;
 $('#add').click(function(){

  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
   html_code += "<td class='FamName'>"+
                "<select name='sFamilyName[]'  id='family"+count+"' class='form-control grey-text font-weight-light' style='font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;'>"+
                 
                "</select>"+"</td>";
   html_code += "<td class='GenusName'>"+
                "<select name='sGenusName[]'  id='genus1"+count+"' class='form-control grey-text font-weight-light' style='font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;'>"+
                  
                "</select>"+"</td>";
   html_code += "<td class='SpecieName'>"+
                "<select name='sSpeciesName[]'  id='species"+count+"' class='form-control grey-text font-weight-light' style='font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;'>"+
                  
                "</select>"+"</td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-sm remove'>-</button></td>";
   html_code += "</tr>";
   $('#crud_table').append(html_code);
    showFamilyName(count);
    showGenusName(count);
    showSpeciesName(count);

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


    showFamilyName();
    showGenusName();
    showSpeciesName();
      function showFamilyName(count){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>user/showFamilyName',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<option value="'+data[i].intFamilyID+'">'+data[i].strFamilyName+'</option>';
          }
          $('#family').html(html);
          $('#family'+count).html(html);
        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }

      function showGenusName(count){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>user/showGenusName',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<option value="'+data[i].intGenusID+'">'+data[i].strGenusName+'</option>';
          }
          $('#genus').html(html);
           $('#genus1'+count).html(html);

        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }
      function showSpeciesName(count){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>user/showSpeciesName',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<option value="'+data[i].intSpeciesID+'">'+data[i].strSpeciesName+'</option>';
          }
          $('#species').html(html);
          $('#species'+count).html(html);

        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }




});
</script>
