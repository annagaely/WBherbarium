
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
                <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()"><span aria-hidden="true">&times;</span></button>
              </div>

         <div class="modal-body">

               <form id= "addAccountForm" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Staff Name:</label> <label style="color: red">*</label>
                     <select id="showStaffName" name ="StaffName" class="form-control">
                     </select>
                  </div>

                   <div class = "row">
                    <div class="col-sm-6" >
                    <label>Username:</label> <label style="color: red">*</label>
                    <input type="text" name="AAUName" placeholder="Username" class="form-control">
                  </div>
                  <div class="col-sm-6" >
                    <label>Password:</label> <label style="color: red">*</label>
                    <input type="Password" name="AAPass" id="AApassword" placeholder="Password" class="form-control">
                    <input name="checkPass" id= "checkPass" type="checkbox" onclick="showPassword()">
                   <label for="checkPass"> Show Password</label>
                  </div>
                </div>
    
                <br>


                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-secondary">
                    <input type="submit" id="btnSave" value="Save" class="btn btn-primary">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END ACCESS ACCOUNT MODAL-->
      <!--start edit ACCESS ACCOUNT MODAL-->
              <div id="myEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add Account</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
              </div>

         <div class="modal-body">

               <form id= "editAccountForm" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Staff Name:</label> <label style="color: red">*</label>
                     <select id="showStaffName2" name ="eStaffName" class="form-control">
                     </select>
                  </div>

                   <div class = "row">

                    <div class="col-sm-6" >
                    <label>Username:</label> <label style="color: red">*</label>
                    <input type="text" name="eAAUName" placeholder="Username" class="form-control">
                    <input type="hidden" name="txtId" value="0">
                  </div>


                  <div class="col-sm-6" >
                    <label>Password:</label> <label style="color: red">*</label>
                    <input type="Password" name="eAAPass"  id= "eAAPassword" placeholder="Password" class="form-control">
                    <input name="echeckPass" id= "echeckPass" type="checkbox" onclick="eshowPassword()">
                   <label for="echeckPass"> Show Password</label>
                  </div>
                </div>
                <br>


                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-secondary">
                    <input type="submit" id="btnEditSave" value="Save" class="btn btn-primary">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table dataTable no-footer" id="manageAAccountstbl">
              <thead>
                <tr>
                  <th scope="col" width= "10%">Account ID</th>
                  <th scope="col" width= "10%">Name</th>
                  <th scope="col" width= "10%">Username</th>
                  <th scope="col" width= "10%">Access Level</th>
                  <th scope="col" width= "10%">Actions</th>
                </tr>
              </thead>
<!--               <tbody tbody id="showdata">
            </tbody> -->
            </table>
        </div>
      </div>
    </div>

 </main>

      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/popper.js/umd/popper.min.js"> </script>
      <!--Table-->
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/dataTables.bootstrap4.min.js"></script>
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.dataTables.min.js"></script>


<script type="text/javascript">
  function showPassword() {
    var x = document.getElementById("AApassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
} 
</script>

<script type="text/javascript">
  
 function eshowPassword() {
    var y = document.getElementById("eAAPassword");
    if (y.type === "password") {
        y.type = "text";
    } else {
        y.type = "password";
    }
}
</script>
<script>
function resetForm() {
    document.getElementById("addAccountForm").reset();
}

</script>

 <script type="text/javascript">
    function showAllAccounts(){

          $('#manageAAccountstbl').dataTable().fnClearTable();
          $('#manageAAccountstbl').dataTable().fnDraw();
          $('#manageAAccountstbl').dataTable().fnDestroy();
          $('#manageAAccountstbl').dataTable({
              "processing": true,
              "serverSide": false,
              "sAjaxSource": "<?php echo base_url('admin/showAllAccounts')?>",
              "deferLoading": 10,
              "bPaginate": true,
              "aaSorting": [[0,'asc']],
              "fnInitComplete": function(){

              }
          });
        }

$(document).ready(function(){
      //show-
    showAllAccounts();
    showStaffName();


 function showStaffName(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showStaffName',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<option value="'+data[i].strFullName+'">'+data[i].strFullName+'</option>';
          }
          $('#showStaffName').html(html);
          $('#showStaffName2').html(html);
        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });

}

$('#btnSave').click(function(event){
      var data = $('#addAccountForm').serialize();
      //validate form
    if(confirm("Save data?")){
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/addAccounts',
          data: data,
          async: false,
          dataType: 'json',
          success: function($response){
            if(response.success){
              $('#addAccountForm').modal('hide');
              $('#addAccountForm')[0].reset();
              if(response.type=='add'){
                var type = 'added'
              }else if(response.type=='update'){
                var type ="updated"
              }
              alert('Account Successfully Added!');
              location.reload();
            }else{
              alert('Please fill up all fields.');
            }
          },
          error: function(){
            alert('Could not save Data');
         }
        });
        }else{
        event.preventDefault();
        }
    });
 


$(document).on('click', '.account-edit', function(){
      var id = $(this).attr('data');
      $('#myEditModal').modal('show');

      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editAccounts',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=eAAUName]').val(data.strUsername);
          $('input[name=eAAPass]').val(data.strPassword);
          $('input[name=txtId]').val(data.intAccountID);
          $('#myEditModal').find('.modal-title').text('Editing: '+data.strFullName+'');
        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });

$('#btnEditSave').click(function(){
      var data = $('#editAccountForm').serialize();
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/updateAccounts',
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response==true){
              $('#myEditModal').modal('hide');
              $('#editAccountForm')[0].reset();
         //     if(response.type=='add'){
           //     var type = 'added'
       //       }else if(response.type=='update'){
          //      var type ="updated"
              //}
              showAllCollector();
            }
            else{
             alert('Error');
            }
          },
          error: function(){
            alert('Could not update data');
          }
        });
    });
});
</script>
