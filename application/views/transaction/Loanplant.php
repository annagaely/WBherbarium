
        <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Maintenance/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Transaction</li>
            <li class="breadcrumb-item">Loan Plant</li>
          </ul>
        </div>
      </div>

       <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Loan ID</th>
                  <th>Collector</th>
                  <th>Taxon Name</th>
                  <th>Duration</th>
                  <th>Actions</th>
                </tr>
                <tr>
                <td>hehe</td>
                <td>hehe</td>
                <td>hehe</td>
                <td>hehe</td>
                <td><button type="button" id="btnTry " data-toggle="modal" data-target="#myModal" class="btn btn-primary">View</button></td>
                <tr>
              </thead>
              <tbody tbody id="showdata">    
            </tbody>
            </table>
        </div>
      </div>
    </div>

    <!-- FOR DESiGN PURPOSES ONLY-->
        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog modal-lg">
            <div class="modal-content" >
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Loan Plant</h5>
                 <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()">
                  <span aria-hidden="true">×</span>
                 </button>
              </div>
              <div class="modal-body"> 
                <label>DI KO ALAM ILALAGAY  </label>
             </div>
                <div class="modal-footer">      
                    <input type="submit" value="Save" id='btnSave' class="btn btn-primary">
                </div>
            </div>
           </div>
          </div>
