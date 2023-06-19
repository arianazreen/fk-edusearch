<?php
require('../Module1/database.php');
?>


<?php
// Retrieve the comment from the request
$comment = $_POST['comment'];

// Perform the necessary database operations to insert the comment
// Replace "your_database_table" with the actual name of your database table
// Replace "your_database_connection" with the actual code to establish a database connection

// Example code for inserting the comment into the database
$sql = "INSERT INTO comment VALUES ('$comment')";
$result = mysqli_query($conn,$sql);

// Send a response back to the client
if ($result) {
  echo json_encode(['success' => true]);
} else {
  echo json_encode(['success' => false]);
}
?>
