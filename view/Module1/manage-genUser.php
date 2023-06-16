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

	<title>Manage User Profile</title>
	<link rel="shortcut icon" href="../../dist/img/logo/fk-edusearch-border.png" type="image/x-icon">

	<!-- Link to CSS file -->
	<link href="../../dist/css/modern-admin.css" rel="stylesheet">
	<link href="css-m1/manage-user-style.css" rel="stylesheet">
	
	<style>
		body {
			opacity: 0;
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
			include_once('../standardize/admin-navbar.php');
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
							Manage General User Profile
						</h1>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card" style="padding: 80px 30px 20px;">
								<div class="mb-3">
									<!-- BUTTON CREATE -->
									<div class="position-relative">
  										<div class="position-absolute bottom-0 end-0">
											<h6 class="card-subtitle text-muted" style="margin-bottom: 20px;">
												<a href='create-genUser.php' role="button" class="btn" 
													style="margin-top: 50px; margin-right: 5px; padding: 5px 40px; background-color: #1D2F3A; color: white; box-shadow: 2px 4px 2px lightgray;">
													CREATE
												</a>
											</h6>
										</div>
									</div>
								</div>
								<!-- TABLE -->
								<table id="datatables-basic" class="table table-striped">
									<thead>
										<tr>
											<th>Name</th>
											<th>Course</th>
											<th>Email</th>
											<th class="d-none d-md-table-cell">Phone No.</th>
											<th style="text-align: center;">Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php
											include ("database.php");

											$query = "SELECT * FROM generaluser";
											$result = mysqli_query($conn,$query);

											$query2 = "SELECT * FROM expert";
											$result2 = mysqli_query($conn,$query2);
											$optionList = "";

											while ($row2 = mysqli_fetch_array($result2)) {
												$expertID = $row2["expertID"];
												$expertName = $row2["expertName"];

												$optionList = $optionList."<option value='$expertID - $expertName'>$expertID - $expertName</option>";
											}

											while ($row = mysqli_fetch_array($result)) {
												$id = $row["id"];
												$userRole = $row["userRole"];
												$userID = $row["userID"];
												$userName = $row["userName"];
												$userEmail = $row["userEmail"];
												$userPhoneNo = $row["userPhoneNo"];
												$userPass = $row["userPass"];
												$userCourse = $row["userCourse"];
												$assignedExpert = $row["assignedExpert"];
										?>

										<tr>
											<td><?php echo $userName; ?></td>
											<td><?php echo $userCourse; ?></td>
											<td><?php echo $userEmail; ?></td>
											<td><?php echo $userPhoneNo; ?></td>
											<!-- ACTIONS -->
											<td class="table-action" style="margin: auto; width: 140px; text-align: center;">
												<!-- BUTTON MODAL VIEW -->
												<?php echo "<a href='viewModal' data-bs-toggle='modal' data-bs-target='#ModalView-$id'>
													<i class='align-middle fas fa-fw fa-eye' style='color: black; margin-right: 12px;'></i></a>"; 
												?>
												<!-- BUTTON MODAL UPDATE -->
												<?php echo "<a href='updateModal' data-bs-toggle='modal' data-bs-target='#ModalUpdate-$id'>
													<i class='align-middle fas fa-fw fa-edit' style='color: blue; margin-right: 12px;'></i></a>"; 
												?>
												<!-- BUTTON MODAL DELETE -->
												<?php echo "<a href='deleteModal' data-bs-toggle='modal' data-bs-target='#ModalDelete-$id'>
													<i class='align-middle fas fa-fw fa-trash' style='color: red;'></i></a>"; 
												?>
											</td>
										</tr>

										<!-- BEGIN Modal View-->
										<div class="modal fade" id="ModalView-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h3 class="modal-title" style="position: relative; left: 150px;">View General User Profile</h3>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body m-3">
														<form action="crud.php" method="POST" enctype="multipart/form-data">
															<input type="hidden" name="id" value="<?php echo $id; ?>"/>
															<div class="row">
																<div class="mb-3 col-md-4">
																	<label>User Role</label>
																	<select disabled class="form-select" name ="userRole">
																		<?php
																			if($userRole == "Student") { 
																		?>
																				<option value="Student">Student</option>
																		<?php 
																			} elseif ($userRole == "Staff") {
																		?>
																				<option value="Staff">Staff</option>
																		<?php
																		}
																		?>
																	</select>
																</div>
																<div class="mb-3 col-md-8">
																	<label>Course</label>
																	<select disabled class="form-select" name ="userCourse" aria-label="Default select example">
																		<?php
																			if($userCourse == "BCS") { 
																		?>
																				<option value="BCS">BCS - Software Engineering</option>
																		<?php 
																			} elseif ($userCourse == "BCN") {
																		?>
																				<option value="BCN">BCN - Computer Systems & Networking</option>
																		<?php
																			} elseif ($userCourse == "BCG") {
																		?>
																				<option value="BCG">BCG - Graphics & Multimedia Technology</option>
																		<?php
																			} else {
																		?>
																				<option value="Undefined">Undefined</option>
																		<?php
																			} 
																		?>
																	</select>
																</div>
																<div class="mb-3 col-md-4">
																	<label>Matric ID</label>
																	<input disabled type="text" class="form-control" name="userID" value="<?php echo $userID; ?>">
																</div>
																<div class="mb-3 col-md-8">
																	<label>Name</label>
																	<input disabled type="text" class="form-control" name="userName" value="<?php echo $userName; ?>">
																</div>
																<div class="mb-3 col-md-7">
																	<label>Email</label>
																	<input disabled type="email" class="form-control" name="userEmail" value="<?php echo $userEmail; ?>">
																</div>
																<div class="mb-3 col-md-5">
																	<label>Phone No.</label>
																	<input disabled type="text" class="form-control" name="userPhoneNo" value="<?php echo $userPhoneNo; ?>">
																</div>
																<div class="mb-3 col-md-4">
																	<label>Password</label>
																	<input disabled type="text" class="form-control" name="userPass" value="<?php echo $userPass; ?>">
																</div>
																<div class="mb-3 col-md-8">
																	<label>Assigned Expert</label>
																	<select disabled class="form-select" name="assignedExpert" aria-label="Default select example">
																		<option selected><?php echo $assignedExpert; ?></option>
																	</select>
																</div>
															</div>
															<!-- end row -->
													</div>
													<!-- end modal body -->
													<div class="modal-footer">
														<input id="button-cancel" type="button" value="CLOSE" data-bs-dismiss="modal">
													</div>
														</form>
												</div>
												<!-- end modal content -->
											</div>
										</div>
										<!-- END Modal View-->

										<!-- BEGIN Modal Update-->
										<div class="modal fade" id="ModalUpdate-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h3 class="modal-title" style="position: relative; left: 140px;">Update General User Profile</h3>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body m-3">
														<!-- FORM UPDATE -->
														<form action="crud.php" method="POST" enctype="multipart/form-data">
															<input type="hidden" name="id" value="<?php echo $id; ?>"/>
															<div class="row">
																<div class="mb-3 col-md-4">
																	<label>User Role</label>
																	<select class="form-select" name ="userRole">
																		<?php
																			if($userRole == "Student") { 
																		?>
																				<option value="Student" selected>Student</option>
																				<option value="Staff">Staff</option>
																		<?php 
																			} elseif ($userRole == "Staff") {
																		?>
																				<option value="Student">Student</option>
																				<option value="Staff" selected>Staff</option>
																		<?php
																		}
																		?>
																	</select>
																</div>
																<div class="mb-3 col-md-8">
																	<label>Course</label>
																	<select class="form-select" name ="userCourse" aria-label="Default select example">
																		<?php
																			if($userCourse == "BCS") { 
																		?>
																				<option value="BCS" selected>BCS - Software Engineering</option>
																				<option value="BCN">BCN - Computer Systems & Networking</option>
																				<option value="BCG">BCG - Graphics & Multimedia Technology</option>
																		<?php 
																			} elseif ($userCourse == "BCN") {
																		?>
																				<option value="BCS">BCS - Software Engineering</option>
																				<option value="BCN" selected>BCN - Computer Systems & Networking</option>
																				<option value="BCG">BCG - Graphics & Multimedia Technology</option>
																		<?php
																			} elseif ($userCourse == "BCG") {
																		?>
																				<option value="BCS">BCS - Software Engineering</option>
																				<option value="BCN">BCN - Computer Systems & Networking</option>
																				<option value="BCG" selected>BCG - Graphics & Multimedia Technology</option>
																		<?php
																			} else {
																		?>
																				<option hidden="">Please Select</option>
																				<option value="BCS">BCS - Software Engineering</option>
																				<option value="BCN">BCN - Computer Systems & Networking</option>
																				<option value="BCG">BCG - Graphics & Multimedia Technology</option>
																		<?php
																			} 
																		?>
																	</select>
																</div>
																<div class="mb-3 col-md-4">
																	<label>Matric ID</label>
																	<input type="text" class="form-control" name="userID" value="<?php echo $userID; ?>">
																</div>
																<div class="mb-3 col-md-8">
																	<label>Name</label>
																	<input type="text" class="form-control" name="userName" value="<?php echo $userName; ?>">
																</div>
																<div class="mb-3 col-md-7">
																	<label>Email</label>
																	<input type="email" class="form-control" name="userEmail" value="<?php echo $userEmail; ?>">
																</div>
																<div class="mb-3 col-md-5">
																	<label>Phone No.</label>
																	<input type="text" class="form-control" name="userPhoneNo" value="<?php echo $userPhoneNo; ?>">
																</div>
																<div class="mb-3 col-md-4">
																	<label>Password</label>
																	<input disabled type="text" class="form-control" name="userPass" value="<?php echo $userPass; ?>">
																</div>
																<div class="mb-3 col-md-8">
																	<label>Assigned Expert</label>
																	<select class="form-select" name="assignedExpert" aria-label="Default select example">
																		<option hidden="" selected><?php echo $assignedExpert; ?></option>
																		<?php echo $optionList; ?>
																	</select>
																</div>
															</div>
															<!-- end row -->
													</div>
													<!-- end modal body -->
													<div class="modal-footer">
														<input id="button-submit" type="submit" name="update-genUser" value="UPDATE" style="position: absolute; right: 280px;">
														<input id="button-cancel" type="button" value="CANCEL" data-bs-dismiss="modal" style="position: relative; right: 160px;">
													</div>
														</form>
												</div>
												<!-- end modal content -->
											</div>
										</div>
										<!-- END Modal Update-->

										<!-- BEGIN Modal Delete-->
										<div class="modal fade" id="ModalDelete-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body m-3">
														<form action="crud.php" method="POST" enctype="multipart/form-data">
															<input type="hidden" name="id" value="<?php echo $id; ?>"/>
															<div class="drop" style="width:150px; height:150px; background-color:#fff2f2; display:flex; justify-content:center; 
															align-items:center; border-radius: 50%; margin: -25px 0 20px 200px; position:relative; box-shadow: inset 2px 7px 6px rgba(0,0,0,0.1);">
																<i class="align-middle fas fa-fw fa-trash-alt" style="font-size: 65px; color: #D90000;"></i>
															</div>

															<p class="mb-0" style="font-weight: 450; font-size: 18px; text-align:center;">Are you sure you wish to delete this data ?<br> This process cannot be undone.</p>
														
													</div>
													<div class="modal-footer">
														<input id="button-submit" type="submit" name="delete-genUser" value="DELETE" style="background-color: red; position: absolute; right: 280px;">
														<input id="button-cancel" type="button" value="CANCEL" data-bs-dismiss="modal" style="position: relative; right: 160px;">
													</div>
														</form>
												</div>
											</div>
										</div>
										<!-- END Modal Delete-->
											<?php
												}
											?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
						<?php
							echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
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