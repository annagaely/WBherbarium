<div class="breadcrumb-holder">
   <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/Dashboard" >Home</a></li>
        <li class="breadcrumb-item">Maintenance</li>
        <li class="breadcrumb-item active">Featured Plant</li>
      </ul>
    </div>
</div>

<div class="card-header d-flex align-items-center">
    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Featured Plant</button>
</div>

      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Featured Plant ID</th>
                  <th>Title</th>
                  <th>Date Posted</th>
                  <th>Posted By</th>
                </tr>
                <tr>
                <td>hehe</td>
                <td>hehe</td>
                <td>hehe</td>
                <td>hehe</td>
                <tr>
              </thead>
              <tbody tbody id="showdata">    
            </tbody>
            </table>
        </div>
      </div>
    </div>



<!-- Modal-->
<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLabel" class="modal-title">Add Featured Plant</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
        </div>


          	<div class="modal-body">
               <form id= "addFeaturedPlantForm" method="POST" enctype="multipart/form-data">
               	<!-- <div class="card" style="height: 200px;width: 200px; margin-left: 130px"> -->
               		<!-- <img id = "FPimg" src="<?php echo base_url();?>assets/bower_components/NUP.png" style="height: 200px;width: 200px;margin-left: 130px;margin-bottom: 20px"> -->
           		 <!-- </div> -->
               	<div class="form-group">
               		<label style="font-size: 14px;">Upload Image here:</label>
               		<input type="file" name="imgFeaturedPlant" id = "imgFP" onchange="readURL(this);">
				</div>               		
                  <div class="form-group">
                     <label>Title:</label>
                     <input type="text" name ="FPTitle" class="form-control" placeholder="Title">
                  </div>
                  <div class="form-group">
                     <label>Contents:</label>
                     <textarea class="form-control" rows="3" id="comment" placeholder="Input your contents here.."></textarea>
                  </div>
               
               	 	<div class="modal-footer">
                   <!--  <button type="button" value="Reset" class="btn btn-primary" onclick="clearFileInput();">Clear</button> -->
                   	<input type="reset" value="Reset" class="btn btn-primary">
                    <input type="submit" id="btnSave" value="Save" class="btn btn-primary">
                	</div>
                </form>
             </div>
            </div>
          </div>
        </div>

<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#FPimg')
                        .attr('src', e.target.result)
                        .width('200px')
                        .height('200px');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
$("imgFP").change(function()
{
	readURL(this);
});
      </script>