<?php 

class Animal{
    public $name;
    public $age;

    public function __construct($nm = "", $ag = 0){
        $this->name = $nm;
        $this->age = $ag;
    }

    public function makeSound(){
        return "test";
    }

    public function describeAnimal(Animal $animal){
        echo $animal->name." is ".$animal->age." years old and makes a ".$animal->makeSound()." sound";
    }
}

class Lion extends Animal{
    public function __construct($nm = "", $ag = 0){
        parent::__construct($nm,$ag);
    }

    public function makeSound(){
        return "roarrrr";
    }
}

class Elephant extends Animal{
    public function __construct($nm = "", $ag = 0){
        parent::__construct($nm,$ag);
    }

    public function makeSound(){
        return "trumpet";
    }
}

$am = new Animal();
$am->describeAnimal(new Lion("Simba",5));
echo "\n";
$am->describeAnimal(new Elephant("Elli",15));
?>