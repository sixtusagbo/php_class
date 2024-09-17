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