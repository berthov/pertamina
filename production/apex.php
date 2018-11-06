<?php
include("controller/doconnect.php");


if(isset($_REQUEST['employee']) && $_REQUEST['employee'] !='all' ){
  $p_employee = $_REQUEST['employee'];
}
else{
 $p_employee = ''; 
}

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
    <link href="../build/css/jquery.stickytable.css" rel="stylesheet">

  
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
            <form class="form-horizontal" action="apex.php" method="post">
              <!-- top tiles -->
              <div class="row tile_count" align="center">
                <!-- SUMMARY ABO ABI -->

                <?php

                $sql = "                            
                  SELECT
                  sum(actual) as actual,
                  sum(commitment) as commitment,
                  sum(plan) as plan,
                  sum(available) as available,
                  employee
                  FROM 
                  opex_apex aa,
                  employee e
                  where
                  aa.kapal not like ''
                  and aa.kapal = e.kapal
                  and (e.employee = '".$p_employee."' or  ('".$p_employee."' = '' ) ) 
                  ";
    
                  $result = $conn->query($sql);
                  while($row = $result->fetch_assoc()) {
                ?>
                
                <div class="col-xl-3 col-md-3 col-sm-3 col-xs-6 tile_stats_count">
                  <span class="count_top"><i class="fa fa-line-chart"></i> Plan 
                    </span>
                  <div class="count" style="font-size: 25px;"><?php echo number_format($row["plan"]); echo " IDR"?></div>
                  <span class="count_bottom" style="font-size: 20px; color: none;"><i style="font-color:white;">
                    <?php if ($p_employee != '') {
                      echo $p_employee;
                    } else {
                      echo "Technical Fleet - II";
                    }
                    ?> </i> </span>
                </div>

                <div class="col-xl-3 col-md-3 col-sm-3 col-xs-6 tile_stats_count">
                  <span class="count_top"><i class="fa fa-line-chart"></i> Actual 
                    </span>
                  <div class="count" style="font-size: 25px;"><?php echo number_format($row["actual"]); echo " IDR"?></div>
                  <span class="count_bottom" style="font-size: 20px;"><i class="green"><?php echo round($row["actual"]/$row["plan"]*100,2);?> </i> %</span>
                </div>

                <div class="col-xl-3 col-md-3 col-sm-3 col-xs-6 tile_stats_count">
                  <span class="count_top"><i class="fa fa-line-chart"></i> Commitment 
                    </span>
                  <div class="count" style="font-size: 25px;"><?php echo number_format($row["commitment"]); echo " IDR"?></div>
                  <span class="count_bottom" style="font-size: 20px;"><i class="green"><?php echo round($row["commitment"]/$row["plan"]*100,2);?> </i> % </span>
                </div>

                <div class="col-xl-3 col-md-3 col-sm-3 col-xs-6 tile_stats_count">
                  <span class="count_top"><i class="fa fa-line-chart"></i> Available 
                    </span>
                  <div class="count" style="font-size: 25px;"><?php echo number_format($row["available"]); echo " IDR"?></div>
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
                      <h2><i class="fa fa-list"></i> Summary Anggaran <small></small></h2>
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
                      <div class="col-lg-9 col-md-9 hidden-xs">
                        <h4><p style="text-align: center;"><strong>ANGGARAN OPERASIONAL KAPAL TECHNICAL FLEET-II 2018</strong></p></h4>
                      </div>
                      <div class="col-lg-3 col-md-3 col-xs-12 pull-right">
                        
                        <select name="employee" id="category" class="form-control col-lg-3 col-md-3 col-xs-4 category" style="margin-top:10px">
                          <option value="" disabled selected >Select Technical Superintendent</option>
                          <option value="all">Technical Fleet II</option>
                          
                           <?php
                            $sql = "SELECT distinct employee 
                            FROM employee
                            ";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                          ?>
                              <option value="<?php echo $row["employee"] ?>"> <?php echo $row["employee"] ?></option>
                          <?php
                            }
                          ?>

                        </select>
                      </div>
                      <div class="x_content" style="padding-top: 20px;">
                        <div class="sticky-table sticky-ltr-cells">
                        <table class="table table-bordered ">
                            <thead>
                              <tr class="sticky-header">
                                <th rowspan="2" style="text-align: center;vertical-align: middle;" class="sticky-cell">No</th>
                                <th style="text-align: center;vertical-align: middle;">Nama Kapal</th>
                                <th style="text-align: center;vertical-align: middle;">Currency</th>
                                <th style="text-align: center;">Plan</th>
                                <th style="text-align: center;">Actual</th>
                                <th style="text-align: center;">Commitment</th>
                                <th style="text-align: center;">Available</th>
                                <th style="text-align: center;vertical-align: middle;">Sisa</th>
                              </tr>
                            </thead>
                            <?php

                              $sql = "SELECT 
                              @i:=@i+1 as row,aa.* 
                              FROM opex_apex aa,
                              employee e,
                              (SELECT @i:=0) as foo
                              where
                              aa.kapal not like ''
                              and aa.kapal = e.kapal
                              and (e.employee = '".$p_employee."' or  ('".$p_employee."' = '' ) ) 
                              ";
                              $result = $conn->query($sql);
                              while($row = $result->fetch_assoc()) {

                              ?>

                              <tbody>
                                <tr align="right">
                                  <th class="sticky-cell" rowspan="2" style="text-align:center;vertical-align: middle;"><?php echo $row["row"] ?></th>
                                  <th scope="row" style="text-align:left;vertical-align: middle;"><a href="detail_kapal.php?kapal=<?php echo $row["kapal"]?>&employee=<?php echo $p_employee;?>"><?php echo $row["kapal"] ?></a></th>
                                  <td align="center"><?php echo $row["curr"] ?></td>
                                  <td><?php echo number_format($row["plan"]) ?></td>
                                  <td><?php echo number_format($row["actual"]) ?></td>
                                  <td><?php echo number_format($row["commitment"]) ?></td>
                                  <td><?php echo number_format($row["available"]) ?></td>
                                  <td rowspan="2" style="text-align: center;vertical-align: middle;"><?php echo round($row["available"]/$row["plan"] * 100,2) ?>%</td>
                                </tr>
                                <tr align="right">
                                  <th scope="row"><?php echo $row["cost_center"] ?></th>
                                  <td align="center"><?php echo $row["curr_usd"] ?></td>
                                  <td><?php echo number_format($row["plan_usd"]) ?></td>
                                  <td><?php echo number_format($row["actual_usd"]) ?></td>
                                  <td><?php echo number_format($row["commitment_usd"]) ?></td>
                                  <td><?php echo number_format($row["available_usd"]) ?></td>
                                </tr>
                              
                              <?php
                              
                              }
                              
                              ?>

                              </tbody>
                        </table>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

              </div>
            </form>
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
    <script src="../build/js/jquery.stickytable.js" type="text/javascript"></script>

    <script type="text/javascript">
  
    $(document).ready(function(){
              $("#category").on("change", function() {
                this.form.submit();
              });
    });


    </script>
  </body>
</html>