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
      echo "Good job weirdo"; ?>
      <p>You managed to get through all doors :D</p>
    <?php
  } else {
    echo "You died";
  }
    ?>
  </body>
</html>
