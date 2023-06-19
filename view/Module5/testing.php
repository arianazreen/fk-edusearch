<!-- INSERT COMPLAINT INSIDE DATABASE -->
<?php
// <!-- declaration database -->
require('../Module1/database.php');

function getLatestComplaintId($conn) {
    $sql = "SELECT MAX(id) AS maxId FROM complaint";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $lastId = $row['maxId'];

    return (int) $lastId;
}
session_start();
if (isset($_POST['submit'])) {
    $id = $_SESSION['username'];
    // $userID = $_GET[]
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $latestId = getLatestComplaintId($conn);
    $complaintID = 'C' . sprintf("%04d", $latestId + 1);
    $complaintDate =  date("Y-m-d");
    $complaintTime =  date("h:i");
    $complaintType =  $_POST['complaintType'];
    $complaintDesc =  $_POST['complaintDesc'];
    $postID = $_POST['postID'];
    $sql = "INSERT INTO complaint (  complaintID ,userID ,postID, complaintDate, complaintTime, complaintType, complaintDesc, complaintStatus) VALUES ( '$complaintID','$id','$postID','$complaintDate', '$complaintTime', '$complaintType', '$complaintDesc', 'Submitted')";
    $result = mysqli_query($conn, $sql);


    //  2) insert data into post and generalUser table

    // 3) check statement successfull or not
    if ($result) {
        
        echo "<script>alert('The Form has been Submitted.');window.location='main.php'</script>";
        // echo "<script>alert('The Form has been Submitted.')</script>";
    } else {
        echo "<script>alert('Error Inserting Data: " . mysqli_error($conn) . "')</script>";
    }
    //4 close database connection
    mysqli_close($conn);
}
?>

<!-- UPDATE COMPLAINT INSIDE DATABASE -->
<?php
// Declaration database
require('../Module1/database.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $complaintDesc = $_POST['complaintDesc'];

    $sql = "UPDATE complaint SET complaintDesc = '$complaintDesc' WHERE id = $id";
    $result = mysqli_query($conn, $sql);


    if ($result) {
        //to close database connection
        mysqli_close($conn);
        echo "<script>alert('Update Successful');window.location='main.php'</script>";
        // header("Location: main.php");
        exit();
    } else {
        mysqli_close($conn);
        echo "<script>alert('Error updating complaint: " . mysqli_error($conn) . "')</script>";
    }
}
?>

<!-- DELETE COMPLAINT INSIDE THE DATABASE -->
<?php
// Declaration database
require('../Module1/database.php');

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM complaint WHERE id = $id";
    $result = mysqli_query($conn, $sql);


    if ($result) {
        //to close database connection
        mysqli_close($conn);
        echo "<script>alert('The Complaint has been deleted.');window.location='main.php'</script>";
        exit();
    } else {
        mysqli_close($conn);
        echo "<script>alert('Error delete complaint: " . mysqli_error($conn) . "')</script>";
    }
}
?>