<?php
class Animal{
	public $food, $location;
	function __construct($food, $location){
		$this->food = $food;
		$this->location = $location;
	}
	
	function makeNoise(){
		return "шумит";
	}
	
	function eat(){
		return "ест";
	}
	
	function sleepp(){
		return "спит";
	}
}

class Dog extends Animal{
	public $hairlength;
	
	function __construct($food, $location, $hairlength){
	parent::__construct($food, $location);
	$this->hairlength = $hairlength;
	}
	
	function makeNoise(){
		return "собака"." ".parent::makeNoise();
	}
	
	function eat(){
		return "собака"." ".parent::eat()." ".$this->food;
	}
	
	function sleepp(){
		return "собака"." ".parent::sleepp();
	}
}

class Cat extends Animal{
	public $color;
	
	function __construct($food, $location, $color){
	parent::__construct($food, $location);
	$this->color = $color;
	}
	
	function makeNoise(){
		return "кошка"." ".parent::makeNoise();
	}
	
	function eat(){
		return "кошка"." ".parent::eat()." ".$this->food;
	}
	
	function sleepp(){
		return "кошка"." ".parent::sleepp();
	}
}

class Horse extends Animal{
	public $ispodkovannaya;
	
	function __construct($food, $location, $ispodkovannaya){
	parent::__construct($food, $location);
	$this->ispodkovannaya = $ispodkovannaya;
	}
	
	function makeNoise(){
		return "лошадь"." ".parent::makeNoise();
	}
	
	function eat(){
		return "лошадь"." ".parent::eat()." ".$this->food;
	}
	
	function sleepp(){
		return "лошадь"." ".parent::sleepp();
	}
}

class Vetguy{
	function treatAnimal($obj){
		return $obj->eat()." "."место обитания:"." ".$obj->location."<br>";
	}
}
$veterinar = new Vetguy();

$kitty = new Cat("рыбу", "дом", "серая");
$senbernar = new Dog("корм", "будка", "длинношёрстая");
$burushka = new Horse("зелень", "загон", "подкованная");

echo $veterinar->treatAnimal($kitty);
echo $veterinar->treatAnimal($senbernar);
echo $veterinar->treatAnimal($burushka);
echo "<br>";
echo $kitty->color." ".$kitty->eat()."<br>";
echo $senbernar->hairlength." ".$senbernar->sleepp()."<br>";
echo $burushka->ispodkovannaya." ".$burushka->makeNoise()."<br>";
?>