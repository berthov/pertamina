                        <div class="card-box table-responsive">

                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Kapal</th>
                                <!-- <th>Jumlah PR</th> -->
                                <th>Total Nilai PR</th>
                                <!-- <th>Jumlah PO</th> -->
                                <th>Total Nilai PO</th>
                                <th>Pengurangan</th>
                                <th>Efficiency</th>
                              </tr>
                            </thead>

                            <tbody>

                          <?php

                            $sql = "
                            SELECT pr.kapal,
                            sum(nilai) as nilai_pr,
                            sum(nilai_po) as nilai_po
                            FROM 
                            purchase_request pr,
                            employee e
                            where
                            pr.pr_date not like '1970-01-01'
                            and e.kapal=pr.kapal
                            group by pr.kapal
                            order by 1 asc
                            ";

                              $result = $conn->query($sql);
                              while($row = $result->fetch_assoc()) {
                          ?>

                              <tr>
                                <td><b><a href="tables_pr.php?kapal=<?php echo $row["kapal"];?>"><?php echo $row["kapal"];?></a></b></td>
                                <!-- <td><?php echo $row["total"];?></td> -->
                                <td><?php echo number_format($row["nilai_pr"]); echo " IDR";?></td>
                                <!-- <td><?php echo $row["count_po"];?></td> -->
                                <td><?php echo number_format($row["nilai_po"]); echo " IDR" ?></td>
                                <td style="color: red"><?php echo number_format($row["nilai_pr"] - $row["nilai_po"]); echo " IDR"?></td>
                                <td style="color: red"><?php echo round(($row["nilai_pr"] - $row["nilai_po"])/$row["nilai_pr"] * 100,2); echo " %"?></td>
                              </tr>

                          <?php
                          }
                          ?>
                            </tbody>
                          </table>
                        </div>