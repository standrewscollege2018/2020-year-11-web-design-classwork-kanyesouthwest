<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Respond Get Array</title>
  </head>
  <body>
    <?php
    $mynumber = $_GET ['number'];
    if ($mynumber == 1) {
      echo "Weirdo you were sent to Iraq";
    } else {
      echo "Good Job you survived and wasnt send to iraq";
    }
     ?>
  </body>
</html>
