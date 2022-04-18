<?php
class filee
{#Открывает файл для записи
	public $fp;
	public $file;

	public function __construct($file)
	{
		$this->file = $file;
		if(!is_writable($this->file)){
			echo "Файл {$this->file} недоступен";
			exit;
		}
		$this->fp = fopen($this->file, mode:'a');
	}

	public function __destruct()
	{
		fclose($this->fp);
	}

	public function write($text)
	{
		if(fwrite($this->fp, $text . PHP_EOL) === FALSE){
			echo "Не могу проезваести запись в файл {$this->file}";
			exit;
		}
	}
}
?>
