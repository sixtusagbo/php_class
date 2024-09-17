<?php
require('config/db.php');

$message = "";
$messageType = "error";

if (isset($_POST['submit'])) {
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $author = mysqli_real_escape_string($conn, $_POST['author']);
  $body = mysqli_real_escape_string($conn, $_POST['body']);
  $id = mysqli_real_escape_string($conn, $_POST['id']);

  // Validate the form
  if (empty($title) || empty($author) || empty($body)) {
    $message = "Please fill in all fields";
  } else {
    // Create the query
    $query = "UPDATE posts 
              SET title = '$title', author = '$author', body = '$body'
              WHERE id = $id";

    if (mysqli_query($conn, $query)) {
      header('Location: ' . APP_URL);
    } else {
      $message = "Error: " . mysqli_error($conn);
    }
  }
}

// Extract the id from get request
$id = mysqli_real_escape_string($conn, $_GET['id']);

// Fetch the post from the database
$query = "SELECT * FROM posts WHERE id = $id";

$result = mysqli_query($conn, $query);

// Fetch data
$post = mysqli_fetch_assoc($result);

// Free result
mysqli_free_result($result);

// Close connection
mysqli_close($conn);

?>

<?php include('inc/header.php') ?>

<main class="container mx-auto max-w-xl mb-32 mt-10">
  <h1 class="font-bold text-purple-500 text-xl mb-6">Edit Blog Post</h1>

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
    <input type="text" name="title" id="title" value="<?= $post['title'] ?>" class="p-2 border border-purple-300 rounded-md">

    <label for="author">Author</label>
    <input type="text" name="author" id="author" value="<?= $post['author'] ?>" class="p-2 border border-purple-300 rounded-md">

    <label for="body">Body</label>
    <textarea name="body" id="body" class="p-2 border border-purple-300 rounded-md">
        <?= $post['body'] ?>
      </textarea>

    <input type="hidden" name="id" value="<?= $post['id'] ?>">

    <button type="submit" name="submit" class="bg-purple-500 hover:bg-purple-800 text-white p-2 rounded-md">Submit</button>
  </form>
</main>

<?php include('inc/footer.php') ?>