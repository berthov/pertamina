<?php
include("controller/doconnect.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Technical Fleet-II</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-ship"></i> <span>Technical Fleet-II</span></a>
            </div>

            <div class="clearfix"></div>
            <div class="clearfix"></div>

            <br> <br> <br>

            <!-- sidebar menu -->
            <?php include("view/sidebar_menu.php") ?>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <?php include("view/top_nav.php") ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <!-- top tiles -->
            <div class="row tile_count" align="center">
              <!-- SUMMARY ABO ABI -->

              <?php

              $sql = "                            
                SELECT
                actual,
                commitment,
                plan,
                available
                FROM 
                opex_apex aa
                where
                kapal like ''
                ";
  
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
              ?>
              
              <div class="col-xl-3 col-md-3 col-sm-3 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-line-chart"></i> Plan 
                  </span>
                <div class="count" style="font-size: 25px;"><a href="apex.php"><?php echo number_format($row["plan"]); echo " IDR";?></a></div>
                <span class="count_bottom" style="font-size: 20px;color:#F7F7F7"></span>
              </div>

              <div class="col-xl-3 col-md-3 col-sm-3 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-line-chart"></i> Actual 
                  </span>
                <div class="count" style="font-size: 25px;"><a href="apex.php"><?php echo number_format($row["actual"]); echo " IDR";?></a></div>
                <span class="count_bottom" style="font-size: 20px;"><i class="green"><?php echo round($row["actual"]/$row["plan"]*100,2);?> </i> %</span>
              </div>

              <div class="col-xl-3 col-md-3 col-sm-3 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-line-chart"></i> Commitment 
                  </span>
                <div class="count" style="font-size: 25px;"><a href="apex.php"><?php echo number_format($row["commitment"]); echo " IDR";?></a></div>
                <span class="count_bottom" style="font-size: 20px;"><i class="green"><?php echo round($row["commitment"]/$row["plan"]*100,2);?> </i> % </span>
              </div>

              <div class="col-xl-3 col-md-3 col-sm-3 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-line-chart"></i> Available 
                  </span>
                <div class="count" style="font-size: 25px;"><a href="apex.php"><?php echo number_format($row["available"]); echo " IDR";?></a></div>
                <span class="count_bottom" style="font-size: 20px;"><i class="green"><?php echo round($row["available"]/$row["plan"]*100,2);?> </i> %</span>
              </div>

              <?php
                }
              ?>
            </div>
            <!-- /top tiles -->

            <div class="clearfix"></div>

            <div class="row">


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-list"></i> Summary PR <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li> -->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
				  
                  <div class="x_content">
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content4" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-credit-card-alt"></i> PR VS PO Kapal</a>
                        </li>
						<li role="presentation" class=""><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="false"> <i class="fa fa-level-down"></i> PR VS PO Bulan</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"> <i class="fa fa-credit-card-alt"></i> PR Jenis Pengadaan</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"> <i class="fa fa-credit-card-alt"></i> PR Value</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade" id="tab_content1" aria-labelledby="profile-tab">

                            <?php include("query/summary_pr_perbulan_all.php") ?>

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                        
                          <div class="x_content">
                            <p><h2><strong>Per Tahun</strong></h2></p>
                            <canvas id="canvasDoughnut1"></canvas>
                          </div>
                          
                          <div class="clearfix">
                          </div>   

                          <div class="x_content">
                            <p><h2><strong>Per Bulan</strong></h2></p>
                            <canvas id="mybarChart1"></canvas>
                          </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        
                          <div class="x_content">
                            <p><h2><strong>Per Tahun</strong></h2></p>
                            <canvas id="canvasDoughnut2"></canvas>
                          </div>
                          
                          <div class="clearfix">
                          </div>   

                          <div class="x_content">
                            <p><h2><strong>Per Bulan</strong></h2></p>
                            <canvas id="mybarChart2"></canvas>
                          </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content4" aria-labelledby="home-tab">

                            <?php include("query/summary_kapal.php") ?>

                        </div>

                      </div>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Technical Fleet-II <a href="www.pertamina.com"><b>Pertamina</b></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script src="../build/js/chart_value.js"></script>

    <script type="text/javascript">
              
// BAR

      if ($('#mybarChart1').length ){ 
        
        var ctx = document.getElementById("mybarChart1");
        var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: [

          // BULAN

          <?php

          $sql="
          SELECT
          distinct date_format(pr.pr_date,'%M') bulan
          FROM 
          purchase_request pr
          where 
          date_format(pr.pr_date,'%Y') = date_format(sysdate(),'%Y')";

          $result=mysqli_query($conn,$sql);   
              while($row=mysqli_fetch_array($result)){                   
              echo "\"";echo $row['bulan'] ; echo "\"" ;echo ",";                  
                }

          ?>

          ],
          datasets: [{
          label: 'Material',
          backgroundColor: "#5626b9",
          data: [

          // DATA MATERIAL
          <?php

          $sql = "
            SELECT date_format(pr.pr_date,'%M-%Y') as bulan,
            (select
              count(substr(pr_number, 1,3))
              FROM
              purchase_request pr1
              where
              substr(pr_number, 1,3) like '200%'
              and date_format(pr.pr_date,'%M-%Y') = date_format(pr1.pr_date,'%M-%Y')
              and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
            )count
            FROM 
            purchase_request pr
            where
            pr.pr_date not like '1970-01-01'
            and date_format(pr.pr_date,'%Y') = date_format(sysdate(),'%Y')
            group by date_format(pr.pr_date,'%M-%Y')
            order by date_format(pr.pr_date,'%m%Y')
            ";

          $result=mysqli_query($conn,$sql);   
              while($row=mysqli_fetch_array($result)){                   
              echo $row['count'];echo ",";                  
                }

          ?>
          ]
          },  {
          label: 'Jasa',
          backgroundColor: "#26B99A",
          data: [

          // DATA JASA
          <?php

          $sql = "
            SELECT date_format(pr.pr_date,'%M-%Y') as bulan,
            (select
              count(substr(pr_number, 1,3))
              FROM
              purchase_request pr1
              where
              substr(pr_number, 1,3) like '300%'
              and date_format(pr.pr_date,'%M-%Y') = date_format(pr1.pr_date,'%M-%Y')
              and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
            )count
            FROM 
            purchase_request pr
            where
            pr.pr_date not like '1970-01-01'
            and date_format(pr.pr_date,'%Y') = date_format(sysdate(),'%Y')
            group by date_format(pr.pr_date,'%M-%Y')
            order by date_format(pr.pr_date,'%m%Y')
            ";

          $result=mysqli_query($conn,$sql);   
              while($row=mysqli_fetch_array($result)){                   
              echo $row['count'];echo ",";                  
                }

          ?>
          ]
          },  {
          label: 'Panjar',
          backgroundColor: "#f40e35",
          data: [

          // DATA PANJAR
          <?php

          $sql = "
            SELECT date_format(pr.pr_date,'%M-%Y') as bulan,
            (select
              count(substr(pr_number, 1,3))
              FROM
              purchase_request pr1
              where
              substr(pr_number, 1,3) like '400%'
              and date_format(pr.pr_date,'%M-%Y') = date_format(pr1.pr_date,'%M-%Y')
              and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
            )count
            FROM 
            purchase_request pr
            where
            pr.pr_date not like '1970-01-01'
            and date_format(pr.pr_date,'%Y') = date_format(sysdate(),'%Y')
            group by date_format(pr.pr_date,'%M-%Y')
            order by date_format(pr.pr_date,'%m%Y')
            ";

          $result=mysqli_query($conn,$sql);   
              while($row=mysqli_fetch_array($result)){                   
              echo $row['count'];echo ",";                  
                }

          ?>

          ]
          }, {
          label: 'Kontrak',
          backgroundColor: "#bf8383",
          data: [

          // DATA Kontrak
          <?php

          $sql = "
            SELECT date_format(pr.pr_date,'%M-%Y') as bulan,
            (select
              count(substr(pr_number, 1,3))
              FROM
              purchase_request pr1
              where
              substr(pr_number, 1,3) like '900%'
              and date_format(pr.pr_date,'%M-%Y') = date_format(pr1.pr_date,'%M-%Y')
              and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
            )count
            FROM 
            purchase_request pr
            where
            pr.pr_date not like '1970-01-01'
            and date_format(pr.pr_date,'%Y') = date_format(sysdate(),'%Y')
            group by date_format(pr.pr_date,'%M-%Y')
            order by date_format(pr.pr_date,'%m%Y')
            ";

          $result=mysqli_query($conn,$sql);   
              while($row=mysqli_fetch_array($result)){                   
              echo $row['count'];echo ",";                  
                }

          ?>

          ]
          }, {
          label: 'Docking',
          backgroundColor: "#41839b",
          data: [

          // DATA Docking
          <?php

          $sql = "
            SELECT date_format(pr.pr_date,'%M-%Y') as bulan,
            (select
              count(substr(pr_number, 1,3))
              FROM
              purchase_request pr1
              where
              substr(pr_number, 1,3) like '550%'
              and date_format(pr.pr_date,'%M-%Y') = date_format(pr1.pr_date,'%M-%Y')
              and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
            )count
            FROM 
            purchase_request pr
            where
            pr.pr_date not like '1970-01-01'
            and date_format(pr.pr_date,'%Y') = date_format(sysdate(),'%Y')
            group by date_format(pr.pr_date,'%M-%Y')
            order by date_format(pr.pr_date,'%m%Y')
            ";

          $result=mysqli_query($conn,$sql);   
              while($row=mysqli_fetch_array($result)){                   
              echo $row['count'];echo ",";                  
                }

          ?>

          ]
          }]
        },

        options: {
          scales: {
          yAxes: [{
            ticks: {
            beginAtZero: true
            }
          }]
          }
        }
        });
        
      } 

// END OF BAR


// BAR VALUE

      if ($('#mybarChart2').length ){ 
        
        var ctx = document.getElementById("mybarChart2");
        var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: [

          // BULAN

          <?php

          $sql="
          SELECT
          distinct date_format(pr.pr_date,'%M') bulan
          FROM 
          purchase_request pr
          where 
          date_format(pr.pr_date,'%Y') = date_format(sysdate(),'%Y')";

          $result=mysqli_query($conn,$sql);   
              while($row=mysqli_fetch_array($result)){                   
              echo "\"";echo $row['bulan'] ; echo "\"" ;echo ",";                  
                }

          ?>

          ],
          datasets: [{
          label: 'Material',
          backgroundColor: "#5626b9",
          data: [

          // DATA MATERIAL
          <?php

          $sql = "
            SELECT date_format(pr.pr_date,'%M-%Y') as bulan,
            (select
              sum(nilai)
              FROM
              purchase_request pr1
              where
              substr(pr_number, 1,3) like '200%'
              and date_format(pr.pr_date,'%M-%Y') = date_format(pr1.pr_date,'%M-%Y')
              and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
            )count
            FROM 
            purchase_request pr
            where
            pr.pr_date not like '1970-01-01'
            and date_format(pr.pr_date,'%Y') = date_format(sysdate(),'%Y')
            group by date_format(pr.pr_date,'%M-%Y')
            order by date_format(pr.pr_date,'%m%Y')
            ";

          $result=mysqli_query($conn,$sql);   
              while($row=mysqli_fetch_array($result)){                   
              echo $row['count'];echo ",";                  
                }

          ?>
          ]
          },  {
          label: 'Jasa',
          backgroundColor: "#26B99A",
          data: [

          // DATA JASA
          <?php

          $sql = "
            SELECT date_format(pr.pr_date,'%M-%Y') as bulan,
            (select
              sum(nilai)
              FROM
              purchase_request pr1
              where
              substr(pr_number, 1,3) like '300%'
              and date_format(pr.pr_date,'%M-%Y') = date_format(pr1.pr_date,'%M-%Y')
              and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
            )count
            FROM 
            purchase_request pr
            where
            pr.pr_date not like '1970-01-01'
            and date_format(pr.pr_date,'%Y') = date_format(sysdate(),'%Y')
            group by date_format(pr.pr_date,'%M-%Y')
            order by date_format(pr.pr_date,'%m%Y')
            ";

          $result=mysqli_query($conn,$sql);   
              while($row=mysqli_fetch_array($result)){                   
              echo $row['count'];echo ",";                  
                }

          ?>
          ]
          },  {
          label: 'Panjar',
          backgroundColor: "#f40e35",
          data: [

          // DATA PANJAR
          <?php

          $sql = "
            SELECT date_format(pr.pr_date,'%M-%Y') as bulan,
            (select
            sum(nilai)              
            FROM
              purchase_request pr1
              where
              substr(pr_number, 1,3) like '400%'
              and date_format(pr.pr_date,'%M-%Y') = date_format(pr1.pr_date,'%M-%Y')
              and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
            )count
            FROM 
            purchase_request pr
            where
            pr.pr_date not like '1970-01-01'
            and date_format(pr.pr_date,'%Y') = date_format(sysdate(),'%Y')
            group by date_format(pr.pr_date,'%M-%Y')
            order by date_format(pr.pr_date,'%m%Y')
            ";

          $result=mysqli_query($conn,$sql);   
              while($row=mysqli_fetch_array($result)){                   
              echo $row['count'];echo ",";                  
                }

          ?>

          ]
          }, {
          label: 'Kontrak',
          backgroundColor: "#bf8383",
          data: [

          // DATA Kontrak
          <?php

          $sql = "
            SELECT date_format(pr.pr_date,'%M-%Y') as bulan,
            (select
              sum(nilai)
              FROM
              purchase_request pr1
              where
              substr(pr_number, 1,3) like '900%'
              and date_format(pr.pr_date,'%M-%Y') = date_format(pr1.pr_date,'%M-%Y')
              and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
            )count
            FROM 
            purchase_request pr
            where
            pr.pr_date not like '1970-01-01'
            and date_format(pr.pr_date,'%Y') = date_format(sysdate(),'%Y')
            group by date_format(pr.pr_date,'%M-%Y')
            order by date_format(pr.pr_date,'%m%Y')
            ";

          $result=mysqli_query($conn,$sql);   
              while($row=mysqli_fetch_array($result)){                   
              echo $row['count'];echo ",";                  
                }

          ?>

          ]
          }, {
          label: 'Docking',
          backgroundColor: "#41839b",
          data: [

          // DATA Docking
          <?php

          $sql = "
            SELECT date_format(pr.pr_date,'%M-%Y') as bulan,
            (select
              sum(nilai)
              FROM
              purchase_request pr1
              where
              substr(pr_number, 1,3) like '550%'
              and date_format(pr.pr_date,'%M-%Y') = date_format(pr1.pr_date,'%M-%Y')
              and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
            )count
            FROM 
            purchase_request pr
            where
            pr.pr_date not like '1970-01-01'
            and date_format(pr.pr_date,'%Y') = date_format(sysdate(),'%Y')
            group by date_format(pr.pr_date,'%M-%Y')
            order by date_format(pr.pr_date,'%m%Y')
            ";

          $result=mysqli_query($conn,$sql);   
              while($row=mysqli_fetch_array($result)){                   
              echo $row['count'];echo ",";                  
                }

          ?>

          ]
          }]
        },

        options: {
          scales: {
          yAxes: [{
            ticks: {
            beginAtZero: true
            }
          }]
          }
        }
        });
        
      } 


// END OF BAR VALUE
// DOUGHNUT
      if ($('#canvasDoughnut1').length ){ 
        
        var ctx = document.getElementById("canvasDoughnut1");
        var data = {
        labels: [
          "Material",
          "Jasa",
          "Panjar",
          "Kontrak",
          "Docking"
        ],
        datasets: [{
          data: [

            <?php

              $sql = "
              SELECT date_format(pr.pr_date,'%Y') as tahun,
              (select
                count(substr(pr_number, 1,3))
                FROM
                purchase_request pr1
                where
                substr(pr_number, 1,3) like '200%'
                and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
              )material,
              (select
                count(substr(pr_number, 1,3))
                FROM
                purchase_request pr1
                where
                substr(pr_number, 1,3) like '300%'
                and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
              )jasa,
              (select
                count(substr(pr_number, 1,3))
                FROM
                purchase_request pr1
                where
                substr(pr_number, 1,3) like '400%'
                and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
              )panjar,
              (select
                count(substr(pr_number, 1,3))
                FROM
                purchase_request pr1
                where
                substr(pr_number, 1,3) like '900%'
                and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
              )kontrak,
              (select
                count(substr(pr_number, 1,3))
                FROM
                purchase_request pr1
                where
                substr(pr_number, 1,3) like '550%'
                and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
              )docking
              FROM 
              purchase_request pr
              where
              pr.pr_date not like '1970-01-01'
              and date_format(pr.pr_date,'%Y') = date_format(sysdate(),'%Y')
              group by date_format(pr.pr_date,'%Y')
              order by date_format(pr.pr_date,'%Y')
              ";

              $result = $conn->query($sql);
              while($row = $result->fetch_assoc()) {
                echo $row['material'];echo ",";
                echo $row['jasa'];echo ",";
                echo $row['panjar'];echo ",";
                echo $row['kontrak'];echo ",";
                echo $row['docking'];        
              }
            ?>

          ],
          backgroundColor: [
          "#5626b9",
		      "#26B99A",
          "#f40e35",
          "#bf8383",
          "#41839b"
          ],
          hoverBackgroundColor: [
          "#580cf2",
		      "#18ddb4",
          "#ff002b",
          "#db5757",
          "#1692bf"
          ]

        }]
        };

        var canvasDoughnut = new Chart(ctx, {
        type: 'doughnut',
        tooltipFillColor: "rgba(51, 51, 51, 0.55)",
        data: data
        });
       
      } 
// END OF DOUGHNUT

// DOUGHNUT VALUE
      if ($('#canvasDoughnut2').length ){ 
        
        var ctx = document.getElementById("canvasDoughnut2");
        var data = {
        labels: [
          "Material",
          "Jasa",
          "Panjar",
          "Kontrak",
          "Docking"
        ],
        datasets: [{
          data: [

            <?php

              $sql = "
              SELECT date_format(pr.pr_date,'%Y') as tahun,
              (select
                sum(nilai)
                FROM
                purchase_request pr1
                where
                substr(pr_number, 1,3) like '200%'
                and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
              )material,
              (select
                sum(nilai)
                FROM
                purchase_request pr1
                where
                substr(pr_number, 1,3) like '300%'
                and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
              )jasa,
              (select
                sum(nilai)
                FROM
                purchase_request pr1
                where
                substr(pr_number, 1,3) like '400%'
                and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
              )panjar,
              (select
                sum(nilai)
                FROM
                purchase_request pr1
                where
                substr(pr_number, 1,3) like '900%'
                and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
              )kontrak,
              (select
                sum(nilai)
                FROM
                purchase_request pr1
                where
                substr(pr_number, 1,3) like '550%'
                and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
              )docking
              FROM 
              purchase_request pr
              where
              pr.pr_date not like '1970-01-01'
              and date_format(pr.pr_date,'%Y') = date_format(sysdate(),'%Y')
              group by date_format(pr.pr_date,'%Y')
              order by date_format(pr.pr_date,'%Y')
              ";

              $result = $conn->query($sql);
              while($row = $result->fetch_assoc()) {
                echo $row['material'];echo ",";
                echo $row['jasa'];echo ",";
                echo $row['panjar'];echo ",";
                echo $row['kontrak'];echo ",";
                echo $row['docking'];        
              }
            ?>

          ],
          backgroundColor: [
          "#5626b9",
      "#26B99A",
          "#f40e35",
          "#bf8383",
          "#41839b"
          ],
          hoverBackgroundColor: [
          "#580cf2",
      "#18ddb4",
          "#ff002b",
          "#db5757",
          "#1692bf"
          ]

        }]
        };

        var canvasDoughnut = new Chart(ctx, {
        type: 'doughnut',
        tooltipFillColor: "rgba(51, 51, 51, 0.55)",
        data: data
        });
       
      }
// END OF DOUGHNUT VALUE
    </script>
  </body>
</html>