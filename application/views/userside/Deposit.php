<img src="<?php echo base_url()?>assets/bower_components/mdbootstrap/img/loan.jpg" style="height: 50vh; width: 100%;"  class="banner">
<div class="py-5">
  <div class="card mx-auto px-4" style="width: 50%;">
    <div class="card-body">

      <form id="addDepositForm" method="POST"  enctype="multipart/form-data">

        <p class="card-header white-text text-center py-4 h4" style="background-color: #800000;">Deposit</p>
        
        <div class="md-form">
          <input type="file" id="picHerbariumSheet" name="picPlant" class="font-weight-light">
        </div>

        <div class="md-form">
          <input type="text" name="txtScientificName" id="strScientificName" class="form-control">
          <label for="strScientificName" class="font-weight-light">Scientific Name</label>
        </div>

         <div class="md-form">
          <input type="text" name="txtCommonName" id="strCommonName" class="form-control">
          <label for="strCommonName" class="font-weight-light">Common Name</label>
        </div>

        <div class="md-form">
          <input type="text" id="strLocation" name="txtLocation" class="form-control">
          <label for="strLocation" class="font-weight-light">Location</label>
        </div>
        <div class="md-form">
            <input type="date" name="txtDateCollected" id= "dtDateCollected" class="form-control grey-text font-weight-light" value="">
        </div>


        <!--<div class="md-form">

          <input type="text" id="strCollector" name="txtCollector" class="form-control">
          <label for="strCollector" class="font-weight-light">Collector's Name</label>
        </div>-->

        <div class="md-form">
          <i class="fas fa-pencil-alt prefix grey-text"></i>
          <textarea type="text" id="strPlantDesc" name="txtplantDesc" class="md-textarea form-control" rows="3"></textarea>
          <label for="strPlantDesc" class="font-weight-light">Plant Description</label>
        </div>
        <div class="text-center py-4 mt-3">
          <button class="btn btn-danger" type="reset">Reset</button>
          <button class="btn btn-primary" type="submit" id="btnDeposit">Deposit</button>
        </div>
      </form>
    </div>
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

