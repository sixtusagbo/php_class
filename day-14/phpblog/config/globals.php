<?php
session_start();

function deleteFromSession($key)
{
  if (isset($_SESSION[$key])) {
    unset($_SESSION[$key]);
  }
}
