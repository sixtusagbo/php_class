<?php
// OOP
// Object Oriented Programming
// OOP is a programming paradigm that uses objects and classes in programming.

// Classes
/*
class Animal
{
  public $name;
  public $color;

  // public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from within the class
  // protected - can only be accessed from within the class and any class that inherits from it
}
*/

// 4 principles of OOP
// - Encapsulation
// - Inheritance
// - Abstraction
// - Polymorphism

/*
$animal1 = new Animal();
$animal1->name = 'Dog';
$animal1->color = 'Brown';

 echo $animal1->color . '<br>';
*/

class Animal
{
  private $name;
  private $color;

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
}

$animal1 = new Animal();
$animal1->setName('Dog');
$animal1->setColor('Brown');

echo $animal1->getName() . '<br>';
