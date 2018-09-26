                        <div class="card-box table-responsive">

                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Bulan</th>
                                <!-- <th>Jumlah PR</th> -->
                                <th>Jumlah Nominal PR</th>
                                <!-- <th>Jumlah PO</th> -->
                                <th>Jumlah Nominal PO yang Terealisasi</th>
                                <th>Selisih</th>
                                <th>%</th>
                              </tr>
                            </thead>

                            <tbody>

                          <?php

                            $sql = "
                            SELECT date_format(pr.pr_date,'%M-%Y') as bulan,
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
                                <td><?php echo $row["bulan"];?></td>
                                <!-- <td><?php echo $row["total"];?></td> -->
                                <td><?php echo "Rp"; echo number_format($row["nilai_pr"]);?></td>
                                <!-- <td><?php echo $row["count_po"];?></td> -->
                                <td><?php echo "Rp"; echo number_format($row["nilai_po"]);?></td>
                                <td style="color: red"><?php echo "Rp"; echo number_format($row["nilai_pr"] - $row["nilai_po"]);?></td>
                                <td style="color: red"><?php echo round(($row["nilai_pr"] - $row["nilai_po"])/$row["nilai_pr"] * 100,2);?></td>
                              </tr>

                          <?php
                          }
                          ?>
                            </tbody>
                          </table>
                        </div>