<?php
session_start();
require_once 'function/func27.php';

if(!isset($_SESSION['admin'])) die('Вы не авторизованы');
echo 'Добро пожаловать <br>';
#Подключение к БД
$connection = mysqli_connect('127.0.0.1','root','','testbd'); # Можно записать как $connection = mysqli_connect('127.0.0.1','root','','testbd') or die('Не установлена соеднинени');
if( $connection == false )
{
	echo 'Не удалось установить соеденение с базой данных <br>';
	echo mysqli_connect_error();
	exit();
}
else
{
	echo 'Свзяь установлина<br>';
}
$testic = "d`Artanyan";
mysqli_set_charset($connection,"utf8") or die('Не установлена кодировка');
# Подключение к БД
# Добавление записи 
// $insert = "INSERT INTO comment (name,text) VALUES ('Оля','Lord of my ring')";
// $res_insert = mysqli_query($connection,$insert);
// if ($res_insert) echo 'OK';
// else echo 'ERROR';
// echo mysqli_errore($connection);
# Добавление записи
# Update
// $update = "UPDATE comment SET text = CONCAT(text, '|||') WHERE id > 2"; # Изменение текста, добовляет ||| в конец строки 
// $res_update = mysqli_query($connection,$update) or die(mysqli_errore($connection));
# Update; удаление аналогично
echo mysqli_affected_rows($connection); 
# Вывод данных 
$res = mysqli_query($connection, "SELECT name, text, date FROM comment ORDER BY id DESC");
//echo mysqli_num_rows($res); # Выводит количество строк 
$data = mysqli_fetch_all($res, MYSQLI_ASSOC);
//print_array($data);# Функция
# $str = mysqli_real_escape_string($testic); Выводить текст с апострофом 
#2 Вариант вывода можно будет делать что-то с массивом при его формировании. 
// $data2 = [];
// while($row = mysqli_fetch_assoc($res)){
// 	//print_array($row);
// 	$data2[$row['id']] = $row;
// }

foreach ($data as $item) { # ($data as $item)
	echo "Name: {$item['name']}<br>";
	echo "Name: {$item['text']}<br>";
	echo "Name: {$item['date']}<br>";
	echo '<hr>';
}
# Вывод 
?>

<?php error_reporting(-1); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home Page</title>
</head>

<body>
 	<div>
 		<a href="session.php?do=exit">Logout</a>
 		<hr/>

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
</body>