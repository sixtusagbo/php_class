<?php require 'inc/constants.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Start</title>

  <!-- Add tailwind css -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
  <!-- Nav bar with links to contact, about and home -->
  <nav class="flex justify-center items-center bg-gray-800 text-white p-4 mb-4">
    <div>
      <a href="index.php" class="text-white">PAT</a>
    </div>
  </nav>

  <!-- main content -->
  <div class="container mx-auto max-w-xl">
    <table class="table-fixed w-full border border-black">
      <tbody>
        <?php foreach ($info as $key => $value): ?>
          <tr>
            <th class="text-left border border-black p-2">
              <?= ucwords(str_replace('_', ' ', $key)); ?>
            </th>
            <td class="text-left border border-black p-2">
              <?php echo $value; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white text-center p-4 absolute bottom-0 w-full">
    <p>&copy; 2024 Listacc. All rights reserved.</p>
  </footer>
</body>

</html>