<img src="<?php echo base_url()?>assets/bower_components/mdbootstrap/img/loan.jpg" style="height: 50vh; width: 100%;"  class="banner">
<div class="py-5">
  <div class="card mx-auto px-4" style="width: 50%;">
    <div class="card-body">
      <form>
        <p class="card-header white-text text-center py-4 h4" style="background-color: #800000;">Deposit</p>
        <div class="md-form">
          <input type="file" class="font-weight-light">
        </div>
        <div class="md-form">
          <input type="text" id="strCName" class="form-control">
          <label for="strCName" class="font-weight-light">Collector's Name</label>
        </div>
        <div class="md-form">
          <input type="text" id="strLocation" class="form-control">
          <label for="strLocation" class="font-weight-light">Location</label>
        </div>
        <div class="md-form">
            <input type="date" name="dateLoan" class="form-control grey-text font-weight-light" value="">
        </div>
        <div class="md-form">
          <i class="fas fa-pencil-alt prefix grey-text"></i>
          <textarea type="text" id="strPlantDesc" class="md-textarea form-control" rows="3"></textarea>
          <label for="strPlantDesc" class="font-weight-light">Plant Description</label>
        </div>
        <div class="text-center py-4 mt-3">
          <button class="btn btn-danger" type="reset">Reset</button>
          <button class="btn btn-primary" type="submit">Deposit</button>
        </div>
      </form>
    </div>
  </div>
</div>
\
