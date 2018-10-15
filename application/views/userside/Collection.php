
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
              <button type="button" data-toggle="modal" data-target="#modalGymnosperm" class="btn btn-light-blue btn-md">Read more</button>
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
            <button type="button" class="btn btn-light-blue btn-md" data-toggle="modal" data-target="#modalAlgae">Read more</button>
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
            <button type="button" class="btn btn-light-blue btn-md" data-toggle="modal" data-target="#modalBryophytes">Read more</button>
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
<!--               <div class="col-md-12">
                <h5 class="h5-responsive">Enter rank above the level of Genus:</h5>
                  <form class="form-inline" method="POST" action="<?php echo base_url(); ?>user/searchingRank" enctype="multipart/form-data">
                    <input class="form-control form-control-sm w-75" name='phylumkey' type="text" placeholder="e.g. Phylum, Class, Order, Family" aria-label="Search">
                    <button onclick="showTableRank()" type="button" class="btn btn-outline-primary waves-effect" style="padding-top:1%; padding-bottom: 1%;padding-left: 2%; padding-right:2%; border: 2px solid #800000!important; color: #800000!important; font-size: 11px!important;">
                      <a href="<?php echo base_url();?>user/usersearchRank" style="color: inherit!important">Search</a> 
                    </button>
                    <input type="submit" value='Search'>
                </form>
              </div> -->
            </div>
            <div class="row">
              <div class="col-md-12">
                <h5 class="h5-responsive">Enter a Genus Name:</h5>
                <form class="form-inline"  method="POST" action="<?php echo base_url(); ?>user/searchingGenus" enctype="multipart/form-data">
                  <input class="form-control form-control-sm w-75" name='genuskey' type="text" placeholder="e.g. Acacia, Pinus" title="Refers to general type of plants" aria-label="Search" autocomplete="off">

                  <!-- <button onclick="showTableGenus()" type="button" class="btn btn-outline-primary waves-effect" style="padding-top:1%; padding-bottom: 1%;padding-left: 2%; padding-right:2%; border: 2px solid #800000!important; color: #800000!important; font-size: 11px!important;">
                    <a href="<?php echo base_url();?>user/usersearchGenus" style="color: inherit!important">Search</a></button> -->
                    <input type="submit" value='Search'>
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h5 class="h5-responsive">Enter a Specie Name:</h5>
                <form class="form-inline" method="POST" action="<?php echo base_url(); ?>user/searchingSpecies" enctype="multipart/form-data" >
                  <input class="form-control form-control-sm w-75" name='specieskey' type="text" placeholder="e.g. Indicus, Purpurea" title="Refers to a group of closely related plants" aria-label="Search" autocomplete="off"><!-- 
                  <button onclick="showTableSpecie()" type="button" class="btn btnsearch btn-outline-primary waves-effect" style="padding-top:1%; padding-bottom: 1%;padding-left: 2%; padding-right:2%; border: 2px solid #800000!important; color: #800000!important; font-size: 11px!important;">
                    <a href="<?php echo base_url();?>user/usersearchSpecie" style="color: inherit!important">Search</a> --> 

                  <!-- </button> -->
                   <input type="submit" value='Search'>
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
  <!--modal angiosperm-->
  <div class="modal fade" id="modalAngiosperm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
      <div class="modal-content">
        <div class="modal-header white-text" style="background-color: #800000;">
          <h4 class="title">Angiosperm</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body mb-0 text-center">
          <p>
            A plant that has flowers and produces seeds enclosed within a carpel. The angiosperms are a large group and include herbaceous plants, shrubs, grasses, and most trees.
          </p>
          <section class="gallery-block grid-gallery my-0 py-0">
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

  <!--modal gymnosperm-->
  <div class="modal fade" id="modalGymnosperm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
      <div class="modal-content">
        <div class="modal-header white-text" style="background-color: #800000;">
          <h4 class="title">Gymnosperm</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body mb-0 text-center">
          <p>
            A plant that has seeds unprotected by an ovary or fruit. Gymnosperms include the conifers, cycads, and ginkgo.
          </p>
          <section class="gallery-block grid-gallery my-0 py-0">
            <div class="row">
                <div class="col-md-6 col-lg-4 item">
                    <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/planttypes/gymnosperm.jpg">
                        <img class="img-thumbnail image scale-on-hover" src="<?php echo base_url()?>assets/bower_components/planttypes/gymnosperm.jpg">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/planttypes/gymnosperm2.jpg">
                        <img class="img-thumbnail image scale-on-hover" src="<?php echo base_url()?>assets/bower_components/planttypes/gymnosperm2.jpg">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/planttypes/gymnosperm3.jpg">
                        <img class="img-thumbnail image scale-on-hover" src="<?php echo base_url()?>assets/bower_components/planttypes/gymnosperm3.jpg">
                    </a>
                </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>

  <!--modal algae-->
  <div class="modal fade" id="modalAlgae" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
      <div class="modal-content">
        <div class="modal-header white-text" style="background-color: #800000;">
          <h4 class="title">Algae</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body mb-0 text-center">
          <p>
            A group of photosynthetic organisms that in general possess pigments such as chlorophyll but lack true roots, stems and leaves characteristic of terrestrial plants.
          </p>
          <section class="gallery-block grid-gallery my-0 py-0">
            <div class="row">
                <div class="col-md-6 col-lg-4 item">
                    <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/planttypes/algae.jpg">
                        <img class="img-thumbnail image scale-on-hover" src="<?php echo base_url()?>assets/bower_components/planttypes/algae.jpg">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/planttypes/algae2.jpg">
                        <img class="img-thumbnail image scale-on-hover" src="<?php echo base_url()?>assets/bower_components/planttypes/algae2.jpg">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/planttypes/algae3.jpg">
                        <img class="img-thumbnail image scale-on-hover" src="<?php echo base_url()?>assets/bower_components/planttypes/algae3.jpg">
                    </a>
                </div>
            </div>
            </div>
          </section>

      </div>
    </div>
  </div>

  <!--modal bryophytes-->
  <div class="modal fade" id="modalBryophytes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
      <div class="modal-content">
        <div class="modal-header white-text" style="background-color: #800000;">
          <h4 class="title">Bryophytes</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body mb-0 text-center">
          <p>
            A small flowerless green plant of the division Bryophyta, which comprises the mosses and liverworts.
          </p>
          <section class="gallery-block grid-gallery my-0 py-0">
            <div class="row">
                <div class="col-md-6 col-lg-4 item">
                    <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/planttypes/bryophyte.jpg">
                        <img class="img-thumbnail image scale-on-hover" src="<?php echo base_url()?>assets/bower_components/planttypes/bryophyte.jpg">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/planttypes/bryophyte2.jpg">
                        <img class="img-thumbnail image scale-on-hover" src="<?php echo base_url()?>assets/bower_components/planttypes/bryophyte2.jpg">
                    </a>
                </div>
                <div class="col-md-36 col-lg-4 item">
                    <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/planttypes/bryophyte3.jpg">
                        <img class="img-thumbnail image scale-on-hover" src="<?php echo base_url()?>assets/bower_components/planttypes/bryophyte3.jpg">
                    </a>
                </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
  <script>
      baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
  </script>
