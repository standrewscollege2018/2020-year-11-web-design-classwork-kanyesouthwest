<!DOCTYPE html>
  <head>
    <title>Query with single result</title>
  </head>
  <body>
    <?php
    // Connect to database
    $db_connect  = mysqli_connect("localhost", "root", "", "student_info_djb");

    // Create query
    $student_sql = "SELECT first_name, last_name FROM students WHERE first_name LIKE '%' . $search_name . "%" ";

    // Run Query
    $student_qry = mysqli_query($db_connect, $student_sql);

    // store result in array
    $student_aa = mysqli_fetch_assoc($student_qry);

    // Displays a single result
    echo $student_aa['first_name'];
    echo " ";
    echo $student_aa['last_name'];
    ?>
</html>
