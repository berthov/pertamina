                        <div class="card-box table-responsive">

                          <table id="datatable-keytable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Bulan</th>
                                <th>Material</th>
                                <th>Jasa</th>
                                <th>Panjar</th>
                                <th>Docking</th>
                                <th>Kontrak</th>
                              </tr>
                            </thead>

                            <tbody>

                          <?php

                            $sql = "
                            SELECT date_format(pr.pr_date,'%M-%Y') as bulan,
                            (select
                              count(substr(pr_number, 1,3))
                              FROM
                              purchase_request pr1
                              where
                              substr(pr_number, 1,3) like '300%'
                              and date_format(pr.pr_date,'%M-%Y') = date_format(pr1.pr_date,'%M-%Y')
                            )jasa,
                            (select
                              count(substr(pr_number, 1,3))
                              FROM
                              purchase_request pr1
                              where
                              substr(pr_number, 1,3) like '200%'
                              and date_format(pr.pr_date,'%M-%Y') = date_format(pr1.pr_date,'%M-%Y')
                            )material,
                            (select
                              count(substr(pr_number, 1,3))
                              FROM
                              purchase_request pr1
                              where
                              substr(pr_number, 1,3) like '400%'
                              and date_format(pr.pr_date,'%M-%Y') = date_format(pr1.pr_date,'%M-%Y')
                            )panjar,
                            (select
                              count(substr(pr_number, 1,3))
                              FROM
                              purchase_request pr1
                              where
                              substr(pr_number, 1,3) like '900%'
                              and date_format(pr.pr_date,'%M-%Y') = date_format(pr1.pr_date,'%M-%Y')
                            )kontrak,
                            (select
                              count(substr(pr_number, 1,3))
                              FROM
                              purchase_request pr1
                              where
                              substr(pr_number, 1,3) like '550%'
                              and date_format(pr.pr_date,'%M-%Y') = date_format(pr1.pr_date,'%M-%Y')
                            )docking
                            FROM 
                            purchase_request pr
                            where
                            pr.pr_date not like '1970-01-01'
                            group by date_format(pr.pr_date,'%M-%Y')
                            order by date_format(pr.pr_date,'%m%Y')
                            ";

                              $result = $conn->query($sql);
                              while($row = $result->fetch_assoc()) {
                          ?>

                              <tr>
                                <td><?php echo $row["bulan"];?></td>
                                <td><?php echo $row["material"];?></td>
                                <td><?php echo $row["jasa"];?></td>
                                <td><?php echo $row["panjar"];?></td>
                                <td><?php echo $row["docking"];?></td>
                                <td><?php echo $row["kontrak"];?></td>
                              </tr>

                          <?php
                          }
                          ?>
                            </tbody>
                          </table>
                        </div>