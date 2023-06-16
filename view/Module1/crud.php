
<!-- CREATE -->
<?php
    include ("database.php");

    if (isset($_POST['create-genUser']))
    {
        extract($_POST);

        $userID = $_POST['userID'];
        $userRole = $_POST['userRole'];
        $userName = $_POST['userName'];
        $userEmail = $_POST['userEmail'];
        $userPhoneNo = $_POST['userPhoneNo'];
        $userPass = $_POST['userPass'];
        $userCourse = $_POST['userCourse'];
        $assignedExpert = $_POST['assignedExpert'];
    
        $query = "INSERT INTO generaluser (userID,userRole,userName,userEmail,userPhoneNo,userPass,userCourse,assignedExpert) 
                    VALUES ('$userID','$userRole','$userName','$userEmail','$userPhoneNo','$userPass','$userCourse','$assignedExpert')";
        
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('General User created successfully.'); window.location='manage-genUser.php'</script>";
        } 
        else {
            echo "Error : " . $query ."<br>" . mysqli_error($conn);
        }
    }
    
?>

<?php
    include ("database.php");

    if (isset($_POST['create-expert']))
    {
        extract($_POST);

        $expertID = $_POST['expertID'];
        $expertName = $_POST['expertName'];
        $expertEmail = $_POST['expertEmail'];
        $expertPhoneNo = $_POST['expertPhoneNo'];
        $expertPass = $_POST['expertPass'];
        $expertCourse = $_POST['expertCourse'];
    
        $query = "INSERT INTO expert (expertID,expertName,expertEmail,expertPhoneNo,expertPass,expertCourse) 
                    VALUES ('$expertID','$expertName','$expertEmail','$expertPhoneNo','$expertPass','$expertCourse')";
        
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Expert created successfully.'); window.location='manage-expert.php'</script>";
        } 
        else {
            echo "Error : " . $query ."<br>" . mysqli_error($conn);
        }
    }
    
?>

<!-- UPDATE -->
<?php
    include('database.php');

    if (isset($_POST['update-genUser']))
    {
        $id=$_POST['id'];

        $userID = $_POST['userID'];
        $userRole = $_POST['userRole'];
        $userName = $_POST['userName'];
        $userEmail = $_POST['userEmail'];
        $userPhoneNo = $_POST['userPhoneNo'];
        $userPass = $_POST['userPass'];
        $userCourse = $_POST['userCourse'];
        $assignedExpert = $_POST['assignedExpert'];

        $query = mysqli_query($conn,"UPDATE generaluser SET 
                                            userID='$userID', 
                                            userRole='$userRole', 
                                            userName='$userName', 
                                            userEmail='$userEmail', 
                                            userPhoneNo='$userPhoneNo', 
                                            userCourse='$userCourse',
                                            assignedExpert='$assignedExpert' 
                                    WHERE id='$id'");

        if($query) {
            echo "<script>alert('Update Successful.'); window.location='manage-genUser.php'</script>";
        }
    }
?>

<?php
    include('database.php');

    if (isset($_POST['update-expert']))
    {
        $id=$_POST['id'];

        $expertID = $_POST['expertID'];
        $expertName = $_POST['expertName'];
        $expertEmail = $_POST['expertEmail'];
        $expertPhoneNo = $_POST['expertPhoneNo'];
        $expertPass = $_POST['expertPass'];
        $expertCourse = $_POST['expertCourse'];

        $query = mysqli_query($conn,"UPDATE expert SET 
                                            expertID='$expertID', 
                                            expertName='$expertName', 
                                            expertEmail='$expertEmail', 
                                            expertPhoneNo='$expertPhoneNo',
                                            expertCourse='$expertCourse'
                                    WHERE id='$id'");

        if($query) {
            echo "<script>alert('Update Successful.'); window.location='manage-expert.php'</script>";
        }
    }
?>

<!-- DELETE -->
<?php
    include ("database.php");

    if (isset($_POST['delete-genUser']))
    {
        if (isset($_POST['id']))
        {
            $result = mysqli_query($conn,"DELETE FROM generaluser WHERE id=".$_POST['id']);

            if($result==true) {
                echo "<script>alert('Delete Successful.'); window.location='manage-genUser.php'</script>";
            }
        }
    }
?>

<?php
    include ("database.php");

    if (isset($_POST['delete-expert']))
    {
        if (isset($_POST['id']))
        {
            $result = mysqli_query($conn,"DELETE FROM expert WHERE id=".$_POST['id']);

            if($result==true) {
                echo "<script>alert('Delete Successful.'); window.location='manage-expert.php'</script>";
            }
        }
    }
?>