<!-- declaration database -->
<?php
require('../Module1/database.php');

?>

<?php
//check session
include_once('../Module1/session-check-genUser.php');
$id = $_SESSION['username'];
$sql2 = "SELECT * FROM post WHERE userID = '$id'";
$result2 = mysqli_query($conn, $sql2) or die("Could not execute query in view"); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Create Complaint</title>

	<link href="../../dist/css/modernModule5.css" rel="stylesheet">

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
			<?php
			include_once('navbarUser.php');
			?>
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
								<form method="post" action="testing.php">
									<div class="row">
										<div class="mb-3 col-md-12">
											<label for="complain">Choose Post Title</label>
											<select class="form-select" name="postID" value="postID" aria-label="Default select example">
												<option hidden="">Please Select</option>
												<?php while ($row = mysqli_fetch_assoc($result2)){ ?>
													<option value="<?php echo $row['postID']; ?>"><?php echo $row['postTitle']; ?></option>
												<?php } ?>
											</select>
										</div>
										<div class="mb-3 col-md-12">
											<label for="complain">Complaint Type</label>
											<select class="form-select" name="complaintType" value="complaintType" aria-label="Default select example">
												<option hidden>Please Select</option>
												<option value="Unsatisfied Expert’s Feedback">Unsatisfied Expert’s Feedback</option>
												<option value="Unanswered Question">Unanswered Question</option>
												<option value="Wrongly Assigned Research Area">Wrongly Assigned Research Area</option>
											</select>
										</div>
										
										<div class="mb-3">
											<label>Complaint Description</label>
											<textarea class="form-control" id=" " name="complaintDesc" rows="3"></textarea>
										</div>
										<div class="mb-3"><br>
											<button type="submit" name="submit" class="btn" style=" color: white; position: absolute; right:50%; background-color: #07A492; font-weight: 400; width:10%;">Submit</button>
											<button type="button" onclick="history.back()" class="btn" style="color: #000; position: absolute; right:40%; background-color: #ADDCD7; font-weight: 400;width:9%;">Back</button>

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