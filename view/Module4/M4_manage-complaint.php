<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Manage Complaint</title>

	<link href="../../dist/css/modern.css" rel="stylesheet">
	
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
						<a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-file-contract"></i> <span class="align-middle">Report</span>
						</a>
						<ul id="dashboards" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="M4_user-activity.php"">User Activity</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="">User Satisfication</a></li>
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
						<a class="sidebar-link" href="#">
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

					<div class="header">
						<h1 class="header-title">
							Manage Complaint
						</h1>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<table class="table table-bordered">
									<thead>
										<tr style="background-color: rgb(12, 13, 61); color: white; text-align: center;">
											<th >User ID</th>
											<th >Name</th>
											<th class="d-none d-md-table-cell" >Date</th>
											<th >Complaint Type</th>
											<th>Status</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr style="text-align: center;">
											<td>CB19021</td>
											<td style="text-align: left;">NUR MAISARAH BINTI JAILANI</td>
											<td class="d-none d-md-table-cell">10 Jan 2023</td>
											<td>Unsatisfied Experts Feedback</td>
											<td style="text-align: left;"><i class="fas fa-fw fa-check-circle" style="color:#35B421;"></i>  Resolved</td>
											<td class="table-action">
												<a href="#"><i class="align-middle fas fa-fw fa-search" style="margin-right:10px;"></i></a>
												<a href="#"><i class="align-middle fas fa-fw fa-edit" style="margin-right:10px;"></i></a>
												<a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
											</td>
										</tr>

										<tr style="text-align: center;">
											<td>CA21124</td>
											<td style="text-align: left;">AHMAD RIDUAN BIN ABU</td>
											<td class="d-none d-md-table-cell">23 Jan 2023</td>
											<td>Unsatisfied Experts Feedback</td>
											<td style="text-align: left;"><i class="fas fa-fw fa-clock" style="color:#DCDB02;"></i>  In Investigation</td>
											<td class="table-action">
												<a href="#"><i class="align-middle fas fa-fw fa-search" style="margin-right:10px;"></i></a>
												<a href="#"><i class="align-middle fas fa-fw fa-edit" style="margin-right:10px;"></i></a>
												<a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
											</td>
										</tr>

										<tr style="text-align: center;">
											<td>CD19976</td>
											<td style="text-align: left;">KIM MINGYU</td>
											<td class="d-none d-md-table-cell">6 April 2023</td>
											<td>Unsatisfied Experts Feedback</td>
											<td style="text-align: left;"><i class="fas fa-fw fa-exclamation-circle" style="color:#F90105;"></i>  On Hold</td>
											<td class="table-action">
												<a href="#"><i class="align-middle fas fa-fw fa-search" style="margin-right:10px;"></i></a>
												<a href="#"><i class="align-middle fas fa-fw fa-edit" style="margin-right:10px;"></i></a>
												<a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
											</td>
										</tr>
										
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

</body>

</html>