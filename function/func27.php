<?php
function save_mess(){
	$str = $_POST['name'] . '|'. $_POST['text']. '|'. date('Y-m-d H:i:s'). "\n***\n";# Соеденяет введеный текст и дату и выводит это в файл 
	file_put_contents('gb.txt', $str, FILE_APPEND);
}

function get_mess(){
	return file_get_contents('gb.txt');
}

function array_mess($messages){ # Выводим из текста сообщения 
	$messages = explode("\n***\n", $messages);
	array_pop($messages);
	return array_reverse($messages);
}

function print_array($arr){
	echo '<pre>' . print_r($arr, true) . '<pre>';
}

function get_format_message($message){
	return explode('|', $message);
}
?>