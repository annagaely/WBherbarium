
        <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Maintenance</li>
            <li class="breadcrumb-item active">Access Accounts </li>
          </ul>
        </div>
      </div>

      <!-- ADD ACCES ACC MODAL-->
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Account</button>
        </div>  

        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add Account</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
        
         <div class="modal-body">
              
                <form>

                  <div class="form-group">
                    <label> Account ID: </label>
                    <input name= "AcountID" type="text" placeholder="Account ID" class="form-control" disabled>
                  </div>

                  <div class="form-group">
                    <label>Staff Name:</label>
                    <input name="StaffName" type="text" placeholder="Staff Name" class="form-control">
                  </div>
                  
                   <div class = "row"> 
          
                    <div class="col-sm-6" >
                    <label>Username:</label>
                    <input type="text" name="AAUName" placeholder="Username" class="form-control">
                  </div>


                  <div class="col-sm-6" >
                    <label>Password:</label>
                    <input type="text" name="AAPass" placeholder="Password" class="form-control">
                  </div>   
                </div>
                <br>


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
      <!--END ACCESS ACCOUNT MODAL-->         
      
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Curator Name</th>
                  <th>Username</th>
                  <th>Access Level</th>
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