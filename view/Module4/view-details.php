<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>View Complaint Details</title>

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
							<li class="sidebar-item"><a class="sidebar-link" href="user-activity.php">User Activity</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="">User Satisfication</a></li>
						</ul>
					</li>
					<!-- MANAGE USER PROFILE -->
					<li class="sidebar-item">
						<a class="sidebar-link" href="manage-user.php">
							<i class="align-middle me-2 fas fa-fw fa-users-cog"></i> <span class="align-middle">Manage User Profile</span>
						</a>
					</li>
					<!-- MANAGE COMPLAINT -->
					<li class="sidebar-item">
						<a class="sidebar-link" href="manage-complaint.php">
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
					<div class="col-md-10" style="float:none;margin:auto;">
						<div class="card-form">

							<br>
							<h2 style="float:none;margin:auto;padding-bottom:35px;">User Complaint Details</h2>

							<div class="card-form-body">
								<form method="POST" action="../Module4/manage-complaint.php">
									<div class="row">
                                        
                                    <div class="form-group row">
                                        <label for="userID" class="col-sm-5 col-form-label" style="font-size:15px;">MATRIC NUMBER</label>
                                        <div class="col-sm-7">
                                        <input style="font-size:15px;" type="text" readonly class="form-control-plaintext" id="userID" value=": CB19021">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="uName" class="col-sm-5 col-form-label" style="font-size:15px;">NAME</label>
                                        <div class="col-sm-7">
                                        <input style="font-size:15px;" type="text" readonly class="form-control-plaintext" id="uName" value=": NUR MAISARAH BINTI JAILANI">
                                        </div>
                                    </div>

                                    <div class="header-form">
                                        <h4>COMPLAINT DETAILS</h4>
                                    </div>

                                    <div class="form-group row">
                                        <label for="complaintType" class="col-sm-5 col-form-label" style="font-size:15px;">COMPLAINT TYPE</label>
                                        <div class="col-sm-7">
                                        <input style="font-size:15px;" type="text" readonly class="form-control-plaintext" id="complaintType" value=": UNSATISFIED EXPERT'S FEEDBACK">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="cDate" class="col-sm-5 col-form-label" style="font-size:15px;">DATE</label>
                                        <div class="col-sm-7">
                                        <input style="font-size:15px;" type="text" readonly class="form-control-plaintext" id="cDate" value=": 10 JANUARY 2023">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="cTime" class="col-sm-5 col-form-label" style="font-size:15px;">TIME</label>
                                        <div class="col-sm-7">
                                        <input style="font-size:15px;" type="text" readonly class="form-control-plaintext" id="cTime" value=": 10:23 PM">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="cDesc" class="col-sm-5 col-form-label" style="font-size:15px;">DESCRIPTION</label>
                                        <div class="col-sm-7">
                                        <input style="font-size:15px;" type="text" readonly class="form-control-plaintext" id="cDesc" value=": THE EXPERTS .....">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="cStatus" class="col-sm-5 col-form-label" style="font-size:15px;">STATUS</label>
                                        <div class="col-sm-7">
                                        <input style="font-size:15px;" type="text" readonly class="form-control-plaintext" id="cStatus" value=": RESOLVED">
                                        </div>
                                    </div>

                                    <div class="mb-3"><br>
											<button type="cancel" class="btn" style=" color: white; position: absolute; right:50%; background-color: #1D2F3A; font-weight: 400; border-radius: 7px; width: 80px;">Cancel</button>
									</div>
                                    
                                    
										<br><br><br>
									</div>

								</form>
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