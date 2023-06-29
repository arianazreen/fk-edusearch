<!-- INSERT  INSIDE DATABASE -->
<?php
// <!-- declaration database -->
require('../Module1/database.php');

session_start();
if (isset($_POST['submit'])) {

    $Date = $_POST['Date'];
    $Time = $_POST['Time'];
    $PublicationName = $_POST['Publication Name'];

    $sql = "INSERT INTO publications (Date,Time,Publication Name) 
                VALUES ('$Date','$Time','$PublicationName','submit')";
    
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Updated profile successfully.'); window.location='ExpProfile.php'</script>";
    } 
    else {
        echo "<script>alert('Error Inserting Data: " . mysqli_error($conn) . "')</script>";
    }
}
?>

<!-- DELETE  INSIDE THE DATABASE -->
<?php
// Declaration database
require('../Module1/database.php');

if (isset($_POST['delete'])) {
    $No = $_POST['No'];

    $sql = "DELETE FROM publications WHERE No = $No";
    $result = mysqli_query($conn, $sql);


    if ($result) {
        //to close database connection
        mysqli_close($conn);
        echo "<script>alert('The data has been deleted.');window.location='ExpProfile.php'</script>";
        exit();
    } else {
        mysqli_close($conn);
        echo "<script>alert('Error delete profile: " . mysqli_error($conn) . "')</script>";
    }
}
?>
