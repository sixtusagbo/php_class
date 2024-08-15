<?php

# Arrays
// Array is a data type that can store multiple values in a single variable.
// Types of arrays:
// 1. Indexed arrays
// 2. Associative arrays
// 3. Multidimensional arrays

// 1. Indexed arrays
// An array with a numeric index. The numeric index is the key here...
$colors = array('Red', 'Green', 'Blue'); // 3-✅
// echo $colors[0]; // Output: Red
// echo $colors[1]; // Output: Green
// echo $colors[2]; // Output: Blue
$stores = ['Dreamlink', 'All Season Shopping Mall', 'Roban Stores', 'Mega Plaza']; // 4-👎
// echo $stores[0] . "<br>"; // Output: Dreamlink
// echo $stores[1]; // Output: All Season Shopping Mall
// echo $stores[3]; // Output: Mega Plaza
// echo $stores[0]; // Output: Dreamlink
$stores[0] = 'Lucent Spa';
$stores[] = 'Winny Bakes';
// echo $stores[4]; // Output: Lucent Spa

// 2. Associative arrays
// An array with named keys. A named string is the key here...
// People array of persons with their age.
$people = array('John' => 20, 'Jane' => 25, 'Samuel' => 30, 'Grace' => 31); // 4-✅
// echo $people['John']; // Output: 20
// echo $people['Jane']; // Output: 25
// echo $people['Samuel']; // Output: 30
$classSchedule = ['biology' => '8:00am', 'mathematics' => '9:00am', 'english' => '10:00am'];
// echo $classSchedule['biology']; // Output: 8:00am
// echo $classSchedule['mathematics']; // Output: 9:00am
// echo $classSchedule['english']; // Output: 10:00am

// Displaying all the values in an array
// echo 'Print r: <br>';
// print_r($people);
// echo "<br>";
// echo "<br>";

// echo 'Var dump: <br>';
// Can be used to display the data type of the value in the array.
// Is not just for printing arrays, but can be used to print any data type.
// var_dump($people);

// 3. Multidimensional arrays
// An array containing one or more arrays.
// Can also be seen as an array of arrays or array within an array.
$students = array(
  array('John', 'Jane', 'Samuel', 'Grace'),
  array(20, 25, 30, 31),
  array('biology' => '8:00am', 'mathematics' => '9:00am', 'english' => '10:00am')
); // 3-✅
$food = [
  ['rice', 'beans', 'yam', 'plantain'],
  ['rice' => 200, 'beans' => 150, 'yam' => 300, 'plantain' => 100],
  ['breakfast' => '7:00am', 'lunch' => '1:00pm', 'dinner' => '7:00pm'],
]; // 3-✅

// echo $students[0][0]; // Output: John
// echo $students[2]['english']; // Output: 10:00am
// echo $students[1][2];
// echo $students[0][1];

// Exercise
// echo $food[0][0]; // Output: rice
// echo $food[1]['yam'];
// echo $food[2]['dinner'];
// echo $food[0][2];

// Some interesting functions for arrays
// 1. count() - returns the number of elements in an array.
// echo count($colors); // Output: 3
// echo count($stores); // 5
// echo count($people); // 4
// echo count($students); // 3
// echo count($food); // 3

// $lastIndex = count($colors) - 1;
// // echo $lastIndex;
// $colors[$lastIndex + 1] = 'Pink';
// // print_r($colors);
// echo count($colors);

// 2. array_push() - adds one or more elements to the end of an array.
// echo count($colors);
// echo "<br>";
// array_push($colors, 'Yellow', 'Purple');
// echo "<br>";
// echo count($colors);
// echo "<br>";
// print_r($colors);

// Will come back to this later...
// TODO: More array functions...

// Escape characters
// An escape character is a backslash \ followed by the character you want to insert.
// It is used to insert characters that are illegal in a string.
// Single quote - Example:
$foo = 'We are the so-called \'Vikings\' from the north.';

// Double quote
$foo = "We are the so-called \"Vikings\" from the north.";

// Dollar sign for php variable
$name = 'Sixtus';
$foo = "My name is \$name";

// New line
$foo = "Hello\nWorld!"; // Can see it better with <pre> tag.

// Carriage return
$foo = "Hello\rWorld!"; // Can see it better with <pre> tag.

// Tabs
$foo = "Hello\t\t\tWorld!"; // Can see it better with <pre> tag.

// Octal number
// A backslash followed by three integers will result in a octal value:
$foo = "\110\145\154\154\157"; // Hello

// Hexadecimal number
// A backslash followed by x and a hexadecimal number will result in a hexadecimal value:
$foo = "\x48\x65\x6c\x6c\x6f"; // Hello

// The octal and hexadecimal is just a translation of the ASCII value of the character.

echo $foo;
