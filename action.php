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
}
if(!empty($_POST)){
	print_r($_POST);
}
if(!empty($_GET)){
	print_r($_GET);

}
?>