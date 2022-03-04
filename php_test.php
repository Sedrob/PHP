<?php

$connection = mysqli_connect('127.0.0.1','root','','testbd'); 
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
?>

<?php error_reporting(-1); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home Page</title>
</head>

<body>
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
</body>