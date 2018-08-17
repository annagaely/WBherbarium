
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
                <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">

                <form id= "addPhylumForm" method="POST" enctype="multipart/form-data">
                  <!-- <input type="hidden" name="act" id="act" value=""> -->

                  <div class="form-group">
                    <label>Domain Name:</label> <label style="color: red">*</label> 
                    <input type="text" name="txtdName" id="strDomainName" placeholder="Domain Name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Kingdom Name:</label> <label style="color: red">*</label> 
                    <input type="text" name="txtkName" id="strKingdomName" placeholder="Kingdom Name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>
                      <input type="checkbox" name="check1" id="plantCategory" onclick="disableMyText(); "> Under the Plant Category
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Phylum Name:</label> <label style="color: red">*</label> 
                    <input type="text" name="txtpName" id="pNameid" placeholder="Phylum Name" class="form-control">
                  </div>
                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-primary">
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
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">

                <form id= "editPhylumForm" method="POST" enctype="multipart/form-data">
                  <!-- <input type="hidden" name="act" id="act" value=""> -->

                  <div class="form-group">
                    <label>Domain Name:</label> <label style="color: red">*</label> 
                    <input type="text" name="txtedName" id="strDomainName" placeholder="Domain Name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Kingdom Name:</label> <label style="color: red">*</label> 
                    <input type="text" name="txtekName" id="strKingdomName" placeholder="Kingdom Name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>
                      <input type="checkbox" name="check1" id="plantCategory" onclick="disableMyText();"> Under the Plant Category
                      <input type="hidden" name="txtId" value="0">
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Phylum Name:</label> <label style="color: red">*</label> 
                    <input type="text" name="txtepName" id="pNameid" placeholder="Phylum Name" class="form-control">
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
      <!--END PHYLUM MODAL-->
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Phylum ID</th>
                  <th>Domain Name</th>
                  <th>Kingdom Name</th>
                  <th>Phylum Name</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody tbody id="showdata">
              </tbody>
            </table>
          </div>
        </div>
      </main>

      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
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
          }
          else
          {
            document.getElementById("strDomainName").value = "";
          }
     }

     function disableMyText1(){
      if(document.getElementById("plantCategory").checked == true){
              document.getElementById("strKingdomName").value = "Plantae";
          }else{
            document.getElementById("strDomainName").value = "",
            document.getElementById("strKingdomName").value = "";
          }
     }

     </script>

    <script type="text/javascript">
    $(function(){

    //show
    showAllPhylum();
    function showAllPhylum(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showAllPhylum',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intPhylumID+'</td>'+
                  '<td>'+data[i].strDomainName+'</td>'+
                  '<td>'+data[i].strKingdomName+'</td>'+
                  '<td>'+data[i].strPhylumName+'</td>'+
                  '<td>'+
                    '<a href="javascript:;" class="btn btn-primary phylum-edit" data="'+data[i].intPhylumID+'">Edit</a>'+
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


    //add
    $('#btnSave',).click(function(){
      var url = '<?php echo base_url() ?>admin/addPhylum';
      var data = $('#addPhylumForm').serialize();
      //validate form
      var domainName = $('input[name=txtdName]');
      var kingdomName = $('input[name=txtkName]');
      var phylumName = $('input[name=txtkName]');;

        $.ajax({
          type: 'ajax',
          method: 'post',
          url: url,
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#addPhylumForm').modal('hide');
              $('#addPhylumForm')[0].reset();
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
            alert('Could not save Data');
          }
        });

    });

    $('#btnEditSave').click(function(){
      var data = $('#editPhylumForm').serialize();
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
    //edit phylum
    $('#showdata').on('click', '.phylum-edit', function(){
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
