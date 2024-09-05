<?php
$title = "Search";
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
    <form class="flex flex-col gap-4">
      <input type="search" name="query" id="query" class="p-2 border border-gray-300 rounded-md" onkeyup="findSuggestions()">
      <p>
        Suggestions:
        <span class="font-bold text-sm" id="suggestions"></span>
      </p>
    </form>
  </div>

  <script>
    function findSuggestions() {
      const query = document.getElementById('query').value;

      // Use AJAX to request process.php
      const xhr = new XMLHttpRequest();
      xhr.open('GET', `process.php?q=${query}`, true);
      xhr.onload = function() {
        if (this.status === 200) {
          const suggestions = JSON.parse(this.responseText);
          const suggestionsElement = document.getElementById('suggestions');
          suggestionsElement.innerHTML = suggestions.join(', ');
          // suggestionsElement.innerHTML = this.responseText;
        }
      }
      xhr.send();
    }
  </script>
</body>

</html>