<?php
echo 'Hello, World!';
$foo = explode(' ', 'foo bar baz');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <pre>
    <?php print_r($foo); ?>
  </pre>
</body>

</html>