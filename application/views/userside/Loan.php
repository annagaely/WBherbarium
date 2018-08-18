<img src="<?php echo base_url()?>assets/bower_components/mdbootstrap/img/loan.jpg" style="height: 50vh; width: 100%;"  class="banner">
<div class="py-5">
  <div class="card mx-auto px-4" style="width: 80%;">
    <div class="card-body">
      <form>
        <p class="card-header white-text text-center py-4 h4" style="background-color: #800000;">Loan</p>
        <div class="md-form">
          <table class="table table-bordered" id="crud_table">
            <tr>
              <th>Family Name</th>
              <th>Genus Name</th>
              <th>Specie Name</th>
              <th width="5%"></th>
            </tr>
            <tr>
              <td class="FamName">
                <select class="form-control grey-text font-weight-light" style="font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;">
                  <option></option>
                </select>
              </td>
              <td class="GenusName">
                <select class="form-control grey-text font-weight-light" style="font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;">
                  <option></option>
                </select>
              </td>
              <td class="SpecieName">
                <select class="form-control grey-text font-weight-light" style="font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;">
                  <option></option>
                </select>
              </td>
              <td></td>
            </tr>
          </table>
          <div align="right">
            <button type="button" name="add" id="add" class="btn btn-primary">+</button>
          </div>
          <div id="inserted_item_data"></div>
        </div>
      </div>
      <div class="md-form">
        <div class="row">
          <div class="col-md-4">
            <input type="date" name="dateLoan" class="form-control grey-text font-weight-light" value="">
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-6 ">
                <input type="number" id="numDuration" class="form-control">
                <label for="numDuration" class="font-weight-light ml-3">Duration</label>
              </div>
              <div class="col-md-6 pt-1">
                <select class="form-control grey-text font-weight-light" style="font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;">
                  <option value="1">Collector</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <input type="number" id="numCopies" class="form-control">
            <label for="numCopies" class="font-weight-light ml-3">Number of Copies</label>
          </div>
        </div>
      </div>
      <div class="md-form">
        <i class="fas fa-pencil-alt prefix grey-text"></i>
        <textarea type="text" id="purpose" class="md-textarea form-control" rows="3"></textarea>
        <label for="purpose" class="font-weight-light">Purpose of Loan</label>
      </div>
      <div class="text-center py-4 mt-3">
        <button class="btn" style="background-color: #800000;" type="submit">Submit</button>
      </div>
    </form>
  </div>
</div>
<script>
$(document).ready(function(){
 var count = 1;
 $('#add').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
   html_code += "<td class='FamName'>"+
                "<select class='form-control grey-text font-weight-light' style='font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;'>"+
                  "<option></option>"+
                "</select>"+"</td>";
   html_code += "<td class='GenusName'>"+
                "<select class='form-control grey-text font-weight-light' style='font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;'>"+
                  "<option></option>"+
                "</select>"+"</td>";
   html_code += "<td class='SpecieName'>"+
                "<select class='form-control grey-text font-weight-light' style='font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;'>"+
                  "<option></option>"+
                "</select>"+"</td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";
   html_code += "</tr>";
   $('#crud_table').append(html_code);
 });s

 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });

 $('#save').click(function(){
  var item_name = [];
  var item_code = [];
  var item_desc = [];
  var item_price = [];
  $('.FamName').each(function(){
   item_name.push($(this).text());
  });
  $('.GenusName').each(function(){
   item_code.push($(this).text());
  });
  $('.SpecieName').each(function(){
   item_desc.push($(this).text());
  });
  $.ajax({
   url:"insert.php", //lol dikolam tooo :<
   method:"POST",
   data:{FamName:FamName, GenusName:GenusName, SpecieName:SpecieName},
   success:function(data){
    alert(data);
    $("td[contentEditable='true']").text(""); //oy ito din. hindi na kasi siya contenteditable!!! select na kasi nasa loob ng td
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
    fetch_item_data();
   }
  });
 });

 function fetch_item_data()
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#inserted_item_data').html(data);
   }
  })
 }
 fetch_item_data();

});
</script>
