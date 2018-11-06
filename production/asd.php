<?php
include("controller/doconnect.php");
?>
<table>
<?php

                                    $sql = "SELECT
                                    aa.cost_element,
                                    aa.kurs,
                                    aa.kapal,
                                    sum(aa.actual) as actual,
                                    sum(aa.commitment) as commitment,
                                    sum(aa.alloted) as alloted,
                                    sum(aa.plan) as plan, 
                                    sum(aa.available) as available 
                                    FROM detail_kapal aa
                                    where
                                    (aa.cost_element like '%6001011110%' or 
                                    aa.cost_element like '%6001013120%' or
                                    aa.cost_element like '%6001013130%' or
                                    aa.cost_element like '%6001013210%' or
                                    aa.cost_element like '%6001014170%' or
                                    aa.cost_element like '%6001020100%' or
                                    aa.cost_element like '%6001022190%' )
                                    group by
                                    aa.cost_element,
                                    aa.kurs,
                                    aa.kapal
                                    order by aa.cost_element,aa.kapal
                                    ";
                                    $result = $conn->query($sql);
                                    while($row = $result->fetch_assoc()) {

                                    ?>

                                    <tbody>
                                      <tr align="right">
                                        <th class="sticky-cell" style="text-align:center;vertical-align: middle;"><?php echo $row["cost_element"] ?></th>
                                        <th class="sticky-cell" style="text-align:center;vertical-align: middle;"><?php echo $row["kapal"] ?></th>
                                        <td><?php echo number_format($row["plan"]) ?></td>
                                        <td><?php echo number_format($row["actual"]) ?></td>
                                        <td><?php echo number_format($row["commitment"]) ?></td>
                                        <td><?php echo number_format($row["available"]) ?></td>
                                      </tr>
                                    
                                    <?php
                                    
                                    }
                                    
                                    ?>
                                  </tbody>
                                  </table>