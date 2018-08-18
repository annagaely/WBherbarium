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
