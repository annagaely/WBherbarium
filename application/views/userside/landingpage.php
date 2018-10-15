<style type="text/css">
  #scroll {
    position:fixed;
    right:10px;
    bottom:10px;
    cursor:pointer;
    width:50px;
    height:50px;
    background-color:#939393;
    text-indent:-9999px;
    display:none;
    -webkit-border-radius:60px;
    -moz-border-radius:60px;
    border-radius:10px
}
#scroll span {
    position:absolute;
    top:50%;
    left:50%;
    margin-left:-8px;
    margin-top:-12px;
    height:0;
    width:0;
    border:8px solid transparent;
    border-bottom-color:#ffffff;
}
#scroll:hover {
    background-color:#3498db;
    opacity:1;filter:"alpha(opacity=100)";
    -ms-filter:"alpha(opacity=100)";
}
</style>
<div class="preloader-wrapper big active crazy">
  <div class="spinner-layer spinner-blue-only">
    <div class="circle-clipper left">
      <div class="circle"></div>
    </div>
    <div class="gap-patch">
      <div class="circle"></div>
    </div>
    <div class="circle-clipper right">
      <div class="circle"></div>
    </div>
  </div>
</div>

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
                    <img class="d-block w-100" style="height: 60vh;" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/img/x.jpg" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>


                <div class="carousel-caption " style="margin-bottom: 20px" >
                      <a href="#topten" style="color: white;">
                        <h3 class="h3-responsive" >
                         Top 10 Families with Most Number of Species Found in PUP Mabini Campus
                        </h3>
                    </a>
                </div>
              </div>


            <div class="carousel-item">
            <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" style="height: 60vh;" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/img/pupherbariumc.jpg" alt="Second slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption" style="margin-bottom: 20px">
                    <a href="#welcome" style="color: white;">
                      <h3 class="h3-responsive">
                        What is PUP Herbarium?
                     </h3>
                   </a>
<!--                     <p>Secondary text</p> -->
                </div>
            </div>


            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" style="height: 60vh;" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/img/banner3.jpg" alt="Third slide">
                    <div class="mask rgba-black-light"></div>
                </div>
             <div class="carousel-caption" style="margin-bottom: 20px">
                  <a href="#staff" style="color: white;">
                    <h3 class="h3-responsive">Meet the PUP Herbarium Center's hardworking staffs</h3>
                  </a>
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
            <!--/Controls-->
</div>
<a href="#" id="scroll" style="display: none;"> <span></span>
    </a>
    <div class="px-5 py-5 mx-0" >
    <section class="text-center mx-5 pb-5">
    <!-- Section heading -->
<!-- 
<script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=5575d02bd4e845bc24dac524eb32f54d75edcc64'></script>
<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/425554/t/5"></script> -->

      <h2 class="h1-responsive font-weight-bold my-5" >Welcome to PUP Herbarium</h2>
      <!-- Section description -->
      <p class="lead black-text w-responsive mx-auto mb-5">Come and explore the first Polytechnic University in the Philippines' herbarium specimen collections.</p>

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4">

          <a href="<?php echo base_url(); ?>user/howtodeposit"><i class="fas fa-file-alt fa-3x red-text"></i></a>
          <a href="<?php echo base_url(); ?>user/howtodeposit"  style="color: black"><h5 class="font-weight-bold my-4">Deposit</h5></a>
          <p class="black-text mb-md-0 mb-5">Depositing of plant species is available here at PUP Herbarium. Send your deposit request and wait for the further details.
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4">

           <a href="<?php echo base_url(); ?>user/CollectionUser"><i class="fas fa-search fa-3x cyan-text"></i></a>
           <a href="<?php echo base_url(); ?>user/CollectionUser" style="color: black"><h5 class="font-weight-bold my-4">Search</h5></a>
          <p class="black-text mb-md-0 mb-5">Get access to PUP herbarium specimens and descriptions by clicking  <a href="<?php echo base_url(); ?>user/CollectionUser" style="color: black">here. </a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4">

          <a href="<?php echo base_url(); ?>user/howtovisit"><i class="fas fa-map-marked-alt fa-3x orange-text"></i></a>
          <a href="<?php echo base_url(); ?>user/howtovisit"  style="color: black"><h5 class="font-weight-bold my-4">Visit</h5></a>
          <p class="black-text mb-0">PUP Herbarium Center is open for visitors. Just set an appointment prior to your visit.
          </p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </section>
    </div>
 <div>
    <section  id="welcome" class="text-white mx-0 px-0" style="background-color: #800000; padding: 5rem 0; ">
        <div class="container py-5">
            <div class="text-center">
                <h2 >What is PUP Herbarium?</h2>
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        <p class="lead text-white mt-2">
                            The PUP Herbarium Center serves as a local point for botanical interactions of students a faculty. It provides documented flora as repository of preserved herbarium specimens. It is also serve as a venue for plant identification, information and education. It collects services for bioprospecting or other specialized projects. Lastly, it serves as a training ground for a budding plant biologist and taxonomist.
                        </p>
                    </div>
                </div>
            </div>
        </div>
      </section>
    </div>
    <!-- Projects section v.3 -->
   <div class="pt-5 px-5 pb-5 h-100">
    <div class="pt-5 px-5"  id="topten">
        <section class="mt-5 mx-5">
            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center my-5">Top 10 Families with Most Number of Species Found in PUP Mabini Campus <span style="font-size: 20px"> (As of February 2016) </span> </h2>

      <div class="row">
        <div class="col-md-7 pl-5">
            <div class="card-body">
              <canvas id="pieChart"></canvas>
            </div>

        </div>
         <div class="col-md-5 pr-5">
<!--           <div class="card"> -->
            <div class="card-body">
          <h3 style="margin-top: 20px, margin-bottom: 5px"> Summary and Conclusions </h3>
          <h6 style="text-indent: 10px"><strong>Initial floral inventory revealed:</strong>  </h6>
          <ul class="list-styled">
            <li style="margin-top: 10px"> Gymnosperms (5 species distributed to 4 families and 3 orders) </li>
            <li style="margin-top: 10px">Angiosperms (203 species distributed to 67 families and 31 orders)</li>
          </ul>
         </div>
<!--        </div> -->
     </div>
      </div>

</section>
</div>
</div>

<!-- Projects section v.3 -->
<!-- Section: Features v.1 -->
<!-- <section class="text-center mt-4">

  <h2 class="h1-responsive font-weight-bold text-center my-5">Articles</h2>

  <div class="row">


    <div class="col-md-12 mb-0">
      <div class="card card-image" style="background-image: url('<?php echo base_url();?>assets/bower_components/puno1.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded">
          <div>

            <h3 class="py-3 font-weight-bold">
              <strong>Goodbye Fire Tree</strong>
            </h3>
            <p class="pb-3">Due to heavy rain and wind, the famous Fire Tree of the Polytechnic University of the Philippines ay natumba. It is located inside the PUP Lagoon where the students.....
            </p>
            <a class="btn btn-secondary btn-rounded btn-md"><i class="fa fa-clone left"></i> View Article</a>
          </div>
        </div>
      </div>
    </div>


  </div>


</section> -->

<!-- Card -->
<div style="background-color: #dcdcdc" >
<section class="text-center mx-3 px-5 pt-3" id = "staff">
    <div>
      <h2 style="margin-top: 5rem"> <span style="color:#800000"><strong>PUP</strong> </span> Herbarium Staff </h2>
    </div>
  <div class="py-5" style="padding-left: 200px; padding-right: 200px;">
    <div class="row">
      <div class="col-md-3">
        <div class="card mb-4">
          <div class="view overlay">
            <img class="card-img-top" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/img/staff/coronado.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-title">Armin S. Coronado, MSc.</h6>
            <p class="card-text" style="font-size: 12px">Director - Institute for Science and Research Technology</p>
            <button type="button" class="btn btn-light-blue btn-md"  data-toggle="modal" data-target="#modal1">Read more</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-4">
          <div class="view overlay">
            <img class="card-img-top" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/img/staff/getimage.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-title">Ma. Eleanor C. Salvador</h6>
            <p class="card-text" style="font-size: 12px">Head Curator - PUP Herbarium Center <br><br></p>
              <button type="button" class="btn btn-light-blue btn-md" data-toggle="modal" data-target="#modal2">Read more</button>
          </div>
          </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-4">
          <div class="view overlay">
            <img class="card-img-top" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/img/staff/enrykie.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-title">Enrykie Fortajada</h6>
            <p class="card-text" style="font-size: 12px">Curator - PUP Herbarium Center<br><br><br></p>
            <button type="button" class="btn btn-light-blue btn-md" data-toggle="modal" data-target="#modal3">Read more</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-4">
          <div class="view overlay">
            <img class="card-img-top" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/img/shirt.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-title">Blank Muna</h6>
            <p class="card-text" style="font-size: 12px"> wala pa details partial pa lang lahat<br><br><br></p>
            <button type="button" class="btn btn-light-blue btn-md" data-toggle="modal" data-target="#modal4">Read more</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>


<!-- Modal -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #800000">
        <h7 class="modal-title" id="exampleModalLabel" style="color: white" >Armin S. Coronado, MSc.</h7>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="font-size: 14px"> Armin S. Coronado is currently the director of Institute of Science and Research Technology.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #800000">
        <h7 class="modal-title" id="exampleModalLabel" style="color: white" >Ma. Eleanor C. Salvador</h7>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="font-size: 14px"> Ma. Eleanor C. Salvador is currently the head curator of the PUP Herbarium Center.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #800000">
        <h7 class="modal-title" id="exampleModalLabel" style="color: white" >Enrykie Fortajada</h7>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="font-size: 14px"> Enrykie Fortajada is a professor in College of Science. He teaches Ecology.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #800000">
        <h7 class="modal-title" id="exampleModalLabel" style="color: white" >Blank Muna</h7>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="font-size: 14px"> Blank
        </p>
      </div>
    </div>
  </div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1365.0846300626363!2d121.01038434500167!3d14.596660128798504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9dd5ee0e457%3A0xe1e45b9db34d61a9!2sPUP+Main+Building!5e0!3m2!1sen!2sph!4v1535047021119" width="100%" height="450" style="border:none; padding-bottom:0; margin-bottom:0;" allowfullscreen></iframe>


<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/js/mdb.js"></script>

<script type="text/javascript">
  $(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
</script>
<script>
  var ctxP = document.getElementById("pieChart").getContext('2d');
  var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
        labels: ["Rubiaceae", "Lamiaceae", "Poaceae", " Euphorbiaceae", "Asteraceae", "Fabaceae", "Asparagaceae","Arecaceae", "Araceae","Moraceae"],
        datasets: [
            {
                data: [7, 6, 18, 12, 12,11, 10,10,7,7],
                backgroundColor: ["#F7464A", "#46BFBD", "#949FB1","#FDB45C", "#4D5360", "#e9967a", " #eedd82", "#3cb371", "#778899", "#da70d6"],
                hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#A8B3C5", "#FFC870", "#616774", "#ffa07a", "#eee8aa" , "#8fbc8f","#708090","#dda0dd"]
            }
        ]
    },
    options: {
        responsive: true
    }
});
</script>
