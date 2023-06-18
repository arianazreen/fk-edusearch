<!--databse file from M1 -->
<?php
  require ('../Module1/database.php');
?>
<!--check session from M1 -->
<?php
  include_once('../Module1/session-check-genUser.php');
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">
  
    <title>Manage User Profile</title>
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
    <div class="wrapper">
      <!-- CONTENT -->
      <div class="main">
        <nav class="navbar navbar-expand navbar-theme">
          <div class="container-fluid">
            <!--Nav - Logo-->
            <img src="../../dist/img/logo/fk-edusearch-border.png" style="width: 35px;" height="35px;" alt="FK-EduSearch Logo"/>
            <!--Nav - Home (name) -->
            <a class="navbar-brand" href="#">FK-EDUSEARCH</a>&nbsp;
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!--Nav - Home -->
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="M2-user_homepage.php">Home</a>
                </li>
                <!--Nav - MY Question -->
                <li class="nav-item">
                  <a class="nav-link" href="M2-my_questions.php">My Questions</a>
                </li>
                <!--Nav - Complaint -->
                <li class="nav-item dropdown ms-lg-2">
                  <a
                    class="nav-link dropdown-toggle position-relative"
                    href="#"
                    id="userDropdown"
                    data-bs-toggle="dropdown"
                    >Complaint</a
                  >
                  <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="userDropdown"
                  >
                    <a class="dropdown-item"></a>
                    <a class="dropdown-item" href="../Module5/create.php"
                      >New Application</a
                    >
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">History</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Report</a>
                  </div>
                </li>
              </ul>
            </div>
            
          <!--Nav - Notification -->
          <div class="navbar-collapse collapse">
            <ul class="navbar-nav ms-auto mt-2">
              <li class="nav-item dropdown ms-lg-2">
                <a
                  class="nav-link dropdown-toggle position-relative"
                  href="#"
                  id="alertsDropdown"
                  data-bs-toggle="dropdown"
                >
                  <i class="align-middle fas fa-bell"></i>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                  aria-labelledby="alertsDropdown"
                >
                  <div class="dropdown-menu-header">4 New Notifications</div>
                  <div class="list-group">
                    <a href="#" class="list-group-item">
                      <div class="row g-0 align-items-center">
                        <div class="col-2">
                          <i
                            class="ms-1 text-success fas fa-fw fa-bell-slash"
                          ></i>
                        </div>
                        <div class="col-10">
                          <div class="text-dark">New connection</div>
                          <div class="text-muted small mt-1">
                            Anna accepted your request.
                          </div>
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

              <!--Nav- Profile 
              <div class="post-box border-0">
                        <img class="profile-img" src="../../dist/img/avatars/nurul_najwa.jpg" alt="Profile Image" 
                         style="width: 35px; height: 25px;" >
                         <h6>Nurul Najwa</h6>
                         <p>Student</p>          
              </div>-->

              <div class="row mt-3 mx-2">
                <div class="col-sm-4">
                <img class="profile-img rounded-circle" src="../../dist/img/avatars/nurul_najwa.jpg" alt="Profile Image" 
                         style="width: 35px; height: 35px;" >
                </div>
                <div class="col-sm-8">
                      <h6 class="mb-0" style="color: #fff;">Nurul Najwa</h6>
                      <p style="color: #BBE3E5;">Student</p>
                </div>
              </div>

              <!--Nav - Dropdown Setting -->
              <li class="nav-item dropdown ms-lg-2">
                <a
                  class="nav-link dropdown-toggle position-relative"
                  href="#"
                  id="userDropdown"
                  data-bs-toggle="dropdown"
                >
                  <i class="align-middle fas fa-cog"></i>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-end"
                  aria-labelledby="userDropdown"
                >
                  <a class="dropdown-item"></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="M2-manage-user-profile.php"
                    ><i class="align-middle me-1 fas fa-fw fa-user"></i> My
                    Profile</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="align-middle me-1 fas fa-fw fa-cogs"></i> Account
                    Setting</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout"
                    ><i
                      class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"
                    ></i>
                    Sign out</a
                  >
                </div>
              </li>
            </ul>
          </div>
          </div>

        </nav>

        <!--Content -->
        <main class="content">
            <!--1st Row-->

          <div class="container-fluid">
              <div class="header">
                <h1 class="header-title"> Manage User Profile </h1>
              </div>
              <div class="post-box">
                <img class="profile-img" src="../../dist/img/avatars/nurul_najwa.jpg" alt="Profile Image">
            <div class="post-info">
                    <div class="name"> Nurul Najwa </div>
                    <div class="date"> Student | Major in Computer System & Networking (BCN) </div>
                    <div class="right-align">
                    
                    <i id="editProfileForm" class="fa fa-pencil-square-o" aria-hidden="true" style="color: #BBE3E5; font-size:medium;" 
                    data-bs-toggle="modal" data-bs-target="#editProfileModal">Edit Profile </i>
                     
                    <!--Edit Profile Modal -->
                          <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form id="editProfileForm" method="POST">
                                    
                                    <div class="form-group">
                                      <label for="name">Name:</label>
                                      <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="email">Email:</label>
                                      <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="major">Major:</label>
                                            <select id="major" name="major" class="form-control">
                                            <option value="major1">Choose major...</option>
                                            <option value="major2">Major in Computer System & Networking</option>
                                            <option value="major3">Major in Software Engineering</option>
                                            <option value="major4">Major in Multimedia & Graphics</option>
                                          </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="department">Department:</label>
                                            <select id="department" name="department" class="form-control">
                                                <option value="depart1">Choose department...</option>
                                                <option value="depart2">Computer System & Networking (BCN)</option>
                                                <option value="depart3">Software Engineering (BCS)</option>
                                                <option value="depart4">Multimedia & Graphics (BCG)</option>
                                            </select>
                                      
                                    </div>
                                    
                                    
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-primary">Save Changes</button>
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #B2B2B4;">Cancel</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>`
                    <!-- end of modal -->
                  </div>
                    </div>
                </div>

               <div class="row">
                 <div class="col-12 col-lg-8">
                   <div class="card flex-fill w-100">
                      <div class="card-header">
                       <h2 class="card-title"> About Nurul Najwa </h2>
                         <!--<h6 class="card-subtitle text-muted">A line chart is a way of plotting data points on a line.</h6>-->
                          <p>
                            Nurul Najwa Bt Husin studies at Faculty of Computing in
                            Universiti Malaysia Pahang.<br />Does research in
                            Educational Technology, Business Intelligence, Technology
                            Adoption, E-Learning, Social Media Use for Learning and
                            Higher Education.
                          </p>
                      </div>
                  </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="card flex-fill w-100">
                      <div class="card-header">
    
                          <h2 class="card-title mb-0"> Related Topic Research </h2>
                          <p>
                            <ul>
                            <li> Emerging Trends in Computer System Security. </li>
                            <li> Virtual Reality (VR) and Augmented Reality (AR) application. </li>
                          </ul>
                          </p>
                      </div>
                    </div>
                </div>
              </div>
             
  
           <!--2nd Row-->

           <div class="row">
            <div class="col-12 col-lg-8">
              <div class="card flex-fill w-100">
                 <div class="card-header">
                  <h2 class="card-title"> Total Post </h2>
                    <!--<h6 class="card-subtitle text-muted">A line chart is a way of plotting data points on a line.</h6>-->
                    <div class="card-body d-flex">
                      <div class="align-self-center w-100">
                        <div class="py-3">
                          
                            <table class="table mb-0">
                                <tr>
                                  <td><div class="chart chart-xs">
                                    <canvas id="chartjs-dashboard-pie"></canvas>
                                    </div>
                                    </td>
                                  <td><strong><h2> Total Post : </h2></strong></td>
                                  <td class="text-end"><strong><h2> 36 </h2></strong></td> 
                                </tr>
                            </table>
                            
                          <table class="table mb-0">
                            
                              <tr>
                                <td><i class="fas fa-circle fa-fw" style="color:#43BCAE"></i> Networking</td>
                                <td class="text-end"> 15 </td>
                              </tr>
                              <tr>
                                <td><i class="fas fa-circle fa-fw" style="color:#BBE3E5"></i> Software Engineering </td>
                                <td class="text-end"> 7 </td>
                              </tr>
                              <tr>
                                <td><i class="fas fa-circle fa-fw" style="color:#1A5D55"></i> Multimedia and Graphics </td>
                                <td class="text-end"> 14 </td>
                              </tr>
                              
                            
                          </table>
                        </div>
                        </div>
                    </div>
                 </div>
             </div>
           </div>
           <div class="col-6 col-lg-4">
               <div class="card flex-fill w-100">
                 <div class="card-header">

                     <h2 class="card-title mb-0"> Academic Qualifications </h2>
                     <p>
                       <ul>
                       <li> Bachelor in Computer System </li>
                     </ul>
                     </p>
                     <h2 class="card-title mb-0"> Department </h2>
                     <p>
                       <ul>
                       <li> Computer System & Networking (BCN) </li>
                     </ul>
                     </p>
                 </div>
               </div>
               <div class="card flex-fill w-100">
                    <div class="card-header">
                        <h2 class="card-title mb-0"> Social Media Account </h2>
                        <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                       <p> nurul_najwa </p> 
                    </div>
                  </div>
           </div>
         </div>

         <!--3rd Row-->
              
         </div>
         </div>
         </div>
      

       </main>

        <!--Footer-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row text-muted">
              <div class="col-8 text-start"></div>
              <div class="col-4 text-end">
                <p class="mb-0">&copy; 2023 - UNIVERSITI MALAYSIA PAHANG</p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <svg width="0" height="0" style="position: absolute">
      <defs>
        <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
          <path
            d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z"
          ></path>
        </symbol>
      </defs>
    </svg>
    <script src="../../dist/js/app.js"></script>


    <!--Script-->
    	<!-- Js Pie Chart -->
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: 'pie',
				data: {
					labels: ["Networking", "Software Engineering", "Multimedia and Graphics"],
					datasets: [{
						data: [15, 7, 14],
						backgroundColor: [
							"#43BCAE",
							"#BBE3E5",
							"#1A5D55",
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
      //js code for edit profile
          $(document).ready(function() {
        // Retrieve existing profile data and populate the form
        $.ajax({
          url: 'M2-manage-user-profile.php', // PHP script to fetch profile data from the server
          type: 'GET',
          dataType: 'json',
          success: function(data) {
            $('#name').val(data.name);
            $('#email').val(data.email);
            // Set values for other form fields as needed
          },
          error: function() {
            alert('Failed to retrieve profile data.');
          }
        });

        // Handle form submission
        $('#editProfileForm').submit(function(e) {
          e.preventDefault();

          // Serialize form data
          var formData = $(this).serialize();

          // Send the updated profile data to the server
          $.ajax({
            url: 'M2-manage-user-profile.php', // PHP script to update the profile data
            type: 'POST',
            data: formData,
            success: function(response) {
              // Handle success response, e.g., show a success message, refresh the page, etc.
              alert('Profile updated successfully.');
              location.reload();
            },
            error: function() {
              alert('Failed to update profile.');
            }
          });
        });
      });
	</script>

     <!--css-->

     <style>
      .right-align{
        text-align: right;
      }
      
      .search-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50px;
            
        }

        .search-box {
            display: flex;
            align-items: center;
            width: 550px;
        }

        .search-box input[type="text"] {
            flex-grow: 1;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-box button {
            padding: 10px 20px;
            background-color: #BBE3E5;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-box button:hover {
            background-color: #45a049;
        }
        .post-box {
            position: relative;
            display: flex;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
        }

        .post-box .profile-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .post-box .post-info {
            flex-grow: 1;
        }

        .post-box .post-info .name {
            font-weight: bold;
            margin-bottom: 5px;
            color: #fff;
            font-size: 19px;
        }

        .post-box .post-info .date {
            font-size: 12px;
            color:#BBE3E5;
        }

        .post-box .actions {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .post-box .actions .icon {
            margin-right: 10px;
            cursor: pointer;
        }

        .post-box .actions .edit-btn,
        .post-box .actions .delete-btn {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .post-box .status {
            position: absolute;
            top: 10px;
            right: 10px;
            font-weight: bold;
        }
        .post-info {
            flex-grow: 1;
        }

          .container-box {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            margin-top: 10px;
        }
        .line {
            border-top: 1px solid #ccc;
        }
          
     </style>
  </body>
</html>
