        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                </li>

                <li role="presentation" class="dropdown">
                  <a href="" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false"><h2><i><b>
                    <?php
                    $sql= "select distinct kurs from detail_kapal";
                          $result = $conn->query($sql);
                              while($row = $result->fetch_assoc()) {
                              echo "1 USD = "; echo number_format($row["kurs"]); echo " IDR"; echo "&nbsp"; echo "&nbsp"; echo "&nbsp"; echo "&nbsp";
                              }
                    ?>

                    <?php
                    $sql = "select distinct upload_date from purchase_request";
                          $result = $conn->query($sql);
                              while($row = $result->fetch_assoc()) {
                              echo "Last Updated : "; echo date('d M Y',strtotime($row["upload_date"]));
                              }
                    ?></b></i></h2>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>