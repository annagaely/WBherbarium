<div class="row">
  <div class="col-md-5 mx-0 px-5 py-5">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h4>Add Event</h4>
      </div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label>Event Name</label>
            <input type="text" placeholder="Event Name" class="form-control">
          </div>
          <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control">
          </div>
          <div class="form-group">
            <label>Event Description</label>
            <textarea class="form-control"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Signin" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-7 mx-0 px-0">
    <iframe src="<?php echo site_url('admin/view_calendar');?>" width="100%" height="597px" style="border:none; "></iframe>
  </div>
</div>
