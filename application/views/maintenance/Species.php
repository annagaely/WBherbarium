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
            <li class="breadcrumb-item active">Species </li>
          </ul>
        </div>
      </div>
      <!--ADD  species MODAL-->
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Species</button>
        </div>
        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add Species</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <form id= "addSpeciesForm" method="POST" enctype="multipart/form-data"><!--dito ka magbabago sa loob nito-->
<!--                  <div class="form-group">
                    <label>Author Name:</label> <label style="color: red">*</label>
                    <input id="authorName" type="text" name="txtaName" placeholder="Author's Name" class="form-control">
                  </div> --> 

                  <div class="form-group">
                    <label>Genus Name:</label> <label style="color: red">*</label>
                     <input list="genusname" name ="txtgID"  class="form-control" autocomplete="off">
                     <datalist id ='genusname'>
                     </datalist>
                  </div>
                  <div class="form-group">
                    <label>Species Name:</label> <label style="color: red">*</label>
                    <input id="speciesName" type="text" name="txtsName" placeholder="Species Name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Common Name:</label> <label style="color: red">*</label>
                    <input id="commonName" type="text" name="txtcoName" placeholder="Common Name" class="form-control">
                  </div>
                    <label>

                      <input type="checkbox" name="check1" id="plantknown" onclick="disableMyText();">   Known Species

                    </label>
                    <div class="form-group">
                    <label>Author Name:</label> <label style="color: red">*</label>
                     <input list="authorname" name ="txtaID"  id = 'author' class="form-control" autocomplete="off" disabled>
                     <datalist id ='authorname'>
                     </datalist>
                  </div>
                  <!--HANGGANG DITO LANG BOI-->
                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-secondary">
                    <input type="submit" value="Save"  id="btnSave" class="btn btn-primary">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END PHYLUM MODAL-->
      <!--ADD EDIT CLASS MODAL-->

        <!-- Modal-->
        <div id="myEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">

                <h5 id="exampleModalLabel" class="modal-title">Edit Phylum</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                <form id= "editSpeciesForm" method="POST" enctype="multipart/form-data">
                  <!-- <input type="hidden" name="act" id="act" value=""> -->
                  <div class="form-group">
                    <label>
                      <input type="hidden" name="txtId" value="0">
                    </label>
                    <label>Genus Name:</label> <label style="color: red">*</label>
                     <input list="genusname" name ="sesGID" placeholder="Family Name" class="form-control" autocomplete="off">
                     <datalist id ='genusname'>
                     </datalist>
                  </div>
                  <div class="form-group">
                    <label>Species Name:</label> <label style="color: red">*</label>
                    <input id="speciesName1" type="text" name="txteSName" placeholder="Class Name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Common Name:</label> <label style="color: red">*</label>
                    <input id="commonName1" type="text" name="txtecName" placeholder="Class Name" class="form-control">
                  </div>
                    <div class="form-group">
                    <label>Author Name:</label> <label style="color: red">*</label>
                     <input list="authorname" name ="txteaID"  id = 'author' class="form-control" autocomplete="off">
                     <datalist id ='authorname'>
                     </datalist>
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
      <!--END EDIT CLASS MODAL-->
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table dataTable no-footer" id="manageSpeciestbl">
                      <thead>
                        <tr>
                          <!-- <th scope="col" width= "10%">Species ID</th> -->
                          <th scope="col" width= "10%">Genus Name</th>
                          <th scope="col" width= "10%">Species Name</th>
                          <th scope="col" width= "10%">Common Name</th>
                          <th scope="col" width= "10%">Authors Name</th>
                          <th scope="col" width= "10%">Actions</th>
                        </tr>
                      </thead>
                     <!-- <tbody tbody id="showdata">
            </tbody>    -->
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
     function disableMyText(){
          if(document.getElementById("plantknown").checked == true)
          {
              document.getElementById("author").disabled=false;
             
          }
          else
          {
            document.getElementById("author").disabled=true;
          }
     }
  function showAllSpecies()
  {
    $('#manageSpeciestbl').dataTable().fnClearTable();
    $('#manageSpeciestbl').dataTable().fnDraw();
    $('#manageSpeciestbl').dataTable().fnDestroy();
    $('#manageSpeciestbl').dataTable({
      "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showAllSpecies')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [[0,'asc']],
         "fnInitComplete": function(){

         }
     });
   }

    $(document).ready(function() {
      //show
    showAllSpecies();
    showSpeciesGenusName();
    showSpeciesAuthorsName();
function showSpeciesAuthorsName(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showSpeciesAuthorsName',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<option value="'+data[i].strAuthorsName+'">'+data[i].strAuthorsName+'</option>';
          }
          $('#authorname').html(html);;
        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }

function showSpeciesGenusName(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showSpeciesGenusName',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<option value="'+data[i].strGenusName+'">'+data[i].strGenusName+'</option>';
          }
          $('#genusname').html(html);
          $('#showSpeciesGenusName1').html(html);
        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }


$('#btnSave').click(function(event){
  var url = '<?php echo base_url()?>admin/addSpecies'
      var data = $('#addSpeciesForm').serialize();
      alert($('#plantknown').val());
      //validate form
      /*if($('#genusName').val()!=''){
        if($('#speciesName').val()!=''){
          if($('#commonName').val()!=''){
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
          url: '<?php echo base_url() ?>admin/addSpecies',
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#addSpeciesForm').modal('hide');
              $('#addSpeciesForm')[0].reset();
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
                location.reload();
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
      }*/
    });

$('#btnEditSave').click(function(){
      var data = $('#editSpeciesForm').serialize();
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/updateSpecies',
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#editSpeciesForm').modal('hide');
              $('#editSpeciesForm')[0].reset();
              if(response.type=='add'){
                var type = 'added'
              }else if(response.type=='update'){
                var type ="updated"
              }
              showAllPhylum();
            }else{
              alert('Error');
            }
          },
          error: function(){
            alert('Could not update data');
          }
        });
    });

    //edit class
 $(document).on('click', '.species-edit', function(){
      var id = $(this).attr('data');
      $('#myEditModal').modal('show');
      $('#myEditModal').find('.modal-title').text('Edit Species');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editSpecies',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=sesGID').val(data.strGenusName);
          $('input[name=txteSName]').val(data.strSpeciesName);
          $('input[name=txtecName]').val(data.strCommonName);
          $('input[name=txteaID]').val(data.strAuthorsName);
          $('input[name=txtId]').val(data.intSpeciesID);

        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });

  });
</script>
