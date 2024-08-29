<?php

if (isset($_REQUEST['name'])) {
  echo "Name: " . htmlentities($_REQUEST['name']) . "<br>";
  echo "Email: " . htmlentities($_REQUEST['email']) . "<br>";
}
