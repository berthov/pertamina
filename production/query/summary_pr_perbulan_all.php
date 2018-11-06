                        <div class="card-box table-responsive">

                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Bulan</th>
                                <!-- <th>Jumlah PR</th> -->
                                <th>Total Nilai PR</th>
                                <!-- <th>Jumlah PO</th> -->
                                <th>Total Nilai PO</th>
                                <!-- <th>Pengurangan</th>
                                <th>Efficiency</th> -->
                              </tr>
                            </thead>

                            <tbody>

                          <?php

                            $sql = "
                            SELECT date_format(pr.pr_date,'%M-%Y') as bulan,
                            date_format(pr.pr_date, '%m/%Y') as month,
                            count(substr(pr_number, 1,3)) as total,
                            sum(nilai) as nilai_pr,
                            (SELECT count(po.po_number)
                            FROM purchase_request po
                            WHERE
                            date_format(po.pr_date,'%M-%Y') = date_format(pr.pr_date,'%M-%Y')
                            and po.po_number not like ''
                            )as count_po,
                            sum(nilai_po) as nilai_po
                            FROM 
                            purchase_request pr
                            where
                            pr.pr_date not like '1970-01-01'
                            group by date_format(pr.pr_date,'%M-%Y')
                            order by date_format(pr.pr_date,'%Y%m') asc
                            ";

                              $result = $conn->query($sql);
                              while($row = $result->fetch_assoc()) {
                          ?>

                              <tr>
                                <!-- <td><?php echo $row["bulan"];?></td> -->
                                <td><b><a href="tables_pr.php?bulan=<?php echo $row["month"];?>"><?php echo $row["bulan"];?></a></b></td>
                                <!-- <td><?php echo $row["total"];?></td> -->
                                <td><?php echo number_format($row["nilai_pr"]); echo " IDR";?></td>
                                <!-- <td><?php echo $row["count_po"];?></td> -->
                                <td><?php echo number_format($row["nilai_po"]); echo " IDR" ?></td>
                                <!-- <td style="color: red"><?php echo number_format($row["nilai_pr"] - $row["nilai_po"]); echo " IDR"?></td>
                                <td style="color: red"><?php echo round(($row["nilai_pr"] - $row["nilai_po"])/$row["nilai_pr"] * 100,2); echo " %"?></td> -->
                              </tr>

                          <?php
                          }
                          ?>
                            </tbody>
                          </table>
                        </div>