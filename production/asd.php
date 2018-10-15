<?php
include("controller/doconnect.php");
echo "string";
echo strtotime(' ');
$upload_date= date('d-m-Y'); // output: current day.
echo $upload_date;
?>

<!DOCTYPE html>
<html>
<head>


    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <style type="text/css" class="init">
    
    tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }



    </style>

    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" class="init">
    

$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#example-keytable tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );

    // DataTable
    var table = $('#example-keytable').DataTable();

    // Apply the search
    table.columns().every( function () {
        var that = this;

        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );   

    $('#example-keytable tfoot tr').appendTo('#example-keytable thead');

} );


    </script>
</head>
<body class="wide comments example">
    <a name="top" id="top"></a>
    <div class="fw-container">
        <div class="fw-body">
            <div class="content">
                <h1 class="page_title">Individual column searching (text inputs)</h1>
                <table id="example-keytable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>~</th>
                        <th>KAPAL</th>
                        <th>COST CENTER</th>
                        <th>TECHINCAL SUPERINTENDENT</th>
                        <th>DESKRIPSI</th>
                        <th>STATUS PART</th>
                        <th>COST ELEMENT</th>
                        <th>COST ELEMENT-DESC</th>
                        <TH>FRL/MD/MM/2018</TH>
                        <th>NO PR</th>
                        <th>DATE PR</th>
                        <th>NILAI PR</th>
                        <th>NO PO</th>
                        <th>DATE PO</th>
                        <th>NILAI PO</th>
                        <th>SA/GR NO</th>
                        <th>SA/GR DATE</th>
                        <th>NAMA VENDOR/USER</th>
                      </tr>
                    </thead>
                            <tbody>

                          <?php

                              $sql = "SELECT pr.* 
                                FROM 
                                purchase_request pr
                                WHERE
                                pr.kapal not like ''
                                ";

                              $result = $conn->query($sql);
                              while($row = $result->fetch_assoc()) {
                          ?>

                              <tr>
                                <td>~</td>
                                <td><?php echo $row["kapal"]?></td>
                                <td><?php echo $row["cost_center"]?></td>
                                <td><?php echo $row["technical_superintendent"]?></td>
                                <td><?php echo $row["deskripsi"]?></td>
                                <td><?php echo $row["status_part"]?></td>
                                <td><?php echo $row["cost_element"]?></td>
                                <td><?php echo $row["cost_element_desc"]?></td>
                                <td><?php echo $row["FRL_MD_MM_2018"]?></td>
                                <td><?php echo $row["pr_number"]?></td>
                                <td><?php echo $row["pr_date"]?></td>
                                <td><?php echo number_format($row["nilai"])?></td>
                                <td><?php echo $row["po_number"]?></td>
                                <td><?php echo $row["po_date"]?></td>
                                <td><?php echo number_format($row["nilai_po"])?></td>
                                <td><?php echo $row["sa_number"]?></td>
                                <td><?php echo $row["sa_date"]?></td>
                                <td><?php echo $row["vendor"]?></td>
                              </tr>

                          <?php
                          }
                          ?>
                            </tbody>
                    <tfoot>
                        <tr>
                        <th>~</th>
                        <th>KAPAL</th>
                        <th>COST CENTER</th>
                        <th>TECHINCAL SUPERINTENDENT</th>
                        <th>DESKRIPSI</th>
                        <th>STATUS PART</th>
                        <th>COST ELEMENT</th>
                        <th>COST ELEMENT-DESC</th>
                        <TH>FRL/MD/MM/2018</TH>
                        <th>NO PR</th>
                        <th>DATE PR</th>
                        <th>NILAI PR</th>
                        <th>NO PO</th>
                        <th>DATE PO</th>
                        <th>NILAI PO</th>
                        <th>SA/GR NO</th>
                        <th>SA/GR DATE</th>
                        <th>NAMA VENDOR/USER</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</body>
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
    <script src="../build/js/custom.js"></script>
</html>