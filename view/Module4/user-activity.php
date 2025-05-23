<?php
include_once("../Module1/session-check-admin.php");
?>

<?php
include("../Module1/database.php");

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
	<link href="../../dist/css/modern-admin.css" rel="stylesheet">


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
		<?php
		include_once('../Module1/navbar.php');
		?>

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
						<h1 class="header-title" style="color:black;">
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
											<h5 class="card-title" style="font-size: 20px;">Posts</h5>
											<div class="card-divider"></div>
										</div>
									</div>

									<?php
									//Display Total Post for Current Month
									$sql = "SELECT Count(postTitle) AS posts FROM post WHERE MONTH(postDate) = MONTH(CURRENT_DATE)";
									$result = mysqli_query($conn, $sql);
									$row = mysqli_fetch_assoc($result);

									$currentMonthPosts = $row['posts'];
									?>

									<h1 class="display-5 mt-1 mb-3" style="font-weight: 400;"><?php echo $currentMonthPosts; ?></h1>
									<div class="mb-0">

										<?php

										//Display Total Post for Prev Month

										$sql = "SELECT Count(postTitle) AS prevPost FROM post 
                                                WHERE MONTH(postDate) = MONTH(DATE_SUB(CURRENT_DATE, INTERVAL 1 MONTH))
                                                AND YEAR(postDate) = YEAR(DATE_SUB(CURRENT_DATE, INTERVAL 1 MONTH))";
										$result = mysqli_query($conn, $sql);
										$row = mysqli_fetch_assoc($result);

										$prevMonthPosts = $row['prevPost'];

										//Calculate Retention Rate for Posts

										$retentionRatePosts = $currentMonthPosts / $prevMonthPosts * 100;

										//Change the color of percentage

										if ($prevMonthPosts > $retentionRatePosts) {

										?>

											<span class="text-danger">
												<i class="mdi mdi-arrow-bottom-right"></i>
												<?php echo sprintf('%2d%%', $retentionRatePosts) ?>
											</span>

										<?php } else { ?>

											<span class="text-success">
												<i class="mdi mdi-arrow-bottom-right"></i>
												<?php echo sprintf('%2d%%', $retentionRatePosts) ?>
											</span>

										<?php }
										?>
										than last month <?php echo $prevMonthPosts; ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 col-xl">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title" style="font-size: 20px;">Comments</h5>
											<div class="card-divider"></div>
										</div>
									</div>

									<?php
									//Display Total Comment for Current Month
									$sql = "SELECT SUM(postComments) AS comment FROM post WHERE MONTH(postDate) = MONTH(CURRENT_DATE)";
									$result = mysqli_query($conn, $sql);
									$row = mysqli_fetch_assoc($result);

									$currentMonthComments = $row['comment'];
									?>

									<h1 class="display-5 mt-1 mb-3" style="font-weight: 400;"><?php echo $currentMonthComments; ?></h1>
									<div class="mb-0">

										<?php

										//Display Total Comment for Prev Month
										$sql = "SELECT SUM(postComments) AS prevComment FROM post 
                                                WHERE MONTH(postDate) = MONTH(DATE_SUB(CURRENT_DATE, INTERVAL 1 MONTH))
                                                AND YEAR(postDate) = YEAR(DATE_SUB(CURRENT_DATE, INTERVAL 1 MONTH))";
										$result = mysqli_query($conn, $sql);
										$row = mysqli_fetch_assoc($result);

										$prevMonthComments = $row['prevComment'];

										//Calculate Retention Rate for Comments
										$retentionRateComments = $currentMonthComments / $prevMonthComments * 100;

										//Change the color of percentage
										if ($prevMonthComments > $currentMonthComments) {

										?>

											<span class="text-danger">
												<i class="mdi mdi-arrow-bottom-right"></i>
												<?php echo sprintf('%2d%%', $retentionRateComments) ?>
											</span>

										<?php } else { ?>

											<span class="text-success">
												<i class="mdi mdi-arrow-bottom-right"></i>
												<?php echo sprintf('%2d%%', $retentionRateComments) ?>
											</span>

										<?php }
										?>
										than last month <?php echo $prevMonthComments; ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 col-xl">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title" style="font-size: 20px;">Likes</h5>
											<div class="card-divider"></div>
										</div>
									</div>
									<?php
									//Display Total Likes for Current Month
									$sql = "SELECT SUM(postLikes) AS likes FROM post WHERE MONTH(postDate) = MONTH(CURRENT_DATE)";
									$result = mysqli_query($conn, $sql);
									$row = mysqli_fetch_assoc($result);

									$currentMonthLikes = $row['likes'];
									?>

									<h1 class="display-5 mt-1 mb-3" style="font-weight: 400;"><?php echo $currentMonthLikes; ?></h1>
									<div class="mb-0">

										<?php
										//Display Total Likes for Prev Month
										$sql = "SELECT SUM(postLikes) AS prevLikes FROM post 
                                                WHERE MONTH(postDate) = MONTH(DATE_SUB(CURRENT_DATE, INTERVAL 1 MONTH))
                                                AND YEAR(postDate) = YEAR(DATE_SUB(CURRENT_DATE, INTERVAL 1 MONTH))";
										$result = mysqli_query($conn, $sql);
										$row = mysqli_fetch_assoc($result);

										$prevMonthLikes = $row['prevLikes'];

										//Calculate Retention Rate for Likes
										$retentionRateLikes = $currentMonthLikes / $prevMonthLikes * 100;

										//Change the color of percentage
										if ($prevMonthLikes > $currentMonthLikes) {

										?>

											<span class="text-danger">
												<i class="mdi mdi-arrow-bottom-right"></i>
												<?php echo sprintf('%2d%%', $retentionRateLikes) ?>
											</span>

										<?php } else { ?>

											<span class="text-sucess">
												<i class="mdi mdi-arrow-bottom-right"></i>
												<?php echo sprintf('%2d%%', $retentionRateLikes) ?>
											</span>

										<?php }
										?>
										than last month <?php echo $prevMonthLikes; ?>
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
									<h5 class="card-title" style="font-size: 20px;">Total Report </h5>

									<div style="display: flex; justify-content: flex-end;">
										<label for="time-filter">Filter:</label> &nbsp;

										<select id="time-filter" onchange="updateChart()">
											<option value="day">Day</option>
											<option value="week">Week</option>
											<option value="month">Month</option>
										</select>
									</div>

									<div style="display: flex; justify-content: center;">
										<div>
											<i class="fas fa-square fa-fw" style="color: #32434d;"></i> Posts &nbsp;
										</div>
										<div>
											<i class="fas fa-square fa-fw" style="color: #00827f;"></i> Comments &nbsp;
										</div>
										<div>
											<i class="fas fa-square fa-fw" style="color: #436b95;"></i> Likes &nbsp;
										</div>
									</div>

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

									<h5 class="card-title mb-0" style="font-size: 20px;">Total User</h5>

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
													<td><i class="fas fa-circle fa-fw" style="color: #051925;"></i> Software Engineering</td>
													<td class="text-end"><?php echo mysqli_num_rows($totalBCS); ?></td>
												</tr>
												<tr>
													<td><i class="fas fa-circle fa-fw" style="color: #25506b;"></i> Network & Security</td>
													<td class="text-end"><?php echo mysqli_num_rows($totalBCN); ?></td>
												</tr>
												<tr>
													<td><i class="fas fa-circle fa-fw" style="color: #bcbcbc;"></i> Graphic & Multimedia</td>
													<td class="text-end"><?php echo mysqli_num_rows($totalBCG); ?></td>
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
				<path d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
				</path>
			</symbol>
		</defs>
	</svg>
	<script src="../../dist/js/app.js"></script>

	<!-- Js Line Chart -->
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Initialize the chart
			var chart = new Chart(document.getElementById('chartjs-line'), {
				type: "line",
				data: {
					labels: [],
					datasets: [{
						label: "Posts",
						fill: true,
						backgroundColor: "transparent",
						borderColor: "#32434d",
						data: []
					}, {
						label: "Comments",
						fill: true,
						backgroundColor: "transparent",
						borderColor: "#00827f",
						data: [56, 98, 67, 156, 276, 47, 69]
					}, {
						label: "Likes",
						fill: true,
						backgroundColor: "transparent",
						borderColor: "#436b95",
						data: [34, 76, 45, 21, 145, 178, 250, 98, 62, 109,
							44, 32, 82, 198, 300, 43, 23, 77, 123, 76
						]
					}]
				},
				options: {
					responsive: true,
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

			// Populate initial chart data
			populateChart();

			// Populate filters
			populateFilters();
		});

		function populateChart() {
			var timeFilter = document.getElementById('time-filter').value;
			var currentDate = new Date();
			var labels = [];
			var data = [];

			if (timeFilter === 'day') {
				// Filter data by day
				var currentDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate());
				var dayOfWeek = currentDay.getDay();

				if (dayOfWeek >= 1 && dayOfWeek <= 7) {
					labels = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
					data = [123, 67, 45, 12, 87, 99, 35]; // Replace with actual data for each day
				}
			} else if (timeFilter === 'week') {
				// Filter data by week
				var firstDayOfWeek = getFirstDayOfWeek(currentDate);
				var lastDayOfWeek = getLastDayOfWeek(currentDate);

				var currentDatePointer = new Date(firstDayOfWeek);
				while (currentDatePointer <= lastDayOfWeek) {
					labels.push(getFormattedDate(currentDatePointer));
					data.push(getDataForDay(currentDatePointer)); // Modify this logic to retrieve data for each day

					currentDatePointer.setDate(currentDatePointer.getDate() + 1);
				}
			} else if (timeFilter === 'month') {
				// Filter data by month
				var firstDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
				var lastDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);

				var currentDatePointer = new Date(firstDayOfMonth);
				while (currentDatePointer <= lastDayOfMonth) {
					labels.push(getFormattedDate(currentDatePointer));
					data.push(getDataForDay(currentDatePointer)); // Modify this logic to retrieve data for each day

					currentDatePointer.setDate(currentDatePointer.getDate() + 1);
				}
			}

			var chart = Chart.instances[0];
			chart.data.labels = labels;
			chart.data.datasets[0].data = data;
			chart.update();
		}

		function getFirstDayOfWeek(date) {
			var day = date.getDay();
			var diff = date.getDate() - day + (day === 0 ? -6 : 1);
			return new Date(date.getFullYear(), date.getMonth(), diff);
		}

		function getLastDayOfWeek(date) {
			var firstDayOfWeek = getFirstDayOfWeek(date);
			var lastDayOfWeek = new Date(firstDayOfWeek);
			lastDayOfWeek.setDate(lastDayOfWeek.getDate() + 6);
			return lastDayOfWeek;
		}

		function getFormattedDate(date) {
			var year = date.getFullYear();
			var month = String(date.getMonth() + 1).padStart(2, '0');
			var day = String(date.getDate()).padStart(2, '0');
			return `${year}-${month}-${day}`;
		}

		function getDataForDay(date) {

			var dailyData = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120];
			var dayOfMonth = date.getDate();
			var dataValue = dailyData[dayOfMonth - 1]; // Subtract 1 since array index is 0-based

			return dataValue;
		}

		function populateFilters() {
			var timeFilterSelect = document.getElementById('time-filter');
			timeFilterSelect.addEventListener('change', updateChart);
		}

		function updateChart() {
			populateChart();
		}
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
						data: [<?php echo mysqli_num_rows($totalBCS); ?>,
							<?php echo mysqli_num_rows($totalBCN); ?>,
							<?php echo mysqli_num_rows($totalBCG); ?>
						],
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

</body>

</html>