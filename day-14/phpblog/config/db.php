<?php
require 'config/config.php';
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}
// OR
/*
if (mysqli_connect_errno()) {
  echo 'Connection failed: ' . mysqli_connect_error();
}
*/