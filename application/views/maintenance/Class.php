

        <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Maintenance</li>
            <li class="breadcrumb-item">Taxonomic Hierarchy</li>
            <li class="breadcrumb-item active">Class </li>
          </ul>
        </div>
      </div>
  <!--ADD Class MODAL-->
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <button type="button" button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Class</button>
        </div>
        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide"  data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add Class</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form id= "addClassForm" method="POST" enctype="multipart/form-data"> <!--dito ka magbabago sa loob nito-->
                  <div class="form-group">
                    <label>Phylum Name:</label> <label style="color: red">*</label>
                    <select id="showClassPhylumName" name ="spID" class="form-control">
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Class Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txtCName" placeholder="Class Name" class="form-control">
                  </div><!--HANGGANG DITO LANG BOI-->
                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-secondary">
                    <input type="submit" value="Save" id="btnSave" class="btn btn-primary">
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
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">

                <form id= "editClassForm" method="POST" enctype="multipart/form-data">
                  <!-- <input type="hidden" name="act" id="act" value=""> -->
                  <div class="form-group">
                    <label>
                      <input type="hidden" name="txtId" value="0">
                    </label>
                    <label>Phylum Name:</label> <label style="color: red">*</label>
                     <select id="showClassPhylumName2" name ="speID" class="form-control">
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Class Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txteCName" placeholder="Class Name" class="form-control">
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
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Class ID</th>
                          <th>Phylum Name</th>
                          <th>Class Name</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody tbody id="showdata">
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <script>
function resetForm() {
    document.getElementById("addClassForm").reset();
}

</script>
         <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">
    $(function(){

      //show
    showAllClass();
    showClassPhylumName();

    function showAllClass(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showAllClass',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intClassID+'</td>'+
                  '<td>'+data[i].strPhylumName+'</td>'+
                  '<td>'+data[i].strClassName+'</td>'+
                  '<td>'+
                    '<a href="javascript:;" class="btn btn-primary class-edit" data="'+data[i].intClassID+'">Edit</a>'+
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

      function showClassPhylumName(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showClassPhylumName',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<option value="'+data[i].intPhylumID+'">'+data[i].strPhylumName+'</option>';
          }
          $('#showClassPhylumName').html(html);
          $('#showClassPhylumName2').html(html);
        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }
    $('#btnSave').click(function(){
      var data = $('#addClassForm').serialize();
      //validate form

        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/addClass',
          data: data,
          async: false,
          dataType: 'json',
          success: function($response){
            if(response.success){
              $('#addClassForm').modal('hide');
              $('#addClassForm')[0].reset();
              if(response.type=='add'){
                var type = 'added'
              }else if(response.type=='update'){
                var type ="updated"
              }
              showAllEmployee();
            }else{
              alert('Error');
            }
          },
          error: function(){
            alert('Could not save Data');
          }
        });

    });
    //update class
  $('#btnEditSave').click(function(){
      var data = $('#editClassForm').serialize();
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/updateClass',
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#editClassForm').modal('hide');
              $('#editClassForm')[0].reset();
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
    $('#showdata').on('click', '.class-edit', function(){
      var id = $(this).attr('data');
      $('#myEditModal').modal('show');
      $('#myEditModal').find('.modal-title').text('Edit Class');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editClass',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txtecPName]').val(data.strPhylumName);
          $('input[name=txteCName]').val(data.strClassName);
          $('input[name=txtId]').val(data.intClassID);

        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });

  });
</script>
