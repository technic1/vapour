<!DOCTYPE html> 
<html> 
<head> 
</head>
<body>
<?php
	
	$connection = mysqli_connect('localhost','root','','vapour');
	if ($connection == false)
	{
		echo "Error<br>";
		echo mysqli_connection_error();
		exit();
	}

	#запрос всех значений из таблицы
	$result = mysqli_query($connection, "SELECT * FROM `stations`");

	#Вывод всей таблицы
	while(($record = mysqli_fetch_assoc($result)))
	{
		print_r($record);
		echo '<hr>';
	}	

	$power = $_POST['text1'];
	$auto_condition = $_POST['condition'];
	$inst_type = isset($_POST['inst_type']) ? $_POST['inst_type'] : 'NULL';
	$nox = $_POST['nox_select'];
	$need_works = isset($_POST['need_startup_works']) ? $_POST['need_startup_works'] :  'false';
	echo json_encode($power); 
	echo '<br>';
	echo $auto_condition;
	echo '<br>';
	echo $inst_type;
	echo '<br>';
	echo $nox;
	echo '<br>';
	echo $need_works;
	echo '<hr>';


	#запрос станций у которых мощность меньше необходимой или равна
	$result_power = mysqli_query($connection, "SELECT * FROM `stations` WHERE power <= $power");
	
	#выводим эти станции и создаем массив 
	$stations = array();
	while(($record = mysqli_fetch_assoc($result_power)))
	{	
		print_r($record);
		$stations[] = $record;
		echo '<hr>';

	}

	#нахождение количества станций и определние наилучшего варианта
	$index = 0;	
	for($i=0; $i < mysqli_num_rows($result_power);$i++)
	{
		$count = intdiv($power,$stations[$i]["power"]) + 1;
		$counts[$i] = $count;
		echo $counts[$i]." станции ".$stations[$i]["name"]."<br>";
		$sum_power[$i] = $counts[$i]*$stations[$i]["power"];
	}
	$diff_result = $counts[0]*$stations[0]["power"] - $power;
	
	for($i=0; $i < mysqli_num_rows($result_power);$i++)	
	{
		if ($diff_result > ($diff = $sum_power[$i] - $power ) )
		{
			$diff_result = $diff;
			$index = $i;
		}
		echo "разница мощности ".$diff_result." ";
	}
	echo "<hr>";
	echo $counts[$index]." станции ".$stations[$index]["name"]." с мощностью : ".$stations[$index]["power"]." Вт" ;



	#вывод стоимости 
	$cost = 0;
	if ($auto_condition == open)
	{
		$cost += $stations[$index]["open"];
	}
	echo $cost;


/*	создание excel файла

	$station_power = $_GET['text1'];
	$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load("vapour_base.xlsx");
	$spreadsheet->getActiveSheet()->setCellValue('A1', $station_power);

	$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet,"Xlsx");
	$writer->getActiveSheet()->setCellValue('A1', $station_power);
	$writer->save("vapour_base.xlsx");	
*/
?>	
</body> 
</html>