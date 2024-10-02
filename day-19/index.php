<?php

if (isset($_POST['uploadForm'])) {
  // echo '<pre>';
  // print_r($_FILES);
  // echo '</pre>';
  $file = $_FILES['file'];

  if ($file['error'] === 0) {
    $fileNameWithExtension = $file['name'];
    // $fileNameWithoutExtension = explode('.', $fileNameWithExtension)[0];
    $fileNameWithoutExtension = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
    $fileExt = pathinfo($fileNameWithExtension, PATHINFO_EXTENSION);
    $fileName = $fileNameWithoutExtension . '_' . time() . '.' . $fileExt;
    $fileTmp = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileType = $file['type'];
    $allowedExt = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($fileExt, $allowedExt)) {
      $uploadDir = 'uploads/';
      if (!is_dir($uploadDir)) {
        mkdir($uploadDir);
      }
      $uploadPath = $uploadDir . $fileName;

      if (move_uploaded_file($fileTmp, $uploadPath)) {
        echo 'File uploaded successfully';
      } else {
        echo 'Failed to upload file';
      }
    } else {
      echo 'File type not allowed';
    }
  } else {
    echo 'Error uploading file';
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Uploader Pro</title>
</head>

<body>
  <h1>Image Uploader Pro</h1>
  <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" id="file" multiple>
    <button name="uploadForm" type="submit">Upload</button>
  </form>
</body>

</html>
