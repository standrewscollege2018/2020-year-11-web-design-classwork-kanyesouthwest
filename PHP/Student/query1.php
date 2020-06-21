<!DOCTYPE html>
  <head>
    <title>Query with single result</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <?php
    // Connect to database
    $db_connect  = mysqli_connect("localhost", "root", "", "student_info_djb");

    // Create query
    $student_sql = "SELECT first_name, last_name FROM students WHERE first_name LIKE '%A%'";

    // Run Query
    $student_qry = mysqli_query($db_connect, $student_sql);

    // store result in array
    $student_aa = mysqli_fetch_assoc($student_qry);

    do {
      // Store name as variables
      $first_name = $student_aa['first_name'];
      $last_name = $student_aa['last_name']

    ?>
  <div class="content-container">
    <div class="student">

      <?php echo "$first_name $last_name"; ?>

    </div>
  </div>
    <?php
    } while ($student_aa = mysqli_fetch_assoc($student_qry))
    ?>
  </body>
</html>
