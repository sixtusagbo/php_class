<?php
require('config/db.php');

// Fetch data from database
// Create the query
$query = 'SELECT * FROM posts';

$result = mysqli_query($conn, $query);

// Fetch data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
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

  <main class="container mx-auto max-w-xl mb-32 mt-10">
    <h1 class="font-bold text-purple-500 text-xl mb-10">Welcome to our <strong>PHPBlog</strong></h1>

    <?php foreach ($posts as $post): ?>
      <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl p-8">
        <h1 class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">
          <?= $post['title'] ?>
        </h1>

        <p class="mt-2 text-slate-500">
          <?= substr($post['body'], 0, 100) . '...' ?>
        </p>

        <div class="flex justify-between items-center mt-4">
          <div class="flex items-center">
            <img src="https://i.pravatar.cc/100" alt="avatar" class="w-10 h-10 rounded-full">
            <div class="ml-2">
              <span class="font-semibold"><?= $post['author'] ?></span>
              <span class="text-sm text-gray-500"><?= date("F j, Y, g:i a", strtotime($post['created_at'])) ?></span>
            </div>
          </div>

          <a href="<?= APP_URL ?>details.php?id=<?= $post['id'] ?>" class="text-indigo-500">Read more</a>
        </div>
      </div>

      <?php if ($post !== end($posts)): ?>
        <br>
      <?php endif; ?>
    <?php endforeach; ?>
  </main>

</body>

</html>