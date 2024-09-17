<?php
require('config/db.php');
require_once('config/globals.php');

$message = "";
$messageType = "error";

if (isset($_POST['submit'])) {
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $author = mysqli_real_escape_string($conn, $_POST['author']);
  $body = mysqli_real_escape_string($conn, $_POST['body']);

  // Validate the form
  if (empty($title) || empty($author) || empty($body)) {
    $message = "Please fill in all fields";
  } else {
    // Create the query
    $query = "INSERT INTO posts 
              (title, author, body) 
              VALUES ('$title', '$author', '$body')";

    if (mysqli_query($conn, $query)) {
      header('Location: ' . APP_URL);
      $_SESSION['message'] = 'Post created successfully';
    } else {
      $message = "Error: " . mysqli_error($conn);
    }
  }
}

?>


<?php include('inc/header.php') ?>

<main class="container mx-auto max-w-xl mb-32 mt-10">
  <h1 class="font-bold text-purple-500 text-xl mb-6">New Blog Post</h1>

  <!-- Message -->
  <?php if (!empty($message)): ?>
    <?php
    $messageClass = $messageType === 'error' ? 'bg-red-200 text-red-800' : 'bg-green-200 text-green-800';
    ?>
    <div class="<?= $messageClass ?> py-4 px-4 rounded-lg mb-4">
      <?= $message ?>
    </div>
  <?php endif; ?>

  <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>" class="flex flex-col gap-4">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="p-2 border border-purple-300 rounded-md">

    <label for="author">Author</label>
    <input type="text" name="author" id="author" class="p-2 border border-purple-300 rounded-md">

    <label for="body">Body</label>
    <textarea name="body" id="body" class="p-2 border border-purple-300 rounded-md"></textarea>

    <button type="submit" name="submit" class="bg-purple-500 hover:bg-purple-800 text-white p-2 rounded-md">Submit</button>
  </form>
</main>

<?php include('inc/footer.php') ?>