<?php

function show($message){
	echo "<p>$message</p>";
}

abstract class Unit{//abstracto o genérico.

	protected $alive;
	protected $name;
	protected $hp = 40;

	public function __construct($name){
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}

	public function move($direction){
		show("<p>{$this->name} avanza hacia $direction.</p>");
	}

	public function attack2($opponent){
		show("<p>{$this->name} lanza un golpe a $opponent.</p>");
	}

	abstract public function attack(Unit $opponent);//ataque pero no sabemos cómo.

	public function diee(){
		show("<p>{$this->name} muere.</p>");
	}

	public function getHp(){
		return $this->hp;
	}

	public function takeDamage($damage){

		$this->hp = $this->hp - $damage);

		if($this->hp <= 0){
			$this->diee();
		}

	}

	private public function setHp($hp){//para que no lo usen
		$this->hp = $hp;

		show("{$this->name} ahora tiene {$this->hp} puntos de vida.");
	}

}

class Soldier extends Unit{

	public function attack2($opponent){//metodo del padre Unit.
		show("<p>{$this->name} corta a $opponent en dos.</p>");
	}

	public function attack(Unit $opponent){//metodo del padre Unit abstracto.
		show("<p>{$this->name} corta a $opponent en dos a2.</p>");
	}

}

class Archer extends Unit{

	protected $damage = 20;

	public function attack2($opponent){//metodo del padre Unit.
		show("<p>{$this->name} lanza una flecha a $opponent.</p>");
	}

	public function attack(Unit $opponent){//method_exists(object, method_name)o del padre Unit abstracto.
		show("<p>{$this->name} lanza una flecha a {$opponent->getName()} a2.</p>");

		$opponent->takeDamage($this->damage);

		/*if($opponent instanceof Soldier){
			$damage = $this->damage / 2;
		}else{
			$damage = $this->damage;
		}

		$opponent->setHp($opponent->getHp() - $damage);

		if($opponent->getHp() <= 0){
			$opponent->diee();
		}*/

		//principio tell don't ask
		
	}



}
/*
$unidad = new Soldier('Soldier');
$unidad->attack2("Oponente");
$unidad->move("la derecha");
*/

$ramm = new Soldier('Soldado');
$silence = new Archer('Arquero');

$silence->attack($ramm);
$silence->attack($ramm);

?>