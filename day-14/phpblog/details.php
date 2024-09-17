<?php
require('config/db.php');
require_once('config/globals.php');

if (isset($_POST['deleteForm'])) {
  $id = mysqli_real_escape_string($conn, $_POST['id']);

  // Create the query
  $query = "DELETE FROM posts WHERE id = $id";

  if (mysqli_query($conn, $query)) {
    header('Location: ' . APP_URL);
    $_SESSION['message'] = 'Post deleted successfully';
  } else {
    echo 'Error: ' . mysqli_error($conn);
  }
}

// Fetch data from database
$id = mysqli_real_escape_string($conn, $_GET['id']);
// Create the query
$query = "SELECT * FROM posts WHERE id = $id";

$result = mysqli_query($conn, $query);

// Fetch data
$post = mysqli_fetch_assoc($result);
/*
echo '<pre>';
print_r($posts);
echo '</pre>';
*/

// Free result
mysqli_free_result($result);

// Close connection
mysqli_close($conn);

?>

<?php include('inc/header.php') ?>

<main class="container mx-auto max-w-xl mb-32 mt-10">
  <div class="flex justify-between items-center">
    <h1 class="font-bold text-purple-500 text-xl mb-10">
      <?= $post['title'] ?>
    </h1>

    <div class="flex gap-4">
      <a href="<?= APP_URL ?>edit.php?id=<?= $post['id'] ?>" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">
        Edit
      </a>
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="hidden" name="id" value="<?= $post['id'] ?>">
        <button type="submit" name="deleteForm" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
          Delete
        </button>
      </form>
    </div>
  </div>

  <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl p-8">

    <p class="mt-2 text-slate-500">
      <?= $post['body'] ?>
    </p>

    <div class="flex justify-between items-center mt-4">
      <div class="flex items-center">
        <img src="https://i.pravatar.cc/100" alt="avatar" class="w-10 h-10 rounded-full">
        <div class="ml-2">
          <span class="font-semibold"><?= $post['author'] ?></span>
          <span class="text-sm text-gray-500"><?= date("F j, Y, g:i a", strtotime($post['created_at'])) ?></span>
        </div>
      </div>

    </div>
  </div>
</main>

<?php include('inc/footer.php') ?>