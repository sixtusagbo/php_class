<?php
# Conditionals
// $age = 16;

// if statement
// if else statement
// if else..if
// nested if statement
// switch statement

// if (condition) { code to run if condition is true }
// else { code to run if condition is false }

/*
if ($age >= 18) {
  echo "You don become adult o";
} else {
  echo "You be pikin";
}

if ($age >= 18) {
  echo "You don become adult o";
} else if ($age >= 13) {
  echo "You be teenager";
} else {
  echo "You be pikin";
}

// nested if statement
if ($age >= 18) {
  if ($age >= 60) {
    echo "You be old";
  } else {
    echo "You don become adult o";
}
} else {
  echo "You be pikin";
}
if ($age >= 18 && $age < 60 && $age !== 25) {
  echo "You don become adult o";
} else {
  echo "You be pikin";
}
*/

/*
// switch statement
$favoriteFood = "plantain";

switch ($favoriteFood) {
  case 'rice':
    echo "I love rice";
    break;
  case 'beans':
    echo "I love beans";
    break;
  case 'yam':
    echo "I love yam";
    break;
  default:
    echo "I don't like any food";
    break;
}
*/

/*
// Ternary operator
// condition ? code to run if condition is true : code to run if condition is false
$age = 16;
$adult = $age >= 18 ? "You don become adult o" : "You be pikin";
echo $adult;
*/

# More on increment and decrement operators 
// pre - before 
// post - after
// -----------------------------------
// $i++ - post increment
// ++$i - pre increment
// $i-- - post decrement
// --$i - pre decrement
// define('PI', 3.142);
// $i = 10;
// echo $i++; // 10
// echo $i; // 11
// echo ++$i . "<br>"; // 11
// echo $i; // 11

// $i += $i++;
// $i = $i + $i++;
// echo $i; // 21

// Loops
// Loops are used to execute a block of code multiple times.
// for loop
// while loop
// do while loop
// foreach loop

// for loop
// Syntax: for (initialization; condition; increment/decrement) { code to run }

// for ($i = 0; $i < 10; $i++) {
//   echo $i . "<br>";
// }

/*
// while loop
// Syntax: while (condition) { code to run }
$counter = 0;

while ($counter < 10) {
  echo $counter . "<br>";

  // increment/decrement the counter
  // find a way to break the loop in order to avoid infinite loop
  $counter++;
}
*/

/*
// do while loop
// Syntax: do { code to run } while (condition);
$counter = 10;

do {
  echo $counter . "<br>";

  // increment/decrement the counter
  // find a way to break the loop in order to avoid infinite loop
  // $counter++;
} while ($counter > 10);
*/

// foreach loop
// Syntax: foreach ($array as $value) { code to run }
// OR foreach ($array as $key => $value) { code to run }

/*
$names = ["Agnes", "Blessing", "Chidinma", "David", "Emeka"];

foreach ($names as $name) {
  echo $name . "<br>";
}
*/

/*
$contacts = [
  "Agnes" => "08012345678",
  "Blessing" => "08087654321",
  "Chidinma" => "08023456789",
  "David" => "08076543210",
  "Emeka" => "08034567890"
];

foreach ($contacts as $name => $phone) {
  echo "$name: $phone <br>";
}
*/

$food = [
  ['rice', 'beans', 'yam', 'plantain'],
  ['rice' => 200, 'beans' => 150, 'yam' => 300, 'plantain' => 100],
  ['breakfast' => '7:00am', 'lunch' => '1:00pm', 'dinner' => '7:00pm'],
  'riceEaters' => 4,
  8
];

foreach ($food as $key => $value) {
  // $value = is_array($value) ? implode(", ", $value) : $value;
  // echo "$key: $value <br>";
  echo "Printing index $key <br>";
  if (is_array($value)) {
    echo "This is an array <br>";
    foreach ($value as $k => $v) {
      echo "$k: $v <br>";
    }
  } else {
    echo "This is not an array <br>";
    echo "$key: $value <br>";
  }
  echo "<br>";
}
