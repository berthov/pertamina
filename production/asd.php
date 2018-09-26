<?php

include("controller/doconnect.php");



              $sql = "
              SELECT date_format(pr.pr_date,'%Y') as tahun,
              (select
                count(substr(pr_number, 1,3))
                FROM
                purchase_request pr1
                where
                substr(pr_number, 1,3) like '300%'
                and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
              )jasa,
              (select
                count(substr(pr_number, 1,3))
                FROM
                purchase_request pr1
                where
                substr(pr_number, 1,3) like '200%'
                and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
              )material,
              (select
                count(substr(pr_number, 1,3))
                FROM
                purchase_request pr1
                where
                substr(pr_number, 1,3) like '400%'
                and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
              )panjar,
              (select
                count(substr(pr_number, 1,3))
                FROM
                purchase_request pr1
                where
                substr(pr_number, 1,3) like '900%'
                and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
              )kontrak,
              (select
                count(substr(pr_number, 1,3))
                FROM
                purchase_request pr1
                where
                substr(pr_number, 1,3) like '550%'
                and date_format(pr1.pr_date,'%Y') = date_format(sysdate(),'%Y')
              )docking
              FROM 
              purchase_request pr
              where
              pr.pr_date not like '1970-01-01'
              and date_format(pr.pr_date,'%Y') = date_format(sysdate(),'%Y')
              group by date_format(pr.pr_date,'%Y')
              ";

              $result = $conn->query($sql);
              while($row = $result->fetch_assoc()) {
                echo $row['tahun'];
                echo $row['jasa'];echo ",";
                echo $row['material'];echo ",";
                echo $row['panjar'];echo ",";
                echo $row['kontrak'];echo ",";
                echo $row['docking'];        
              }
               

?>