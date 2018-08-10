
        <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Maintenance/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Maintenance</li>
            <li class="breadcrumb-item active">Locality </li>
          </ul>
        </div>
      </div>

<!--ADD Locality MODAL-->
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Locality</button>
        </div>         
        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add Locality</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form><!--dito ka magbabago sa loob nito-->
                  <div class="form-group">
                    <label>Locality ID:</label>
                    <input type="text" name="LID" placeholder="Locality ID" class="form-control" disabled>
                  </div>
                  <div class="row">

                  <div class="form-group col-sm-4">
                    
                    <label>Island:</label><br>
                    <select id ="sisland"  class="form-control">
                      <option value="islan0">--Select an Item--</option>
                      <option Value="Luzon"> Luzon</option>
                      <option Value="Visayas">Visayas</option>
                      <option Value="Mindanao">Mindanao</option>
                    </select>
                  </div>
                  <div class="form-group col-sm-4">
                    <label>Region:</label><br>
                    <select id="sregion" class="form-control">
                      <option value="">-- select one -- </option>
                    </select>
                  </div>
                  <div class="form-group col-sm-4">
                    <label>Province:</label><br>
                    <select id="sprov" class="form-control">

                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label>City/Municipality:</label>
                    <input type="text" name="cName" placeholder="Municipality" class="form-control">
                  </div>
                  <div class="form-group col-sm-6">
                    <label>Area:</label>
                    <input type="text" name="cName" placeholder="Area" class="form-control">
                  </div>
                </div>
                  <div class="form-group">
                    <label>Specific Location:</label>
                    <input type="text" name="cName" placeholder="Specific Location" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Shortcut Location:</label>
                    <input type="text" name="cName" placeholder="Shortcut Location" class="form-control">
                  </div><!--HANGGANG DITO LANG BOI-->
                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-primary">       
                    <input type="submit" value="Save" class="btn btn-primary">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END PHYLUM MODAL-->
      
      <div class="card">
        
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Locality ID</th>
                  <th>Island</th>
                  <th>Region</th>
                  <th>Province</th>
                  <th>City</th>
                  <th>Area</th>
                  <th>Specific Location</th>
                  <th>Short Location</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody tbody id="showdata">
                        
            </tbody>
            </table>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
      $(document).ready(function () {
    $("#sisland").change(function () {
        var val = $(this).val();
        if (val == "Luzon") {
            $("#sregion").html("<option value='Region I'>Ilocos Region (Region 1)</option><option value='CAR'>Cordillera Administrative Region</option><option value='Region II'>Cagayan Valley (Region II)</option><option value='Region III'>Central Luzon (Region III)</option><option value='NCR'>National Capital Region (NCR)</option><option value='Region IV-A'>CALABARZON (Region IV-A)</option><option value='Region IV-B'>MIMAROPA (Region IV-B)</option><option value='Region V'>Bicol Region (Region V)</option>");
        } else if (val == "Visayas") {
            $("#sregion").html("<option value='Region VI'>Western Visayas(Region VI)</option><option value='Region VII'>Central Visayas (Region VII)</option><option value='Region VIII'>Eastern Visayas (Region VIII)</option>");
        } else if (val == "Mindanao") {
            $("#sregion").html("<option value='Region IX'>Zamboanga Peninsula (Region IX)</option><option value='Region X'>Northern Mindanao (Region X)</option><option value='Region XI'>Davao Region (Region XI)</option><option value='Region XII'>SOCCSKSARGEN (Region XII)</option><option value='Region XIII'>Caraga Region (Region XIII)</option><option value='ARMM'>Autonomous Region in Muslim Mindanao (ARMM)</option>");
        } else if (val == "islan0") {

        }
    });
});
    </script>

<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">  
    $(function(){
    
      //show
    showAllLocality();
    

    function showAllLocality(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showAllLocality',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intLocalityID+'</td>'+
                  '<td>'+data[i].strIsland+'</td>'+
                  '<td>'+data[i].strRegion+'</td>'+
                  '<td>'+data[i].strProvince+'</td>'+
                  '<td>'+data[i].strCity+'</td>'+
                  '<td>'+data[i].strArea+'</td>'+
                  '<td>'+data[i].strSpecificLocation+'</td>'+
                  '<td>'+data[i].strShortLocation+'</td>'+

                  '<td>'+
                    '<a href="javascript:;" class="btn btn-primary item-edit" data="'+data[i].intLocalityID+'">Edit</a>'+
                  '</td>'+
                  '</tr>';
          }
          $('#showdata').html(html);
        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }
//addddddd
function regionchange(selectObj){
  // var e = document.getElementById("sisland");
  //  var sisland = e.options[e.selectedIndex].value;
  var idx = selectObj.selectedIndex;
  var which = selectObj.options[idx].value;

  if (which=='Luzon') {
    html1 +='<option value="Region A">Region A</option>';
    $('#sregion').html(html1);
  }else if (which=='Visayas'){
   html2 +='<option value="Region B">Region B</option>';
    $('#sregion').html(html2);
  } else{
    //html +='<option value="Region C">Region C</option>';
    //$('#sregion').html(html);
    alert("shet");
  }
}





    });
</script>