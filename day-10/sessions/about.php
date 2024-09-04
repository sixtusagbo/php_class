<?php
session_start();

$title = "About Us";

// unset($_SESSION['name']); // Remove single session
// session_destroy();

echo "Name: " . $_SESSION['name'] . "<br>";
echo "Email: " . $_SESSION['email'] . "<br>";

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

  <div class="container mx-auto max-w-xl mb-32 mt-10">
    <!-- Message -->
    <?php if (!empty($message)): ?>
      <?php
      $messageClass = $messageType === 'error' ? 'bg-red-200 text-red-800' : 'bg-green-200 text-green-800' . ' py-4 px-6 rounded-md';
      ?>
      <div class="<?= $messageClass ?>">
        <?= $message ?>
      </div>
    <?php endif; ?>
  </div>

  <footer class="bg-gray-800 text-white text-center p-4 fixed-bottom w-full">
    <p>&copy; 2024 Listacc. All rights reserved.</p>
  </footer>
</body>

</html>