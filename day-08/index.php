<?php

/*
//  * $_GET superglobal
//  * $_GET is an associative array of variables passed to the current script via the URL parameters.
if (isset($_GET['name'])) {
  // echo "Hello " . $_GET['name'];
  // print_r($_GET);
  echo htmlentities($_GET['name']);
  echo htmlentities($_GET['email']);
}

//  * $_POST superglobal
//  * $_POST is an associative array of variables passed to the current script via the HTTP POST method.
// * The major difference between GET and POST is that GET method appends the data to the URL while POST method sends via HTTP header.
if (isset($_POST['name'])) {
  // echo "Hello " . $_POST['name'];
  // print_r($_POST);
  echo "Name: " . htmlentities($_POST['name']) . "<br>";
  echo "Email: " . htmlentities($_POST['email']) . "<br>";
}
*/

// Server query string
// echo $_SERVER['QUERY_STRING'];



//  * $_REQUEST superglobal
// * $_REQUEST is an associative array that by default contains the contents of $_GET, $_POST and $_COOKIE.
// * The variables in $_REQUEST are provided to the script via the GET, POST, and COOKIE input mechanisms and therefore could be modified by the remote user and cannot be trusted.
// * This array is read-only, so you can't modify it.

if (isset($_REQUEST['name'])) {
  // echo "Hello " . $_REQUEST['name'];
  // print_r($_REQUEST);
  echo "Name: " . htmlentities($_REQUEST['name']) . "<br>";
  echo "Email: " . htmlentities($_REQUEST['email']) . "<br>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Superglobals</title>

  <!-- Add tailwind css -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
  <!-- Nav bar with links to contact, about and home -->
  <nav class="flex justify-center items-center bg-gray-800 text-white p-4 mb-4">
    <div>
      <a href="index.php" class="text-white">Superglobals continued</a>
    </div>
  </nav>

  <!-- main content -->
  <div class="container mx-auto max-w-xl">
    <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>" class="flex flex-col gap-4">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" class="p-2 border border-gray-300 rounded-md">

      <label for="email">Email</label>
      <input type="email" name="email" id="email" class="p-2 border border-gray-300 rounded-md">

      <button type="submit" class="bg-gray-800 text-white p-2 rounded-md">Submit</button>
    </form>
  </div>

  <!-- <ul>
    <li>
      <a href="index.php?class=php">PHP</a>
    </li>
    <li>
      <a href="index.php?class=python">Python</a>
    </li>
  </ul> -->

  <!-- <p>
    You're taking <?php // $_GET['class'] 
                  ?> class. 
  </p> -->

  <!-- Footer -->
  <footer class="bg-gray-800 text-white text-center p-4 absolute bottom-0 w-full">
    <p>&copy; 2024 Listacc. All rights reserved.</p>
  </footer>
</body>

</html>