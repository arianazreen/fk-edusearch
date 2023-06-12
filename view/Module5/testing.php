<!-- INSERT COMPLAINT INSIDE DATABASE -->
<?php
// <!-- declaration database -->
require('../Module1/database.php');
// 1)
if (isset($_POST['submit'])) {
    // $complaintID =  $_POST['complaint_ID'];
    // $userID
    // $postID
    $complaintDate =  $_POST['complaintDate'];
    $complaintTime =  $_POST['complaintTime'];
    $complaintType =  $_POST['complaintType'];
    $complaintDesc =  $_POST['complaintDesc'];
    // $complaintStatus =  $_POST['complaintStatus'];
    $sql = "INSERT INTO complaint ( complaintDate, complaintTime, complaintType, complaintDesc, complaintStatus) VALUES ( '$complaintDate', '$complaintTime', '$complaintType', '$complaintDesc', 'In Investigation')";
    $result = mysqli_query($conn, $sql);


    //  2) insert data into post and generalUser table

    // 3) check statement successfull or not
    if ($result) {
        header("Location: main.php");
        echo "<script>alert('The Form has been Submitted.')</script>";
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
    $complaintID = $_POST['complaintID'];
    $complaintDesc = $_POST['complaintDesc'];

    $sql = "UPDATE complaint SET complaintDesc = '$complaintDesc' WHERE complaintID = $complaintID";
    $result = mysqli_query($conn, $sql);


    if ($result) {
        //to close database connection
        mysqli_close($conn);
        header("Location: main.php");
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
    $complaintID = $_POST['complaintID'];

    $sql = "DELETE FROM complaint WHERE complaintID = $complaintID";
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