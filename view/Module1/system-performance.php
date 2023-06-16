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
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">This month</h5>
									<h6 class="card-subtitle text-muted">Pie charts are an instrumental visualization tool useful in expressing data and
										information in terms of percentages, ratio.</h6>
								</div>
								<div class="card-body text-center">
									<div class="chart">
										<div id="apexcharts-pie" style="max-width: 440px;margin:auto;"></div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- BAR CHART -->
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">This year</h5>
									<h6 class="card-subtitle text-muted">A column chart uses vertical bars to display data and is used to compare values across
										categories.</h6>
								</div>
								<div class="card-body">
									<div class="chart">
										<div id="apexcharts-column"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-8 col-xxl-9 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<div class="card-actions float-end">
										<a href="#" class="me-1">
											<i class="align-middle" data-feather="refresh-cw"></i>
										</a>
										<div class="d-inline-block dropdown show">
											<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
												<i class="align-middle" data-feather="more-vertical"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Latest Projects</h5>
								</div>
								<table id="datatables-dashboard-projects" class="table table-striped my-0">
									<thead>
										<tr>
											<th>Name</th>
											<th class="d-none d-xl-table-cell">Start Date</th>
											<th class="d-none d-xl-table-cell">End Date</th>
											<th>Status</th>
											<th class="d-none d-md-table-cell">Assignee</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Project Apollo</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-success">Done</span></td>
											<td class="d-none d-md-table-cell">Carl Jenkins</td>
										</tr>
										<tr>
											<td>Project Fireball</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-danger">Cancelled</span></td>
											<td class="d-none d-md-table-cell">Bertha Martin</td>
										</tr>
										<tr>
											<td>Project Hades</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-success">Done</span></td>
											<td class="d-none d-md-table-cell">Stacie Hall</td>
										</tr>
										<tr>
											<td>Project Nitro</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-warning">In progress</span></td>
											<td class="d-none d-md-table-cell">Carl Jenkins</td>
										</tr>
										<tr>
											<td>Project Phoenix</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-success">Done</span></td>
											<td class="d-none d-md-table-cell">Bertha Martin</td>
										</tr>
										<tr>
											<td>Project X</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-success">Done</span></td>
											<td class="d-none d-md-table-cell">Stacie Hall</td>
										</tr>
										<tr>
											<td>Project Romeo</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-success">Done</span></td>
											<td class="d-none d-md-table-cell">Ashley Briggs</td>
										</tr>
										<tr>
											<td>Project Wombat</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-warning">In progress</span></td>
											<td class="d-none d-md-table-cell">Bertha Martin</td>
										</tr>
										<tr>
											<td>Project Zircon</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-danger">Cancelled</span></td>
											<td class="d-none d-md-table-cell">Stacie Hall</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="col-12 col-md-12 col-xxl-4 d-flex">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<div class="card-actions float-end">
										<a href="#" class="me-1">
											<i class="align-middle" data-feather="refresh-cw"></i>
										</a>
										<div class="d-inline-block dropdown show">
											<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
												<i class="align-middle" data-feather="more-vertical"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Languages</h5>
								</div>
								<table class="table table-striped my-0">
									<thead>
										<tr>
											<th>Language</th>
											<th class="text-end">Users</th>
											<th class="d-none d-xl-table-cell w-75">% Users</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>en-us</td>
											<td class="text-end">735</td>
											<td class="d-none d-xl-table-cell">
												<div class="progress">
													<div class="progress-bar bg-primary-dark" role="progressbar" style="width: 43%;" aria-valuenow="43"
														aria-valuemin="0" aria-valuemax="100">43%</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>en-gb</td>
											<td class="text-end">223</td>
											<td class="d-none d-xl-table-cell">
												<div class="progress">
													<div class="progress-bar bg-primary-dark" role="progressbar" style="width: 27%;" aria-valuenow="27"
														aria-valuemin="0" aria-valuemax="100">27%</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>fr-fr</td>
											<td class="text-end">181</td>
											<td class="d-none d-xl-table-cell">
												<div class="progress">
													<div class="progress-bar bg-primary-dark" role="progressbar" style="width: 22%;" aria-valuenow="22"
														aria-valuemin="0" aria-valuemax="100">22%</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>es-es</td>
											<td class="text-end">132</td>
											<td class="d-none d-xl-table-cell">
												<div class="progress">
													<div class="progress-bar bg-primary-dark" role="progressbar" style="width: 16%;" aria-valuenow="16"
														aria-valuemin="0" aria-valuemax="100">16%</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>de-de</td>
											<td class="text-end">118</td>
											<td class="d-none d-xl-table-cell">
												<div class="progress">
													<div class="progress-bar bg-primary-dark" role="progressbar" style="width: 15%;" aria-valuenow="15"
														aria-valuemin="0" aria-valuemax="100">15%</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>ru-ru</td>
											<td class="text-end">98</td>
											<td class="d-none d-xl-table-cell">
												<div class="progress">
													<div class="progress-bar bg-primary-dark" role="progressbar" style="width: 13%;" aria-valuenow="13"
														aria-valuemin="0" aria-valuemax="100">13%</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
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

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			var options = {
				chart: {
					height: 350,
					type: "donut",
				},
				dataLabels: {
					enabled: false
				},
				series: [44, 55, 13, 33]
			}
			var chart = new ApexCharts(
				document.querySelector("#apexcharts-pie"),
				options
			);
			chart.render();
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			var options = {
				chart: {
					height: 350,
					type: "bar",
					stacked: true,
				},
				plotOptions: {
					bar: {
						horizontal: true,
					},
				},
				stroke: {
					width: 1,
					colors: ["#fff"]
				},
				series: [{
					name: "Yes",
					data: [44, 55, 41, 37, 22, 43, 21]
				}, {
					name: "Maybe",
					data: [53, 32, 33, 52, 13, 43, 32]
				}, {
					name: "No",
					data: [12, 17, 11, 9, 15, 11, 20]
				}],
				xaxis: {
					categories: [
						"User-friendly", 2008, 2009, 2010, 2011, 2012, 2013, 2014
					],
					labels: {
						formatter: function(val) {
							return val + "K"
						}
					}
				},
				yaxis: {
					title: {
						text: undefined
					},
				},
				tooltip: {
					y: {
						formatter: function(val) {
							return val + "K"
						}
					}
				},
				fill: {
					opacity: 1
				},
				legend: {
					position: "top",
					horizontalAlign: "left",
					offsetX: 40
				}
			}
			var chart = new ApexCharts(
				document.querySelector("#apexcharts-bar"),
				options
			);
			chart.render();
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Column chart
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
					name: "Net Profit",
					data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
				}, {
					name: "Revenue",
					data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
				}, {
					name: "Free Cash Flow",
					data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
				}],
				xaxis: {
					categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
				},
				yaxis: {
					title: {
						text: "$ (thousands)"
					}
				},
				fill: {
					opacity: 1
				},
				tooltip: {
					y: {
						formatter: function(val) {
							return "$ " + val + " thousands"
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