<?php
# Displaying output on the screen
// echo "Hello, PHP!";
// print "Hello, PHP!";
// print_r("Hello, PHP!");
// var_dump(['Hello', 'PHP!']);
// print_r(['Hello', 'PHP!']);

# Comments
// A single line comment example
# A single line comment example
/*
A multi-line comment example
*/

# Variables
// $name = 'John Doe';
$hello = 'Hello, PHP!';
$_foo = 'bar';

/*
Rules for naming variables
- Variable names start with a dollar sign ($)
- Variable names must start with a letter or an underscore, hence, it cannot start with a number
- Variable names can only contain letters, numbers, and underscores
- Variable names are case-sensitive, example $name and $Name are two different variables
*/
// echo $hello;

// Constant variables
define('PI', 3.14);
define('DRIVER', 'John Doe');

// echo PI;
// echo DRIVER;


/**
 * Data Types
 * 
 * - String
 * - Integer
 * - Float (floating point numbers - also called double)
 * - Boolean
 * - Array
 * - Object
 * - NULL
 * - Resource
 * - Callable
 * - Iterable
 */

# String
// $firstName = 'John $name';
// $lastName = "Doe $hello";
$firstName = 'John';
$lastName = 'Doe';

// String concatenation
// echo 'Mr. ' . $firstName . ' ' . $lastName;
// $intro = "My name is $firstName $lastName";
// $intro = 'My name is $firstName $lastName';
// echo $intro;


# Integer
$age = 30;
$quantity = 10;
$year = 2024;
$amount = 1000;
// echo $age + $quantity;
# Integers can be signed or unsigned
// Signed Integers
// Can be positive or negative
$foo = -100; // Negative
$bar = 100; // Positive

// Unsigned Integers
// Can only be positive
$foo = 100; // Positive
$bar = 100; // Positive

// echo $foo;

# Float or Double
$price = 10.99;
$tax = 0.5;

# Arithmetic operators
// Addition, Subtraction, Multiplication, Division, Modulus
// echo $price + $tax; // float and a float
// echo $foo + $bar; // integer and an integer
// echo $foo - $price;
// echo $foo * $price;
// echo $foo / 10;
// echo $foo / 11; // 9.0909090909091
// echo $foo % 11; // 1 (Remainder)
// echo 3 % 2; // 1

// Boolean
$isActive = true;
$isRaining = false;
$isMarried = false;

// echo $isMarried;

# Logical Operators
// AND (&&), OR (||), NOT (!)
// AND (&&)
// Only true if both operands are true
// echo true && false; // false
// echo true && true; // true
// echo false && true; // false
// echo false && false; // false

// OR (||)
// True if at least one of the operands is true
// echo true || false; // true
// echo true || true; // true
// echo false || true; // true
// echo false || false; // false

// NOT (!)
// Inverts the value of a boolean
// echo !true; // false
// echo !false; // true

// echo $isActive && $isMarried; // false

# Bitwise Operators
// AND (&), OR (|), XOR (^), NOT (~), Shift left (<<), Shift right (>>)
// AND (&)
// AND returns 1 if both bits are 1
// echo 5 & 1; // 1
// echo 5 & 2; // 0

// OR (|)
// OR returns 1 if at least one of the bits is 1
// echo 5 | 1; // 5
// echo 5 | 2; // 7

// XOR (^)
// XOR returns 1 if the bits are different
// echo 5 ^ 1; // 4
// echo 5 ^ 2; // 7

// NOT (~)
// NOT inverts the bits
// echo ~5; // -6

// Shift left (<<)
// Shifts the bits to the left
// echo 5 << 1; // 10 (5 * 2)
// echo 5 << 2; // 20 (5 * 2 * 2)
// echo 10 << 2; // 40 (10 * 2 * 2)
// echo 10 << 3; // 80 (10 * 2 * 2 * 2)

// Shift right (>>)
// Shifts the bits to the right
// echo 5 >> 1; // 2 (5 / 2)
// echo 5 >> 2; // 1 (5 / 2 / 2)
// echo 10 >> 2; // 2 (10 / 2 / 2)
// echo 10 >> 3; // 1 (10 / 2 / 2 / 2)

# Comparison Operators
// Equal (==), Identical (===), Not equal (!=), Not identical (!==), Greater than (>), Less than (<), Greater than or equal to (>=), Less than or equal to (<=)

// Equal (==)
// This is the most commonly used comparison operator
// It compares the values of the two operands and returns true if they are equal
// echo 5 == 5; // true
// echo 5 == 10; // false
// echo 5 == '5'; // true

// Identical (===)
// This operator compares both the value and the type of the two operands
// It returns true if both the value and the type are the same
// echo 5 === 5; // true
// echo 5 === 10; // false
// echo 5 === '5'; // false

// Not equal (!=)
// This operator returns true if the two operands are not equal
// This compares just the values
// echo 5 != 5; // false
// echo 5 != 10; // true
// echo 5 != '5'; // false

// Not identical (!==)
// This operator returns true if the two operands are not identical
// This compares both the values and the types
// echo 5 !== 5; // false
// echo 5 !== 10; // true
// echo 5 !== '5'; // true

// Greater than (>)
// This operator returns true if the left operand is greater than the right operand
// echo 5 > 5; // false
// echo 5 > 10; // false
// echo 10 > 5; // true

// Less than (<)
// This operator returns true if the left operand is less than the right operand
// echo 5 < 5; // false
// echo 5 < 10; // true

// Greater than or equal to (>=)
// This operator returns true if the left operand is greater or equal to the right operand
// echo 5 >= 5; // true
// echo 5 >= 10; // false
// echo 10 >= 5; // true

// Less than or equal to (<=)
// This operator returns true if the left operand is less or equal to the right operand
// echo 5 <= 5; // true
// echo 5 <= 10; // true
// echo 10 <= 5; // false

# What is an operand?
// An operand is a term used to describe any object that is manipulated by an operator. In the expression 5 + 5, the operands are 5 and 5, while the operator is the plus sign (+).

# More on operators
// https://www.php.net/manual/en/language.operators.php
// Short-hand operators (Increment, Decrement, Assignment, etc.)
$total = 0;
$number_of_students = 10;

$total += 20; // total is now 20
// this is the same as $total = $total + 20;
// $total = $total + 20;
// You can also use variables in the right-hand side of the operator
// $total += $number_of_students;

$total -= 5; // total is now 15
$total -= $number_of_students; // total is now 5
// this is the same as $total = $total - $number_of_students;
// DRY - Don't Repeat Yourself [A programming principle]

$total *= 2; // total is now 10
$total /= 2; // total is now 5
$total %= 2; // total is now 1

// echo $total;

# Operator Precedence - BIDMAS/BODMAS/PEMDAS
// The order in which operations are performed in an arithmetic expression.
// PEMDAS stands for:
// P - Parentheses
// E - Exponents
// M - Multiplication
// D - Division
// A - Addition
// S - Subtraction
// BODMAS stands for:
// B - Brackets
// O - Orders (i.e. powers and square roots, etc.)
// D - Division and Multiplication (left-to-right)
// M - Multiplication and Division (left-to-right)
// A - Addition and Subtraction (left-to-right)
// BIDMAS stands for:
// B - Brackets
// I - Indices (Powers and Square Roots, etc.)
// D - Division
// M - Multiplication
// A - Addition
// S - Subtraction

echo 5 + 10 * 2; // 25
echo (5 + 10) * 2; // 30
echo 5 + 10 / 2; // 10
