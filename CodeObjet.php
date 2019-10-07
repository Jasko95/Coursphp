<?php 
	Class Animal {
		public $age;
		public $poids;
		
		public function manger() {
			echo "Je mange";
		}
	}
	Class Lion extends Animal{
		public function chasser() {
			echo "Je chasse";
		}
	}
	
	// include "CodeObjet.php";
	// include ".php";
	// require_once "CodeObjet.php";  =======  importe le fichier une fois
	
	$animal = new Animal();
	$animal -> manger();
	
	$lion = new Lion();
	$lion -> chasser();
	$lion -> manger();
	
	
	<?php
Class lion extends Animal{
    public function chasser(){
        echo "Je chasse";
    }
    public function manger(){
        echo "Je mange 2";
    }
    public function setAge^($age){
        $this->age=$age;
    }
    public function getAge(){
        return $this->age;
    }
}