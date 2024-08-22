<?php

/**
 * - What we'll learn today
 * 
 * - String functions
 * - Array functions
 * - Date functions
 * - Math functions
 * - File functions
 */

# String functions
// Let's take a look at some important functions from php that can be used to manipulate strings.
$hello = "Hello World!";

// 1. strlen() - Returns the length of a string
// echo strlen($hello); // 12

// 2. str_word_count() - Returns the number of words in a string
// echo str_word_count($hello); // 2

// 3. strrev() - Reverses a string
// echo strrev($hello); // !dlroW olleH
// echo strrev('miracle');

// 4. strpos() - Searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
// HelloWorld!
// echo strpos('Hello World!', "World"); // 6
// echo strpos('HelloWorld!', "h"); // false or 0
// echo strpos('HelloWorld!', "o"); // 4
// echo strpos('Hello World!', "o", 5); // 4

// 5. str_replace() - Replaces some characters in a string with some other characters
// echo str_replace("World", "Universe", $hello); // Hello Universe!
// $about = 'That boring guy, {{name}} is from {{country}}.';
// $processedAbout = str_replace(['{{name}}', '{{country}}'], ['John Doe', 'Kenya'], $about);
// echo $processedAbout;

// 6. strtolower() - Converts a string to lowercase
// echo strtolower($hello); // hello world!

// 7. strtoupper() - Converts a string to uppercase
// echo strtoupper($hello); // HELLO WORLD!

// 8. ucfirst() - Converts the first character of a string to uppercase
// echo ucfirst('jello'); // Hello World!

// More string functions: https://www.php.net/manual/en/ref.strings.php

# Array functions
// Let's take a look at some important functions from php that can be used to manipulate arrays.
$names = ['John', 'Jane', 'Doe', 'Mary', 'Ken'];
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// 1. count() - Returns the number of elements in an array
// echo count($names); // 5

// 2. sort() - Sorts an array in ascending order
// It sorts the array in place, meaning it changes the original array.
// It is a mutative function.
// In programming, there's the concept of mutable and immutable.
// Something is said to be mutable if it can be changed after it has been created.
// On the other hand, something is said to be immutable if it cannot be changed after it has been created.
/*
echo $names[0]; // John
sort($names);
echo "<pre>";
print_r($names);
echo "</pre>";
echo $names[0]; // Doe
*/

// 3. rsort() - Sorts an array in descending order
/*
rsort($numbers);
echo "<pre>";
print_r($numbers);
echo "</pre>";
*/

// 4. array_push() - Adds one or more elements to the end of an array
// It returns the new number of elements in the array
/*
array_push($names, 'Alice', 'Bob');
array_push($names, 'Alice', 'Bob');
echo "<pre>";
print_r($names);
echo "</pre>";
*/

// 5. array_pop() - Removes the last element from an array
// It returns the removed element
/*
$re1 = array_pop($names);
$re2 = array_pop($names);
echo "<pre>";
print_r($names);
echo "</pre>";
echo $re1 . "<br>"; // Ken
echo $re2 . "<br>"; // Mary
*/

// 6. array_shift() - Removes the first element from an array
// It returns the removed element
/*
array_shift($numbers);
echo "<pre>";
print_r($numbers);
echo "</pre>";
*/

// 7. array_unshift() - Adds one or more elements to the beginning of an array
// It returns the new number of elements in the array
/*
array_unshift($numbers, 0, -1, -2);
echo "<pre>";
print_r($numbers);
echo "</pre>";

// Print $numbers like a real number line separated with spaces
for ($i = 0; $i < count($numbers); $i++) {
  echo $numbers[$i] . " ";
}
*/

// 8. array_slice() - Extracts a slice of an array
// It returns the extracted slice
/*
echo "<pre>";
print_r($numbers);

$slice = array_slice($numbers, 2, 5);

print_r($slice);
echo "</pre>";
*/

// For more array functions, check out: https://www.php.net/manual/en/ref.array.php
