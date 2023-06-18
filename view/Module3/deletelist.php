<?php
require('../Module1/database.php');
?>

<?php
//check session
include_once('../Module1/session-check-expert.php');
?>

<?php
// Replace 'your_connection' with your actual database connection
$connection = mysqli_connect("localhost", "username", "password", "your_database");

// Retrieve the publication ID from the request
$id = $_GET["id"];

// Delete the publication from the database
$query = "DELETE FROM publications WHERE id='$id'";
mysqli_query($connection, $query);

// Redirect back to the page where the publication list is displayed
header("Location: ManageExpertProfile.php");
exit();
?>
