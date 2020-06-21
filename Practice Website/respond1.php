<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Response</title>
  </head>
  <body>
    <?php
    $mynumber = $_GET ['number'];
    if ($mynumber == rand(1,3)) {
      echo "Safe, Choose another door"; ?>
      <p><a href="respond2.php?number=1">Left Door</a>
      <a href="respond2.php?number=2">Right Door</a></p>
    <?php
  } else {
    echo "You died";
  }
    ?>
  </body>
</html>
