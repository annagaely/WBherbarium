

        <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Maintenance/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Transaction</li>
            <li class="breadcrumb-item">Deposit Plant</li>
          </ul>
        </div>
      </div>

  <!--ADD Class MODAL-->
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Deposit New Plant</button>
        </div>         
        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">New Plant Deposit</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">

                <form>
                 <!--  <div class="form-group">
                  <form action="upload.php" method="post" enctype="multipart/form-data">
                  Select image to upload:
                  <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
 -->
                    <div class="row">
                      <div class="form-group col-sm-5">
                        <label> Upload Herbarium Sheet:</label>
                      </div>

                        <div class="form-group col-sm-4">
                          <form action="Depositplant.php" method="post" enctype="multipart/form-data">
                          <input type="file" name="PlantImage" id="PlantImageToUpload">
                         </form>
                       </div>
                     </div>
                
              <!--dito ka magbabago sa loob nito-->
                <div class="row">
                    <div class="form-group col-sm-6">
                    <label>Scientific Name:</label>
                    <input type="text" name="ScientificName" placeholder="Scientific Name" class="form-control">
                    </div>
                 
                    <div class="form-group col-sm-6">
                    <label>Common Name:</label>
                    <input type="text" name="CommonName" placeholder="Common Name" class="form-control">
                  </div>
                </div>


                  <div class="form-group">
                    <label>Date Collected:</label>
                    <input type="date" name="DateCollected" placeholder="Select a date" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Locality:</label>
                    <input type="text" name="Locality" placeholder="Locality" class="form-control">
                  </div>

                  <div class="row">
                   <div class="form-group col-sm-5">
                    <label>Collector's Name:</label>
                    <input type="text" name="CollectorFName" placeholder="First Name" class="form-control">
                  </div>
                    <div class="form-group col-sm-5">
                    <label> &nbsp </label>
                    <input type="text" name="CollectorsLname" placeholder="Last Name" class="form-control">
                  </div>
                  <div class="form-group col-sm-2">
                      <label>&nbsp</label>
                      <input type="text" name="mInitial" placeholder="M.I" class="form-control">
                    </div>
                 </div>


                  <div class="form-group">
                    <label>Plant Description:</label>
                   <textarea  rows = "3" cols = "40" name="PlantDesc"  class="form-control">
                   </textarea>
                  </div>

               
                  <!--HANGGANG DITO LANG BOI-->
                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-primary">       
                    <input type="submit" value="Save" class="btn btn-primary">
                  </div>
                </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END PHYLUM MODAL-->
   