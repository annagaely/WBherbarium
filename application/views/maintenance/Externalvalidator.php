
        <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Maintenance/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Maintenance</li>
            <li class="breadcrumb-item active">External Validator</li>
          </ul>
        </div>
      </div>
<!--ADD EV MODAL-->
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add External Validator</button>
        </div>         
        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add External Validator</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form><!--dito ka magbabago sa loob nito-->
                  <div class="row">
                  <div class="form-group col-sm-4">
                    <label>External Validator ID:</label>
                    <input type="text" placeholder="External Validator ID" class="form-control" disabled>
                  </div>
                  <div class="form-group col-sm-8">
                    <label>First Name:</label>
                    <input type="text" placeholder="First Name " class="form-control">
                  </div></div>
                  <div class="form-group">
                    <label>Middle Name:</label>
                    <input type="text" name="pName" placeholder="Middle Name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Last Name:</label>
                    <input type="text" name="cName" placeholder="Last Name" class="form-control">
                  </div>
                  <div class="row">
                  <div class="form-group col-sm-6">
                    <label>Contact Number:</label>
                    <input type="text" name="cName" placeholder="Contact Number" class="form-control">
                  </div>
                  <div class="form-group col-sm-6">
                    <label>Email Address:</label>
                    <input type="text" name="cName" placeholder="Email Address" class="form-control">
                  </div></div>
                  <div class="form-group">
                    <label>Institution:</label>
                    <input type="text" name="cName" placeholder="Institution" class="form-control">
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
                  <th>Validator Name</th>
                  <th>Institution</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody tbody id="showdata">
                        
            </tbody>
            </table>
        </div>
      </div>
    </div>

<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">  
    $(function(){
    
      //show
    showAllFamilyBoxes();
    

    function showAllFamilyBoxes(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showAllFamilyBoxes',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intBoxID+'</td>'+
                  '<td>'+data[i].strBoxNumber+'</td>'+
                  '<td>'+data[i].strFamilyName+'</td>'+
                  '<td>'+data[i].intBoxLimit+'</td>'+
                  '<td>'+
                    '<a href="javascript:;" class="btn btn-primary item-edit" data="'+data[i].intSpeciesID+'">Edit</a>'+
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
    });
</script>