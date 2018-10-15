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
            <div class="page-title">
              <div class="title_left">
                <h3><b>Form Upload</b></h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <!-- <h2>Form validation <small>sub title</small></h2> -->
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
                    <div class="x_panel">

                      <form class="form-horizontal" action="import_csv.php" method="post" enctype="multipart/form-data">
                         <fieldset>
                            <!-- Form Name -->
                            <legend>Daftar PR</legend>
     
                            <!-- File Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label " for="filebutton">Select File</label>
                                <div class="col-md-4">
                                    <input type="file" name="file" id="file" class="input-large">
                                </div>
                            </div>
     
                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="singlebutton">Upload File</label>
                                <div class="col-md-4">
                                    <input type="hidden" name="pr" value="pr">
                                    <button type="submit" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
                                </div>
                            </div>      
                         </fieldset>
                     </form>


                      <form class="form-horizontal" action="import_csv.php" method="post" enctype="multipart/form-data">
                         <fieldset>
                            <!-- Form Name -->
                            <legend>Summary ABO ABI </legend>
     
                            <!-- File Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label " for="filebutton">Select File</label>
                                <div class="col-md-4">
                                    <input type="file" name="file" id="file" class="input-large">
                                </div>
                            </div>
     
                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="singlebutton">Upload File</label>
                                <div class="col-md-4">
                                    <input type="hidden" name="abo_abi" value="abo_abi">
                                    <button type="submit" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
                                </div>
                            </div>      
                         </fieldset>
                     </form>

                      <!-- <form class="form-horizontal" action="import_csv.php" method="post" enctype="multipart/form-data"> -->
                         <!-- <fieldset> -->
                            <!-- Form Name -->
                            <!-- <legend>MASS ADD NAMA ORANG </legend> -->
     
                            <!-- File Button -->
                            <!-- <div class="form-group">
                                <label class="col-md-4 control-label " for="filebutton">Select File</label>
                                <div class="col-md-4">
                                    <input type="file" name="file" id="file" class="input-large">
                                </div>
                            </div> -->
     
                            <!-- Button -->
<!--                             <div class="form-group">
                                <label class="col-md-4 control-label" for="singlebutton">Upload File</label>
                                <div class="col-md-4">
                                    <input type="hidden" name="employee" value="employee">
                                    <button type="submit" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
                                </div>
                            </div>      
                         </fieldset>
                     </form> -->

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
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>