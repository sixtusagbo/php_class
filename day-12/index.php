<?php

/*
- More about file system
Basename ....php
Dirname
Realpath
File_exists
Is_file
Is_writeable
Is_readable
Filesize
Mkdir
Rmdir
Copy
Rename
Unlink
File_get_contents
File_put_contents
Fopen fwrite
Fopen fread
*/

$path = 'day-12/index.php';

// Return the file name with extensions
// echo basename($path) . '<br>';

// Return the file name without extensions
// echo basename($path, '.php') . '<br>';

// Return the directory name
// echo dirname($path) . '<br>';

// Return the absolute path
// echo realpath('index.php') . '<br>';

// We've looked at file_exists and is_file7 in the previous lesson
// The main difference between the two is that is_file checks if the file exists and is a file while file_exists checks if the file exists and can be a directory.

// Check if you can write to a file
// echo is_writeable('hello.txt') . '<br>';

// Check if you can read a file
// echo is_readable('hello.txt') . '<br>';

// Get the file size
// echo filesize('hello.txt') . '<br>';

// Create a directory
// echo mkdir('test');

// Delete an empty directory
// echo rmdir('test');

// echo copy('hello.txt', 'test/hello.txt');

// echo rename('test/hello.txt', 'test/world.txt');

// echo unlink('test/world.txt');

// echo file_get_contents('hello.txt');

// echo file_put_contents('hello.txt', 'Hello World');

// fopen fwrite
$file = fopen('hello.txt', 'w');
fwrite($file, 'Hello World');
fwrite($file, 'Hello World2');
fclose($file);

// fopen fread
$file = fopen('hello.txt', 'r');
echo fread($file, filesize('hello.txt'));
fclose($file);
