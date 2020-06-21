<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>List of students in tutor groups</title>
  </head>
  <body>
    <?php
      // Check if info in $GET array
      if (!isset($_GET['tutor_group_id'])) {
        // Redirecting to origional page
        header('Location:tutorgroup-list.php');
      } else {

      // Connect to Database

      $db_connect = mysqli_connect("localhost", "root", "", "student_info_djb");
      // Check if connection worked
      if (mysqli_connect_errno()) {
        echo "Connection failed:".mysqli_connect_errno();
      }
     ?>

     <!-- Retreive info from get GET array -->

     <?php
     $tutor_group_id = $_GET['tutor_group_id'];
     // SQL statement
     $studentlist_sql = "SELECT * FROM students WHERE tutor_group_id = $tutor_group_id";
     // Run query
     $studentlist_qry = mysqli_query($db_connect, $studentlist_sql);
     // Put results from query in associative array
     $studentlist_aa = mysqli_fetch_assoc($studentlist_qry);

     // echo "list of students in tutor group where ID=" . $tutor_group_id;

      // display all rows that match query
      do {
        // display each student in one line
        echo "<p><b>Student ID:</b> " . $studentlist_aa['student_id'];
        echo " <b>First name:</b>" . $studentlist_aa['first_name'];
        echo " <b>Last name:</b>" . $studentlist_aa['last_name'] . "</p>";
      } while ($studentlist_aa = mysqli_fetch_assoc($studentlist_qry));
    }
      ?>

  </body>
</html>
