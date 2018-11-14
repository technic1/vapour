<?php
	
	require 'vendor/autoload.php';

	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


	$station_power = $_GET['text1'];
	$spreadsheet = new Spreadsheet();
	$sheet = $spreadsheet->getActiveSheet();
	$sheet->setCellValue('A1', $station_power);

	$writer = new Xlsx($spreadsheet);
	$writer->save('vapour_base.xlsx');	
?>

<?php 
	echo "$station_power<br/><br/>";
?>