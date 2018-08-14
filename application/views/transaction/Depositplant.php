
       <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Maintenance/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Transaction</li>
            <li class="breadcrumb-item">Deposit Plant</li>
          </ul>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Deposit ID</th>
                  <th>Scientific Name</th>
                  <th>Date Deposited</th>
                  <th>Received by</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                <tr>
                <td>hehe</td>
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

    <!-- FOR DESGN PURPOSES ONLY-->
        <!-- Modal-->
    <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-justify hide" data-backdrop="static" data-keyboard="false">
      <div role="document" class="modal-dialog modal-lg" >
        <div class="modal-content" >
          <div class="modal-header">
            <h5 id="exampleModalLabel" class="modal-title">Plant Deposit</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body"> 
            <div class="row">
              <div class="card col-md-6" style="max-width: 20rem;margin-bottom: 2px;" >
                <img class="card-img-center" src="<?php echo base_url();?>assets/bower_components/1.jpg" alt="Card image cap" style="height: 30rem;object-fit: cover">
              </div>
              <div class="col-md-6" style="margin-left: auto; margin-right: auto;">
                <form class="form-horizontal">
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label style="font-size: 14px;">Scientific Name:</label>
                    </div>
                    <div class="col-sm-8">
                      <input type="text" name="txtdName" id="strDomainName" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label style="font-size: 14px;">Common Name:</label>
                    </div>
                    <div class="col-sm-8">
                      <input type="text" name="txtdName" id="strDomainName" class="form-control" disabled="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label style="font-size: 14px;">Locality:</label>
                    </div>
                    <div class="col-sm-8">
                      <input type="text" name="txtdName" id="strDomainName" class="form-control" disabled="">
                    </div>
                  </div>
                   <div class="form-group row">
                    <div class="col-sm-4">
                      <label style="font-size: 14px;">Full Locality:</label>
                    </div>
                    <div class="col-sm-8">
                      <input type="text" name="txtdName" id="strDomainName" class="form-control" disabled="">
                    </div>
                  </div>
                   <div class="form-group row">
                    <div class="col-sm-4">
                      <label style="font-size: 14px;">Date Collected:</label>
                    </div>
                    <div class="col-sm-8">
                      <input type="text" name="txtdName" id="strDomainName"  class="form-control" disabled="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label style="font-size: 14px;">Collector:</label>
                    </div>
                    <div class="col-sm-8">
                      <input type="text" name="txtdName" id="strDomainName"  class="form-control" disabled="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label style="font-size: 14px;">Description:</label>
                    </div>
                    <div class="col-sm-8">
                     <textarea class="form-control" rows="5" id="comment" disabled=""></textarea>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>