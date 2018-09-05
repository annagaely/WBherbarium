
        <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Maintenance</li>
            <li class="breadcrumb-item">Taxonomic Hierarchy</li>
            <li class="breadcrumb-item active">Family </li>
          </ul>
        </div>
      </div>
  <!--ADD FAM MODAL-->
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Family</button>
        </div>         
        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add Family</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">

                <form id= "addFamilyForm" method="POST" enctype="multipart/form-data"><!--dito ka magbabago sa loob nito-->
                  <div class="form-group">
                    <label>Order Name:</label> <label style="color: red">*</label>
                    <select id="showFamilyOrderName" name ="txtoID" class="form-control">
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Family Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txtfName" placeholder="Family Name" class="form-control">
                  </div><!--HANGGANG DITO LANG BOI-->
                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-secondary">       
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

                <form id= "editFamilyForm" method="POST" enctype="multipart/form-data"> 
                  <!-- <input type="hidden" name="act" id="act" value=""> -->
                  <div class="form-group">
                    <label>
                      <input type="hidden" name="txtId" value="0">
                    </label>
                    <label>Order Name:</label> <label style="color: red">*</label>
                     <select id="showFamilyOrderName1" name ="seOID" class="form-control">
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Family Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txteFName" placeholder="Class Name" class="form-control">
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
                  <th>Family ID</th>
                  <th>Order Name</th>
                  <th>Family Name</th>
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
    showAllFamily();
    

    function showAllFamily(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showAllFamily',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intFamilyID+'</td>'+
                  '<td>'+data[i].strOrderName+'</td>'+
                  '<td>'+data[i].strFamilyName+'</td>'+
                  '<td>'+
                    '<a href="javascript:;" class="btn btn-primary family-edit" data="'+data[i].intFamilyID+'">Edit</a>'+
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
    showFamilyOrderName();
      function showFamilyOrderName(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showFamilyOrderName',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<option value="'+data[i].intOrderID+'">'+data[i].strOrderName+'</option>';
          }
          $('#showFamilyOrderName').html(html);
          $('#showFamilyOrderName1').html(html);
        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }
    $('#btnSave').click(function(){
      var data = $('#addFamilyForm').serialize();
      //validate form

        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/addFamily',
          data: data,
          async: false,
          dataType: 'json',
          success: function($response){
            if(response.success){
              $('#addFamilyForm').modal('hide');
              $('#addFamilyForm')[0].reset();
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
      var data = $('#editFamilyForm').serialize();
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/updateFamily',
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#editFamilyForm').modal('hide');
              $('#editFamilyForm')[0].reset();
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
    $('#showdata').on('click', '.family-edit', function(){
      var id = $(this).attr('data');
      $('#myEditModal').modal('show');
      $('#myEditModal').find('.modal-title').text('Edit Family');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editFamily',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txteFName]').val(data.strFamilyName);
          $('input[name=txtId]').val(data.intFamilyID);
          
        },
        error: function(){
          alert('Could not Edit Data');
        }
      
    });

  });
  });
</script>