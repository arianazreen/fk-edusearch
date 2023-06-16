<!--  ON HOLD
  
databse file from M1 
<?php
  require ('../Module1/database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
  <meta name="author" content="Bootlab">

  <title>My Questions</title>
  <link rel="stylesheet" href="../../dist/css/modern.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
      opacity: 0;
    }
  </style>
  <script src="../../dist/js/settings.js"></script>
   END SETTINGS -->
</head>


<body>
  <div class="wrapper">
    <!-- CONTENT -->
    <div class="main">
      <nav class="navbar navbar-expand navbar-theme">
        <div class="container-fluid">
          <!--Nav - Logo-->
          <img src="../../dist/img/logo/fk-edusearch-border.png" style="width: 35px;" height="35px;" alt="FK-EduSearch Logo" />
          <!--Nav - Home (name) -->
          <a class="navbar-brand" href="#">FK-EDUSEARCH</a>&nbsp;
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="nav-link" href="M2-my_question.php">My Questions</a>
              </li>
              <!--Nav - Complaint -->
              <li class="nav-item dropdown ms-lg-2">
                <a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-bs-toggle="dropdown">Complaint</a>
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

          <!--Nav - Notification -->
          <div class="navbar-collapse collapse">
            <ul class="navbar-nav ms-auto mt-2">
              <li class="nav-item dropdown ms-lg-2">
                <a class="nav-link dropdown-toggle position-relative" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                  <i class="align-middle fas fa-bell"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                  <div class="dropdown-menu-header">4 New Notifications</div>
                  <div class="list-group">
                    <a href="#" class="list-group-item">
                      <div class="row g-0 align-items-center">
                        <div class="col-2">
                          <i class="ms-1 text-success fas fa-fw fa-bell-slash"></i>
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
                  <img class="profile-img rounded-circle" src="../../dist/img/avatars/nurul_najwa.jpg" alt="Profile Image" style="width: 35px; height: 35px;">
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
            <h1 class="header-title"> My Questions</h1>
          </div>


          <div class="row">
            <div class="col-12 col-lg-8">
              <div class="card flex-fill w-100">
                <div class="card-header">

                  <div class="post-box">
                    <img class="profile-img" src="../../dist/img/avatars/nurul_najwa.jpg" alt="Profile Image">
                    <div class="post-info">
                      <div class="name" style="font-size: 1.3em;"> Nurul Najwa</div>
                      <div class="date"> Article | 14 May 2023 </div>
                      <div class="container-box">
                        <h3>How are computer systems evolving to handle the increasing complexity
                          of virtual reality (VR) and augmented reality (AR) applications?</h3>
                        <div class="line"></div>

                        <p>Is the Augmented Reality and Virtual Reality closely related to 3D printing?</p>
                      </div>

                      <div class="actions" style="color:#888">
                        <div class="icon-container">
                          <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>0</a>
                          <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>0</a>
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>0</a>
                          <div class="icon-container right">

                           
                           <!--Edit Modal-->
                           
                           

                           <a href="#editModal" data-bs-toggle="modal"><i class="align-middle fas fa-fw fa-edit" class="trigger-btn" data-bs-target="#centeredModalDanger" style="color: blue;"></i></a>
                          
                              <!-- Modal HTML -->
                              <div id="editModal" class="modal fade" tabindex="-1">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Confirmation</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body m-3">

                                      <div class="drop" style="width:150px; height:150px; right: 50px; background-color:#fff2f2; display:flex; justify-content:center; align-items:center; border-radius: 50%; margin: -25px 0 20px 200px; position:relative; box-shadow: inset 2px 7px 6px rgba(0,0,0,0.1);">
                                        <i class="align-middle fas fa-fw fa-edit" style="font-size: 65px; color: green;"></i>
                                      </div>
                                        
                                      <p>You have done some updates into this post. <br> Want to save the update?</p>
                                      <p class="text-secondary"><small>If you don't save, your changes will be lost.</small></p>

                                      </div>
                                      <div class="modal-footer">
                                      <button type="button" class="btn" style=" color: #fff; position:absolute; right: 300px; background-color: #07A492; font-weight: 400; border-radius: 7px; width: 80px;">Save Changes</button>
                                      <button type="button" class="btn" data-bs-dismiss="modal" style=" color: #000; position:relative; right: 180px; background-color: #B2B2B4; font-weight: 400; border-radius: 7px; width: 80px;">Cancel</button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                           <!--Closing Edit Modal-->

                          <!--Delete Modal-->
                            <a href="#deleteModal" data-bs-toggle="modal"><i class="align-middle fas fa-fw fa-trash" class="trigger-btn" data-bs-target="#centeredModalDanger" style="color: #DA3131;"></i></a>
                            <!-- Modal HTML -->
                            <div id="deleteModal" class="modal fade" tabindex="-1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                  </div>

                                 <div class="modal-body m-3">

																	<div class="drop" style="width:150px; height:150px; right: 50px; background-color:#fff2f2; display:flex; justify-content:center; align-items:center; border-radius: 50%; margin: -25px 0 20px 200px; position:relative; box-shadow: inset 2px 7px 6px rgba(0,0,0,0.1);">
																		<i class="align-middle fas fa-fw fa-trash-alt" style="font-size: 65px; color: #D90000;"></i>
																	</div>
																    
																	<p class="mb-0" style="font-weight: 450; font-size: 18px;">You are about to delete a data <br> Are you sure?</p>
																</div>
																<div class="modal-footer">
																<button type="button" class="btn" style=" color: #fff; position:absolute; right: 300px; background-color: #DA3131; font-weight: 400; border-radius: 7px; width: 80px;">Delete</button>
																	<button type="button" class="btn" data-bs-dismiss="modal" style=" color: #000; position:relative; right: 180px; background-color: #B2B2B4; font-weight: 400; border-radius: 7px; width: 80px;">Cancel</button>
																</div>
                                
                                </div>
                              </div>
                            </div>
                         
                          </div>


                        </div>
                        <div class="status">Revised</div>

                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                
              </div>
              <div class="card flex-fill w-100">
                <div class="card-header">

                  <div class="post-box">
                    <img class="profile-img" src="../../dist/img/avatars/nurul_najwa.jpg" alt="Profile Image">
                    <div class="post-info">
                      <div class="name" style="font-size: 1.3em;"> Nurul Najwa</div>
                      <div class="date"> Article | 14 May 2023 </div>
                      <div class="container-box">
                        <h3>What are the emerging trends in computer system security?</h3>
                        <div class="line"></div>

                        <p>How can vulnerabilities in IoT devices impact overall system security?</p>
                      </div>

                      <div class="actions" style="color:#888">
                        <div class="icon-container">
                          <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>211</a>
                          <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>65</a>
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>3</a>
                          <div class="icon-container right">
                            <!--Edit Modal-->

                            <a href="#editModal" data-bs-toggle="modal"><i class="align-middle fas fa-fw fa-edit" class="trigger-btn" data-bs-target="#centeredModalDanger" style="color: blue;"></i></a>

                            <!-- Modal HTML -->
                            <div id="editModal" class="modal fade" tabindex="-1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                  </div>
                                  <div class="modal-body m-3">

																	<div class="drop" style="width:150px; height:150px; right: 50px; background-color:#fff2f2; display:flex; justify-content:center; align-items:center; border-radius: 50%; margin: -25px 0 20px 200px; position:relative; box-shadow: inset 2px 7px 6px rgba(0,0,0,0.1);">
																		<i class="align-middle fas fa-fw fa-edit" style="font-size: 65px; color: green;"></i>
																	</div>
                                  <p>You have done some updates into this post. <br> Want to save the update?</p>
                                    <p class="text-secondary"><small>If you don't save, your changes will be lost.</small></p>
																</div>
																<div class="modal-footer">
																<button type="button" class="btn" style=" color: #fff; position:absolute; right: 300px; background-color: #07A492; font-weight: 400; border-radius: 7px; width: 80px;">Save Changes</button>
																	<button type="button" class="btn" data-bs-dismiss="modal" style=" color: #000; position:relative; right: 180px; background-color: #B2B2B4; font-weight: 400; border-radius: 7px; width: 80px;">Cancel</button>
																</div>
                                </div>
                              </div>
                            </div>
                           

                            <!--Closing Edit Modal-->

                            <!--Delete Modal-->

                            <a href="#deleteModal" data-bs-toggle="modal"><i class="align-middle fas fa-fw fa-trash" class="trigger-btn" data-bs-target="#centeredModalDanger" style="color: #DA3131;"></i></a>

                            <!-- Modal HTML -->
                            <div id="deleteModal" class="modal fade" tabindex="-1">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Confirmation</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body m-3">

																	<div class="drop" style="width:150px; height:150px; right: 50px; background-color:#fff2f2; display:flex; justify-content:center; align-items:center; border-radius: 50%; margin: -25px 0 20px 200px; position:relative; box-shadow: inset 2px 7px 6px rgba(0,0,0,0.1);">
																		<i class="align-middle fas fa-fw fa-trash-alt" style="font-size: 65px; color: #D90000;"></i>
																	</div>
																    
																	<p class="mb-0" style="font-weight: 450; font-size: 18px;">You are about to delete a data <br> Are you sure?</p>
																</div>
																<div class="modal-footer">
																<button type="button" class="btn" style=" color: #fff; position:absolute; right: 300px; background-color: #DA3131; font-weight: 400; border-radius: 7px; width: 80px;">Delete</button>
																	<button type="button" class="btn" data-bs-dismiss="modal" style=" color: #000; position:relative; right: 180px; background-color: #B2B2B4; font-weight: 400; border-radius: 7px; width: 80px;">Cancel</button>
																</div>
                              </div>
                            </div>
                            </div>

                            <!--Closing Delete Modal-->
                          </div>
                        </div>
                      </div>
                      <div class="status">Completed</div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--End of the 1st row 1'column-->
            <div class="col-6 col-lg-4">
              <div class="card flex-fill w-100">
                <div class="card-header">

                  <h2 class="card-title mb-0" style="font-size: 1.5em;"> Post Question </h2>
                  <div class="container">
                    <div class="form-group">

                      <input type="text" id="title" name="title" value="Title">
                    </div>

                    <div class="form-group">

                      <select id="major" name="major">
                        <option value="major1">Choose major...</option>
                        <option value="major2">BCN</option>
                        <option value="major3">BCS</option>
                        <option value="major4">BCG</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="keyword">Keywords:</label>
                      <div class="checkboxes">
                        <label><input type="checkbox" id="keyword1" name="keyword1" value="keyword1"> PHP</label>
                        <label><input type="checkbox" id="keyword2" name="keyword2" value="keyword2"> HTML</label>
                        <label><input type="checkbox" id="keyword3" name="keyword3" value="keyword3"> JavaScript</label>
                        <label><input type="checkbox" id="keyword4" name="keyword4" value="keyword4"> Artificial Intelligence</label>
                      </div>
                    </div>

                    <div class="form-group">

                      <textarea id="text" name="text">Something to share..</textarea>
                    </div>

                    <div class="buttons">

                      <button class="share" data-bs-toggle="modal" data-bs-target="#centeredModalDanger" type="button">CREATE</button>
                      
                       <!-- Modal HTML -->
                       <div id="centeredModalDanger" class="modal fade" tabindex="-1">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title"> Warning </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body m-3">

                          <div class="drop" style="width:150px; height:150px; right: 50px; background-color:#fff2f2; display:flex; justify-content:center; align-items:center; border-radius: 50%; margin: -25px 0 20px 200px; position:relative; box-shadow: inset 2px 7px 6px rgba(0,0,0,0.1);">
                            <i class="align-middle fa fa-exclamation-triangle" style="font-size: 65px; color: orange;"></i>
                            </div>
																    
                                    <p class="mb-0" style="font-weight: 450; font-size: 18px;">You have reach a limit of posting per session. <br> Forbidden to proceed. </p>
                            </div>
                        <div class="modal-footer">
                        <button type="button" class="btn" style=" color: #fff; position:absolute; right: 300px; background-color: #07A492; font-weight: 400; border-radius: 7px; width: 80px;">Back</button>
                          <button type="button" class="btn" data-bs-dismiss="modal" style=" color: #000; position:relative; right: 180px; background-color: #B2B2B4; font-weight: 400; border-radius: 7px; width: 80px;">Cancel</button>
                        </div>
                          </div>
                        </div>
                      </div>

                      <!--Closing Warning Modal-->
                      <button class="cancel">CANCEL</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <!--closing row-->


          <!--2nd Row-->

          <div class="row">
            <div class="col-12 col-lg-8">
              <div class="card flex-fill w-100">
                <div class="card-header">

                  <div class="post-box">
                    <img class="profile-img" src="../../dist/img/avatars/nurul_najwa.jpg" alt="Profile Image">
                    <div class="post-info">
                      <div class="name" style="font-size: 1.3em;"> Nurul Najwa</div>
                      <div class="date"> Article | 14 May 2023 </div>
                      <div class="container-box">
                        <h3>What are the emerging trends in computer system security?</h3>
                        <div class="line"></div>

                        <p>How can vulnerabilities in IoT devices impact overall system security?</p>
                      </div>

                      <div class="actions" style="color:#888">
                        <div class="icon-container">
                          <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>211</a>
                          <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>65</a>
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>3</a>
                          <div class="icon-container right">

                           <!--Edit Modal-->
                            
                           <a href="#editModal" data-bs-toggle="modal"><i class="align-middle fas fa-fw fa-edit" class="trigger-btn" data-bs-target="#centeredModalDanger" style="color:blue;"></i></a>
                          
                              <!-- Modal HTML -->
                              <div id="editModal" class="modal fade" tabindex="-1">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Confirmation</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body m-3">

																	<div class="drop" style="width:150px; height:150px; right: 50px; background-color:#fff2f2; display:flex; justify-content:center; align-items:center; border-radius: 50%; margin: -25px 0 20px 200px; position:relative; box-shadow: inset 2px 7px 6px rgba(0,0,0,0.1);">
																		<i class="align-middle fas fa-fw fa-edit" style="font-size: 65px; color: green;"></i>
																	</div>
                                  <p>You have done some updates into this post. <br> Want to save the update?</p>
                                    <p class="text-secondary"><small>If you don't save, your changes will be lost.</small></p>
																</div>
																<div class="modal-footer">
																<button type="button" class="btn" style=" color: #fff; position:absolute; right: 300px; background-color: #07A492; font-weight: 400; border-radius: 7px; width: 80px;">Save Changes</button>
																	<button type="button" class="btn" data-bs-dismiss="modal" style=" color: #000; position:relative; right: 180px; background-color: #B2B2B4; font-weight: 400; border-radius: 7px; width: 80px;">Cancel</button>
																</div>
                                  </div>
                                </div>
                              </div>

                              <!--Closing Edit Modal-->

                          <!--Delete Modal-->
                           
                            <a href="#deleteModal" data-bs-toggle="modal"><i class="align-middle fas fa-fw fa-trash" class="trigger-btn" data-bs-target="#centeredModalDanger" style="color: #DA3131;"></i></a>
                      
                            <!-- Modal HTML -->
                            <div id="deleteModal" class="modal fade" tabindex="-1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                  </div>
                                  <div class="modal-body m-3">

																	<div class="drop" style="width:150px; height:150px; right: 50px; background-color:#fff2f2; display:flex; justify-content:center; align-items:center; border-radius: 50%; margin: -25px 0 20px 200px; position:relative; box-shadow: inset 2px 7px 6px rgba(0,0,0,0.1);">
																		<i class="align-middle fas fa-fw fa-trash-alt" style="font-size: 65px; color: #D90000;"></i>
																	</div>
																    
																	<p class="mb-0" style="font-weight: 450; font-size: 18px;">You are about to delete a data <br> Are you sure?</p>
																</div>
																<div class="modal-footer">
																<button type="button" class="btn" style=" color: #fff; position:absolute; right: 300px; background-color: #DA3131; font-weight: 400; border-radius: 7px; width: 80px;">Delete</button>
																	<button type="button" class="btn" data-bs-dismiss="modal" style=" color: #000; position:relative; right: 180px; background-color: #B2B2B4; font-weight: 400; border-radius: 7px; width: 80px;">Cancel</button>
																</div>
                                </div>
                              </div>
                            </div>

                            <!--Closing Delete Modal-->
                          </div>
                        </div>
                      </div>
                      <div class="status">Completed</div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- end of 2nd row-->

        </div> <!-- closing container-->

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
    </div> <!-- closing class main-->
  </div> <!-- closing wrapper-->

  <svg width="0" height="0" style="position: absolute">
    <defs>
      <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
        <path d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z"></path>
      </symbol>
    </defs>
  </svg>
  <script src="../../dist/js/app.js"></script>


  <!--Script-->
  <!-- Js Pie Chart -->
  <script>

  </script>

  <!--css-->
  <style>
    .right-align {
      text-align: right;
    }

    .icon-container {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .icon-container :right {
      display: flex;
      align-items: center;
      justify-content: center;
    }



    .icon-container i {
      color: grey;
      font-size: 14px;
      margin: 10px;
      margin-bottom: 5px;

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
    }

    .post-box .post-info .date {
      font-size: 12px;
      color: #888;
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
      width: 760px;
    }

    .line {
      border-top: 1px solid #ccc;
    }

    .container post {
      width: 400px;
      /* Adjust the width as needed */
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .container h2 {
      margin-top: 0;
    }

    .container label {
      display: block;
      margin-bottom: 5px;
    }

    .container input[type="text"],
    .container select,
    .container textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 3px;
      margin-bottom: 10px;
    }

    .container textarea {
      height: 120px;
      /* Adjust the height as needed */
    }

    .container .form-group {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
    }

    .container .form-group label {
      flex-basis: 30%;
    }

    .container .buttons {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .container .buttons button {
      background-color: #07A492;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin: 0 10px;
      font-weight: bold;
    }

    .container .buttons button.cancel {
      background-color: #07A492;
    }

    .actions{
      display: flex;
      justify-content: flex-start;
      align-items: center;
    }

    .actions a{
      margin-left: 10px;
      text-decoration: none;
      color: inherit;
    }

    .modal{
      display: flex;
      justify-content: flex-end;
      align-items: center;
    }

    .modal a{
      margin-left: 10px;
      text-decoration: none;
      color: inherit;
    }
  </style>
</body>

</html>
