<?php

$name = 'JOhn';
$len = 3;
$query = 'joh';
echo substr($name, 0, $len);
echo "<br>";
echo stristr($query, substr($name, 0, $len));
