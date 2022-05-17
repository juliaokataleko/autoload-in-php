<?php

// require 'Horse.php';
// require 'Person.php';

// $person = new Person();
// $horse = new Horse();

// $horse->speak();
// echo "<hr>";
// $person->walk();

// using autload
spl_autoload_register(function($class) {
    require "Classes/$class.php";
});

$horse = new Horse();
$horse->speak();
