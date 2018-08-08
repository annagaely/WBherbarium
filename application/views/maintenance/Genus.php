
<div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Maintenance/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Maintenance</li>
            <li class="breadcrumb-item">Taxonomic Hierarchy</li>
            <li class="breadcrumb-item active">Genus </li>
          </ul>
        </div>
      </div>
  <!--ADD FAM MODAL-->
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Genus</button>
        </div>         
        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add Genus</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">

                <form id= "addGenusForm" method="POST" enctype="multipart/form-data"><!--dito ka magbabago sa loob nito-->s
                  <div class="form-group">
                    <label>Family Name:</label>
                    <select id="showGenusFamilyName" name ="txtoID" class="form-control">
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Genus Name:</label>
                    <input type="text" name="txtgName" placeholder="Genus Name" class="form-control">
                  </div><!--HANGGANG DITO LANG BOI-->
                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-primary">       
                    <input type="submit" id = "btnSave" value="Save" class="btn btn-primary">
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

                <form id= "editGenusForm" method="POST" enctype="multipart/form-data"> 
                  <!-- <input type="hidden" name="act" id="act" value=""> -->
                  <div class="form-group">
                    <label>
                      <input type="hidden" name="txtId" value="0">
                    </label>
                    <label>Order Name:</label>
                     <select id="showGenusFamilyName1" name ="segFID" class="form-control">
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Family Name:</label>
                    <input type="text" name="txteGName" placeholder="Class Name" class="form-control">
                  </div> 
                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-primary">       
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
                  <th>Genus ID</th>
                  <th>Family Name</th>
                  <th>Genus Name</th>
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
    showAllGenus();
    

    function showAllGenus(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showAllGenus',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intGenusID+'</td>'+
                  '<td>'+data[i].strFamilyName+'</td>'+
                  '<td>'+data[i].strGenusName+'</td>'+
                  '<td>'+
                    '<a href="javascript:;" class="btn btn-primary genus-edit" data="'+data[i].intGenusID+'">Edit</a>'+
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
    showGenusFamilyName();
      function showGenusFamilyName(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showGenusFamilyName',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<option value="'+data[i].intFamilyID+'">'+data[i].strFamilyName+'</option>';
          }
          $('#showGenusFamilyName').html(html);
          $('#showGenusFamilyName1').html(html);
        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }
    $('#btnSave').click(function(){
      var data = $('#addGenusForm').serialize();
      //validate form

        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/addGenus',
          data: data,
          async: false,
          dataType: 'json',
          success: function($response){
            if(response.success){
              $('#addGenusForm').modal('hide');
              $('#addGenusForm')[0].reset();
              if(response.type=='add'){
                var type = 'added'
              }else if(response.type=='update'){
                var type ="updated"
              }
            }else{
              alert('Error');
            }
          },
          error: function(){
            alert('Could not save Data');
          }
        });
      
    });

$('#btnEditSave').click(function(){
      var data = $('#editGenusForm').serialize();
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/updateGenus',
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#editGenusForm').modal('hide');
              $('#editFamilyForm')[0].reset();
              if(editGenusForm.type=='add'){
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
    $('#showdata').on('click', '.genus-edit', function(){
      var id = $(this).attr('data');
      $('#myEditModal').modal('show');
      $('#myEditModal').find('.modal-title').text('Edit Genus');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editGenus',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txteGName]').val(data.strGenusName);
          $('input[name=txtId]').val(data.intGenusID);
          
        },
        error: function(){
          alert('Could not Edit Data');
        }
      
    });

  });
  });
</script>