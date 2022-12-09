<?php
if (isset($_POST['submitD'])) {

$submit         = $_POST['submitD'];
$fname     = $_POST['fname'];
$lname     = $_POST['lname'];
$email     = $_POST['email'];
$add     = $_POST['address'];

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = 'Waheguru@01';
$conn   = new mysqli($dbhost, $dbuser, $dbpass);
if (!$conn) {
    die('Could not connect: '.mysql_error());
}

$sql = "INSERT INTO assignment (fname,lname,email,address)
              VALUES('$fname','$lname','$email','$add')";

mysqli_select_db($conn,'growthscribe');

if ($conn->query($sql) === TRUE) {
      echo "record created successfully";
  }
mysqli_close($conn);
} else {
    echo "Something has gone wrong.";
}

?>