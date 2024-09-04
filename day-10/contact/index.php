<?php
$title = "Contact Us";
$message = "";
$messageType = "error";

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  if (!empty($name) && !empty($email) && !empty($message)) {
    // Validate email

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $to = "miracleagbosixtus@gmail.com";
      $subject = "Contact Us Form";
      $body = "Name: $name\nEmail: $email\nMessage: $message";

      // Headers
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
      $headers .= "From: $email" . "\r\n";
      $headers .= "Reply-To: $email" . "\r\n";

      if (mail($to, $subject, $body, $headers)) {
        $message = "Message sent successfully";
        $messageType = "success";
      } else {
        $message = "Message not sent. Please try again";
      }
    } else {
      $message = "Please enter a valid email";
      $messageType = "error";
    }
  } else {
    $message = "All fields are required";
    $messageType = "error";
  }
}
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

    <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>" class="flex flex-col gap-4">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" class="p-2 border border-gray-300 rounded-md">

      <label for="email">Email</label>
      <input type="text" name="email" id="email" class="p-2 border border-gray-300 rounded-md">

      <label for="message">Message</label>
      <textarea name="message" id="message" class="p-2 border border-gray-300 rounded-md"></textarea>

      <button type="submit" name="submit" class="bg-gray-800 text-white p-2 rounded-md">Submit</button>
    </form>
  </div>

  <footer class="bg-gray-800 text-white text-center p-4 fixed-bottom w-full">
    <p>&copy; 2024 Listacc. All rights reserved.</p>
  </footer>
</body>

</html>