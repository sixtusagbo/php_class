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
