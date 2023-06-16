<!-- Display User Complaint Details -->

<?php

		include("../Module1/database.php");

		if(isset($_GET['userID'])) 
		{

			$sql= "SELECT generaluser.userID, generaluser.matricNum, generaluser.username, complaint.complaintID, complaint.complaintDate, complaint.complaintTime, complaint.complaintType, complaint.complaintDesc, complaint.complaintStatus FROM generaluser INNER JOIN complaint ON generaluser.userID=complaint.userID WHERE userID = ".$_REQUEST['userID'].";";
			$result = mysqli_query($conn,$sql);

			while($row = mysqli_fetch_array($result)){

				$userID = $row['userID'];
				$complaintID = $row['complaintID'];
				$matricNum = $row['matricNum'];
				$username = $row['username'];
				$complaintDate = $row['complaintDate'];
				$complaintTime = $row['complaintTime'];
				$complaintType = $row['complaintType'];
				$complaintDesc = $row['complaintDesc'];
				$complaintStatus = $row['complaintStatus'];
				
			}
		}
?>