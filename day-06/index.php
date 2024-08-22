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

# Date functions
// Let's take a look at some important functions from php that can be used to manipulate dates.

// 1. date() - Returns the current date
// echo date('Y'); // Year
// echo date('m'); // Month
// echo date('d'); // Month
// echo date('H'); // Hour
// echo date('i'); // Minute
// echo date('s'); // Second
// echo date('l'); // Day of the week

// Set timezone
date_default_timezone_set('Africa/Lagos');

// echo date('d|m|Y');
// echo date('H:i:s');
// echo date('d/m/Y H:i:s');
// $today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
// $today = date("m.d.y");                         // 03.10.01
// $today = date("j, n, Y");                       // 10, 3, 2001
// $today = date("Ymd");                           // 20010310
// $today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
// $today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
// $today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
// $today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
// $today = date("H:i:s");                         // 17:16:18
// $today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)

// 2. mktime() - Returns the Unix timestamp for a date
// A unix timestamp is a long integer containing the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
// $todayStamp = mktime(14, 28, 40, 8, 22, 2024);
// echo $todayStamp;
// echo date('d/m/Y H:i:s', $todayStamp);

// 3. strtotime() - Returns the Unix timestamp for a date
// Just like mktime(), strtotime() returns the Unix timestamp for a date but it is more flexible.
// It takes a string that represents a date and time and returns the Unix timestamp for that date and time.

/*
$now = strtotime('now');
$today = strtotime('today');
$tomorrow = strtotime('tomorrow');
$yesterday = strtotime('yesterday');
$nextSunday = strtotime('next Sunday');
$lastSunday = strtotime('last Sunday');
$fooDay = strtotime('4th July 2024');

echo date('d/m/Y H:i:s', $now) . "<br>";
echo date('d/m/Y H:i:s', $today) . "<br>";
echo date('d/m/Y H:i:s', $tomorrow) . "<br>";
echo date('d/m/Y H:i:s', $yesterday) . "<br>";
echo date('d/m/Y H:i:s', $nextSunday) . "<br>";
echo date('d/m/Y H:i:s', $lastSunday) . "<br>";
echo date('d/m/Y H:i:s', $fooDay) . "<br>";
*/

// Date Operation functions
// You can add a date interval to a date or subtract a date interval from a date or even find the difference between two date intervals.

// ?Study the following date functions and try to understand how they work. You can ask me if you have any questions.
// i. date_diff() - Returns the difference between two dates
// ii. date_add() - Adds a date interval to a date
// iii. date_sub() - Subtracts a date interval from a date


// For more date functions, check out: https://www.php.net/manual/en/ref.datetime.php

# Math functions
// Let's take a look at some important functions from php that can be used to perform mathematical operations.

// 1. abs() - Returns the absolute value of a number
// echo abs(-4.7); // 4.7

// 2. sqrt() - Returns the square root of a number
// echo sqrt(64); // 8

// 3. pow() - Returns the value of a number raised to the power of another number
// echo pow(2, 3); // 8

// 4. min() - Returns the lowest value in a list of arguments
// echo min([0, 150, 30, 20, -8, -200]); // -200

// 5. max() - Returns the highest value in a list of arguments
// echo max([0, 150, 30, 20, -8, -200]); // 150

// 6. round() - Rounds a floating-point number
// echo round(0.60); // 1

// 7. rand() - Generates a random number
// $foo = rand(); // Random number
// $bar = rand(10, 100); // Random number between 10 and 100
// echo $foo . "<br>";
// echo $bar . "<br>";
/*
$randomNumber = rand();
echo $randomNumber . "<br>";
echo $randomNumber % 10; // last digit
echo "<br>";
echo $randomNumber % 100; // last two digits
echo "<br>";
echo $randomNumber % 1000; // last three digits
*/

// For more math functions, check out: https://www.php.net/manual/en/ref.math.php
// Here are a few worth mentioning: ceil(), floor(), pi(), deg2rad(), rad2deg()

# File functions
// Let's take a look at some important functions from php that can be used to manipulate files.

// 1. file_exists() - Checks whether a file or directory exists
// echo file_exists('day-06/index.php'); // 0
// echo file_exists('../day-06/index.php'); // 1
// echo file_exists('test.txt');

// 2. is_file() - Checks whether a filename is a regular file
// echo is_file('test.txt'); // 1
// echo is_file('test_directory'); // 0

// 3. is_dir() - Checks whether a filename is a directory
// echo is_dir('test.txt'); // 0
// echo is_dir('test_directory'); // 1

// 4. file_get_contents() - Reads the entire contents of a file into a string.
// It is the preferred way to read the contents of a file into a string.
// $testFile = file_get_contents('test.txt');
// echo $testFile;

// 5. file_put_contents() - Writes a string to a file
// It is the preferred way to write a string to a file.
// It returns the number of bytes written.
// If it fails, it returns false.
// If the file does not exist, it will be created.
// echo file_put_contents('test.txt', 'Hello World!');
// echo file_put_contents('test_two.txt', 'Hello World!');

// 6. unlink() - Deletes a file
// It returns true on success and false on failure.
// echo unlink('test_two.txt');

// 7. copy() - Copies a file
// It returns true on success and false on failure.
// echo copy('test.txt', 'test_copy.txt');

// 8. rename() - Renames a file or directory
// It returns true on success and false on failure.
// echo rename('test_copy.txt', 'test.txt');

// 9. file() - Reads an entire file into an array
// It reads the file line by line and stores each line as an element in the array.
/*
$testFile = file('test.txt');

echo "<pre>";
print_r($testFile);
echo "</pre>";

echo $testFile[1];
*/

// 10. mkdir() - Creates a directory
// It returns true on success and false on failure.
// echo mkdir('test_directory');
// echo mkdir('test_directory-two');

/// Creates a file
/// Returns true on success and false on failure.
function file_create($filename, $content)
{
  if (file_put_contents($filename, $content)) return true;

  return false;
}

echo file_create('foo.txt', 'foo bar baz'); 

// For more file functions, check out: https://www.php.net/manual/en/ref.filesystem.php
