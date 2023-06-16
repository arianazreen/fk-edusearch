<?php
	include_once '../Module1/session-check-admin.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Manage Complaint</title>

	<link href="../../dist/css/style.css" rel="stylesheet">
	
	<style>
		body {
			opacity: 0;
		}
	</style>
	<script src="../../dist/js/settings.js"></script>
	<!-- END SETTINGS -->
</head>

<body>
	<div class="splash active">
		<div class="splash-icon"></div>
	</div>

	<div class="wrapper">
		<!-- NAVIGATION SIDE BAR -->
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content">
				<div class="sidebar-user">
					<img src="../../dist/img/logo/fk-edusearch-border.png" alt="FK-EduSearch Logo" />
					<div class="fw-bold">FK-EDUSEARCH</div>
				</div>

				<ul class="sidebar-nav">
					<div class="dropdown-divider"></div>

					<!-- REPORT -->
					<li class="sidebar-item">
						<a data-bs-target="#report" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-file-contract"></i> <span class="align-middle">Report</span>
						</a>
						<ul id="report" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link active" href="../Module4/user-activity.php">User Activity</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="../Module1/system-performance.php">User Satisfication</a></li>
						</ul>
					</li>

					<!-- MANAGE USER PROFILE -->
					<li class="sidebar-item">
						<a data-bs-target="#manageuser" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-users-cog"></i> <span class="align-middle">Manage User Profile</span>
						</a>
						<ul id="manageuser" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="../Module1/manage-genUser.php">General User</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="../Module1/manage-expert.php">Expert</a></li>
						</ul>
					</li>

					<!-- MANAGE COMPLAINT -->
					<li class="sidebar-item">
						<a class="sidebar-link" href="../Module4/manage-complaint.php">
							<i class="align-middle me-1 fas fa-fw fa-comments"></i> <span class="align-middle">Manage Complaint</span>
						</a>
					</li>
					<!-- NOTIFICATIONS -->
					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
							<i class="align-middle me-2 fas fa-fw fa-bell"></i> <span class="align-middle">Notifications</span>
						</a>
					</li>
					
					<!-- LOG OUT -->
					<li class="sidebar-item" style="position: absolute; bottom: 10px; ">
						<a class="sidebar-link" href="../Module1/logout-admin.php">
							<i class="align-middle me-2 fas fa-fw fa-sign-out-alt"></i> <span class="align-middle">Log Out</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<!-- CONTENT -->
		<div class="main">
			<nav class="navbar navbar-expand navbar-theme">
				<a class="sidebar-toggle d-flex me-2" style="margin-top: 10px;">
					<i class="hamburger align-self-center"></i>
				</a>
			</nav>

			<main class="content">
				<div class="container-fluid">
					<div class="header" style="margin-bottom: 80px;">
					<h1 class="header-title">
							Manage Complaint
						</h1>
					</div>
					<div class="row">
						<div class="col-12">
						<div class="card" style="padding: 40px 30px 20px;">
								<table id="datatables-basic" class="table table-striped">
									<thead>
										<tr>
											<th >Matric No.</th>
											<th >Name</th>
											<th class="d-none d-md-table-cell" >Date</th>
											<th >Complaint Type</th>
											<th>Status</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>

										<?php
											// connect to the database
											include '../Module1/database.php';

											// to view complaint details
											
											$sql= "SELECT generaluser.userID, generaluser.userName, complaint.complaintID, complaint.complaintDate, complaint.complaintTime, complaint.complaintType, complaint.complaintDesc, complaint.complaintStatus 
												   FROM generaluser INNER JOIN complaint ON generaluser.userID=complaint.userID";
											$result = mysqli_query($conn,$sql);
											
											if(mysqli_num_rows($result)>0)
											{
												while($row = mysqli_fetch_assoc($result))
												{
													$userID = $row['userID'];
													$complaintID = $row['complaintID'];
													$matricNum = $row['userID'];
													$username = $row['userName'];
													$complaintDate = $row['complaintDate'];
													$complaintTime = $row['complaintTime'];
													$complaintType = $row['complaintType'];
													$complaintDesc = $row['complaintDesc'];
													$complaintStatus = $row['complaintStatus'];
										?>
										

										<tr>
											<td> <?php echo $userID ?> </td>
											<td> <?php echo $username ?> </td>
											<td> <?php echo $complaintDate ?> </td>
											<td> <?php echo $complaintType ?> </td>
											<td><i class="fas fa-fw fa-check-circle" style="color:#35B421;"></i> <?php echo $complaintStatus ?> </td>
											<td class="table-action">
										
											<?php echo "<a href='view-details.php? user_ID=$userID'><i class='align-middle fas fa-fw fa-eye' style='margin-right:10px;  color:#000;'></i></a>"?>
												

												<!-- Update modal -->

													<!-- BEGIN  modal -->
													<?php echo "<a href='#sizedModalLg-$userID'><i class='align-middle fas fa-fw fa-edit' style='margin-right:10px; color:#0039D7;'data-bs-toggle='modal' data-bs-target='#sizedModalLg-$userID'></i></a>"?>

													<div class="modal fade" id="sizedModalLg-<?php echo $userID; ?>" tabindex="-1" role="dialog" aria-hidden="true">
														<div class="modal-dialog modal-lg" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h2 class="modal-title" style="position: relative; left:40%; font-size: 30px;">Update Status</h2>
																	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																</div>
																<div class="modal-body m-3">

																	
																<form method="POST" action="manage-complaint.php">
																

																<div class="card-body row">
																	<div class="form-floating col-sm-4">
																		<input class="form-control" type="text" placeholder="" value="<?php echo $matricNum; ?>" readonly>
																		<label for="userID">Matric Number</label>
																	</div>
																	<div class="form-floating col-sm-8">
																		<input class="form-control" type="text" placeholder="" value="<?php echo $username; ?>" readonly>
																		<label for="uName">Name</label>
																	</div>
																</div>
																	
																<div class="card-body row">
																	<div class="form-floating col-sm-6">
																		<input class="form-control" type="date" placeholder="" value="<?php echo $complaintDate; ?>" readonly>
																		<label for="cDate">Date</label>
																	</div>
																	<div class="form-floating col-sm-6">
																		<input class="form-control" type="time" placeholder="" value="<?php echo $complaintTime; ?>" readonly>
																		<label for="cTime">Time</label>
																	</div>
																</div>

																<div class="card-body row">
																	<div class="form-floating">
																		<input class="form-control" type="text" placeholder="Complain Type" value="<?php echo $complaintType; ?>" readonly>
																		<label for="cType">Complain Type</label>
																	</div>
																</div>

																<div class="card-body row">
																	<div class="form-floating">
																		<textarea class="form-control" rows="7"readonly><?php echo $complaintDesc; ?></textarea>
																		<label for="cDesc">Complain Description</label>
																	</div>
																</div>

																<div class="card-body row">
																	<div class="form-floating">
																	<select class="form-control mb-3">
																		<option selected>Choose status</option>
																		<option>On Hold</option>
																		<option>In Investigation</option>
																		<option>Resolved</option>
																	</select>
																	
																		<label for="cStatus">Status</label>
																	</div>
																</div>

																	
																</form>
																	
																</div>

																<div class="modal-footer">

																	<button type="button" class="btn" style=" color: white; position:absolute; right: 500px; background-color: #1D2F3A; font-weight: 400; border-radius: 7px; width: 80px;">Update</button>
																	<button type="button" class="btn" data-bs-dismiss="modal" style=" color: white; position:relative; right: 350px; background-color: #5A788B; font-weight: 400; border-radius: 7px; width: 80px;">Cancel</button>
																	
																</div>
															</div>
														</div>
													</div>
													<!-- END  modal -->
												
												<!-- Delete Modal -->

													<!-- BEGIN danger modal -->

													<a href="#centeredModalDanger"><i class="align-middle fas fa-fw fa-trash" class="trigger-btn" data-bs-toggle="modal" data-bs-target="#centeredModalDanger" style="color:#D00000;"></i></a>
														
													<div class="modal fade" id="centeredModalDanger" tabindex="-1" role="dialog" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																</div>
																<div class="modal-body m-3">

																	<div class="drop" style="width:150px; height:150px; background-color:#fff2f2; display:flex; justify-content:center; align-items:center; border-radius: 50%; margin: -25px 0 20px 200px; position:relative; box-shadow: inset 2px 7px 6px rgba(0,0,0,0.1);">
																		<i class="align-middle fas fa-fw fa-trash-alt" style="font-size: 65px; color: #D90000;"></i>
																	</div>
																    
																	<p class="mb-0" style="font-weight: 450; font-size: 18px;">You are about to delete a data <br> Are you sure?</p>
																</div>
																<div class="modal-footer">
																<button type="button" class="btn" style=" color: #fff; position:absolute; right: 300px; background-color: #DA3131; font-weight: 400; border-radius: 7px; width: 80px;">Delete</button>
																	<button type="button" class="btn" data-bs-dismiss="modal" style=" color: #000; position:relative; right: 180px; background-color: #B2B2B4; font-weight: 400; border-radius: 7px; width: 80px;">Cancel</button>
																</div>
															</div>
														</div>
													</div>
													<!-- END danger modal -->

											</td>
										</tr>
										
										<?php
											}
												
										}
											//close database connection
    										mysqli_close($conn);
										?>

									</tbody>
								</table>
							</div>
						</div>

					</div>

				</div>
			</main>
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-8 text-start"></div>
						<div class="col-4 text-end">
							<p class="mb-0">
								&copy; 2023 - UNIVERSITI MALAYSIA PAHANG
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>

	</div>

	<svg width="0" height="0" style="position:absolute">
		<defs>
			<symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
				<path
					d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
				</path>
			</symbol>
		</defs>
	</svg>
	<script src="../../dist/js/app.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables basic
			$('#datatables-basic').DataTable({
				responsive: true
			});
			// Datatables with Buttons
			var datatablesButtons = $('#datatables-buttons').DataTable({
				lengthChange: !1,
				buttons: ["copy", "print"],
				responsive: true
			});
			datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)")
		});
	</script>


</body>

</html>