<!-- INSERT  INSIDE DATABASE -->
<?php
// <!-- declaration database -->
require('../Module1/database.php');

session_start();
if (isset($_POST['submit'])) {
    // $userID = $_GET[]
    $expertResearchName = $_POST['expertResearchName'];
    $expertPublications = $_POST['expertPublications'];
    $expertAcademicStatus = $_POST['expertAcademicStatus'];
    $expertCV = $_POST['expertCV'];
    $expertSocMed = $_POST['eexpertSocMed'];

    $query = "INSERT INTO expertise (expertResearchName,expertPublications,expertAcademicStatus,expertCV,expertSocMed) 
                VALUES ('$expertResearchName','$expertPublications','$expertAcademicStatus','$expertCV','$expertSocMed')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Updated profile successfully.'); window.location='ExpProfile.php'</script>";
    } 
    else {
        echo "Error : " . $query ."<br>" . mysqli_error($conn);
    }
?>

<!-- DELETE  INSIDE THE DATABASE -->
<?php
// Declaration database
require('../Module1/database.php');

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM expertise WHERE id = $id";
    $result = mysqli_query($conn, $sql);


    if ($result) {
        //to close database connection
        mysqli_close($conn);
        header("Location: ExpProfile.php");
        exit();
    } else {
        mysqli_close($conn);
        echo "<script>alert('Error delete profile: " . mysqli_error($conn) . "')</script>";
    }
}
?>
