<?php

// $_SERVER superglobal
// It contains information about the server and execution environment.

$info = [
  'filename' => $_SERVER['PHP_SELF'],
  'script_filename' => $_SERVER['SCRIPT_FILENAME'],
  'server_ip' => $_SERVER['SERVER_ADDR'],
  'server_hostname' => $_SERVER['SERVER_NAME'],
  'server_protocol' => $_SERVER['SERVER_PROTOCOL'],
  'request_method' => $_SERVER['REQUEST_METHOD'],
  'request_time' => date('jS M Y h:ia', $_SERVER['REQUEST_TIME']),
  'document_root' => $_SERVER['DOCUMENT_ROOT'],
  'client_ip' => $_SERVER['REMOTE_ADDR'],
  'user_agent' => $_SERVER['HTTP_USER_AGENT'],
];

// More info about $_SERVER superglobal
// https://www.php.net/manual/en/reserved.variables.server.php