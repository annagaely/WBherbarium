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
                    <input type="text" name="txttaxonName" id="strTaxonName" placeholder="Taxon Name" class="form-control" >
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
                  <!-- <input type="hidden" name="act" id="act" value=""> -->

                <div class="form-group">
                    <label>Taxon Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txttaxonName" id="strTaxonName" placeholder="Taxon Name" class="form-control" >
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

<script>
function resetForm() {
    document.getElementById("addSpeciesAlterateForm").reset();
}

</script>
