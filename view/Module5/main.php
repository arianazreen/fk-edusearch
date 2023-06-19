<?php
//check session
include_once('../Module1/session-check-genUser.php');
$id = $_SESSION['username'];
?>
<?php
// <!-- declaration database -->
require('../Module1/database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Complaint Dashboard</title>

	<link href="../../dist/css/modernModule5.css" rel="stylesheet">

	<style>
		body {
			opacity: 0;
		}

		/* disable button modal update */
		.disabled-anchor {
			pointer-events: none;
			opacity: 0.5;
			cursor: not-allowed;
		}

		.page-item.active .page-link {
			background-color: #07A492;
			border-color: #07A492;
			color: #fff;
			z-index: 3;
		}
	</style>
	<script src="../../dist/js/settings.js"></script>
	<!-- END SETTINGS -->
</head>

<body>
	<div class="wrapper">
		<!-- CONTENT -->
		<div class="main">
			<?php
			include_once('navbarUser.php');
			?>
			<main class="content">
				<div class="container-fluid">
					<div class="header">
						<h1 class="header-title">
							Complain History
						</h1>
					</div>
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Detail Complaint</h5>
								<h6 class="card-subtitle text-muted">
									<a href='../Module5/create.php' role="button" class="btn" style=" color: white; position: absolute; right:1%; margin-top:-2%; background-color: #07A492; font-weight: 400;">CREATE NEW</a>
								</h6>
							</div>

							<div class="card-body">
								<table id="datatables-basic" class="table table-striped" style="width:100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Date</th>
											<th>Time</th>
											<th>Complain Type</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

										<?php
										// <!-- declaration database -->
										require('../Module1/database.php');

										$sql = "SELECT * FROM complaint WHERE userID = '$id'";
										$result = mysqli_query($conn, $sql);
										if (mysqli_num_rows($result) > 0) {
											$count = 1;
											while ($row = mysqli_fetch_assoc($result)) {
												$complaintID = $row['id'];
												$complaintDate = $row['complaintDate'];
												$complaintTime = $row['complaintTime'];
												$complaintType = $row['complaintType'];
												$complaintStatus = $row['complaintStatus'];
												$complaintDesc = $row['complaintDesc'];
												$postID = $row['postID'];
												
										?>
												<tr>
													<td>
														<?php echo "$count"; ?>
													</td>
													<td>
														<?php echo "$complaintDate"; ?>
													</td>
													<td>
														<?php echo "$complaintTime"; ?>
													</td>
													<td>
														<?php echo "$complaintType"; ?>
													</td>
													<td>
														<?php if ($complaintStatus == "On Hold") : ?>
															<i class='fas fa-fw fa-exclamation-circle' style='color: #EA030B;'></i>On Hold
														<?php elseif ($complaintStatus == "Resolved") : ?>
															<i class='fas fa-fw fa-check-circle' style='color: #32A377;'></i>Resolved
														<?php elseif ($complaintStatus == "Submitted") : ?>
															<i class='fas fa-fw fa-arrow-alt-circle-up' style='color: blue;'></i>Submitted
														<?php else : ?>
															<i class='fas fa-fw fa-clock' style='color: #ECC707;'></i>In Investigation
														<?php endif; ?>
													</td>
													<td>
														<?php echo "<a href='view.php? id=$complaintID'><i class='align-middle fas fa-fw fa-eye' style='color: black;'></i></a>"; ?>
														<?php if ($complaintStatus == "On Hold" || $complaintStatus == "Resolved" || $complaintStatus == "In Investigation") : ?>
															<?php echo "<a class='disabled-anchor' data-bs-toggle='modal' data-bs-target='#update-$complaintID'><i class='align-middle fas fa-fw fa-edit' style='color: #008080;'></i></a>"; ?>
															<?php echo "<a data-bs-toggle='modal' data-bs-target='#delete-$complaintID'><i class='align-middle fas fa-fw fa-trash' style='color: red;'></i></a>"; ?>
														<?php else : ?>
															<?php echo "<a data-bs-toggle='modal' data-bs-target='#update-$complaintID'><i class='align-middle fas fa-fw fa-edit' style='color: #008080;'></i></a>"; ?>
															<?php echo "<a data-bs-toggle='modal' data-bs-target='#delete-$complaintID'><i class='align-middle fas fa-fw fa-trash' style='color: red;'></i></a>"; ?>
														<?php endif; ?>
													</td>
												</tr>

												<!--Modal Kemaskini-->
												<div class="modal fade" id="update-<?php echo $complaintID; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
													<div class="modal-dialog modal-dialog-scrollable">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="staticBackdropLabel">Update Complain</h5>
																<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
															</div>
															<div class="modal-body">
																<div class="card-body">
																	<form method="POST" action="testing.php">
																		<input type="hidden" name="id" value="<?php echo $complaintID; ?>">

																		<div class="row">
																			<div class="mb-3 col-md-6">
																				<label for="DateComplaint">Date Complaint</label>
																				<input type="date" class="form-control" name="complaintDate" id="complaintDate" value="<?php echo $complaintDate; ?>" disabled>
																			</div>
																			<div class="mb-3 col-md-6">
																				<label for="TimeComplaint">Time Complaint</label>
																				<input type="time" class="form-control" name="complaintTime" id="complaintTime" value="<?php echo $complaintTime; ?>" disabled>
																			</div>
																			<div class="mb-3 col-md-12">
																				<label for="complain">Post Title</label>
																				<select class="form-select" name="postID" aria-label="Default select example" disabled>
																				<option disabled selected><?php echo $postID; ?></option>
																				</select>
																			</div>
																			<div class="mb-3 col-md-12">
																				<label for="complain">Complaint Type</label>
																				<select class="form-select" name="complaintType" aria-label="Default select example" disabled>
																					<option disabled selected><?php echo $complaintType; ?></option>
																				</select>
																			</div>
																			<div class="mb-3">
																				<label>Complaint Description</label>
																				<textarea class="form-control" rows="5" name="complaintDesc"><?php echo $complaintDesc; ?></textarea>
																			</div>
																		</div>
																		<div class="modal-footer">
																		<input type="hidden" name="update" value="true">
																			<button type="button" class="btn" style="position:absolute; right: 328px; background-color: #ADDCD7; color: #000; font-weight: 400;" data-bs-dismiss="modal">Cancel</button>
																			<button type="submit" class="btn" style=" position:relative; right: 205px;  background-color: #07A492; color: white; font-weight: 400;">Save</button>
																		</div>

																	</form>
																</div>
															</div>
														</div>
													</div>

												</div>
												<!-- end Modal Kemaskini -->

												<!-- Start Modal Delete -->
												<div class="modal fade" id="delete-<?php echo $complaintID; ?>" tabindex="-1" role="dialog" aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
															</div>
															<div class="modal-body m-3">
																<form method="POST" action="testing.php">
																	<input type="hidden" name="id" value="<?php echo $complaintID; ?>">
																	<div class="drop" style="width:150px; height:150px; background-color:#fff2f2; display:flex; justify-content:center; align-items:center; border-radius: 50%; margin: -25px 0 20px 200px; position:relative; box-shadow: inset 2px 7px 6px rgba(0,0,0,0.1);">
																		<i class="align-middle fas fa-fw fa-trash-alt" style="font-size: 65px; color: #D90000;"></i>
																	</div>

																	<p class="mb-0" style="font-weight: 450; font-size: 18px; text-align:center;">You are about to delete a data <br> Are you sure?</p>
															</div>
															<div class="modal-footer">
																<input type="hidden" name="delete" value="true">
																<button type="submit" class="btn" name="delete" style="color: #fff; position:absolute; right: 300px; background-color: #DA3131; font-weight: 400; border-radius: 7px; width: 80px;">Delete</button>
																			<button type="button" class="btn" data-bs-dismiss="modal" style=" color: #000; position:relative; right: 180px; background-color: #B2B2B4; font-weight: 400; border-radius: 7px; width: 80px;">Cancel</button>
															</div>
															</form>
														</div>
													</div>
												</div>
												<!-- end Delete modal -->
										<?php
												$count++; // Increment the count by 1
											}
										}
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