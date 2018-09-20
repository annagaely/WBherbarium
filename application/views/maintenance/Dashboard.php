
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/js/mdb.min.js"></script>
<!--md bootstrap-->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
    <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-3 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">Total<br>Accounts</strong>
                  <div class="count-number">
                    <?php 
                  $serverName = "MSI";
                  $connectionInfo = array( "Database"=>"HerbariumDatabase", "UID"=>"sa", "PWD"=>"1234");
                  $conn = sqlsrv_connect( $serverName, $connectionInfo );
                    if( $conn === false ) {
                      die( print_r( sqlsrv_errors(), true));
                      }
                         $sql = "select count(intDepositReqID) as totalDeposit
                                  from tblDepositReq";
                        $stmt = sqlsrv_query( $conn, $sql );
                    if( $stmt === false) {
                     die( print_r( sqlsrv_errors(), true) );
                      }
                          while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                           echo $row['totalDeposit']." <br />";
                      }
                        sqlsrv_free_stmt( $stmt);
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-3 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-padnote"></i></div>
                <div class="name"><strong class="text-uppercase">Total<br>Deposits</strong>
                  <div class="count-number">

                    <?php 
                  $serverName = "MSI";
                  $connectionInfo = array( "Database"=>"HerbariumDatabase", "UID"=>"sa", "PWD"=>"1234");
                  $conn = sqlsrv_connect( $serverName, $connectionInfo );
                    if( $conn === false ) {
                      die( print_r( sqlsrv_errors(), true));
                      }
                         $sql = "select count(intOUserID) as totalAcc
                                  from tblOnlineUser";
                        $stmt = sqlsrv_query( $conn, $sql );
                    if( $stmt === false) {
                     die( print_r( sqlsrv_errors(), true) );
                      }
                          while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                           echo $row['totalAcc']." <br />";
                      }
                        sqlsrv_free_stmt( $stmt);
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-3 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-check"></i></div>
                <div class="name"><strong class="text-uppercase">Total<br />Loans</strong>
                  <div class="count-number">

                   <?php 
                  $serverName = "MSI";
                  $connectionInfo = array( "Database"=>"HerbariumDatabase", "UID"=>"sa", "PWD"=>"1234");
                  $conn = sqlsrv_connect( $serverName, $connectionInfo );
                    if( $conn === false ) {
                      die( print_r( sqlsrv_errors(), true));
                      }
                         $sql = "select count(intLoanReqID) as totalLoan
                                  from tblLoanReq";
                        $stmt = sqlsrv_query( $conn, $sql );
                    if( $stmt === false) {
                     die( print_r( sqlsrv_errors(), true) );
                      }
                          while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                           echo $row['totalLoan']." <br />";
                      }
                        sqlsrv_free_stmt( $stmt);
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-bill"></i></div>
                <div class="name"><strong class="text-uppercase">Total<br />Visits</strong>
                  <div class="count-number">
                    <?php 
                  $serverName = "MSI";
                  $connectionInfo = array( "Database"=>"HerbariumDatabase", "UID"=>"sa", "PWD"=>"1234");
                  $conn = sqlsrv_connect( $serverName, $connectionInfo );
                    if( $conn === false ) {
                      die( print_r( sqlsrv_errors(), true));
                      }
                         $sql = "select count(intAppointmentID) as totalVisit
                                  from tblAppointments";
                        $stmt = sqlsrv_query( $conn, $sql );
                    if( $stmt === false) {
                     die( print_r( sqlsrv_errors(), true) );
                      }
                          while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                           echo $row['totalVisit']." <br />";
                      }
                        sqlsrv_free_stmt( $stmt);
                    ?>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
      <div class="row">
        <div class="col-md-6 pl-5">
          <div class="card">
            <div class="card-body">
              <canvas id="barChart"></canvas>
            </div>

          </div>
        </div>

      </div>


      <script>//bar
var ctxB = document.getElementById("barChart").getContext('2d');
var myBarChart = new Chart(ctxB, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});</script>
