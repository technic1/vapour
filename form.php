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

	$power = $_GET['text1'];
	$auto_condition = $_GET['condition'];
	$inst_type = isset($_GET['inst_type']) ? $_GET['inst_type'] : 'NULL';
	$nox = $_GET['nox_select'];
	$need_works = isset($_GET['need_startup_works']) ? $_GET['need_startup_works'] :  'false';
	echo $power;
	echo '<br>';
	echo $auto_condition;
	echo '<br>';
	echo $inst_type;
	echo '<br>';
	echo $nox;
	echo '<br>';
	echo $need_works;



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