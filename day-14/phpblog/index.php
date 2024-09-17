<?php
require('config/db.php');
require_once('config/globals.php');

// Fetch data from database
// Create the query
$query = 'SELECT * FROM posts ORDER BY created_at DESC';

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

<?php include('inc/header.php') ?>

<main class="container mx-auto max-w-xl mb-32 mt-10">
  <h1 class="font-bold text-purple-500 text-xl mb-6">Welcome to our <strong>PHPBlog</strong></h1>

  <?php if (isset($_SESSION['message']) && !empty($_SESSION['message'])): ?>
    <div class="bg-green-200 text-green-800 py-4 px-4 rounded-lg mb-4">
      <?= $_SESSION['message'] ?>
    </div>
    <?php
    deleteFromSession('message');
    ?>
  <?php endif; ?>

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

<?php include('inc/footer.php') ?>