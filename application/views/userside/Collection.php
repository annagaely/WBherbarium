
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/gallery/grid-gallery/grid-gallery.css">



<!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade vh-100" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" style="height: 60vh;" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/img/banner.jpg" alt="First slide">
                </div>


                <div class="carousel-caption">
                    <a href=""><h3 class="h3-responsive">Title</h3></a>
                    <p>First text</p>
                </div>
            </div>
            <div class="carousel-item">
            <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" style="height: 60vh;" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/img/banner2.jpg" alt="Second slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <a href=""><h3 class="h3-responsive">Title</h3></a>
                    <p>Secondary text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" style="height: 60vh;" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/img/banner3.jpg" alt="Third slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <a href=""><h3 class="h3-responsive">Title</h3></a>
                    <p>Third text</p>
                </div>
            </div>
        </div>
       <!--/.Slides-->
       <!--Controls-->
       <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
       </a>
            <!--/.Controls-->
    </div>

<div class="py-5" style="padding-left: 200px; padding-right: 200px;">
    <div class="row">

      <div class="col-md-3">
        <div class="card mb-4">
          <div class="view overlay">
            <img class="card-img-top" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/img/collection/angiosperm.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body">
            <h4 class="card-title">Angiosperms</h4>
            <p class="card-text">Flowering Plants.</p>
            <button type="button" id= "btnAngiosperm" class="btn btn-light-blue btn-md" data-toggle="modal" data-target="#modalAngiosperm">Read more</button>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card mb-4">
          <div class="view overlay">
            <img class="card-img-top" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/img/collection/gymnosperm.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body">
            <h4 class="card-title">Gymnosperms</h4>
            <p class="card-text">Vascular plants.</p>
              <button type="button" class="btn btn-light-blue btn-md">Read more</button>
            </div>
          </div>
      </div>

      <div class="col-md-3">
        <div class="card mb-4">
          <div class="view overlay">
            <img class="card-img-top" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/img/collection/pteridophyte.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body">
            <h4 class="card-title">Algae</h4>
            <p class="card-text">Unicellular or multicellular.</p>
            <button type="button" class="btn btn-light-blue btn-md">Read more</button>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card mb-4">
          <div class="view overlay">
            <img class="card-img-top" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/img/collection/bryophyte.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body">
            <h4 class="card-title">Bryophytes</h4>
            <p class="card-text">Mosses and liverworts.</p>
            <button type="button" class="btn btn-light-blue btn-md">Read more</button>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div style="padding-left: 200px; padding-right: 200px;">
    <div class="card mb-5">
      <div class="card-header">
        <h2 class="h2-responsive">Discover</h2>
      </div>
      <div class="card-body px-4">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12">
                <h5 class="h5-responsive">Enter rank above the level of Genus:</h5>
                  <form class="form-inline">
                    <input class="form-control form-control-sm w-75" type="text" placeholder="e.g. Phylum, Class, Order, Family" aria-label="Search">
                    <button onclick="showTableRank()" type="button" class="btn btn-outline-primary waves-effect" style="padding-top:1%; padding-bottom: 1%;padding-left: 2%; padding-right:2%; border: 2px solid #800000!important; color: #800000!important; font-size: 11px!important;">Search</button>
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h5 class="h5-responsive">Enter a Genus Name:</h5>
                <form class="form-inline">
                  <input class="form-control form-control-sm w-75" type="text" placeholder="e.g. Acacia, Pinus" title="Refers to general type of plants" aria-label="Search">
                  <button onclick="showTableGenus()" type="button" class="btn btn-outline-primary waves-effect" style="padding-top:1%; padding-bottom: 1%;padding-left: 2%; padding-right:2%; border: 2px solid #800000!important; color: #800000!important; font-size: 11px!important;">Search</button>
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h5 class="h5-responsive">Enter a Specie Name:</h5>
                <form class="form-inline">
                  <input class="form-control form-control-sm w-75" type="text" placeholder="e.g. Indicus, Purpurea" title="Refers to a group of closely related plants" aria-label="Search">
                  <button onclick="showTableSpecie()" type="button" class="btn btnsearch btn-outline-primary waves-effect" style="padding-top:1%; padding-bottom: 1%;padding-left: 2%; padding-right:2%; border: 2px solid #800000!important; color: #800000!important; font-size: 11px!important;">Search</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <img src="<?php echo base_url()?>assets/bower_components/mdbootstrap/taxonomic.jpg" class="mt-3 img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>




  <!-- TABLE RANK RESULTS -->
  <center>
    <div id="searchRankTable" style="padding-left: 200px; padding-right: 200px; display: none">
    <iframe class="embed-responsive-item" src="<?php echo site_url('user/searchRank');?>" width="100%" height="500vh" style="padding-top: 10px; padding-left: 2px;border: none;"></iframe>
    </div>
  </center>

  <!--TABLE GENUS RESULTS-->
  <center>
     <div id="searchGenusTable" style="padding-left: 200px; padding-right: 200px; display: none;">
      <iframe class="embed-responsive-item" src="<?php echo site_url('user/searchGenus');?>" width="100%" height="500vh" style="padding-top: 10px; padding-left: 2px;border: none;"></iframe>
    </div>
  </center>
  <!--              <td><a data-toggle="modal" data-target="#herbariumSheet">Jacob</a></td>
-->

  <!--TABLE SPECIE RESULTS-->
  <center>
      <div id="searchSpecieTable" style="padding-left: 350px; padding-right: 350px; display: none;">
      <iframe class="embed-responsive-item" src="<?php echo site_url('user/searchSpecie');?>" width="100%" height="500vh" style="padding-top: 10px; padding-left: 2px;border: none;"></iframe>
    </div>
  </center>
  <!-- Central Modal Small -->
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
        <div class="modal-body px-5 mx-5">
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
          <section class="gallery-block grid-gallery pt-5">
              <div class="container">
                  <div class="row px-5">
                      <div class="col-md-6 col-lg-4 item">
                          <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/gallery/img/image1.jpg">
                              <img class="img-fluid image scale-on-hover" src="<?php echo base_url()?>assets/bower_components/gallery/img/image1.jpg">
                          </a>
                      </div>
                      <div class="col-md-6 col-lg-4 item">
                          <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/gallery/img/image1.jpg">
                              <img class="img-fluid image scale-on-hover" src="<?php echo base_url()?>assets/bower_components/gallery/img/image1.jpg">
                          </a>
                      </div>
                      <div class="col-md-36 col-lg-4 item">
                          <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/gallery/img/image1.jpg">
                              <img class="img-fluid image scale-on-hover" src="<?php echo base_url()?>assets/bower_components/gallery/img/image1.jpg">
                          </a>
                      </div>
                  </div>
              </div>
          </section>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
          <script>
              baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
          </script>
        </div>
      </div>
    </div>
  </div>


  <!-- Central Modal Small -->
  <script>
    function showTableRank() {
      var ranktbl = document.getElementById("searchRankTable");
      var genustbl = document.getElementById("searchGenusTable");
     var specietbl = document.getElementById("searchSpecieTable");
     ranktbl.style.display = "block";
     genustbl.style.display="none";
     specietbl.styyle.display="none";
    }
    function showTableGenus() {
      var ranktbl = document.getElementById("searchRankTable");
      var specietbl = document.getElementById("searchSpecieTable");
      var genustbl = document.getElementById("searchGenusTable");
      genustbl.style.display = "block";
           ranktbl.style.display="none";
           specietbl.style.display="none";
         }
    function showTableSpecie() {
      var ranktbl = document.getElementById("searchRankTable");
 var genustbl = document.getElementById("searchGenusTable");
      var specietbl = document.getElementById("searchSpecieTable");
      specietbl.style.display = "block";
      ranktbl.style.display = "none";
      genustbl.style.display="none";
    }
  </script>
