<?php
require('../Module1/database.php');
?>

<?php
//check session
include_once('../Module1/session-check-expert.php');
?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Retrieve the publication details from the request
  $no = $_POST["no"];
  $date = $_POST["date"];
  $time = $_POST["time"];
  $name = $_POST["name"];

  // Perform necessary validations on the data

  $query = "INSERT INTO publications (no, date, time, name) VALUES ('$no', '$date', '$time', '$name')";
  mysqli_query($connection, $query);

  // Redirect back to the page where the publication list is displayed
  header("Location: ManageExpertProfile.php");
  exit();
}
?>
