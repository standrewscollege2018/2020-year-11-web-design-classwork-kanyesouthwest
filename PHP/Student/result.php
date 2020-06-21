<!DOCTYPE html>
  <head>
    <title>Query with single result</title>
    <link rel="stylesheet" href="stylesheet.css">
  </head>
  <body>

    <?php
    // Variable received from search page
    $name = $_POST["name_entered"];

    // Connect to database
    $db_connect  = mysqli_connect("localhost", "root", "", "student_info_djb");

    // Create query
    $student_sql = "SELECT first_name, last_name, student_id FROM students WHERE first_name '$name'";

    // Run Query
    $student_qry = mysqli_query($db_connect, $student_sql);

    // store result in array
    $student_aa = mysqli_fetch_assoc($student_qry);

    echo "$student_aa[first_name]";

    ?>
</html>
