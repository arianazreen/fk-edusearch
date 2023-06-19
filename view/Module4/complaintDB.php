<!-- Update Complaint Status -->
<?php
    //connect to the database
    include('../Module1/database.php');

    if (isset($_POST['update'])) {
        $compID = $_POST['compID'];
        $complaintStatus = $_POST['complaintStatus'];

        //update complaint status
        $sql = "UPDATE complaint SET complaintStatus='$complaintStatus' WHERE complaintID = '$compID'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>alert('Update Successful');window.location='manage-complaint.php'</script>";
        } else {
            echo "<script>alert('Error updating complaint: " . mysqli_error($conn) . "')</script>";
        }
    }

    //close database connection
    mysqli_close($conn);
?>


<!-- Delete General User Complaint Details -->

<?php

	//connect to the database

    include('../Module1/database.php');

    if (isset($_POST['delete']))
    {
        if (isset($_POST['compID']))
		{
			//delete user complaint data
			$compID = $_POST['compID'];
			$sql = "DELETE FROM complaint WHERE complaintID = '$compID'";
			// $sql = "UPDATE complaint SET complaintStatus='$complaintStatus' WHERE complaintID = '$compID'";
			$result = mysqli_query($conn, $sql);

			if($result==true) 
			{
                echo "<script>alert('Delete Successful.'); window.location='manage-complaint.php'</script>";
            }

			else 
			{
				echo "<script>alert('Error updating complaint: " . mysqli_error($conn) . "')</script>";
			}
		}
    }

	//close database connection

	mysqli_close($conn);


?>