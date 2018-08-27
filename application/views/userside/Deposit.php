<img src="<?php echo base_url()?>assets/bower_components/mdbootstrap/img/loan.jpg" style="height: 50vh; width: 100%;"  class="banner">
<div class="row">
  <div class="col-md-5 py-5">
    <div class="pl-5 pr-0 mr-0">
      <div class="card px-4">
        <div class="card-body">

          <form id="addDepositForm" method="POST"  enctype="multipart/form-data">

            <p class="card-header white-text text-center py-4 h4" style="background-color: #800000;">Deposit</p>
    <!--         <div class="md-form">
              <input type="file" id="picHerbariumSheet" name="picPlant" class="font-weight-light">
            </div> -->

            <div class="md-form">
              <div class="row">
                <div class="col-md-6">
                  <input type="text" name="txtScientificName" id="strScientificName" class="form-control">
                  <label for="strScientificName" class="font-weight-light ml-3">Scientific Name<span style="color: red"> *</span></label>
                </div>
                <div class="col-md-6">
                  <input type="text" name="txtCommonName" id="strCommonName" class="form-control">
                  <label for="strCommonName" class="font-weight-light ml-3">Common Name<span style="color: red"> *</span></label>
                </div>
              </div>
            </div>


            <div class="md-form">
              <input type="text" id="strLocation" name="txtLocation" class="form-control">
              <label for="strLocation" class="font-weight-light">Location<span style="color: red"> *</span></label>
            </div>
            <div class="md-form">
              <p class="font-weight-light">
                Date Collected:<span style="color: red"> *</span>
              </p>
              <input type="date" name="txtDateCollected" id= "dtDateCollected" class="form-control grey-text font-weight-light" value="">
            </div>

            <div class="md-form">
              <textarea type="text" id="strPlantDesc" name="txtplantDesc" class="md-textarea form-control" rows="2"></textarea>
              <label for="strPlantDesc" class="font-weight-light">Plant Description<span style="color: red"> *</span></label>
            </div>
            <div class="md-form">
              <p class="font-weight-light">
                Desired Date of Deposit:<span style="color: red"> *</span>
              </p>
              <input type="date" name="txtDateDesired" id= "dtAppointmentDate" class="form-control grey-text font-weight-light" value="">
            </div>
            <div class="text-center py-4 mt-3">
              <button class="btn btn-danger" type="reset">Clear</button>
              <button class="btn btn-primary" type="submit" id="btnDeposit">Deposit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-7 py-5">
    <iframe src="<?php echo site_url('user/view_calendar');?>" width="100%" height="100%" style="border: none;"></iframe>
  </div>
</div>



<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>

    <script type="text/javascript">
    $('#btnDeposit').click(function(){
      var data = $('#addDepositForm').serialize();
      //validate form

        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>user/addDeposit',
          data: data,
          async: false,
          dataType: 'json',
          success: function($response){
            if(response.success){
              $('#addDepositForm').modal('hide');
              $('#addDepositForm')[0].reset();
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
</script>
