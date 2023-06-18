<?php
require('../Module1/database.php');
?>

<?php
// Retrieve the publication ID from the request
$id = $_GET["id"];

// Delete the publication from the database
$sql = "DELETE FROM publications WHERE id='$id'";
mysqli_query($connn, $sql);

// Redirect back to the page where the publication list is displayed
header("Location: ManageExpertProfile.php");
exit();
?>
