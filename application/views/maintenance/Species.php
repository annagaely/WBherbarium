

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
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form id= "addSpeciesForm" method="POST" enctype="multipart/form-data"><!--dito ka magbabago sa loob nito-->
                  <div class="form-group">
                    <label>Genus Name:</label> <label style="color: red">*</label>
                    <select id="showSpeciesGenusName" name ="txtgID" class="form-control">
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Species Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txtsName" placeholder="Family Name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Common Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txtcoName" placeholder="Common Name" class="form-control">
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
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">  

                <form id= "editSpeciesForm" method="POST" enctype="multipart/form-data"> 
                  <!-- <input type="hidden" name="act" id="act" value=""> -->
                  <div class="form-group">
                    <label>
                      <input type="hidden" name="txtId" value="0">
                    </label>
                    <label>Genus Name:</label> <label style="color: red">*</label>
                     <select id="showSpeciesGenusName1" name ="sesGID" class="form-control">
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Species Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txteSName" placeholder="Class Name" class="form-control">
                  </div> 
                  <div class="form-group">
                    <label>Common Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txtecName" placeholder="Class Name" class="form-control">
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
                          <th>Species ID</th>
                          <th>Genus Name</th>
                          <th>Species Name</th>
                          <th>Common Name</th>
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
    showAllSpecies();
    

    function showAllSpecies(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showAllSpecies',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intSpeciesID+'</td>'+
                  '<td>'+data[i].strGenusName+'</td>'+
                  '<td>'+data[i].strSpeciesName+'</td>'+
                  '<td>'+data[i].strCommonName+'</td>'+
                  '<td>'+
                    '<a href="javascript:;" class="btn btn-primary species-edit" data="'+data[i].intSpeciesID+'">Edit</a>'+
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
    showSpeciesGenusName();
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
            html +='<option value="'+data[i].intGenusID+'">'+data[i].strGenusName+'</option>';
          }
          $('#showSpeciesGenusName').html(html);
          $('#showSpeciesGenusName1').html(html);
        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }
    $('#btnSave').click(function(){
      var data = $('#addSpeciesForm').serialize();
      //validate form

        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/addSpecies',
          data: data,
          async: false,
          dataType: 'json',
          success: function($response){
            if(response.success){
              $('#addSpeciesForm').modal('hide');
              $('#addSpeciesForm')[0].reset();
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
    $('#showdata').on('click', '.species-edit', function(){
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
          $('input[name=txteSName]').val(data.strSpeciesName);
          $('input[name=txtecName]').val(data.strCommonName);
          $('input[name=txtId]').val(data.intSpeciesID);
          
        },
        error: function(){
          alert('Could not Edit Data');
        }
      
    });

  });

  });
</script>