
<?php
/**
 * What we'll learn today
 * - break and continue from loops class...
 * - Functions
 */


# Break and Continue
// break - to stop the loop
// continue - to skip the current step and move to the next step

/*
// Numbers from 1 to 1000
for ($i = 1; $i <= 1000; ++$i) {
  echo $i . " ";

  // if ($i == 300) {
  //   break;
  // }
  if ($i == 300) break;
}
*/

/*
// Odd numbers from 1 to 100
for ($i = 1; $i <= 100; ++$i) {
  // if it's even number, then skip it
  if ($i % 2 == 0) {
    continue; // skip the current step and move to the next step
  }

  echo $i . " ";
}
*/

// Functions
// - A function is a block of code that can be reused and it can be called multiple times.
// Syntax: function function_name() { code to be executed; }

function sayHello()
{
  echo "Hello, World!" . "<br>";
}

// sayHello(); // calling the function

// Naming Conventions
// Available naming conventions: camelCase, snake_case, PascalCase, kebab-case
// camelCase: sayHello, getUserName, getUserNameById
// snake_case: say_hello, get_user_name, get_user_name_by_id
// PascalCase: SayHello, GetUserName, GetUserNameById
// kebab-case: say-hello, get-user-name, get-user-name-by-id // usually used in urls

// - Function names in PHP should be in camelCase or snake_case depending on your preference or the project's coding standards or the coding standard of the framework you are using.
// - Class names in PHP should be in PascalCase.

// Function with parameters
// Parameters are variables that the function expects to receive when it is called. They are those variables declared in the function definition.
// Note: Parameters are usually confused with arguments. 
// Arguments are the actual values passed to the function when it is called.


/*
function greet_user($name) // parameter
{
  echo "Hello, " . $name . "!" . "<br>";
}

greet_user("John"); // argument
greet_user("John"); // argument
// greet_user(); // ArgumentCountError
*/


/*
// A parameter can have a default value
function greet_user($name = "Guest")
{
  echo "Hello, " . $name . "!" . "<br>";
}

greet_user("John");
greet_user();
*/

// You can have multiple parameters
function greet_user($name, $age)
{
  echo "Hello, " . $name . "! You are " . $age . " years old." . "<br>";
  $age = 100;
}

// greet_user("John", 25);

// $foo = 30;
// greet_user("Jane", $foo);


// Passing arguments by reference
// So far, we have been passing arguments by value. This means that the function receives a copy of the argument.
// But sometimes, you may want to pass the actual variable to the function. This is called passing by reference.
// When you pass by reference, the value of the variable can be changed inside the function and the change will be reflected outside the function.

// $bar = 50;
// greet_user("Joe", $bar); // Passing by value

// echo $age; // Undefined variable age

function greet_user_two($name, &$age)
{
  echo "Hello, " . $name . "! You are " . $age . " years old." . "<br>";
  $age = 100;
}

// $baz = 20;
// greet_user_two("Sixtus", $baz); // Passing by reference
// echo $baz; // 100

// Returning values from a function
// A function can return a value using the return keyword.

/**
 * Function that adds two numbers
 */
function add_two_numbers($a, $b)
{
  return $a + $b;
}

// echo add_two_numbers(10, 20); // 30
$sum = add_two_numbers(10, 5);

// echo $sum;

/**
 * Function that adds two numbers
 */
function adds_numbers(int $a, int $b, int $c = 0)
{
  return $a + $b + $c;
}

echo adds_numbers(10, 20, 40); // 30
