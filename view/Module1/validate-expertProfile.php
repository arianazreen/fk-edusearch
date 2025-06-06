<?php
	include_once('../Module1/session-check-admin.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Validate Expert Profile</title>
	<link rel="shortcut icon" href="../../dist/img/logo/fk-edusearch-border.png" type="image/x-icon">

	<!-- Link to CSS file -->
	<link href="../../dist/css/modern-admin.css" rel="stylesheet">
	<link href="css-m1/manage-user-style.css" rel="stylesheet">
	
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
	</style>
	<script src="../../dist/js/settings.js"></script>
</head>

<body>
	<div class="splash active">
		<div class="splash-icon"></div>
	</div>

	<div class="wrapper">
		<!-- NAVIGATION SIDE BAR -->
		<?php
			include_once('navbar.php');
		?>

		<!-- CONTENT -->
		<div class="main">
			<nav class="navbar navbar-expand navbar-theme">
				<a class="sidebar-toggle d-flex me-2" style="margin-top: 10px;">
					<i class="hamburger align-self-center" style="color: black"></i>
				</a>
			</nav>
			<main class="content">
				<div class="container-fluid">
					<!-- HEADER -->
					<div class="header" style="margin-bottom: 80px;">
						<h1 class="header-title" style="color: black; border: none; border-left: 14px solid #1D2F3A; padding-left: 10px;">
							Validate Expert Profile
						</h1>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card" style="padding: 40px 30px 20px;">
								<!-- TABLE -->
								<table id="datatables-basic" class="table table-striped">
									<thead>
										<tr>
											<th>Date</th>
											<th>Expert ID</th>
											<th>Expert Name</th>
											<th>Status</th>
											<th style="text-align: center;">Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php
											include ("database.php");

											$query = "SELECT expert.id, expert.expertID, expert.expertName, 
															expertise.id, expertise.expertiseID, expertise.expertResearchArea, expertise.expertPublications, expertise.expertAcademicStatus, expertise.expertCV, expertise.expertSocMed, 
															expertise.epValidationStatus, expertise.epSubmitDate, expertise.epSubmitTime
												   FROM expert 
												   INNER JOIN expertise ON expert.expertID=expertise.expertID";

											$result = mysqli_query($conn,$query);

											while ($row = mysqli_fetch_array($result)) {
												$id = $row["id"];
												$expertID = $row["expertID"];
												$expertName = $row["expertName"];
												$expertiseID = $row["expertiseID"];
												$expertResearchArea = $row["expertResearchArea"];
												$expertPublications = $row["expertPublications"];
												$expertAcademicStatus = $row["expertAcademicStatus"];
												$expertCV = $row["expertCV"];
												$expertSocMed = $row["expertSocMed"];
												$epValidationStatus = $row["epValidationStatus"];
												$epSubmitDate = $row["epSubmitDate"];
												$epSubmitTime = $row["epSubmitTime"];
										?>

										<tr>
											<td><?php echo $epSubmitDate; ?></td>
											<td><?php echo $expertID; ?></td>
											<td><?php echo $expertName; ?></td>
											<td>
												<?php
													if ($epValidationStatus == "Approved") :
														echo "<i class='fas fa-fw fa-check-circle' style='color: #32A377;'></i>  Approved";
													elseif ($epValidationStatus == "Disapproved") :
														echo "<i class='fas fa-fw fa-times-circle' style='color: #EA030B;'></i>  Disapproved";
													else :
														echo "<i class='fas fa-fw fa-clock' style='color: #ECC707;'></i>  Pending";
													endif;
												?>
											</td>
											<!-- ACTIONS -->
											<td class="table-action" style="margin: auto; width: 140px; text-align: center;">
												<!-- BUTTON MODAL VIEW -->
												<?php echo "<a href='viewModal' data-bs-toggle='modal' data-bs-target='#ModalView-$id'>
													<i class='align-middle fas fa-fw fa-eye' style='color: black; margin-right: 12px;'></i></a>"; 
												?>
												<!-- BUTTON MODAL UPDATE -->
												<?php if ($epValidationStatus == "Pending") : ?>
													<?php echo "<a href='updateModal' data-bs-toggle='modal' data-bs-target='#ModalUpdate-$id'>
														<i class='align-middle fas fa-fw fa-edit' style='color: blue; margin-right: 12px;'></i></a>"; 
													?>
												<?php else : ?>
													<?php echo "<a class='disabled-anchor' href='updateModal' data-bs-toggle='modal' data-bs-target='#ModalUpdate-$id'>
														<i class='align-middle fas fa-fw fa-edit' style='color: blue; margin-right: 12px;'></i></a>"; 
													?>
												<?php endif; ?>
											</td>
										</tr>

										<!-- BEGIN Modal View-->
										<div class="modal fade" id="ModalView-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h3 class="modal-title" style="position: relative; left: 210px;">View Profile</h3>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body m-3">
														<form action="crud.php" method="POST" enctype="multipart/form-data">
															<input type="hidden" name="id" value="<?php echo $id; ?>"/>
															<div class="row">
																<div class="mb-3 col-md-4">
																	<label>Expert ID</label>
																	<input type="text" class="form-control" name="expertID" value="<?php echo $expertID; ?>" readonly>
																</div>
																<div class="mb-3 col-md-8">
																	<label>Expert Name</label>
																	<input type="text" class="form-control" name="expertName" value="<?php echo $expertName; ?>" readonly>
																</div>
																<div class="mb-3 col-md-12">
																	<label>Research Area</label>
																	<input type="text" class="form-control" name="expertResearchArea" value="<?php echo $expertResearchArea; ?>" readonly>
																</div>
																<div class="mb-3 col-md-12">
																	<label>Publications</label>
																	<textarea class="form-control" rows="3" name="expertPublications" readonly><?php echo $expertPublications; ?></textarea>
																</div>
																<div class="mb-3 col-md-12">
																	<label>Academic Status</label>
																	<textarea class="form-control" rows="3" name="expertAcademicStatus" readonly><?php echo $expertAcademicStatus; ?></textarea>
																</div>
																<div class="mb-3 col-md-6">
																	<label>CV</label>
																	<input type="text" class="form-control" name="expertCV" value="<?php echo $expertCV; ?>" readonly>
																</div>
																<div class="mb-3 col-md-6">
																	<label>Social Media</label>
																	<input type="text" class="form-control" name="expertSocMed" value="<?php echo $expertSocMed; ?>" readonly>
																</div>
																<div class="mb-3 col-md-12">
																	<label>Status</label>
																	<input type="text" class="form-control" name="epValidationStatus" value="<?php echo $epValidationStatus; ?>" readonly>
																</div>
															</div>
													</div>
													<div class="modal-footer">
														<input id="button-cancel" type="button" value="CLOSE" data-bs-dismiss="modal">
													</div>
														</form>
												</div>
											</div>
										</div>
										<!-- END Modal View-->

										<!-- BEGIN Modal Update-->
										<div class="modal fade" id="ModalUpdate-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h3 class="modal-title" style="position: relative; left: 210px;">Update Status</h3>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body m-3">
														<!-- FORM UPDATE -->
														<form action="crud.php" method="POST" enctype="multipart/form-data">
															<input type="hidden" name="id" value="<?php echo $id; ?>"/>
															<div class="row">
																<div class="mb-3 col-md-4">
																	<label>Expert ID</label>
																	<input type="text" class="form-control" name="expertID" value="<?php echo $expertID; ?>" readonly>
																</div>
																<div class="mb-3 col-md-8">
																	<label>Expert Name</label>
																	<input type="text" class="form-control" name="expertName" value="<?php echo $expertName; ?>" readonly>
																</div>
																<div class="mb-3 col-md-12">
																	<label>Research Area</label>
																	<input type="text" class="form-control" name="expertResearchArea" value="<?php echo $expertResearchArea; ?>" readonly>
																</div>
																<div class="mb-3 col-md-12">
																	<label>Publications</label>
																	<textarea class="form-control" rows="3" name="expertPublications" readonly><?php echo $expertPublications; ?></textarea>
																</div>
																<div class="mb-3 col-md-12">
																	<label>Academic Status</label>
																	<textarea class="form-control" rows="3" name="expertAcademicStatus" readonly><?php echo $expertAcademicStatus; ?></textarea>
																</div>
																<div class="mb-3 col-md-6">
																	<label>CV</label>
																	<input type="text" class="form-control" name="expertCV" value="<?php echo $expertCV; ?>" readonly>
																</div>
																<div class="mb-3 col-md-6">
																	<label>Social Media</label>
																	<input type="text" class="form-control" name="expertSocMed" value="<?php echo $expertSocMed; ?>" readonly>
																</div>
																<div class="mb-3 col-md-12">
																	<label>Status</label>
																	<select class="form-select" name ="epValidationStatus" aria-label="Default select example">
																		<?php
																			if($epValidationStatus == "Pending") { 
																		?>
																				<option hidden="" value="Pending" selected>Pending</option>
																				<option value="Approved">Approved</option>
																				<option value="Disapproved">Disapproved</option>
																		<?php 
																			}
																		?>
																	</select>
																</div>
															</div>
															<!-- end row -->
													</div>
													<!-- end modal body -->
													<div class="modal-footer">
														<input id="button-submit" type="submit" name="update-expertStatus" value="UPDATE" style="position: absolute; right: 280px;">
														<input id="button-cancel" type="button" value="CANCEL" data-bs-dismiss="modal" style="position: relative; right: 160px;">
													</div>
														</form>
												</div>
												<!-- end modal content -->
											</div>
										</div>
										<!-- END Modal Update-->
											<?php
												}
											?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
						<?php
							// echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
						?>
				</div>
			</main>
			<!-- FOOTER -->
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