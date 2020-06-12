<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $greeting_text = $_POST['name_entered'];
      if ($greeting_text == "Ashton") {
        echo "Good job weirdo you guessed my name";
      } else {
        echo "Unlucky bucko try again later";
      }
     ?>
  </body>
</html>
