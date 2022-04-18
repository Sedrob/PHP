<?php
class first_class
 {
 	public $color;
 	public $wheels = 4;
	public $speed = 180;
 	var $brand;

 	public function __construct($color,$wheels,$speed,$brand)
 	{
 		//echo __METHOD__ . '<br>';
 		$this->color = $color;
 		$this->wheels = $wheels;
 		$this->speed = $speed;
		$this->brand = $brand;
 	}

 	public function getLoren(){#Разрыв класса
 		?>
 		<div>Hello world!</div> 
 		<?php
 	}
 	public function getCarInfo(){
 		return "<h3>О моей машине:</h3>
 			Марка: {$this->brand} <br>
 			Цвет: {$this->color} <br>
 			Количество колес: {$this->wheels} <br>
 			Скорость: {$this->speed} <br>";
 	}

 	public function __destruct()#При удалении объектов
 	{
 		var_dump($this);
 	}
 }

?>