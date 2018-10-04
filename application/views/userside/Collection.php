<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
<!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fadev h-100" data-ride="carousel">
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
                    <div class="mask rgba-black-light"></div>
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
            <button type="button" class="btn btn-light-blue btn-md">Read more</button>
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
  <div style="padding-left: 200px; padding-right: 200px">
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
                  <button type="button" class="btn btn-outline-primary waves-effect" style="padding-top:1%; padding-bottom: 1%;padding-left: 2%; padding-right:2%; border: 2px solid #800000!important; color: #800000!important; font-size: 11px!important;">Search</button>
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h5 class="h5-responsive">Enter a Genus Name:</h5>
                <form class="form-inline">
                  <input class="form-control form-control-sm w-75" type="text" placeholder="e.g. Acacia, Pinus" title="Refers to general type of plants" aria-label="Search">
                  <button type="button" class="btn btn-outline-primary waves-effect" style="padding-top:1%; padding-bottom: 1%;padding-left: 2%; padding-right:2%; border: 2px solid #800000!important; color: #800000!important; font-size: 11px!important;">Search</button>
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h5 class="h5-responsive">Enter a Specie Name:</h5>
                <form class="form-inline">
                  <input class="form-control form-control-sm w-75" type="text" placeholder="e.g. Indicus, Purpurea" title="Refers to a group of closely related plants" aria-label="Search">
                  <button type="button" class="btn btnsearch btn-outline-primary waves-effect" style="padding-top:1%; padding-bottom: 1%;padding-left: 2%; padding-right:2%; border: 2px solid #800000!important; color: #800000!important; font-size: 11px!important;">Search</button>
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
  <div class="row">
    <div class="col-md-12">

      <div id="mdb-lightbox-ui"></div>

      <div class="mdb-lightbox no-margin">

        <figure class="col-md-4">
          <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(121).jpg"
            data-size="1600x1067">
            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(121).jpg"
              class="img-fluid">
            <h3 class="text-center my-3">Photo title</h3>
          </a>
        </figure>

        <figure class="col-md-4">
          <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(96).jpg"
            data-size="1600x1067">
            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(96).jpg"
              class="img-fluid" />
            <h3 class="text-center my-3">Photo title</h3>
          </a>
        </figure>

        <figure class="col-md-4">
          <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(104).jpg"
            data-size="1600x1067">
            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(104).jpg"
              class="img-fluid" />
            <h3 class="text-center my-3">Photo title</h3>
          </a>
        </figure>

        <figure class="col-md-4">
          <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(45).jpg"
            data-size="1600x1067">
            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(45).jpg"
              class="img-fluid" />
            <h3 class="text-center my-3">Photo title</h3>
          </a>
        </figure>

        <figure class="col-md-4">
          <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(122).jpg"
            data-size="1600x1067">
            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(122).jpg"
              class="img-fluid" />
            <h3 class="text-center my-3">Photo title</h3>
          </a>
        </figure>

        <figure class="col-md-4">
          <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(115).jpg"
            data-size="1600x1067">
            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(115).jpg"
              class="img-fluid" />
            <h3 class="text-center my-3">Photo title</h3>
          </a>
        </figure>

        <figure class="col-md-4">
          <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(125).jpg"
            data-size="1600x1067">
            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(125).jpg"
              class="img-fluid" />
            <h3 class="text-center my-3">Photo title</h3>
          </a>
        </figure>

        <figure class="col-md-4">
          <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(115).jpg"
            data-size="1600x1067">
            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(115).jpg"
              class="img-fluid" />
            <h3 class="text-center my-3">Photo title</h3>
          </a>
        </figure>

        <figure class="col-md-4">
          <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(119).jpg"
            data-size="1600x1067">
            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(119).jpg"
              class="img-fluid" />
            <h3 class="text-center my-3">Photo title</h3>
          </a>
        </figure>

      </div>

    </div>
  </div>
  <section class="gallery-block grid-gallery">
      <div class="container">
          <div class="heading">
              <h2>Grid Gallery</h2>
          </div>
          <div class="row">
              <div class="col-md-6 col-lg-4 item">
                  <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/gallery/img/image1.jpg">
                      <img class="img-fluid image scale-on-hover" src="../img/image1.jpg">
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item">
                  <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/gallery/img/image2.jpg">
                      <img class="img-fluid image scale-on-hover" src="../img/image2.jpg">
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item">
                  <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/gallery/img/image3.jpg">
                      <img class="img-fluid image scale-on-hover" src="../img/image3.jpg">
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item">
                  <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/gallery/img/image4.jpg">
                      <img class="img-fluid image scale-on-hover" src="../img/image4.jpg">
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item">
                  <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/gallery/img/image5.jpg">
                      <img class="img-fluid image scale-on-hover" src="../img/image5.jpg">
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item">
                  <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/gallery/img/image6.jpg">
                      <img class="img-fluid image scale-on-hover" src="../img/image6.jpg">
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item">
                  <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/gallery/img/image7.jpg">
                      <img class="img-fluid image scale-on-hover" src="../img/image7.jpg">
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item">
                  <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/gallery/img/image8.jpg">
                      <img class="img-fluid image scale-on-hover" src="../img/image8.jpg">
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item">
                  <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/gallery/img/image9.jpg">
                      <img class="img-fluid image scale-on-hover" src="../img/image9.jpg">
                  </a>
              </div>
          </div>
      </div>
  </section>
