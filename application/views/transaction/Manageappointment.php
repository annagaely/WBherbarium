
        <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Maintenance/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Transaction</li>
            <li class="breadcrumb-item">Manage Appointment</li>
          </ul>
        </div>
      </div>

     <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Appointment Date</th>
                  <th>Appointment Reason</th>

                <th>Actions</th>
                </tr>
                <tr>
                <td>hehe</td>
                <td>hehe</td>
                <td>hehe</td>

                <td>
                <button type="button" id="btnAccept "  class="btn btn-primary" style="background-color: green;border-color: green">Accept</button>
                <button type="button" id="btnReject "  class="btn btn-primary">Reject</button>
               </td>
                <tr>
              </thead>
              <tbody tbody id="showdata">    
            </tbody>
            </table>
        </div>
      </div>
    </div>