<?php
$title = "Input Validation and Filtering";
echo "<pre>";
// We'll be looking at how to validate and filter user input in PHP.
// We'll use the following functions:
// * filter_has_var() - Checks if variable of specified type exists
// * filter_input() - Gets an external variable by name and optionally filters it
// * filter_var() - Filters a variable with a specified filter
// * filter_var_array() - Gets multiple variables and optionally filters them
// * filter_input_array() - Gets external variables and optionally filters them
// * filter_list() - Returns a list of all supported filters

// 1. filter_has_var() - Checks if variable of specified type exists
// * Syntax: filter_has_var(type, variable)
// * type - The type of input to check. Can be one of INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER, or INPUT_ENV.
/*
echo filter_has_var(INPUT_POST, 'name') ? 'Name found' : 'Name not found';
echo "<br/>";
if (filter_has_var(INPUT_POST, 'email')) {
  echo "email found";
} else {
  echo "email not found";
}
*/

// 2. filter_input() - Gets an external variable by name and optionally filters it
// * Syntax: filter_input(type, variable, filter, options)

/*
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  echo "<br/>";

  // Validate email
  if (filter_has_var(INPUT_POST, "email")) { // OR use empty() function
    // echo "Email is valid";
    // Sanitize email
    // echo $email . "<br>";
    if (filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
      echo "Email is valid";
    } else {
      echo "Email is not valid";
    }
  } else {
    echo "Email is not valid";
  }
}
  */

// 3. filter_var() - Filters a variable with a specified filter

/*
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  echo "<br/>";

  // Validate email
  if (filter_has_var(INPUT_POST, "email")) { // OR use empty() function
    // echo "Email is valid";
    // Sanitize email
    // $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    // echo $email . "<br>";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Email is valid<br>";
    } else {
      echo "Email is not valid<br>";
    }
  } else {
    echo "Email is missing<br>";
  }

  // Validate age
  if (filter_has_var(INPUT_POST, "age")) {
    $age = $_POST['age'];

    $options = array(
      'options' => array(
        'min_range' => 18,
        'max_range' => 60
      )
    );

    if (filter_var($age, FILTER_VALIDATE_INT, $options)) {
      echo "You can vote";
    } else {
      echo "You're too young or too old to vote.";
    }
  } else {
    echo "Age is missing";
  }
}
  */

// 4. filter_var_array() - Gets multiple variables and optionally filters them
// * Syntax: filter_var_array(data, definition, add_empty)

/*
if (filter_var_array($_POST, FILTER_VALIDATE_EMAIL)) {
  echo "Email is valid";
} else {
  echo "Email is not valid";
}
*/

$filters = array(
  'name' => array(
    'filter' => FILTER_CALLBACK,
    'options' => 'strtoupper',
  ),
  'age' => array(
    'filter' => FILTER_VALIDATE_INT,
    'options' => array(
      'min_range' => 18,
      'max_range' => 60
    )
  ),
  'email' => FILTER_VALIDATE_EMAIL
);

// print_r(filter_var_array($_POST, $filters));

// 5. filter_input_array() - Gets external variables and optionally filters them
// * Syntax: filter_input_array(type, definition, add_empty)
// The difference between filter_var_array() and filter_input_array() is that filter_input_array() gets external variables and optionally filters them.

// print_r(filter_input_array(INPUT_POST, $filters));

// 6. filter_list() - Returns a list of all supported filters
print_r(filter_list());

/**
 * * Some commonly used filters for validation include:
 * FILTER_VALIDATE_BOOLEAN - Validates a boolean
 * FILTER_VALIDATE_EMAIL - Validates an e-mail address
 * FILTER_VALIDATE_FLOAT - Validates a float
 * FILTER_VALIDATE_INT - Validates an integer
 * FILTER_VALIDATE_IP - Validates an IP address
 * FILTER_VALIDATE_REGEXP - Validates a regular expression
 * FILTER_VALIDATE_URL - Validates a URL
 * 
 * * Some commonly used filters for sanitization include:
 * FILTER_SANITIZE_EMAIL - Removes all illegal characters from an e-mail address
 * FILTER_SANITIZE_ENCODED - Removes/Encodes special characters
 * FILTER_SANITIZE_NUMBER_FLOAT - Removes all illegal characters from a float
 * FILTER_SANITIZE_NUMBER_INT - Removes all illegal characters from an integer
 * FILTER_SANITIZE_SPECIAL_CHARS - Removes special characters
 * FILTER_SANITIZE_URL - Removes all illegal characters from a URL
 */

// For more information on filters, visit https://www.php.net/manual/en/filter.filters.php


echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>

  <!-- Add tailwind css -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
  <nav class="flex justify-center items-center bg-gray-800 text-white p-4 mb-4">
    <div>
      <a href="index.php" class="text-white"><?= $title ?></a>
    </div>
  </nav>

  <div class="container mx-auto max-w-xl">
    <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>" class="flex flex-col gap-4">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" class="p-2 border border-gray-300 rounded-md">

      <label for="age">Age</label>
      <input type="text" name="age" id="age" class="p-2 border border-gray-300 rounded-md">

      <label for="email">Email</label>
      <input type="text" name="email" id="email" class="p-2 border border-gray-300 rounded-md">

      <button type="submit" name="submit" class="bg-gray-800 text-white p-2 rounded-md">Submit</button>
    </form>
  </div>

  <footer class="bg-gray-800 text-white text-center p-4 fixed-bottom w-full">
    <p>&copy; 2024 Listacc. All rights reserved.</p>
  </footer>
</body>

</html>