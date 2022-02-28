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
 	<?php 
 	echo "<table border = \"1\">";
 	$i = 1;
 	while($i <= 10){
 		echo "<tr>";
	 	$n = 1;
	 	while($n <= 3){
	 		echo "<td?Row $i | Col - $n </td>";
	 		$n++;
	 	}
	 	echo "</tr>";
	 	$i++;
 	}
 	echo '</table>';
 	?>
</body>