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
            <li class="breadcrumb-item active">Species Author</li>
          </ul>
        </div>
      </div>

      <!--ADD PHYLUM MODAL HAHAHAHAHAHA-->
     <div class="card">
        <div class="card-header d-flex align-items-center" >
          <button type="button" id="btnAdd " data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Species Author</button>
        </div>

        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">

                <h5 id="exampleModalLabel" class="modal-title">Add Species Author</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                <form id= "addAuthorForm" method="POST" enctype="multipart/form-data" class="needs-validation">
                  <!-- <input type="hidden" name="act" id="act" value=""> -->

                  <div class="form-group">
                    <label>Author Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txtAName" id="strAuthorName" placeholder="Author Name" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Species Author Suffix:</label> <label style="color: red">*</label>
                    <input type="text" name="txtSASuffix" id="strAuthorSuffix" placeholder="Species Author Suffix" class="form-control" >
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

                <h5 id="exampleModalLabel" class="modal-title">Edit Species Author</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                <form id= "editAuthorForm" method="POST" enctype="multipart/form-data">
                  <!-- <input type="hidden" name="act" id="act" value=""> -->

                 <div class="form-group">
                  <input type="hidden" name="txtId" value="0">
                    <label>Author Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txteAName" id="strAuthorName1" placeholder="Author Name" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Species Author Suffix:</label> <label style="color: red">*</label>
                    <input type="text" name="txteSASuffix" id="strAuthorSuffix1" placeholder="Species Author Suffix" class="form-control" >
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
            <table class="table dataTable no-footer" id="manageAuthortbl">
              <thead>
                <tr>
                  <th scope="col" width= "10%">Author</th>
                  <th scope="col" width= "10%">Species Author Sufix</th>
                  <th scope="col" width= "10%">Actions</th>
                </tr>
              </thead>
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
    document.getElementById("addAuthorForm").reset();
}

</script>
<script type="text/javascript">

    function showAllAuthor()
        {
          $('#manageAuthortbl').dataTable().fnClearTable();
          $('#manageAuthortbl').dataTable().fnDraw();
          $('#manageAuthortbl').dataTable().fnDestroy();
          $('#manageAuthortbl').dataTable({
            "autoWidth":false,
              "processing": true,
              "serverSide": false,
              "sAjaxSource": "<?php echo base_url('admin/showAllAuthor')?>",
              "deferLoading": 10,
              "bPaginate": true,
              "aaSorting": [],
              "fnInitComplete": function(){
              }
          });
        }


      $(document).ready(function(){ 

    //show
    showAllAuthor();

$(document).on('click', '.author-edit', function(e){
      var id = $(this).attr('data');
      $('#myEditModal').modal('show');
      $('#myEditModal').find('.modal-title').text('Edit Author');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editAuthor',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txteAName]').val(data.strAuthorsName);
          $('input[name=txteSASuffix]').val(data.strSpeciesSuffix);
          $('input[name=txtId]').val(data.intAuthorID);
        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });

$('#btnSave').click(function(event){
      var url = '<?php echo base_url() ?>admin/addAuthor';
      var data = $('#addAuthorForm').serialize();
      //validate form
      
        if($('#strAuthorName').val()!=''){
          if($('#strAuthorSuffix').val()!=''){
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
                      text: 'Author has been saved.',
                      type: 'success',
                      timer: 1500,
                      showConfirmButton: false
                    }).then(function() {
                    $('#manageAuthortbl').dataTable().fnDestroy();
                    showAllAuthor();
                    $('#myModal').modal('hide');
                    document.getElementById("addAuthorForm").reset();
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
    });
  
$('#btnEditSave').click(function(event){
      var data = $('#editAuthorForm').serialize();
      
        if($('#strAuthorName1').val()!=''){
          if($('#strAuthorSuffix1').val()!=''){
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
                  url: '<?php echo base_url() ?>admin/updateAuthor',
                  data: data,
                  async: false,
                  dataType: 'json',
                  success: function(response){
                    if(response.success){
                      $('#editAuthorForm').modal('hide');
                      $('#editAuthorForm')[0].reset();
                      if(response.type=='add'){
                        var type = 'added'
                      }else if(response.type=='update'){
                        var type ="updated"
                      }
                      let timerInterval
                      swal({
                        title: 'Saved',
                        text: 'Author has been saved.',
                        type: 'success',
                        timer: 1500,
                        showConfirmButton: false
                      }).then(function() {
                        event.preventDefault();
                        $('#manageAuthortbl').dataTable().fnDestroy();
                    showAllAuthor();
                    $('#myEditModal').modal('hide');
                    document.getElementById("editAuthorForm").reset();
                    
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


    });





  });
        </script>