<?php

class Animal {
    public $name;
    public $age;

    function makeSound() {
        echo "test";
    }
}

class Lion extends Animal{
    function makeSound(){
        echo "Roar";
    }
}

class Elephant extends Animal{
    function makeSound(){
        echo "Trumpet";
    }
}

$l = new Lion();
$l->makeSound();
echo "\n";
$e = new Elephant();
$e->makeSound()
?>