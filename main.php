<?php # ознокомление 
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
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
<?php require_once 'inc/head.php'?>
<body>
	<?php require_once 'inc/header.php'?>
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
	<div>
		<p> Задание 9 </p>
		<?php 
		# Массив 
		$arrayName = array('Петров', 'Сидоров', 'Иванов');
		var_dump($arrayName);
		echo "<pre>";
		print_r($arrayName);
		echo "</pre>";

		$arr2 = [1,2, ['banana','range','apple'],4];
		$arr3 = [ 3 => 1,2, ['banana','range','apple'],4];
		echo "<pre>";
		print_r($arr2);
		echo "</pre>";

		echo($arr2[2][2]);
		echo "<pre>";
		print_r($arr3);
		echo "</pre>";
		

		$goods = [
			[
				'title' => 'Nokia',
				'price' => 100,
				'description' => 'OK'
			]
			,
			[
				'title' => 'Apple',
				'price' => 150,
				'description' => 'OK'
			]
		];
		echo "<pre>";
		print_r($goods);
		echo "</pre>";
		for ($i=0; $i < count($goods); $i++) 
		{ 
			echo $goods[$i]['title'] . "-" . $goods[$i]['price']. '<br>' ;
		}
		$arrayName[] = 'Pupkin';
		echo "<pre>";
		print_r($arrayName);
		echo "</pre>";
		
		?>
	</div>
	<hr/>
	<div>
		<p> 10 Задание</p>
		<?php 
			$array = array("a" => "green","red","blue",2);
			$array1 = array("b" => "green", "yellow","red");
			$result = array_diff($array, $array1);# Разные элементы
			#$result = array_intersect($array, $array1);Схожие элементы
			#$result = array_keys($goods[0]); Показывает элементы которые в массиве
			#$result = array_merge($array, $array1); Соеденяет значение массива  
			#$result = array_reverse($array1); переворачивает
			#$result = compact('a','b','c') Переменные захлдят в массив 
			echo "<pre>";
			print_r($result);
			echo "</pre>";
		?>
	</div>
	<hr/>
	<div>
		<p>Задание 12</p>
		<?php 
			foreach ($array as $arr) {
				echo $arr. '<br>';
			}
			foreach($goods[0] as $key => $name){
				echo "Name: $key , Surname: $name".'<br>';
			}
		?>
	</div>
	<hr/>
	<div>
		<p>Задание 13</p>
		<?php 
		$bool = true;
		$var = 3;
		switch ($var) {
			case 1:
				echo 1;
				break;
			case 2:
				echo 2;
				break;
			default:
				echo "No";
				break;
		}
		?>

		<?php if($bool): #Если TRUE то выполняется?>
			<table class="table" border="1">
				<tr>
					<td><?php echo 1 ?></td>
					<td><?php echo 2 ?></td>
					<td><?php echo 3 ?></td>
				</tr>
			</table>
		<?php endif; ?>

		<?php foreach($goods[0] as $key => $name): ?>
			"Name: <?php echo $key ?>, Surname: <?php echo $name ?> <br>
		<?php endforeach;?>
		
	</div>

	<hr>
	<div>
		<p> Задание 14</p>
		<?php include 'inc.php' #Если ошибка в подключении то выведит Warning?>
		<?php require 'inc.php' #Если ошибка то ничего не работает?>
		<?php include_once 'inc.php' #Если ошибка в подключении то выведит Warning? Проверяет на повторное подключение?>
		<?php require_once 'inc.php' #Если ошибка то ничего не работает?>
		<p>include загрузили</p>
	</div>
	<hr/>
	<div>
		<p> Задание 15 </p>
		<?php require_once 'function/function.php'?>
		<?php 
		$nums = [1,2,3];
		$names = ['Ivan','Petr'];
		$a = 10;
		$b = 7;
		sum(5,9); #Вызвана функция 
		sum2($a,$b); #Передаем значение в функцию по ссылки $a, из-за чего $a меняется 
		echo $a;

		$arr1 =  my_array_kay($nums);
		print_r($arr1);
		?>
	</div>	
	<hr/>
	<div>
		<p>Задание 16-17 Просмотренно</p>
	</div>
	<hr/>
	<div>
		<p>Задание 18-19-20</p>
		<?php 
		$str = 'Иванов Иван Иванович';
		$str1 = ['Иванов','Иван','Иванович'];
		$data = explode(' ', $str); # Разбвает строку на массив если пробел 3 - элемент дает возможность поставить число  сколько сделать элементов в массиве 
		print_r($data);
		$data = implode(', ', $str1); # Массив преобразует в строку с нужным разделителем join тоже самое 
		echo $data;
		$p = "\n<p>Helloy</p>\n";
		$p .= "\n<p>World</p>\n";
		echo trim($p); # Обрезает символы ненужные rtrim ltrim обрезает по сторонам \
		$pas = 'Fad458';
		echo md5($pas);# Шифрует методом md5
		$br = "Hello\nMirr\n";
		echo $br;
		echo nl2br($br);# Ввод пользователем строчки, там где он поставит enter, так и произовйдет 
		$b = 'Привет меня зовут [b]Вася[/b]';
		$search = ['[b]', '[/b]', '[i]', '[/i]'];
		$replace = ['<b>', '</b>', '<i>', '</i>'];
		$b = str_ireplace($search, $replace, $b); # Без учета регистра 
		// $b = str_replace('[/b]', '</b>', $b); # Исправляет ошибку в написании тегов 
		echo $b;
		# echo strip_tags($str, '<b>') Игнорирует все теги кроме <br>
		# echo strlen - Выводит количество Байтов 
		$pos = 'Привет, мир';
		echo mb_strpos($pos, 'т') ; #Число распологающиегося в строчке вывод будет = 5 
		?>
	</div>
	<hr/>
	<div>
		<p>Задание 21</p>
		<?php
			echo date_default_timezone_get();
			echo '<br>';
			date_default_timezone_set('Europe/Moscow');
			echo date_default_timezone_get();
			echo '<br>';
			echo date('Y-m-d H:i:s'); //Y- 4 цифры года, y- 2 цифры остальные тоже разнит от табуляции
		?>
	<hr/>
	<p>Задания 23</p>
	<?php
	if(isset($_POST['send'])){
		echo '<pre>';
		print_r($_POST);
		echo '<pre>';
	}
	if(isset($_GET['send'])){#Вывод если есть начальный элемент
		echo '<pre>';
		print_r($_POST);
		echo '<pre>';
	};?>
	<form method="post"  action= ""> <!-- action="action.php"> action="action.php" -->
		<p>
			<input type="text" name="name">
		</p>
		<textarea name="text"></textarea>
		<p>
			<select name="lang" >
				<option value="eng">English</option>
				<option value="ru">Russia</option>
				<option value="jp">Japan</option>
			</select>
		<p>
			<button type="submit" name="send" value="test">Send</button>	
		</p>
	</form>
	<p>Введите имя: <?php if(isset($_POST['name'])) echo $_POST['name'];
	else echo 'форма не отправлена'?>
	<p>Введите имя: <?php if(isset($_POST['text'])) echo nl2br($_POST['text']);
	else echo 'форма не отправлена'?>
	<hr/>
	<p>Задание 24</p>
	<?php 
	if (!empty($_FILES))
		print_r($_FILES);
		move_uploaded_file($_FILES['file']['tmp_name'], 'upliad/'. $_FILES['file']['name']);#Переносить файл в нужную папку upliad
	?>
	<form method="post"  action= "" enctype="multipart/form-data"> 
		<p>
			<input type="text" name="name">
		</p>
		<p>
			<textarea name="text"></textarea>
		</p>
		<p>
			<input type="file" name="file">
		</p>
		<p>
			<button type="submit" name="send" value="test">Send</button>	
		</p>
	</form>
	<hr/>
	<p> Задание 25 </p>
	<?php var_dump($_SESSION['name']);?>
	<a href="session.php"> Перейти</a>
	<hr/>
	<p>Задание 26</p>
	<?php
	echo $_COOKIE['test'];
	echo isset($_COOKIE['counter']) ? $_COOKIE['counter']: 1;
	?>
	<hr/>
	<h1>Test</h1>
	<?php # Эксперементы
		echo $wan * $wan2;
		echo $pydi;
		print $piy;
	?>	


	<?php require_once 'inc/scripts.php'?>	
</body>

</html>