<?php
include("doconnect.php");


// IMPORT
// form_validation.php
 if(isset($_POST["abo_abi"])){
    $filename=$_FILES["file"]["tmp_name"];    


     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
          while (($getData = fgetcsv($file, 10000, ";")) !== FALSE)
           {


             $sql = "INSERT into abo_abi (type, pandan, pelita, paluh_tabuhan, pungut, pematang, mangun_jaya, menggala, minas, melahin, merbau, mundu, musi, meditran, matindok, mauhau, merauke, kamojang, kasim, kakap, parigi, pattimura, pasaman, panjang, tf_man) 
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."','".$getData[13]."','".$getData[14]."','".$getData[15]."','".$getData[16]."','".$getData[17]."','".$getData[18]."','".$getData[19]."','".$getData[20]."','".$getData[21]."','".$getData[22]."','".$getData[23]."','".$getData[24]."')";
                   $result = mysqli_query($conn, $sql);
        if(!isset($result))
        {
          echo "<script type=\"text/javascript\">
              alert(\"Invalid File:Please Upload CSV File.\");
              window.history.back();
              </script>";   
        }
        else {
            header("Location:../tables_dynamic.php");
        }
           }
      
           fclose($file); 
     }
  } 

 if(isset($_POST["pr"])){
    $filename=$_FILES["file"]["tmp_name"];    


     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
          while (($getData = fgetcsv($file, 10000, ";")) !== FALSE)
           {


             $sql = "INSERT into purchase_request (kapal, uraian_pekerjaan, status_part, cost_element, pr_number, pr_date,tgl_proses, po_number, po_date, sa_number, tanggal, nilai, keterangan, penghematan) 
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."','".$getData[13]."')";
                   $result = mysqli_query($conn, $sql);
        if(!isset($result))
        {
          echo "<script type=\"text/javascript\">
              alert(\"Invalid File:Please Upload CSV File.\");
              window.history.back();
              </script>";   
        }
        else {
            header("Location:../tables_dynamic.php");
        }
           }
      
           fclose($file); 
     }
  }

 ?>