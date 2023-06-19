<?php
  require ('../Module1/database.php');
?>

<?php
//check session
include_once('../Module1/session-check-expert.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">
  
    <title>Manage Expert Profile</title>
    <link rel="stylesheet" href="../../dist/css/modern.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <style>
      body {
        opacity: 0;
      }
    </style>
    <script src="../../dist/js/settings.js"></script>
    <!-- END SETTINGS -->
  </head>
  

<body>
	<<body>
    <div class="wrapper">
      <!-- CONTENT -->
      <div class="main">
          <?php
          include_once('navbarExp.php');
          ?>
        <!--Content -->
        <main class="content">
		<div class="main">
			<main class="content">
				<div class="container-fluid">
					<!-- HEADER -->
					<div class="header">
                <h1 class="header-title"> Expert Profile </h1>
              </div>
              <div class="post-box">
              <img src="./imageM3/profilecirclenew.png" alt="imageM3" style="width: 35px; height: 35px;" >
            <div class="post-info">
                    <div class="name"> Dr.Muaz bin Rizal </div>
                    <div class="date"> Expert | Computer System </div>
                    <div class="right-align">
                    <a href='createprofile.php'> <i class="fa fa-pencil-square-o" aria-hidden="true" style="color: #BBE3E5; font-size:medium;" 
                    data-bs-toggle="modal" >Edit Profile </i></a>
                  

					<div class="row">
						<div class="col-12">
							<div class="card" style="padding: 80px 30px 20px;">
								<div class="mb-3">
									<!-- BUTTON CREATE -->

								</div>
								<!-- TABLE -->
								<table id="datatables-basic" class="table table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Research Name</th>
											<th>Publications Name</th>
											<th>Academic Status</th>
											<th>Expert CV</th>
											<th>Social Media</th>
											<th style="text-align: center;">Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php
											require ('../Module1/database.php');

											$sql = "SELECT * FROM expertise";
											$result = mysqli_query($conn,$sql);
											if (mysqli_num_rows($result) > 0) {
												$count = 1;
											while ($row = mysqli_fetch_array($result)) {
												$id = $row["id"];
												$expertResearchName = $_POST['expertResearchName'];
												$expertPublications = $_POST['expertPublications'];
												$expertAcademicStatus = $_POST['expertAcademicStatus'];
												$expertCV = $_POST['expertCV'];
												$expertSocMed = $_POST['eexpertSocMed'];
																	
										?>

												<tr>
													<td>
														<?php echo "$count"; ?>
													</td>
													<td>
														<?php echo "$expertResearchName"; ?>
													</td>
													<td>
														<?php echo "$expertPublications"; ?>
													</td>
													<td>
														<?php echo "$expertAcademicStatus"; ?>
													</td>
													<td>
														<?php echo "$expertCV"; ?>
													</td>
													<td>
														<?php echo "$expertSocMed"; ?>
													</td>
													
													<td>
														<?php echo "<a data-bs-toggle='modal' data-bs-target='#delete-$id'><i class='align-middle fas fa-fw fa-trash' style='color: red; '></i></a>"; ?>


													</td>
												</tr>

										<!-- Start Modal Delete -->
										<div class="modal fade" id="delete-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
															</div>
															<div class="modal-body m-3">
																<form method="POST" action="crud.php">
																	<input type="hidden" name="id" value="<?php echo $id; ?>">
																	<div class="drop" style="width:150px; height:150px; background-color:#fff2f2; display:flex; justify-content:center; align-items:center; border-radius: 50%; margin: -25px 0 20px 200px; position:relative; box-shadow: inset 2px 7px 6px rgba(0,0,0,0.1);">
																		<i class="align-middle fas fa-fw fa-trash-alt" style="font-size: 65px; color: #D90000;"></i>
																	</div>

																	<p class="mb-0" style="font-weight: 450; font-size: 18px; text-align:center;">You are about to delete a data <br> Are you sure?</p>
															</div>
															<div class="modal-footer">
																<input type="hidden" name="delete" value="true">
																<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
																<button type="submit" class="btn btn-primary">Delete</button>
															</div>
															</form>
														</div>
													</div>
												</div>
												<!-- end Delete modal -->
											<?php
													$count++; // Increment the count by 1
												}
											}
											?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
						<?php
							// echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
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