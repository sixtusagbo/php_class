<?php
require('config/db.php');

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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHPBlog</title>

  <!-- Add tailwind css -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

  <nav class="bg-purple-500 p-6">
    <div class="container mx-auto max-w-xl flex justify-between items-center">
      <a href="<?= APP_URL ?>" class="text-white text-2xl font-bold">PHPBlog</a>
      <ul class="flex">
        <li><a href="<?= APP_URL ?>" class="text-white hover:text-gray-200 px-4">Home</a></li>
        <li><a href="<?= APP_URL ?>create.php" class="text-white
          hover:text-gray-200 px-4">Create Post</a></li>
      </ul>
    </div>
  </nav>

  <main class="container mx-auto max-w-xl mb-32 mt-10">
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl p-8">
      <h1 class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">
        <?= $post['title'] ?>
      </h1>

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

</body>

</html>