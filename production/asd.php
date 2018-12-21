<?php
include("controller/doconnect.php");
?>
<table>

                          <?php

                            $sql = "
                            SELECT date_format(pr.pr_date,'%M-%Y') as bulan,
                            sum(nilai) as nilai_pr,
                            -- sum(nilai_po) as nilai_po
                            sum(case
                            when date_format(pr.pr_date,'%M-%Y') <> date_format(pr.po_date,'%M-%Y')
                            then
                            pr.nilai
                            else
                            pr.nilai_po    
                            end) as nilai_po
                            FROM 
                            purchase_request pr
                            where
                            pr.pr_date not like '1970-01-01'
                            and po_number = '3900131175'
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
                                <!-- <td><?php echo $row["nilai_po"];?></td> -->
                                <!-- <td style="color: red"><?php echo number_format($row["nilai_pr"] - $row["nilai_po"]); echo " IDR"?></td> -->
                                <td style="color: green"><?php echo round($row["nilai_po"]/$row["nilai_pr"] * 100,2); echo " %"?></td>
                              </tr>

                          <?php
                          }
                          ?>
                                  </table>