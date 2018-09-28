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
                    <img class="d-block w-100" style="height: 50vh;" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/img/banner.jpg" alt="First slide">
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
                    <img class="d-block w-100" style="height: 50vh;" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/img/banner2.jpg" alt="Second slide">
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
                    <img class="d-block w-100" style="height: 50vh;" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/img/banner3.jpg" alt="Third slide">
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

    <div class="py-5" style="padding-left: 130px; padding-right: 130px;">
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
            <p class="card-text">Floweing Plants.</p>
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
            <p class="card-text">Conifers, cycads and allies.</p>
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
            <h4 class="card-title">Pteridophytes</h4>
            <p class="card-text">Ferns and fern allies.</p>
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
  <!-- Collapse buttons -->
<div class="tab pb-5" style="overflow: hidden">
  <center>
    <div class="btn-group" role="group">
      <button class="tablinks btn btn-primary" onclick="openSearch(event, 'byPhylum')">
        Search by Phylum
      </a>
      <button class="tablinks btn btn-primary" onclick="openSearch(event, 'byClass')">
        Search by Class
      </button>
      <button class="tablinks btn btn-primary" onclick="openSearch(event, 'byOrder')">
        Search by Order
      </button>
      <button class="tablinks btn btn-primary" onclick="openSearch(event, 'byFamily')">
        Search by Family
      </button>
      <button class="tablinks btn btn-primary" onclick="openSearch(event, 'byGenus')">
        Search by Genus
      </button>
      <button class="tablinks btn btn-primary" onclick="openSearch(event, 'bySpecies')">
        Search by Species
      </button>
    </div>
  </center>
</div>

<div class="pb-5">
  <div class="tabcontent" id="byPhylum" style="display: none;">
    <center>
      <div class="card card-body" style="width: 50%;">
        <form class="form-inline md-form form-smd-flex justify-content-center">
          <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Enter Phylum Name" aria-label="Search">
          <i class="fa fa-search" aria-hidden="true"></i>
        </form>
      </div>
    </center>
  </div>
  <div class="tabcontent" id="byClass" style="display: none;">
    <center>
      <div class="card card-body" style="width: 50%;">
        <form class="form-inline md-form form-smd-flex justify-content-center">
          <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Enter Class Name" aria-label="Search">
          <i class="fa fa-search" aria-hidden="true"></i>
        </form>
      </div>
    </center>
  </div>
  <div class="tabcontent" id="byOrder" style="display: none;">
    <center>
      <div class="card card-body" style="width: 50%;">
        <form class="form-inline md-form form-smd-flex justify-content-center">
          <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Enter Order Name" aria-label="Search">
          <i class="fa fa-search" aria-hidden="true"></i>
        </form>
      </div>
    </center>
  </div>
  <div class="tabcontent" id="byFamily" style="display: none;">
    <center>
      <div class="card card-body" style="width: 50%;">
        <form class="form-inline md-form form-smd-flex justify-content-center">
          <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Enter Family Name" aria-label="Search">
          <i class="fa fa-search" aria-hidden="true"></i>
        </form>
      </div>
    </center>
  </div>
  <div class="tabcontent" id="byGenus" style="display: none;">
    <center>
      <div class="card card-body " style="width: 50%;">
        <form class="form-inline md-form form-sm d-flex justify-content-center">
          <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Enter Genus Name" aria-label="Search">
          <i class="fa fa-search" aria-hidden="true"></i>
        </form>
      </div>
    </center>
  </div>
  <div class="tabcontent" id="bySpecies" style="display: none;">
    <center>
      <div class="card card-body" style="width: 50%;">
        <form class="form-inline md-form form-smd-flex justify-content-center">
          <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Enter Species Name" aria-label="Search">
          <i class="fa fa-search" aria-hidden="true"></i>
        </form>
      </div>
    </center>
  </div>
</div>
<script>
function openSearch(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
