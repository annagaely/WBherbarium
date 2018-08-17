<img src="<?php echo base_url()?>assets/bower_components/mdbootstrap/img/loan.jpg" style="height: 50vh; width: 100%;"  class="banner">
<div class="py-5">
<div class="card mx-auto px-4" style="width: 80%;">

    <!-- Card body -->
    <div class="card-body">

        <!-- Material form register -->
        <form>
            <p class="card-header white-text text-center py-4 h4" style="background-color: #800000;">Loan</p>

            <!-- Material input text -->
            <div class="md-form">
              <div class="row">
                  <div class="col-md-4 pt-1">
                    <select class="form-control grey-text font-weight-light" style="font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;">
                        <option value="1">Collector</option>
                    </select>
                  </div>
                  <div class="col-md-4 pt1">
                    <select class="form-control grey-text font-weight-light" style="font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;">
                        <option value="1">Taxon Name</option>
                      </select>
                  </div>
                  <div class="col-md-4">
                    <input type="text" id="strLastName" class="form-control">
                    <label for="strLastName" class="font-weight-light ml-3">Available Specimens</label>
                  </div>
                </div>
              </div>
              <!-- Material input email -->
              <div class="md-form">
                <div class="row">
                  <div class="col-md-4">
                    <input type="date" name="dateLoan" class="form-control grey-text font-weight-light" value="">
                  </div>
                  <div class="col-md-4">
                    <div class="row">
                      <div class="col-md-6 ">
                        <input type="number" id="numDuration" class="form-control">
                        <label for="numDuration" class="font-weight-light ml-3">Duration</label>
                      </div>
                      <div class="col-md-6 pt-1">
                        <select class="form-control grey-text font-weight-light" style="font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;">
                            <option value="1">Collector</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <input type="number" id="numCopies" class="form-control">
                    <label for="numCopies" class="font-weight-light ml-3">Number of Copies</label>

                  </div>
                </div>
              </div>
              <div class="md-form">
                <i class="fas fa-pencil-alt prefix grey-text"></i>
                <textarea type="text" id="purpose" class="md-textarea form-control" rows="3"></textarea>
                <label for="purpose" class="font-weight-light">Purpose of Loan</label>
              </div>
              <div class="text-center py-4 mt-3">
                <button class="btn" style="background-color: #800000;" type="submit">Submit</button>
              </div>
            </form>
        <!-- Material form register -->

    </div>
    <!-- Card body -->

</div>
</div>
