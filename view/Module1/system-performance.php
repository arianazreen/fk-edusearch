<?php
	include_once('../Module1/session-check-admin.php');
?>

<?php
	include ("database.php");

	// USABILITY
	$usaVGood = mysqli_query($conn, "SELECT usability FROM systemperformance WHERE usability = 'Very Good'");
	$usaGood = mysqli_query($conn, "SELECT usability FROM systemperformance WHERE usability = 'Good'");
	$usaAvg = mysqli_query($conn, "SELECT usability FROM systemperformance WHERE usability = 'Average'");
	$usaBad = mysqli_query($conn, "SELECT usability FROM systemperformance WHERE usability = 'Bad'");
	$usaVBad = mysqli_query($conn, "SELECT usability FROM systemperformance WHERE usability = 'Very Bad'");

	// NAVIGATION
	$navVGood = mysqli_query($conn, "SELECT navigation FROM systemperformance WHERE navigation = 'Very Good'");
	$navGood = mysqli_query($conn, "SELECT navigation FROM systemperformance WHERE navigation = 'Good'");
	$navAvg = mysqli_query($conn, "SELECT navigation FROM systemperformance WHERE navigation = 'Average'");
	$navBad = mysqli_query($conn, "SELECT navigation FROM systemperformance WHERE navigation = 'Bad'");
	$navVBad = mysqli_query($conn, "SELECT navigation FROM systemperformance WHERE navigation = 'Very Bad'");

	// SECURITY
	$secVGood = mysqli_query($conn, "SELECT security FROM systemperformance WHERE security = 'Very Good'");
	$secGood = mysqli_query($conn, "SELECT security FROM systemperformance WHERE security = 'Good'");
	$secAvg = mysqli_query($conn, "SELECT security FROM systemperformance WHERE security = 'Average'");
	$secBad = mysqli_query($conn, "SELECT security FROM systemperformance WHERE security = 'Bad'");
	$secVBad = mysqli_query($conn, "SELECT security FROM systemperformance WHERE security = 'Very Bad'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>System Performance</title>
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
							System Performance Report
						</h1>
					</div>
					<div class="row">
						<!-- PIE CHART -->
						<div class="col-12 col-lg-4">
							<div class="card" style="height: 265px;">
								<div class="card-header">
									<h5 class="card-title" style="font-size: 1.4em; border-bottom: 1px solid lightgray; padding: 5px;">Usability</h5>
									<h6 class="card-subtitle text-muted"></h6>
								</div>
								<div class="card-body">
									<div class="chart chart-xs">
										<canvas id="chartjs-pie-usability" style="max-width: 150px; margin: auto; position: relative; bottom: 40px;"></canvas>
									</div>
									<p style="position: relative; bottom: 55px;">
										72% vs last month
										<span class="text-success"><i class="mdi mdi-arrow-bottom-right"></i> +2% </span>
									</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="card" style="height: 265px;">
								<div class="card-header">
									<h5 class="card-title" style="font-size: 1.4em; border-bottom: 1px solid lightgray; padding: 5px;">Navigation</h5>
									<h6 class="card-subtitle text-muted"></h6>
								</div>
								<div class="card-body">
									<div class="chart chart-xs">
										<canvas id="chartjs-pie-navigation" style="max-width: 150px; margin: auto; position: relative; bottom: 40px;"></canvas>
									</div>
									<p style="position: relative; bottom: 50px;">
										83% vs last month
										<span class="text-success"><i class="mdi mdi-arrow-bottom-right"></i> +4% </span>
									</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="card" style="height: 265px;">
								<div class="card-header">
									<h5 class="card-title" style="font-size: 1.4em; border-bottom: 1px solid lightgray; padding: 5px;">Security</h5>
									<h6 class="card-subtitle text-muted"></h6>
								</div>
								<div class="card-body">
									<div class="chart chart-xs">
										<canvas id="chartjs-pie-security" style="max-width: 150px; margin: auto; position: relative; bottom: 40px;"></canvas>
									</div>
									<p style="position: relative; bottom: 55px;">
										75% vs last month
										<span class="text-danger"><i class="mdi mdi-arrow-bottom-right"></i> -1.7% </span>
									</p>
								</div>
							</div>
						</div>
						<!-- end pie chart -->
						
						<!-- SYSTEM VULNERABILITY TABLE -->
						<div class="col-12 col-lg-8 col-xxl-7 d-flex">
							<div class="card flex-fill" style="padding: 30px 20px 10px;">
							<table id="datatables-basic" class="table table-striped">
									<thead>
										<tr>
											<th>Date</th>
											<th>Category</th>
											<th>Description</th>
											<th style="text-align: center;">Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php
											include ("database.php");

											$query = "SELECT generaluser.id, generaluser.userID, generaluser.userName, 
															systemvulnerability.id, systemvulnerability.svID, systemvulnerability.vulDate, systemvulnerability.vulTime, systemvulnerability.vulCategory, systemvulnerability.vulDescription
													FROM generaluser 
													INNER JOIN systemvulnerability ON generaluser.userID = systemvulnerability.userID";

											$result = mysqli_query($conn,$query);

											while ($row = mysqli_fetch_array($result)) {
												$id = $row["id"];
												$userID = $row["userID"];
												$userName = $row["userName"];
												$svID = $row["svID"];
												$vulDate = $row["vulDate"];
												$vulTime = $row["vulTime"];
												$vulCategory = $row["vulCategory"];
												$vulDescription = $row["vulDescription"];
										?>

										<tr>
											<td style="width: 100px;"><?php echo $vulDate; ?></td>
											<td><?php echo $vulCategory; ?></td>
											<td><?php echo $vulDescription; ?></td>
											<!-- ACTIONS -->
											<td class="table-action" style="margin: auto; width: 70px; text-align: center;">
												<?php echo "<a href='view-vulnerability.php? user=$userID'>
													<i class='align-middle fas fa-fw fa-eye' style='color: black;'></i></a>" 
												?>
											</td>
										</tr>
											<?php
												}
											?>
									</tbody>
								</table>
							</div>
						</div>
						<!-- end performance table -->

						<!-- BAR CHART -->
						<div class="col-12 col-lg-5">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title" style="font-size: 1.4em;">This year</h5>
									<h6 class="card-subtitle text-muted">System Performance for the 1st half of the year.</h6>
								</div>
								<div class="card-body">
									<div class="chart">
										<div id="apexcharts-column"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- end bar chart -->

					</div>
					<!-- end row -->
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

	<!-- PIE CHART -->
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			new Chart(document.getElementById("chartjs-pie-usability"), {
				type: "pie",
				data: {
					labels: ["Very Good", "Good", "Average", "Bad", "Very Bad"],
					datasets: [{
						data: [
							<?php echo mysqli_num_rows($usaVGood); ?>, 
							<?php echo mysqli_num_rows($usaGood); ?>,
							<?php echo mysqli_num_rows($usaAvg); ?>,
							<?php echo mysqli_num_rows($usaBad); ?>,
							<?php echo mysqli_num_rows($usaVBad); ?>
							],
						backgroundColor: [
							window.theme.success,
							"#50c878",
							"#ffe135",
							"#ff8c00",
							"#dc143c",
							"#E8EAED"
						],
						borderColor: "transparent"
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			new Chart(document.getElementById("chartjs-pie-navigation"), {
				type: "pie",
				data: {
					labels: ["Very Good", "Good", "Average", "Bad", "Very Bad"],
					datasets: [{
						data: [
							<?php echo mysqli_num_rows($navVGood); ?>, 
							<?php echo mysqli_num_rows($navGood); ?>,
							<?php echo mysqli_num_rows($navAvg); ?>,
							<?php echo mysqli_num_rows($navBad); ?>,
							<?php echo mysqli_num_rows($navVBad); ?>
							],
						backgroundColor: [
							window.theme.success,
							"#50c878",
							"#ffe135",
							"#ff8c00",
							"#dc143c",
							"#E8EAED"
						],
						borderColor: "transparent"
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			new Chart(document.getElementById("chartjs-pie-security"), {
				type: "pie",
				data: {
					labels: ["Very Good", "Good", "Average", "Bad", "Very Bad"],
					datasets: [{
						data: [
							<?php echo mysqli_num_rows($secVGood); ?>, 
							<?php echo mysqli_num_rows($secGood); ?>,
							<?php echo mysqli_num_rows($secAvg); ?>,
							<?php echo mysqli_num_rows($secBad); ?>,
							<?php echo mysqli_num_rows($secVBad); ?>
							],
						backgroundColor: [
							window.theme.success,
							"#50c878",
							"#ffe135",
							"#ff8c00",
							"#dc143c",
							"#E8EAED"
						],
						borderColor: "transparent"
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					}
				}
			});
		});
	</script>

	<!-- COLUMN CHART -->
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var options = {
				chart: {
					height: 350,
					type: "bar",
				},
				plotOptions: {
					bar: {
						horizontal: false,
						endingShape: "rounded",
						columnWidth: "55%",
					},
				},
				dataLabels: {
					enabled: false
				},
				stroke: {
					show: true,
					width: 2,
					colors: ["transparent"]
				},
				series: [{
					name: "Usability",
					data: [44, 55, 57, 56, 61, 58]
				}, {
					name: "Navigation",
					data: [76, 85, 101, 98, 87, 105]
				}, {
					name: "Security",
					data: [35, 41, 36, 26, 45, 48]
				}],
				xaxis: {
					categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
				},
				yaxis: {
					title: {
						text: ""
					}
				},
				fill: {
					opacity: 1
				},
				tooltip: {
					y: {
						formatter: function(val) {
							return val + " satisfied"
						}
					}
				}
			}
			var chart = new ApexCharts(
				document.querySelector("#apexcharts-column"),
				options
			);
			chart.render();
		});
	</script>

</body>

</html>