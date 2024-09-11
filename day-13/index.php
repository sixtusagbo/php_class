<?php

/*
class Animal
{
  private $name;
  private $color;
  // static variable
  public static $numberOfAnimals = 0;

  // Constructor
  // A constructor allows you to initialize an object's properties upon creation of the object.
  public function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
    echo __CLASS__ . ' created <br>';
    // echo __DIR__ . '<br>';
    self::$numberOfAnimals++;
  }

  // Destructor
  // A destructor is called when the object is destroyed
  public function __destruct()
  {
    echo 'Animal destroyed' . '<br>';
  }

  // Getters and setters are used to control access to the class properties
  // Getters
  public function getName()
  {
    return $this->name;
  }

  public function getColor()
  {
    return $this->color;
  }

  // Setters
  public function setName($name)
  {
    $this->name = $name;
  }

  public function setColor($color)
  {
    $this->color = $color;
  }

  static function setNumberOfAnimals($number)
  {
    self::$numberOfAnimals = $number;
  }

  static function getNumberOfAnimals()
  {
    return self::$numberOfAnimals;
  }
}
*/

/*
$animal1 = new Animal('Dog', 'Brown');

echo $animal1->getName() . '<br>';
echo $animal1->getColor() . '<br>';

echo Animal::$numberOfAnimals . '<br>';
Animal::setNumberOfAnimals(20);
echo Animal::getNumberOfAnimals() . '<br>';
*/

// Encapsulation
/*
$dog = new Animal('Billy', 'Black');
$cat = new Animal('Sandy', 'White');

echo $dog->getName() . '<br>';
echo $cat->getName() . '<br>';
$dog->setName('Bobby');
$cat->setName('SandySoil');

echo Animal::getNumberOfAnimals() . '<br>';
*/

// Inheritance
/*
class Dog extends Animal
{
  private $sound;

  public function __construct($name, $color, $sound)
  {
    parent::__construct($name, $color, $sound);
    $this->sound = $sound;
  }

  public function getSound()
  {
    return $this->sound;
  }

  public function setSound($sound)
  {
    $this->sound = $sound;
  }

  public function bark()
  {
    return $this->sound;
  }
}

$dog = new Dog('Billy', 'Black', 'woof woof');
echo $dog->bark() . '<br>';
echo $dog->getName() . '<br>';
echo $dog->getSound() . '<br>';
*/

// Abstraction
// A class Animal is an abstract class
// KISS - Keep It Simple Stupid
abstract class Animal
{
  public $name;
  public $color;

  public function describe()
  {
    return $this->name . ' is ' . $this->color;
  }

  abstract public function makeSound();
}

// We can't directly instantiate an object of this our abstract class

class Dog extends Animal
{
  public function describe()
  {
    echo 'foo bar';
    return 'b az';
    // return parent::describe();
  }

  public function makeSound()
  {
    return 'Bark';
  }
}

class Cat extends Animal
{
  public function makeSound()
  {
    return 'Meow';
  }
}


$dog = new Dog();
$dog->name = 'Bobby';
$dog->color = 'Black';

echo $dog->describe() . '<br>';
echo $dog->makeSound() . '<br>';
