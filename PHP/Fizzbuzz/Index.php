<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fizzbuzz</title>
  </head>
  <body>
    <?php
    $counter = 1;
    $number_entered = $_POST['number_entered'];
    do {
      if ($counter % 3 == 0)
      {
        echo "<p>fizz</p>";
      } else {
        echo "<p>$counter</p>";
      }
      $counter = $counter + 1;
    } while ($counter <= 100);
     ?>
  </body>
</html>
