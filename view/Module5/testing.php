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
// 1)
if (isset($_POST['submit'])) {
    $latestId = getLatestComplaintId($conn);
    $complaintID = 'C' . sprintf("%04d", $latestId + 1);
    $complaintDate =  date("Y-m-d");
    $complaintTime =  date("H:i");
    $complaintType =  $_POST['complaintType'];
    // 'App_no' => 'KN/' . date("Y") . '/' . sprintf("%'.05d\n", $consultation + 1),
    $complaintDesc =  $_POST['complaintDesc'];
    // $complaintStatus =  $_POST['complaintStatus'];
    $sql = "INSERT INTO complaint ( complaintID, complaintDate, complaintTime, complaintType, complaintDesc, complaintStatus) VALUES ( '$complaintID','$complaintDate', '$complaintTime', '$complaintType', '$complaintDesc', 'Submitted')";
    $result = mysqli_query($conn, $sql);


    //  2) insert data into post and generalUser table

    // 3) check statement successfull or not
    if ($result) {
        header("Location: main.php");
        echo "<script>alert('The Form has been Submitted.')</script>";
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
        header("Location: main.php");
        exit();
    } else {
        mysqli_close($conn);
        echo "<script>alert('Error delete complaint: " . mysqli_error($conn) . "')</script>";
    }
}
?>