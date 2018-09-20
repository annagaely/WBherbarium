

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
      <div class="statistics">
      <div class="container-fluid">
        <div class="row d-flex">
          <div class="col-lg-4">
            <!-- Income-->
            <div class="card income text-center">
              <div class="icon"><i class="icon-line-chart"></i></div>
              <div class="number">126,418</div><strong class="text-primary">All Income</strong>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <!-- Monthly Usage-->
            <div class="card data-usage">
              <h2 class="display h4">Monthly Usage</h2>
              <div class="row d-flex align-items-center">
                <div class="col-sm-6">
                  <div id="progress-circle" class="d-flex align-items-center justify-content-center"></div>
                </div>
                <div class="col-sm-6"><strong class="text-primary">80.56 Gb</strong><small>Current Plan</small><span>100 Gb Monthly</span></div>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <!-- User Actibity-->
            <div class="card user-activity">
              <h2 class="display h4">User Activity</h2>
              <div class="number">210</div>
              <h3 class="h4 display">Social Users</h3>
              <div class="progress">
                <div role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar bg-primary"></div>
              </div>
              <div class="page-statistics d-flex justify-content-between">
                <div class="page-statistics-left"><span>Pages Visits</span><strong>230</strong></div>
                <div class="page-statistics-right"><span>New Visits</span><strong>73.4%</strong></div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
