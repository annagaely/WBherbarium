<script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.css">

<div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Maintenance</li>
            <li class="breadcrumb-item">Taxonomic Hierarchy</li>
            <li class="breadcrumb-item active">Phylum </li>
          </ul>
        </div>
      </div>

      <!--ADD PHYLUM MODAL HAHAHAHAHAHA-->
     <div class="card">
        <div class="card-header d-flex align-items-center" >
          <button type="button" id="btnAdd " data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Phylum</button>
        </div>

        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">

                <h5 id="exampleModalLabel" class="modal-title">Add Phylum</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                <form id= "addPhylumForm" method="POST" enctype="multipart/form-data">
                  <!-- <input type="hidden" name="act" id="act" value=""> -->

                  <div class="form-group">
                    <label>Domain Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txtdName" id="strDomainName" placeholder="Domain Name" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Kingdom Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txtkName" id="strKingdomName" placeholder="Kingdom Name" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>

                      <input type="checkbox" name="check1" id="plantCategory" onclick="disableMyText();"> Under the Plant Category

                    </label>
                  </div>
                  <div class="form-group">
                    <label>Phylum Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txtpName" id="pNameid" placeholder="Phylum Name" class="form-control" >
                  </div>
                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-secondary">
                    <input type="submit" value="Save" id='btnSave' class="btn btn-primary">
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END PHYLUM MODAL-->
        <!--ADD EDIT PHYLUM MODAL-->

        <!-- Modal-->
        <div id="myEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">

                <h5 id="exampleModalLabel" class="modal-title">Edit Phylum</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                <form id= "editPhylumForm" method="POST" enctype="multipart/form-data">
                  <!-- <input type="hidden" name="act" id="act" value=""> -->

                  <div class="form-group">
                    <label>Domain Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txtedName" id="strDomainName1" placeholder="Domain Name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Kingdom Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txtekName" id="strKingdomName1" placeholder="Kingdom Name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>
                      <input type="checkbox" name="check1" id="plantCategory1" onclick="disableMyText1(); "> Under the Plant Category
                      <input type="hidden" name="txtId" value="0">
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Phylum Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txtepName" id="pNameid1" placeholder="Phylum Name" class="form-control">
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
      <!--END PHYLUM MODAL-->
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table dataTable no-footer" id="managePhylumtbl">
              <thead>
                <tr>
                  <!-- <th scope="col" width= "10%">Phylum ID</th> -->
                  <th scope="col" width= "10%">Domain Name</th>
                  <th scope="col" width= "10%">Kingdom Name</th>
                  <th scope="col" width= "10%">Phylum Name</th>
                  <th scope="col" width= "10%">Actions</th>
                </tr>
              </thead>
             <!--  <tbody tbody id="showdata">
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

<script>
function resetForm() {
    document.getElementById("addPhylumForm").reset();
}

</script>

<script type="text/javascript" >

     function disableMyText(){
          if(document.getElementById("plantCategory").checked == true)
          {
              document.getElementById("strDomainName").value = "Eukaryota";
              document.getElementById("strKingdomName").value = "Plantae";
          }
          else
          {
            document.getElementById("strDomainName").value = "";
            document.getElementById("strKingdomName").value = "";
          }
     }
     function disableMyText1(){
          if(document.getElementById("plantCategory1").checked == true)
          {
              document.getElementById("strDomainName1").value = "Eukaryota";
              document.getElementById("strKingdomName1").value = "Plantae";

          }

          else{
            document.getElementById("strDomainName1").value = "";
            document.getElementById("strKingdomName1").value = "";
          }
     }

     </script>
     
    <script type="text/javascript">

    function showAllPhylum()
        {
          $('#managePhylumtbl').dataTable().fnClearTable();
          $('#managePhylumtbl').dataTable().fnDraw();
          $('#managePhylumtbl').dataTable().fnDestroy();
          $('#managePhylumtbl').dataTable({
            "autoWidth":false,
              "processing": true,
              "serverSide": false,
              "sAjaxSource": "<?php echo base_url('admin/showAllPhylum')?>",
              "deferLoading": 10,
              "bPaginate": true,
              "aaSorting": [[0,'asc']],
              "fnInitComplete": function(){
              }
          });
        }

    $(document).ready(function(){

    //show
    showAllPhylum();

    //add
    $('#btnSave').click(function(event){
      var url = '<?php echo base_url() ?>admin/addPhylum';
      var data = $('#addPhylumForm').serialize();
      //validate form
      if($('#strDomainName').val()!=''){
        if($('#strKingdomName').val()!=''){
          if($('#pNameid').val()!=''){
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
                url: url,
                data: data,
                async: false,
                dataType: 'json',
                success: function(response){
                  if(response.success){
                    if(response.type=='add'){
                      var type = 'added'
                    }else if(response.type=='update'){
                      var type ="updated"
                    }
                    let timerInterval
                    swal({
                      title: 'Saved',
                      text: 'Your file has been saved.',
                      type: 'success',
                      timer: 1500,
                      showConfirmButton: false
                    }).then(function() {
                    $('#managePhylumtbl').dataTable().fnDestroy();
                    showAllPhylum();
                    $('#myModal').modal('hide');
                    document.getElementById("addPhylumForm").reset();
                    event.preventDefault();
                    });
                    
                  }
                },
                error: function(){
                  alert('Could not save Data');
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
      }else{
        event.preventDefault();
        swal({
          type: 'error',
          title: 'Incomplete input!',
          text: 'Please fill up all the required fields.'
        });
        }
    });

    $('#btnEditSave').click(function(event){
      var data = $('#editPhylumForm').serialize();
      if($('#strDomainName1').val()!=''){
        if($('#strKingdomName1').val()!=''){
          if($('#pNameid1').val()!=''){
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
                  url: '<?php echo base_url() ?>admin/updatePhylum',
                  data: data,
                  async: false,
                  dataType: 'json',
                  success: function(response){
                    if(response.success){
                      $('#editPhylumForm').modal('hide');
                      $('#editPhylumForm')[0].reset();
                      if(response.type=='add'){
                        var type = 'added'
                      }else if(response.type=='update'){
                        var type ="updated"
                      }
                      let timerInterval
                      swal({
                        title: 'Saved',
                        text: 'Your file has been saved.',
                        type: 'success',
                        timer: 1500,
                        showConfirmButton: false
                      }).then(function() {
                        event.preventDefault();
                        $('#managePhylumtbl').dataTable().fnDestroy();
                    showAllPhylum();
                    $('#myEditModal').modal('hide');
                    document.getElementById("editPhylumForm").reset();
                    
                      });
                      
                    }else{
                      alert('Error');
                    }
                  },
                  error: function(){
                    alert('Could not update data');
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
      }else{
        event.preventDefault();
        swal({
          type: 'error',
          title: 'Incomplete input!',
          text: 'Please fill up all the required fields.'
        });
        }
    });
    //edit phylum
     $(document).on('click', '.phylum-edit', function(e){
      var id = $(this).attr('data');
      $('#myEditModal').modal('show');
      $('#myEditModal').find('.modal-title').text('Edit Phylum');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editPhylum',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txtedName]').val(data.strDomainName);
          $('input[name=txtekName]').val(data.strKingdomName);
          $('input[name=txtepName]').val(data.strPhylumName);
          $('input[name=txtId]').val(data.intPhylumID);
        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });


    });
     </script>
