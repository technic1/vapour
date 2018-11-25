<?php
	
	$connection = mysqli_connect('localhost','root','','vapour');
	if ($connection == false)
	{
		echo "Error<br>";
		echo mysqli_connection_error();
		exit();
	}

	$result = mysqli_query($connection, "SELECT * FROM stations");
	while(mysqli_fetch_assoc($result));
	{
		print_r($result);
		echo '<hr>';
	}	
/*	require_once 'vendor/autoload.php';
	require_once 'C:\xampp\htdocs\vapour\vendor\phpoffice\phpspreadsheet\src\PhpSpreadsheet\IOFactory.php';
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
	use PhpOffice\PhpSpreadsheet\IOFactory;

	$station_power = $_GET['text1'];
	$spreadsheet = \PhpOffice\PhpSpreadsheet\Reader\IOFactory::load("vapour_base.xlsx");
*/
/*
	$station_power = $_GET['text1'];
	$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load("vapour_base.xlsx");
	$spreadsheet->getActiveSheet()->setCellValue('A1', $station_power);

	$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet,"Xlsx");
	$writer->getActiveSheet()->setCellValue('A1', $station_power);
	$writer->save("vapour_base.xlsx");	
?>	

<?php 
	echo "$station_power<br/><br/>";
?>
*/