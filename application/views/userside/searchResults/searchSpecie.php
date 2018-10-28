<div class="card mb-5 pt-5 mx-auto px-5" style="width:90%;margin-top: 100px;">
<h4 class="card-title">Search Results</h4>
<hr />
  <table class="table table-hover" id="data">
    <thead class="grey lighten-2">
      <tr>
        <th></th>
        <th>Specie Name</th>
        <th>Genuss Name</th>
        <th>Family Name</th>
        <th>Common Name</th>
        <th>Collector Name</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
    foreach ($results as $row) {
?>
<tr>
  <td><?php echo "<button style='padding: 0px;' class='btn searchSpecie-view' data='".$row->intHerbariumSheetID."' 
    data-toggle='modal'
    data-target='#herbariumSheet' 
>
          <img style='max-width: 200px; width: auto; height: 200px;' class='img-thumbnail image scale-on-hover' alt=Embedded Image src=\"data:image/png;base64, ".base64_encode($row->picHerbariumSheet)."\" '/></button>";?></td>
    <td><?php echo $row->strAccessionNumber?></td>
    <td><?php echo $row->strScientificName?></td>
    <td><?php echo $row->strFamilyName?></td>
    <td><?php echo $row->strCommonName?></td>
    <td><?php echo $row->strCollector?></td>
</tr>
<?php
}
?>
    </tbody>

  </table>
</div>


<div class="modal fade" id="herbariumSheet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-fluid" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title w-100" id="myModalLabel">View Specie</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body px-5 mx-5 text-center">
<!--           <div class="row mx-5">
            <div class="col-md-4">
              <div class="card">
                img of herbarium sheet
              </div>
            </div>
            <div class="col-md-8">
              <div class="card">
                contents
              </div>
            </div>
          </div> -->
          <div class="row">
            <div id='div' class="col-md-12">
<form method="Get" action='<?php echo base_url()?>user/viewSpecie' enctype="multipart/form-data">
<?php echo "<img style='max-width: 1000px; width: auto; height: 1000px;' alt=Embedded Image src=\"data:image/png;base64, ".base64_encode($row->picHerbariumSheet)."\" '/>";?>
</form>
<!--               <section class="gallery-block grid-gallery my-0" style="padding-left: 30%; padding-right: 30%">
                <div class="row">
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/planttypes/angiosperm.jpg">
                            <img class="img-thumbnail image scale-on-hover" src="<?php echo base_url()?>assets/bower_components/planttypes/angiosperm.jpg">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/planttypes/angiosperm2.jpg">
                            <img class="img-thumbnail image scale-on-hover" src="<?php echo base_url()?>assets/bower_components/planttypes/angiosperm2.jpg">
                        </a>
                    </div>
                    <div class="col-md-36 col-lg-4 item">
                        <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/planttypes/angiosperm3.jpg">
                            <img class="img-thumbnail image scale-on-hover" src="<?php echo base_url()?>assets/bower_components/planttypes/angiosperm3.jpg">
                        </a>
                    </div>
                </div>
              </section> -->
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
  <script>
      baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
  </script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/gallery/grid-gallery/grid-gallery.css">


<script>
$(document).ready(function(){
  $('#data').after('<center><nav aria-label="pagination example"><ul id="nav" class="pagination pg-blue"><label class="mt-1">Page: &nbsp; &nbsp;</label></ul></nav></center>');
  var rowsShown = 10;
  var rowsTotal = $('#data tbody tr').length;
  var numPages = rowsTotal/rowsShown;
  for(i = 0;i < numPages;i++) {
      var pageNum = i + 1;
      $('#nav').append('<a class="page-item" href="#" rel="'+i+'"><li class="page-link">'+pageNum+'</li></a> ');

  }

  $('#data tbody tr').hide();
  $('#data tbody tr').slice(0, rowsShown).show();
  $('#nav a:first').addClass('active');
  $('#nav a').click(function(){

      $('#nav a').removeClass('active');
      $(this).addClass('active');

      var currPage = $(this).attr('rel');
      var startItem = currPage * rowsShown;
      var endItem = startItem + rowsShown;
      $('#data tbody tr').css('opacity','0.0').hide().slice(startItem, endItem).
      css('display','table-row').animate({opacity:1}, 300);
  });
});



</script>
