<?php
	function debug($data){
		echo '<pre>' . print_r($data, return: 1) . '</pre>';
	}
	require_once 'classes/FirstClass.php';
	require_once 'classes/File.php';
	
	$car = new first_class('черный',4, 180, 'volvo');
	$car2 = new first_class('синий',4, 220, 'bmw');
	
	// debug($car);

	// $car->color = 'черный';
	// $car->brand = 'volvo';
	// $car->yurs = '2015';
	// debug($car);

	// $car2->color = 'белый';
	// $car2->speed = '250';
	// $car2->brand = 'BMW';
	// debug($car2);

	echo $car->getCarInfo();
	echo $car2->getCarInfo();
	// echo "<h3>О моей машине:</h3>
	// Марка: {$car->brand} <br>
	// Цвет: {$car->color} <br>
	// Количество колес: {$car->wheels} <br>
	// Год выпуска: {$car->yurs} <br>
	// Скорость: {$car->speed} <br>";
#--------------------------------------------------------------------------------------------------------------
	$file = new filee(file: __DIR__ . '/text.txt');
	$file->write(text:'Строка 1');
	$file->write(text:'Строка 11');
	$file->write(text:'Строка 2');
	$file->write(text:'Строка 3');
	$file->write(text:'Строка 4'); 
?>

<!-- <?php require_once '../inc/head.php'?>
<body>
	<?php require_once '../inc/header.php'?>
	<div class="container">
		
	</div>
</body> -->
