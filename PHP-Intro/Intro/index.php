<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "<p>Hello World!</p>";

    $name = "gender studies";
    echo "<p> Hello $name</p>";

    $number = 4;

    if ($number * 10 > 40) {
      echo "You have lots of gender studies";
    } else if ($number * 10 < 40) {
      echo "You don't have many gender studies";
    }
      else {
        echo "lol you don't do gender studies";
    }

    ?>
  </body>
</html>
