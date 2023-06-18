<?php
	include_once ("../Module1/session-check-admin.php");
?>

<?php
	include ("../Module1/database.php");

	$totalBCS = mysqli_query($conn, "SELECT * FROM generaluser WHERE userCourse = 'BCS'"); 
									 
	$totalBCN = mysqli_query($conn, "SELECT * FROM generaluser WHERE userCourse = 'BCN'"); 
									
	$totalBCG = mysqli_query($conn, "SELECT * FROM generaluser WHERE userCourse = 'BCG'"); 
									

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>User Activity</title>
	<link rel="stylesheet" href="../../dist/css/style.css">
	
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

					<div class="header">
						<h1 class="header-title">
							User Activity
						</h1>
					</div>

					<!--Card Layout-->

					<div class="row">
						<div class="col-md-6 col-lg-3 col-xl">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Posts</h5>
											<div class="card-divider"></div>
										</div>
									</div>

									<?php
                                    $sql = "SELECT COUNT(postTitle) AS posts FROM post";
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>

									<h1 class="display-5 mt-1 mb-3"><?php echo $row['posts']; ?></h1>
									<div class="mb-0">
									<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> +15% </span>
										than last month 10,235
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 col-xl">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Comments</h5>
											<div class="card-divider"></div>
										</div>
									</div>

									<?php
                                    $sql = "SELECT SUM(postComments) AS comment FROM post";
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>

									<h1 class="display-5 mt-1 mb-3"><?php echo $row['comment']; ?></h1>
									<div class="mb-0">
										<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> +10% </span>
										than last month 32,000
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 col-xl">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Likes</h5>
											<div class="card-divider"></div>
										</div>
									</div>

									<?php
                                    $sql = "SELECT SUM(postLikes) AS likes FROM post";
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>

									<h1 class="display-5 mt-1 mb-3"><?php echo $row['likes']; ?></h1>
									<div class="mb-0">
										<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2% </span>
										than last month 6,790
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Chart -->
					<div class="row">
						<div class="col-12 col-lg-8">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<h5 class="card-title">Total Report </h5>
									<!--<h6 class="card-subtitle text-muted">A line chart is a way of plotting data points on a line.</h6>-->
								</div>
								<div class="card-body">
									<div class="chart">
										<canvas id="chartjs-line"></canvas>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-4">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Total User</h5>

								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="py-3">
											<div class="chart chart-xs">
												<canvas id="chartjs-dashboard-pie"></canvas>
											</div>
										</div>

										<table class="table mb-0">
											<tbody>
												<tr>
													<td><i class="fas fa-circle text-primary fa-fw"></i> Software Engineering</td>
													<td class="text-end"><?php echo mysqli_num_rows($totalBCS);?></td>
												</tr>
												<tr>
													<td><i class="fas fa-circle text-warning fa-fw"></i> Network & Security</td>
													<td class="text-end"><?php echo mysqli_num_rows($totalBCN);?></td>
												</tr>
												<tr>
													<td><i class="fas fa-circle text-info fa-fw"></i> Graphic & Multimedia</td>
													<td class="text-end"><?php echo mysqli_num_rows($totalBCG);?></td>
												</tr>
											</tbody>
										</table>
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

	<!-- Js Line Chart -->
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Line chart
			new Chart(document.getElementById("chartjs-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: "transparent",
						borderColor: window.theme.primary,
						data: [2115, 1562, 1584, 1892, 1487, 2223, 2966, 2448, 2905, 3838, 2917, 3327]
					}, {
						label: "Orders",
						fill: true,
						backgroundColor: "transparent",
						borderColor: window.theme.tertiary,
						borderDash: [4, 4],
						data: [958, 724, 629, 883, 915, 1214, 1476, 1212, 1554, 2128, 1466, 1827]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.05)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 500
							},
							display: true,
							borderDash: [5, 5],
							gridLines: {
								color: "rgba(0,0,0,0)",
								fontColor: "#fff"
							}
						}]
					}
				}
			});
		});
	</script>

	<!-- Js Pie Chart -->
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: 'pie',
				data: {
					labels: ["Software Engineering", "Network & Security", "Graphic & Multimedia"],
					datasets: [{
						data: [<?php echo mysqli_num_rows($totalBCS);?>, 
							   <?php echo mysqli_num_rows($totalBCN);?>,
							   <?php echo mysqli_num_rows($totalBCG);?>],
						backgroundColor: [
							"#051925",
							"#25506b",
							"#bcbcbc"
						],
						borderColor: "transparent"
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>

	<!-- Js Active Sidebar Nav 
	<script>

		var nav = document.getElementById("sidebar");
		var sidebar = nav.getElementByClassName("sidebar-link");

		for(var i=0; i < sidebar.length; i++)
		{
			sidebar[i].addEventListener("click", function()
			{
				var current = document.getElementByClassName("active");
				current[0].className = current[0].className.replace(" active", "");
  				this.className += " active"; 
			});
		}

	</script>-->

</body>

</html>