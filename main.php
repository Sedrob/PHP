<?php # ознокомление 
	error_reporting(-1);
	$title = 'What this?';
	$pydi = 'Hehe??';
	$piy = 'Hohoh?';
	$wan = 228;
	$wan2 = 2.12;
	$a = 2;
	$b = 2.51;
	$c = -5;

	define("POWERAB","gold");
	const POWER = 'green';
?>
<!DOCTYPE html>
<html long="en">
<head>
	<meta charset="UTF-8">
	<title>$title</title>
</head>
<body>
	<div> <!-- Работа с данными и переменными  -->
		<p>Helloy boy</p>
		<h1><?php echo POWERAB;?></h1>
		<h2><?php echo POWER;?></h1>
		<p><?php echo 5*$a;?></p>
		<p><?php echo "Вот пример ($a / $b-(6 + $c)*(($a - 8)*($c + 8))) * 0.8 "."Ответ - ".($a / $b-(6 + $c)*(($a - 8)*($c + 8))) * 0.8;?></p>
		<p><?php echo $a ** 5;?></p>
		<h1><?php echo "sadasdsa ".$a.$b.$c." "." asdsa";?></h1>
		
		<h4><?php echo ++$a;?></h4>
		<h4><?php echo $a++;?></h4>
		<h4><?php echo $a;?></h4>
		<p><?php echo $piy .= 'KEK';?></p>
	</div>
	<hr/>	
	<div>
		<?php  # Устловия
		if($a == 2){
			echo 'Значние а = '. $a;
		}
		elseif($a == 3){
			echo 'Значение a = '. $a;
		}
		else{
			echo 'Значние a не 2 и не 3 а - '. $a;
		};
		?>
	</div>
	<hr/>
	<div>
		<?php # Таблица 
		$i = 1;
		echo "<table border=\"1\">\n";
		while($i <= 10)
		{
			echo "\t<tr>\n";
			$n = 1;
			while($n <= 3){
				echo "\t\t<td>Row $i | Col - $n </td>\n";
				$n++;
			};
			echo "\t</tr>\n";
			$i++;
		};
		echo '<table>'
		?>
	</div>
	<div>
		<?php # Список от 1941 - 2022 
			$i = 1941;
			echo "<select>";
			while($i <= 2022){
				echo "<option value = '$i'>$i</option>";
				$i++;
			}
			echo "</select>";
		?>
	</div>
	<hr/>
	<div>
		<?php 
		$i = 1;
		echo "<table border=\"1\">\n";
		while($i <= 10)
		{
			echo "\t<tr>\n";
			$n = 1;
			while($n <= 10){
				# ".$n * $i." - выполняет счет
				echo "\t\t<td>$n * $i = ".$n * $i."</td>\n"; 
				$n++;
			};
			echo "\t</tr>\n";
			$i++;
		};
		echo '<table>'
		?>
	</div>

	<hr/>
	<h1>Test</h1>
	<?php # Эксперементы
		echo $wan * $wan2;
		echo $pydi;
		print $piy;
	?>		
</body>

</html>