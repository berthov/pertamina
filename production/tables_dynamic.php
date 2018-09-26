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

    <title>DataTables | Gentelella</title>

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
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="pr_summary.php" class="site_title"><i class="fa fa-paw"></i> <span>Welcome</span></a>
            </div>

            <div class="clearfix"></div>

            <br />

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

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Summary ABO ABI <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">

                          <table id="datatable-keytable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>~</th>
                                <th>Pandan</th>
                                <th>Pelita</th>
                                <th>Paluh Tabuhan</th>
                                <th>Pungut</th>
                                <th>Pematang</th>
                                <th>Mangun Jaya</th>
                                <th>Menggala</th>
                                <th>Minas</th>
                                <th>Melahin</th>
                                <th>Merbau</th>
                                <th>Mundu</th>
                                <th>Musi</th>
                                <th>Meditran</th>
                                <th>Matindok</th>
                                <th>Mauhau</th>
                                <th>Merauke</th>
                                <th>Kamojang</th>
                                <th>kasim</th>
                                <th>Kakap</th>
                                <th>Parigi</th>
                                <th>Pattimura</th>
                                <th>Pasaman</th>
                                <th>Panjang</th>
                                <th>TF ll Man</th>
                              </tr>
                            </thead>

                            <tbody>

                          <?php

                              $sql = "SELECT aa.* 
                                FROM 
                                abo_abi aa
                                ";

                              $result = $conn->query($sql);
                              while($row = $result->fetch_assoc()) {
                          ?>

                              <tr>
                                <td><?php echo $row["type"]?></td>
                                <td><?php echo $row["pandan"]?></td>
                                <td><?php echo $row["pelita"]?></td>
                                <td><?php echo $row["paluh_tabuhan"]?></td>
                                <td><?php echo $row["pungut"]?></td>
                                <td><?php echo $row["pematang"]?></td>
                                <td><?php echo $row["mangun_jaya"]?></td>
                                <td><?php echo $row["menggala"]?></td>
                                <td><?php echo $row["minas"]?></td>
                                <td><?php echo $row["melahin"]?></td>
                                <td><?php echo $row["merbau"]?></td>
                                <td><?php echo $row["mundu"]?></td>
                                <td><?php echo $row["musi"]?></td>
                                <td><?php echo $row["meditran"]?></td>
                                <td><?php echo $row["matindok"]?></td>
                                <td><?php echo $row["mauhau"]?></td>
                                <td><?php echo $row["merauke"]?></td>
                                <td><?php echo $row["kamojang"]?></td>
                                <td><?php echo $row["kasim"]?></td>
                                <td><?php echo $row["kakap"]?></td>
                                <td><?php echo $row["parigi"]?></td>
                                <td><?php echo $row["pattimura"]?></td>
                                <td><?php echo $row["pasaman"]?></td>
                                <td><?php echo $row["panjang"]?></td>
                                <td><?php echo $row["tf_man"]?></td>
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
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
          
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

  </body>
</html>