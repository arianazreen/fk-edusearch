<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Create Complaint</title>

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
	<div class="wrapper">
		<!-- CONTENT -->
		<div class="main">
			<nav class="navbar navbar-expand navbar-theme">

				<div class="container-fluid">
					<a class="navbar-brand" href=#>FK-EDUSEARCH</a>&nbsp;
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link " aria-current="page" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">My Question</a>
							</li>
							<li class="nav-item dropdown ms-lg-2">
								<a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-bs-toggle="dropdown">Complain</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
									<a class="dropdown-item"></a>
									<a class="dropdown-item" href="../Module5/create.php">New Application</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">History</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Report</a>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item dropdown ms-lg-2">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<i class="align-middle fas fa-bell"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="ms-1 text-success fas fa-fw fa-bell-slash"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Anna accepted your request.</div>
												<div class="text-muted small mt-1">12h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown ms-lg-2">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-bs-toggle="dropdown">
								<i class="align-middle fas fa-cog"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
								<a class="dropdown-item"></a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="/Profile"><i class="align-middle me-1 fas fa-fw fa-user"></i> My Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-cogs"></i> Account Setting</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="logout"><i class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<main class="content">
				<div class="container-fluid">
					<div class="header">
						<h1 class="header-title">
							Complaint Application
						</h1>
					</div>
					<div class="col-md-10" style="float:none;margin:auto;">
						<div class="card">

							<br>
							<h2 style="float:none;margin:auto;">We are Here to Help You!</h2>

							<div class="card-header" style="float:none;margin:auto;">
								<h6 class="card-subtitle">
									<span>Fields marked with</span><span style="color: red;"> (*) </span><span>are mandatory</span>
							</div>
							<div class="card-body">
								<form method="POST" action="../Module5/main.php" onsubmit="alert('The Form has been Submitted.')">
									<div class="row">
										<div class="mb-3 col-md-12">
											<label for="complain">Complaint Type</label>
											<select class="form-select" name="complaintType" value="complaintType" aria-label="Default select example">
												<option hidden="">Please Select</option>
												<option value="Unsatisfied Expert’s Feedback">Unsatisfied Expert’s Feedbackd</option>
												<option value="Unanswered Question">Unanswered Questioned</option>
												<option value="Wrongly Assigned Research Area">Wrongly Assigned Research Area</option>
											</select>
										</div>
										<div class="mb-3 col-md-6">
											<label for="DateComplaint">Date Complaint</label>
											<input type="date" class="form-control" name="complaintDate" id="complaintDate">
										</div>
										<div class="mb-3 col-md-6">
											<label for="TimeComplaint">Time Complaint</label>
											<input type="time" class="form-control" name="complaintTime" id="complaintTime">
										</div>
										<div class="mb-3 col-md-12">
											<label for="complain">Choose Post</label>
											<select class="form-select" name="postID" value="postID" aria-label="Default select example">
												<option hidden="">Please Select</option>
												<option value="Energy-efficient computer systems">Energy-efficient computer systemsd</option>
												<option value="Machine learning and artificial intelligence in computer systems">Machine learning and artificial intelligence in computer systemsed</option>
												<option value="Virtualization and containerization">Virtualization and containerization</option>
											</select>
										</div>
										<div class="mb-3">
											<label>Complaint Description</label>
											<textarea class="form-control" id="complaintDesc" name="complaintDesc" rows="3"></textarea>
										</div> 
										<div class="mb-3"><br>
											<button type="submit" class="btn" style=" color: white; position: absolute; right:55%; background-color: #07A492; font-weight: 400;">SUBMIT</button>
											<button type="cancel" class="btn" style=" color: white; position: absolute; right:45%; background-color: #ADDCD7; font-weight: 400;">CANCEL</button>
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
				<path d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
				</path>
			</symbol>
		</defs>
	</svg>
	<script src="../../dist/js/app.js"></script>

</body>

</html>