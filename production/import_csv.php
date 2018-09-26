<?php 
include("controller/doconnect.php");
require_once 'Classes/PHPExcel.php';



if(isset($_POST["pr"])){


	$excel = PHPExcel_IOFactory::load($_FILES['file']['tmp_name']);
	// $excel = PHPExcel_IOFactory::load('test.xlsx');

// DELETE TABLE
	$sql ="DELETE FROM purchase_request";
	$result = mysqli_query($conn, $sql);


// SHEET 2

	if ($excel->setActiveSheetIndex(1)) {


		$i = 11;

		while ($excel->getActiveSheet()->getCell('A'.$i)->getValue() != "") {
			
			$kapal 						=$excel->getActiveSheet()->getCell('B'.$i)->getValue();
			$cost_center 				=$excel->getActiveSheet()->getCell('C'.$i)->getValue();
			$technical_superintendent	=$excel->getActiveSheet()->getCell('D'.$i)->getValue();
			$deskripsi	 				=$excel->getActiveSheet()->getCell('E'.$i)->getValue();
			$status_part 				=$excel->getActiveSheet()->getCell('F'.$i)->getValue();
			$cost_element 				=$excel->getActiveSheet()->getCell('G'.$i)->getValue();
			$cost_element_desc 			=$excel->getActiveSheet()->getCell('H'.$i)->getValue();
			$FRL_MD_MM_2018 			=$excel->getActiveSheet()->getCell('K'.$i)->getValue();
			$pr_number 					=$excel->getActiveSheet()->getCell('L'.$i)->getValue();
			$pr_date 					=date('Y-m-d',strtotime(str_replace(".","-",$excel->getActiveSheet()->getCell('M'.$i)->getValue())));
			$nilai 						=str_replace(".","",$excel->getActiveSheet()->getCell('N'.$i)->getValue());
			$po_number 					=$excel->getActiveSheet()->getCell('O'.$i)->getValue();
			$po_date 					=date('Y-m-d',strtotime(str_replace(".","-",$excel->getActiveSheet()->getCell('P'.$i)->getValue())));
			$nilai_po 					=str_replace(".","",$excel->getActiveSheet()->getCell('Q'.$i)->getValue());
			$sa_number 					=$excel->getActiveSheet()->getCell('R'.$i)->getValue();
			$sa_date 					=$excel->getActiveSheet()->getCell('S'.$i)->getValue();
			$vendor 					=$excel->getActiveSheet()->getCell('T'.$i)->getValue();
			$keterangan_pembayaran 		=$excel->getActiveSheet()->getCell('U'.$i)->getValue();
			$requestor 					=$excel->getActiveSheet()->getCell('V'.$i)->getValue();


		 	$sql = "INSERT into purchase_request (kapal, cost_center, technical_superintendent, deskripsi,status_part,cost_element,cost_element_desc,FRL_MD_MM_2018,pr_number,pr_date,nilai,po_number,po_date,nilai_po,sa_date,sa_number,vendor,keterangan_pembayaran,requestor) 
		    values ('".$kapal."','".$cost_center."','".$technical_superintendent."','".$deskripsi."','".$status_part."','".$cost_element."','".$cost_element_desc."','".$FRL_MD_MM_2018."','".$pr_number."','".$pr_date."','".$nilai."','".$po_number."','".$po_date."','".$nilai_po."','".$sa_date."','".$sa_number."','".$vendor."','".$keterangan_pembayaran."','".$requestor."')";

		    $result = mysqli_query($conn, $sql);

			$i++;

			}
	}


// SHEET 3

	if ($excel->setActiveSheetIndex(2)) {


	$i = 11;

	while ($excel->getActiveSheet()->getCell('A'.$i)->getValue() != "") {
		
		$kapal 						=$excel->getActiveSheet()->getCell('B'.$i)->getValue();
		$cost_center 				=$excel->getActiveSheet()->getCell('C'.$i)->getValue();
		$technical_superintendent	=$excel->getActiveSheet()->getCell('D'.$i)->getValue();
		$deskripsi	 				=$excel->getActiveSheet()->getCell('E'.$i)->getValue();
		$status_part 				=$excel->getActiveSheet()->getCell('F'.$i)->getValue();
		$cost_element 				=$excel->getActiveSheet()->getCell('G'.$i)->getValue();
		$cost_element_desc 			=$excel->getActiveSheet()->getCell('H'.$i)->getValue();
		$FRL_MD_MM_2018 			=$excel->getActiveSheet()->getCell('K'.$i)->getValue();
		$pr_number 					=$excel->getActiveSheet()->getCell('L'.$i)->getValue();
		$pr_date 					=date('Y-m-d',strtotime(str_replace(".","-",$excel->getActiveSheet()->getCell('M'.$i)->getValue())));
		$nilai 						=str_replace(".","",$excel->getActiveSheet()->getCell('N'.$i)->getValue());
		$po_number 					=$excel->getActiveSheet()->getCell('O'.$i)->getValue();
		$po_date 					=date('Y-m-d',strtotime(str_replace(".","-",$excel->getActiveSheet()->getCell('P'.$i)->getValue())));
		$nilai_po 					=str_replace(".","",$excel->getActiveSheet()->getCell('Q'.$i)->getValue());
		$sa_number 					=$excel->getActiveSheet()->getCell('R'.$i)->getValue();
		$sa_date 					=$excel->getActiveSheet()->getCell('S'.$i)->getValue();
		$vendor 					=$excel->getActiveSheet()->getCell('T'.$i)->getValue();
		$requestor 					=$excel->getActiveSheet()->getCell('U'.$i)->getValue();


	 	$sql = "INSERT into purchase_request (kapal, cost_center, technical_superintendent, deskripsi,status_part,cost_element,cost_element_desc,FRL_MD_MM_2018,pr_number,pr_date,nilai,po_number,po_date,nilai_po,sa_date,sa_number,vendor,requestor) 
	    values ('".$kapal."','".$cost_center."','".$technical_superintendent."','".$deskripsi."','".$status_part."','".$cost_element."','".$cost_element_desc."','".$FRL_MD_MM_2018."','".$pr_number."','".$pr_date."','".$nilai."','".$po_number."','".$po_date."','".$nilai_po."','".$sa_date."','".$sa_number."','".$vendor."','".$requestor."')";

	    $result = mysqli_query($conn, $sql);

		$i++;

		}
	}

// SHEET 4

	if ($excel->setActiveSheetIndex(3)) {


	$i = 11;

	while ($excel->getActiveSheet()->getCell('A'.$i)->getValue() != "") {
		
		$kapal 						=$excel->getActiveSheet()->getCell('B'.$i)->getValue();
		$cost_center 				=$excel->getActiveSheet()->getCell('C'.$i)->getValue();
		$technical_superintendent	=$excel->getActiveSheet()->getCell('D'.$i)->getValue();
		$deskripsi	 				=$excel->getActiveSheet()->getCell('E'.$i)->getValue();
		$status_part 				=$excel->getActiveSheet()->getCell('F'.$i)->getValue();
		$cost_element 				=$excel->getActiveSheet()->getCell('G'.$i)->getValue();
		$cost_element_desc 			=$excel->getActiveSheet()->getCell('H'.$i)->getValue();
		$FRL_MD_MM_2018 			=$excel->getActiveSheet()->getCell('K'.$i)->getValue();
		$pr_number 					=$excel->getActiveSheet()->getCell('L'.$i)->getValue();
		$pr_date 					=date('Y-m-d',strtotime(str_replace(".","-",$excel->getActiveSheet()->getCell('M'.$i)->getValue())));
		$nilai 						=str_replace(".","",$excel->getActiveSheet()->getCell('N'.$i)->getValue());
		$po_number 					=$excel->getActiveSheet()->getCell('O'.$i)->getValue();
		$po_date 					=date('Y-m-d',strtotime(str_replace(".","-",$excel->getActiveSheet()->getCell('P'.$i)->getValue())));
		$nilai_po 					=str_replace(".","",$excel->getActiveSheet()->getCell('Q'.$i)->getValue());
		$sa_number 					=$excel->getActiveSheet()->getCell('R'.$i)->getValue();
		$sa_date 					=$excel->getActiveSheet()->getCell('S'.$i)->getValue();
		$vendor 					=$excel->getActiveSheet()->getCell('T'.$i)->getValue();
		$penghematan 				=$excel->getActiveSheet()->getCell('U'.$i)->getValue();


	 	$sql = "INSERT into purchase_request (kapal, cost_center, technical_superintendent, deskripsi,status_part,cost_element,cost_element_desc,FRL_MD_MM_2018,pr_number,pr_date,nilai,po_number,po_date,nilai_po,sa_date,sa_number,vendor,penghematan) 
	    values ('".$kapal."','".$cost_center."','".$technical_superintendent."','".$deskripsi."','".$status_part."','".$cost_element."','".$cost_element_desc."','".$FRL_MD_MM_2018."','".$pr_number."','".$pr_date."','".$nilai."','".$po_number."','".$po_date."','".$nilai_po."','".$sa_date."','".$sa_number."','".$vendor."','".$penghematan."')";

	    $result = mysqli_query($conn, $sql);

		$i++;

		}
	}

// SHEET 5

	if ($excel->setActiveSheetIndex(4)) {


	$i = 11;

	while ($excel->getActiveSheet()->getCell('A'.$i)->getValue() != "") {
		
		$kapal 						=$excel->getActiveSheet()->getCell('B'.$i)->getValue();
		$cost_center 				=$excel->getActiveSheet()->getCell('C'.$i)->getValue();
		$technical_superintendent	=$excel->getActiveSheet()->getCell('D'.$i)->getValue();
		$deskripsi	 				=$excel->getActiveSheet()->getCell('E'.$i)->getValue();
		$status_part 				=$excel->getActiveSheet()->getCell('F'.$i)->getValue();
		$cost_element 				=$excel->getActiveSheet()->getCell('G'.$i)->getValue();
		$cost_element_desc 			=$excel->getActiveSheet()->getCell('H'.$i)->getValue();
		$FRL_MD_MM_2018 			=$excel->getActiveSheet()->getCell('K'.$i)->getValue();
		$pr_number 					=$excel->getActiveSheet()->getCell('L'.$i)->getValue();
		$pr_date 					=date('Y-m-d',strtotime(str_replace(".","-",$excel->getActiveSheet()->getCell('M'.$i)->getValue())));
		$nilai 						=str_replace(".","",$excel->getActiveSheet()->getCell('N'.$i)->getValue());
		$po_number 					=$excel->getActiveSheet()->getCell('O'.$i)->getValue();
		$po_date 					=date('Y-m-d',strtotime(str_replace(".","-",$excel->getActiveSheet()->getCell('P'.$i)->getValue())));
		$nilai_po 					=str_replace(".","",$excel->getActiveSheet()->getCell('Q'.$i)->getValue());
		$sa_number 					=$excel->getActiveSheet()->getCell('R'.$i)->getValue();
		$sa_date 					=$excel->getActiveSheet()->getCell('S'.$i)->getValue();
		$vendor 					=$excel->getActiveSheet()->getCell('T'.$i)->getValue();
		$proses_upload 				=$excel->getActiveSheet()->getCell('U'.$i)->getValue();
		$proses_pr	 				=$excel->getActiveSheet()->getCell('V'.$i)->getValue();
		$penghematan 				=$excel->getActiveSheet()->getCell('W'.$i)->getValue();


	 	$sql = "INSERT into purchase_request (kapal, cost_center, technical_superintendent, deskripsi,status_part,cost_element,cost_element_desc,FRL_MD_MM_2018,pr_number,pr_date,nilai,po_number,po_date,nilai_po,sa_date,sa_number,vendor,proses_upload,proses_pr,penghematan) 
	    values ('".$kapal."','".$cost_center."','".$technical_superintendent."','".$deskripsi."','".$status_part."','".$cost_element."','".$cost_element_desc."','".$FRL_MD_MM_2018."','".$pr_number."','".$pr_date."','".$nilai."','".$po_number."','".$po_date."','".$nilai_po."','".$sa_date."','".$sa_number."','".$vendor."','".$proses_upload."','".$proses_pr."','".$penghematan."')";

	    $result = mysqli_query($conn, $sql);

		$i++;

		}
	}

// SHEET 6

	if ($excel->setActiveSheetIndex(5)) {


	$i = 11;

	while ($excel->getActiveSheet()->getCell('A'.$i)->getValue() != "") {
		
		$kapal 						=$excel->getActiveSheet()->getCell('B'.$i)->getValue();
		$cost_center 				=$excel->getActiveSheet()->getCell('C'.$i)->getValue();
		$technical_superintendent	=$excel->getActiveSheet()->getCell('D'.$i)->getValue();
		$deskripsi	 				=$excel->getActiveSheet()->getCell('E'.$i)->getValue();
		$status_part 				=$excel->getActiveSheet()->getCell('F'.$i)->getValue();
		$cost_element 				=$excel->getActiveSheet()->getCell('G'.$i)->getValue();
		$cost_element_desc 			=$excel->getActiveSheet()->getCell('H'.$i)->getValue();
		$FRL_MD_MM_2018 			=$excel->getActiveSheet()->getCell('K'.$i)->getValue();
		$pr_number 					=$excel->getActiveSheet()->getCell('L'.$i)->getValue();
		$pr_date 					=date('Y-m-d',strtotime(str_replace(".","-",$excel->getActiveSheet()->getCell('M'.$i)->getValue())));
		$nilai 						=str_replace(".","",$excel->getActiveSheet()->getCell('N'.$i)->getValue());
		$po_number 					=$excel->getActiveSheet()->getCell('O'.$i)->getValue();
		$po_date 					=date('Y-m-d',strtotime(str_replace(".","-",$excel->getActiveSheet()->getCell('P'.$i)->getValue())));
		$nilai_po 					=str_replace(".","",$excel->getActiveSheet()->getCell('Q'.$i)->getValue());
		$sa_number 					=$excel->getActiveSheet()->getCell('R'.$i)->getValue();
		$sa_date 					=$excel->getActiveSheet()->getCell('S'.$i)->getValue();
		$vendor 					=$excel->getActiveSheet()->getCell('T'.$i)->getValue();
		$penghematan 				=$excel->getActiveSheet()->getCell('U'.$i)->getValue();


	 	$sql = "INSERT into purchase_request (kapal, cost_center, technical_superintendent, deskripsi,status_part,cost_element,cost_element_desc,FRL_MD_MM_2018,pr_number,pr_date,nilai,po_number,po_date,nilai_po,sa_date,sa_number,vendor,penghematan) 
	    values ('".$kapal."','".$cost_center."','".$technical_superintendent."','".$deskripsi."','".$status_part."','".$cost_element."','".$cost_element_desc."','".$FRL_MD_MM_2018."','".$pr_number."','".$pr_date."','".$nilai."','".$po_number."','".$po_date."','".$nilai_po."','".$sa_date."','".$sa_number."','".$vendor."','".$penghematan."')";

	    $result = mysqli_query($conn, $sql);

		$i++;

		}
	}

// SHEET 7

	if ($excel->setActiveSheetIndex(6)) {


	$i = 11;

	while ($excel->getActiveSheet()->getCell('A'.$i)->getValue() != "") {
		
		$kapal 						=$excel->getActiveSheet()->getCell('B'.$i)->getValue();
		$cost_center 				=$excel->getActiveSheet()->getCell('C'.$i)->getValue();
		$technical_superintendent	=$excel->getActiveSheet()->getCell('D'.$i)->getValue();
		$deskripsi	 				=$excel->getActiveSheet()->getCell('E'.$i)->getValue();
		$status_part 				=$excel->getActiveSheet()->getCell('F'.$i)->getValue();
		$cost_element 				=$excel->getActiveSheet()->getCell('G'.$i)->getValue();
		$cost_element_desc 			=$excel->getActiveSheet()->getCell('H'.$i)->getValue();
		$FRL_MD_MM_2018 			=$excel->getActiveSheet()->getCell('K'.$i)->getValue();
		$pr_number 					=$excel->getActiveSheet()->getCell('L'.$i)->getValue();
		$pr_date 					=date('Y-m-d',strtotime(str_replace(".","-",$excel->getActiveSheet()->getCell('M'.$i)->getValue())));
		$nilai 						=str_replace(".","",$excel->getActiveSheet()->getCell('N'.$i)->getValue());
		$po_number 					=$excel->getActiveSheet()->getCell('O'.$i)->getValue();
		$po_date 					=date('Y-m-d',strtotime(str_replace(".","-",$excel->getActiveSheet()->getCell('P'.$i)->getValue())));
		$nilai_po 					=str_replace(".","",$excel->getActiveSheet()->getCell('Q'.$i)->getValue());
		$sa_number 					=$excel->getActiveSheet()->getCell('R'.$i)->getValue();
		$sa_date 					=$excel->getActiveSheet()->getCell('S'.$i)->getValue();
		$vendor 					=$excel->getActiveSheet()->getCell('T'.$i)->getValue();
		$penghematan 				=$excel->getActiveSheet()->getCell('U'.$i)->getValue();


	 	$sql = "INSERT into purchase_request (kapal, cost_center, technical_superintendent, deskripsi,status_part,cost_element,cost_element_desc,FRL_MD_MM_2018,pr_number,pr_date,nilai,po_number,po_date,nilai_po,sa_date,sa_number,vendor,penghematan) 
	    values ('".$kapal."','".$cost_center."','".$technical_superintendent."','".$deskripsi."','".$status_part."','".$cost_element."','".$cost_element_desc."','".$FRL_MD_MM_2018."','".$pr_number."','".$pr_date."','".$nilai."','".$po_number."','".$po_date."','".$nilai_po."','".$sa_date."','".$sa_number."','".$vendor."','".$penghematan."')";

	    $result = mysqli_query($conn, $sql);

		$i++;

		}
	}

	header("Location:pr_summary.php");
}

if (isset($_POST["abo_abi"])) {
	
	$excel = PHPExcel_IOFactory::load($_FILES['file']['tmp_name']);

	// DELETE TABLE
	$sql ="DELETE FROM tes";
	$result = mysqli_query($conn, $sql);

	if ($excel->setActiveSheetIndex(4)) {

		do {
	

			$i = 5;
			$j = 6;

			while ($excel->getActiveSheet()->getCell('D'.$i)->getValue() != "") {
				
				$kapal 			=$excel->getActiveSheet()->getCell('C'.$i)->getValue();
				$curr 			=$excel->getActiveSheet()->getCell('D'.$i)->getValue();
				$actual 		=$excel->getActiveSheet()->getCell('E'.$i)->getValue();
				$commitment		=$excel->getActiveSheet()->getCell('F'.$i)->getValue();
				$plan 			=$excel->getActiveSheet()->getCell('G'.$i)->getValue();
				$available 		=$excel->getActiveSheet()->getCell('H'.$i)->getValue();
				$cost_center 	=$excel->getActiveSheet()->getCell('C'.$j)->getValue();


			 	$sql = "INSERT into opex_apex (kapal,curr,actual,commitment,plan,available,cost_center) 
			    values ('".$kapal."','".$curr."','".$actual."','".$commitment."','".$plan."','".$available."','".$cost_center."')";

			    $result = mysqli_query($conn, $sql);

				$i = $i + 2;
				$j = $j + 2;

				}

		} while ( $i <= 49);
	}

}


 ?>

