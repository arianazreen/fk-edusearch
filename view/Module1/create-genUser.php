<?php
	session_start();

	//If session is not set, then redirect to Login Page
	if(!isset($_SESSION['username'])) {
		echo "<script>alert('Your session has timed out. Please log in again.'); window.location='login.php'</script>";
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Create General User</title>
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
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content">
				<div class="sidebar-user">
					<img src="../../dist/img/logo/fk-edusearch-border.png" alt="FK-EduSearch Logo" />
					<div class="fw-bold">FK-EDUSEARCH</div>
				</div>
			
				<ul class="sidebar-nav">
					<div class="dropdown-divider" style="background-color: #4b5c96;"></div>
					<!-- REPORT -->
					<li class="sidebar-item">
						<a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-file-contract"></i> <span class="align-middle">Report</span>
						</a>
						<ul id="dashboards" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="#">User Activity</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="#">System Performance</a></li>
						</ul>
					</li>
					<!-- MANAGE USER PROFILE -->
					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
							<i class="align-middle me-2 fas fa-fw fa-users-cog"></i> <span class="align-middle">Manage User Profile</span>
						</a>
					</li>
					<!-- MANAGE COMPLAINT -->
					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
							<i class="align-middle me-1 fas fa-fw fa-comments"></i> <span class="align-middle">Manage Complaint</span>
						</a>
					</li>
					<!-- NOTIFICATIONS -->
					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
							<i class="align-middle me-2 fas fa-fw fa-bell"></i> <span class="align-middle">Notifications</span>
						</a>
					</li>
					<!-- <div class="dropdown-divider"></div> -->
					<!-- LOG OUT -->
					<li class="sidebar-item" style="position: absolute; bottom: 10px; ">
						<a class="sidebar-link" href="logout.php">
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
					<i class="hamburger align-self-center" style="color: black"></i>
				</a>
			</nav>
			<main class="content">
				<div class="container-fluid">
					<!-- HEADER -->
					<div class="header" style="margin-bottom: 80px;">
						<h1 class="header-title" style="color: black; border: none; border-left: 14px solid #1D2F3A; padding-left: 10px;">
							Create General User
						</h1>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card" style="padding: 50px 40px 140px; border-radius: 20px; box-shadow: 5px 8px 5px lightgray;">
                                <!-- FORM CREATE GEN USER-->
                                <form method="POST" action="create-genUser.php" onsubmit="alert('Form Submitted.')">
									<div class="row">
                                        <div class="mb-3 col-md-4">
											<label for="userRole">User Role</label>
											<select class="form-select" name="userRole" value="userRole" aria-label="Default select example">
												<option hidden="">Please Select</option>
												<option value="Student">Student</option>
												<option value="Staff">Staff</option>
											</select>
										</div>
										<div class="mb-3 col-md-8">
											<label for="course">Course</label>
											<select class="form-select" name="course" value="course" aria-label="Default select example">
												<option hidden="">Please Select</option>
												<option value="BCS">BCS - Software Engineering</option>
												<option value="BCN">BCN - Computer Systems & Networking</option>
												<option value="BCG">BCG - Graphics & Multimedia Technology</option>
											</select>
										</div>
                                        <div class="mb-3 col-md-4">
											<label for="matricID">Matric ID</label>
											<input type="text" class="form-control" name="matricID">
										</div>
										<div class="mb-3 col-md-8">
											<label for="name">Name</label>
											<input type="text" class="form-control" name="name">
										</div>
                                        <div class="mb-3 col-md-7">
											<label for="email">Email</label>
											<input type="email" class="form-control" name="email">
										</div>
										<div class="mb-3 col-md-5">
											<label for="phoneNo">Phone No.</label>
											<input type="text" class="form-control" name="phoneNo">
										</div>
										<div class="mb-3 col-md-4">
											<label for="password">Password</label>
											<input type="password" class="form-control" name="password">
										</div>
										<div class="mb-3 col-md-8">
											<label for="assignedExpert">Assigned Expert</label>
											<select class="form-select" name="assignedExpert" value="assignedExpert" aria-label="Default select example">
												<option hidden="">Please Select</option>
												<option value="EB18052">EB18052 - DR. SYAZANA BINTI HALIM</option>
												<option value="ED19232">ED19232 - TS. ZAMRI BIN AHMAD ZAFRIL</option>
                                                <option value="EA20113">EA20113 - TS. NURSHARIFAH BINTI JAMAL</option>
											</select>
										</div>
                                        <div class="position-relative">
                                            <div class="position-absolute top-100 start-50 translate-middle" style="margin-top: 80px;">
                                                <div class="mb-3">
                                                    <input id="button-submit" type="submit"value="SUBMIT">
                                                    <input id="button-cancel" type="button" value="CANCEL" onclick="history.back()">
                                                </div>
                                            </div>
                                        </div>
									</div>
								</form>
							</div>
						</div>
					</div>
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

</body>

</html>