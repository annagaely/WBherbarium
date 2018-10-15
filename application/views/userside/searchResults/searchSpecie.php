<div class="card mb-5 pt-5 mx-auto px-5" style="width:50%;margin-top: 100px;">
<div class="card-title">Search Results</div>
  <table class="table table-hover" id="data">
    <thead class="grey lighten-2">
      <tr>
        <th>Specie Name</th>
      </tr>
    </thead>
    <tr>
      <td><a data-toggle="modal" data-target="#herbariumSheet">Row 1</a></td>
    </tr>

  </table>
</div>


<div class="modal fade" id="herbariumSheet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-fluid" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body px-5 mx-5 text-center">
          <div class="row mx-5">
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
          </div>
          <div class="row">
            <div class="col-md-12">
              <section class="gallery-block grid-gallery my-0" style="padding-left: 30%; padding-right: 30%">
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
              </section>
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
