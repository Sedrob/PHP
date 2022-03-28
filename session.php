<?php 
session_start();

if(isset($_GET['do']) && $_GET['do'] == 'exit') unset($_SESSION['admin']);

define('ADMIN', 'admin');
if(!empty($_POST['login'])){
	if($_POST['login'] === ADMIN){
		$_SESSION['admin'] = ADMIN;
		$_SESSION['res'] = 'Вы успешно зашли';
	}else{
		$_SESSION['res'] = 'Неудача';
		unset($_SESSION['admin']);
	}
	header("Location: session.php");
	die;
}
// $_SESSION['name'] = 'Андрей';
// $_SESSION['login'] = 'qwer';
// echo $_SESSION['name'];
// echo $_SESSION['login'];
// unset($_SESSION['name']);# Удаление кук
#session_unset(); #Удаление всех кук
#session_destroy(); Удаление сессии

?>
<a href="main.php"> Back </a>

<ul>
	<li><a href="main.php">sess1</a></li>
	<li><a href="index.php">sess2</a></li>
	<li><a href="php_test.php">secret</a></li>
</ul>
<?php 
	if(isset($_SESSION['res'])){
		echo $_SESSION['res'];
		unset($_SESSION['res']);
	}
?>
<hr>

<form action="" method="post">
	<input type="text" name="login">
	<button type="submit">Login</button>
</form>