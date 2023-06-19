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
	<link href="../../dist/css/modern-admin.css" rel="stylesheet">

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
		<?php
			include_once('../Module1/navbar.php');
		?>

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
						<h1 class="header-title" style="color: black;">
							Manage Complaint
						</h1>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card" style="padding: 40px 30px 20px;">
								<table id="datatables-basic" class="table table-striped">
									<thead>
										<tr>
											<th>User ID</th>
											<th>Name</th>
											<th class="d-none d-md-table-cell">Date</th>
											<th>Complaint Type</th>
											<th>Status</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>

										<?php
										// connect to the database
										include '../Module1/database.php';

										// to view complaint details

										$sql = "SELECT generaluser.id, generaluser.userID, generaluser.userName, complaint.complaintID, complaint.complaintDate, complaint.complaintTime, complaint.complaintType, complaint.complaintDesc, complaint.complaintStatus 
												   FROM generaluser INNER JOIN complaint ON generaluser.userID=complaint.userID";
										$result = mysqli_query($conn, $sql);

										if (mysqli_num_rows($result) > 0) {
											while ($row = mysqli_fetch_assoc($result)) {
												$id = $row['id'];
												$userID = $row['userID'];
												$complaintID = $row['complaintID'];
												$userName = $row['userName'];
												$complaintDate = $row['complaintDate'];
												$complaintTime = $row['complaintTime'];
												$complaintType = $row['complaintType'];
												$complaintDesc = $row['complaintDesc'];
												$complaintStatus = $row['complaintStatus'];
										?>


												<tr>
													<td> <?php echo $userID ?> </td>
													<td> <?php echo $userName ?> </td>
													<td> <?php echo $complaintDate ?> </td>
													<td> <?php echo $complaintType ?> </td>
													<td>
														<?php
														if ($complaintStatus == "On Hold") :
															echo "<i class='fas fa-fw fa-exclamation-circle' style='color: #EA030B;'></i>  On Hold";
														elseif ($complaintStatus == "Resolved") :
															echo "<i class='fas fa-fw fa-check-circle' style='color: #32A377;'></i>  Resolved";
														else :
															echo "<i class='fas fa-fw fa-clock' style='color: #ECC707;'></i>  In Investigation";
														endif;
														?>

													</td>

													<td class="table-action">

														<?php echo "<a href='view-details.php? user=$userID'><i class='align-middle fas fa-fw fa-eye' style='margin-right:10px;  color:#000;'></i></a>" ?>


														<!-- Update modal -->

														<!-- BEGIN  update modal -->
														<?php echo "<a href='#sizedModalLg-$id'><i class='align-middle fas fa-fw fa-edit' style='margin-right:10px; color:#0039D7;'data-bs-toggle='modal' data-bs-target='#sizedModalLg-$id'></i></a>" ?>

														<div class="modal fade" id="sizedModalLg-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
															<div class="modal-dialog modal-lg" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h2 class="modal-title" style="position: relative; left:40%; font-size: 30px;">Update Status</h2>
																		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																	</div>
																	<div class="modal-body m-3">


																		<form method="POST" action="complaintDB.php">
																			<input type="hidden" name="id" value="<?php echo $id; ?>" />

																			<div class="card-body row">
																				<div class="form-floating col-sm-4">
																					<input class="form-control" type="text" name="userID" value="<?php echo $userID; ?>" readonly>
																					<label for="userID">User ID</label>
																				</div>
																				<div class="form-floating col-sm-8">
																					<input class="form-control" type="text" name="userName" value="<?php echo $userName; ?>" readonly>
																					<label for="uName">Name</label>
																				</div>
																			</div>

																			<div class="card-body row">
																				<div class="form-floating col-sm-6">
																					<input class="form-control" type="date" name="complaintDate" value="<?php echo $complaintDate; ?>" readonly>
																					<label for="cDate">Date</label>
																				</div>
																				<div class="form-floating col-sm-6">
																					<input class="form-control" type="time" name="complaintTime" value="<?php echo $complaintTime; ?>" readonly>
																					<label for="cTime">Time</label>
																				</div>
																			</div>

																			<div class="card-body row">
																				<div class="form-floating">
																					<input class="form-control" type="text" name="complaintType" value="<?php echo $complaintType; ?>" readonly>
																					<label for="cType">Complain Type</label>
																				</div>
																			</div>

																			<div class="card-body row">
																				<div class="form-floating">
																					<textarea class="form-control" rows="7" name="complaintDesc" readonly><?php echo $complaintDesc; ?></textarea>
																					<label for="cDesc">Complain Description</label>
																				</div>
																			</div>

																			<div class="card-body row">
																				<div class="form-floating">
																					<select class="form-control mb-3" name="complaintStatus">

																						<?php
																						if ($complaintStatus == "In Investigation") {
																						?>
																							<option value="In Investigation" selected>In Investigation</option>
																							<option value="On Hold">On Hold</option>
																							<option value="Resolved">Resolved</option>
																						<?php
																						} elseif ($complaintStatus == "On Hold") {
																						?>
																							<option value="In Investigation">In Investigation</option>
																							<option value="On Hold" selected>On Hold</option>
																							<option value="Resolved">Resolved</option>
																						<?php
																						} else {
																						?>
																							<option value="In Investigation">In Investigation</option>
																							<option value="On Hold">On Hold</option>
																							<option value="Resolved" selected>Resolved</option>
																						<?php
																						}
																						?>

																					</select>

																					<label for="cStatus">Status</label>
																				</div>
																			</div>

																	</div>

																	<div class="modal-footer">
																		<button type="submit" class="btn" name="update" style=" color: white; position:absolute; right: 500px; background-color: #1D2F3A; font-weight: 400; border-radius: 7px; width: 80px;">Update</button>
																		<button type="button" class="btn" data-bs-dismiss="modal" style=" color: white; position:relative; right: 350px; background-color: #5A788B; font-weight: 400; border-radius: 7px; width: 80px;" onclick="history.back()">Cancel</button>
																	</div>

																	</form>

																</div>
															</div>
														</div>
														<!-- END update modal -->


														<!-- Delete Modal -->

														<!-- BEGIN delete modal -->

														<?php echo "<a href='#centeredModalDanger-$id'><i class='align-middle fas fa-fw fa-trash' class='trigger-btn' data-bs-toggle='modal' data-bs-target='#centeredModalDanger-$id' style='color:#D00000;'></i></a>" ?>

														<div class="modal fade" id="centeredModalDanger-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
															<div class="modal-dialog modal-dialog-centered" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																	</div>
																	<div class="modal-body m-3">
																		<form method="POST" action="complaintDB.php">
																			<input type="hidden" name="id" value="<?php echo $id; ?>">
																			<div class="drop" style="width:150px; height:150px; background-color:#fff2f2; display:flex; justify-content:center; align-items:center; border-radius: 50%; margin: -25px 0 20px 200px; position:relative; box-shadow: inset 2px 7px 6px rgba(0,0,0,0.1);">
																				<i class="align-middle fas fa-fw fa-trash-alt" style="font-size: 65px; color: #D90000;"></i>
																			</div>

																			<p class="mb-0" style="font-weight: 450; font-size: 18px; text-align:center;">Are you sure you wish to delete this data ?<br> This process cannot be undone.</p>
																	</div>
																		<div class="modal-footer">
																			<button type="submit" class="btn" name="delete" style="color: #fff; position:absolute; right: 300px; background-color: #DA3131; font-weight: 400; border-radius: 7px; width: 80px;">Delete</button>
																			<button type="button" class="btn" data-bs-dismiss="modal" style=" color: #000; position:relative; right: 180px; background-color: #B2B2B4; font-weight: 400; border-radius: 7px; width: 80px;">Cancel</button>
																		</div>
																	</form>
																</div>
															</div>
														</div>

														<!-- END delete modal -->

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
				<path d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
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