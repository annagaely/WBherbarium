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
            <li class="breadcrumb-item active">Add Species Alternate Name</li>
          </ul>
        </div>
</div>

      <!--ADD PHYLUM MODAL HAHAHAHAHAHA-->
     <div class="card">
        <div class="card-header d-flex align-items-center" >
          <button type="button" id="btnAdd " data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Species Alternate Name</button>
        </div>

        <!-- Modal-->
<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
  <div role="document" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

                <h5 id="exampleModalLabel" class="modal-title">Add Species Alternate Name</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()"><span aria-hidden="true">&times;</span></button>
              </div>
         <div class="modal-body">

                <form id= "addSpeciesAlterateForm" method="POST" enctype="multipart/form-data">

                  <div class="form-group">
                    <label>Taxon Name:</label> <label style="color: red">*</label>
                    <select name="txttaxonName" id="strTaxonName" placeholder="Taxon Name" class="form-control" >
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Language:</label> <label style="color: red">*</label>
                    <input type="text" name="txtLanguage" id="strLanguage" placeholder="Language" class="form-control" >
                  </div>
                 
                  <div class="form-group">
                    <label>Alternate Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txtAName" id="strAlternateName" placeholder="Alternate Name" class="form-control" >
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

                <h5 id="exampleModalLabel" class="modal-title">Edit Species Alternate Name</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                <form id= "editSpeciesAlternateForm" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="txtId" id="act" value="0">

                <div class="form-group">
                    <label>Taxon Name:</label> <label style="color: red">*</label>
                    <input list="speciesname" name="txtetaxonName" id="strTaxonName" placeholder="Taxon Name" class="form-control" >
                    <datalist id="speciesname">
                    </datalist>
               </div>
                <div class="form-group">
                    <label>Language:</label> <label style="color: red">*</label>
                    <input type="text" name="txteLanguage" id="strLanguage" placeholder="Language" class="form-control" >
              </div>
              <div class="form-group">
                    <label>Alternate Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txteAName" id="strAlternateName" placeholder="Alternate Name" class="form-control" >
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
            <table class="table dataTable no-footer" id="manageSpeciesAlternatetbl">
              <thead>
                <tr>
                  <!-- <th scope="col" width= "10%">Phylum ID</th> -->
                  <th scope="col" width= "10%">Taxon Name</th>
                  <th scope="col" width= "10%">Language</th>
                  <th scope="col" width= "10%">Alternate Name</th>
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

<script type="text/javascript">

    function showAllAltName()
        {
          $('#manageSpeciesAlternatetbl').dataTable().fnClearTable();
          $('#manageSpeciesAlternatetbl').dataTable().fnDraw();
          $('#manageSpeciesAlternatetbl').dataTable().fnDestroy();
          $('#manageSpeciesAlternatetbl').dataTable({
            "autoWidth":false,
              "processing": true,
              "serverSide": false,
              "sAjaxSource": "<?php echo base_url('admin/showAllAltName')?>",
              "deferLoading": 10,
              "bPaginate": true,
              "aaSorting": [[0,'asc']],
              "fnInitComplete": function(){
              }
          });
        }


      $(document).ready(function(){ 

    //show
    showAllAltName();
showAllSpeciesName();
$(document).on('click', '.altname-edit', function(e){
      var id = $(this).attr('data');
      $('#myEditModal').modal('show');
      $('#myEditModal').find('.modal-title').text('Edit Author');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editAltName',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txtetaxonName]').val(data.strScientificName);
          $('input[name=txteLanguage]').val(data.strLanguage);
          $('input[name=txteAName]').val(data.strAlternateName);
          $('input[name=txtId]').val(data.intAltNameID);
        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });
function showAllSpeciesName(){
     $.ajax({
       type: 'ajax',
       url: '<?php echo base_url() ?>admin/showAllSpeciesName',
       async: false,
       dataType: 'json',
       success: function(data){
         var html = '';
         var i;
         for(i=0; i<data.length; i++){
           html +='<option value="'+data[i].intSpeciesID+'">'+data[i].strScientificName+'</option>';
         }
         $('#strTaxonName').html(html);
         $('#speciesname').html(html);
       },
       error: function(){
         alert('Could not get Data from Database');
       }
     });
   };

$('#btnSave').click(function(event){
      var url = '<?php echo base_url() ?>admin/addAltName';
      var data = $('#addSpeciesAlterateForm').serialize();
      //validate form
      
        if($('#strTaxonName').val()!=''){
          if($('#strLanguage').val()!=''){
             if($('#strAlternateName').val()!=''){
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
                      text: 'Plant Type has been saved.',
                      type: 'success',
                      timer: 1500,
                      showConfirmButton: false
                    }).then(function() {
                    $('#manageSpeciesAlternatetbl').dataTable().fnDestroy();
                    showAllAltName();
                    $('#myModal').modal('hide');
                     document.getElementById("addSpeciesAlterateForm").reset();
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
      var data = $('#editSpeciesAlternateForm').serialize();
      
        if($('#strPlantCode1').val()!=''){
          if($('#strPlantType1').val()!=''){
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
                  url: '<?php echo base_url() ?>admin/updateAltName',
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
                        text: 'Plant Type has been saved.',
                        type: 'success',
                        timer: 1500,
                        showConfirmButton: false
                      }).then(function() {
                        event.preventDefault();
                        $('#managePlantTypetbl').dataTable().fnDestroy();
                    showAllAltName();
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

