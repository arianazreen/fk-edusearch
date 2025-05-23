<!--retrieve file database from M1-->
<?php
require("../Module1/database.php");
?>
<!--check session from M1 -->
<?php
include_once('../Module1/session-check-genUser.php');
$id = $_SESSION['username'];
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
  <link rel="shortcut icon" href="../../dist/img/logo/fk-edusearch-border.png" type="image/x-icon">
  <link rel="stylesheet" href="../../dist/css/modern.css">
  <link href="../../dist/css/modernModule5.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

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
      <!-- Navifation Bar -->
      <?php
      include_once('M2-navbarUser.php');
      ?>

      <!--Content -->
      <main class="content">
        <!--1st Row-->
        <div class="container-fluid">
          <div class="header">
            <h1 class="header-title"> My Questions</h1>
          </div>
          <div class="row">
            <div class="col-12 col-lg-8">
              <?php

              // $sql = "SELECT * FROM post WHERE userID = '$id' ORDER BY postDate DESC, postTime DESC";
              $sql = "SELECT post.id, generaluser.userID, generaluser.userName, post.postDate, post.postTime, post.postTitle, post.postCategory, post.postKeyword,
              post.postContent, post.postStatus, post.postDate, post.postLikes, post.postComments, post.postRating, post.postFeedback, generaluser.assignedExpert
              FROM post
              INNER JOIN generaluser ON post.userID = generaluser.userID
              WHERE generaluser.userID = '$id'
              ORDER BY post.postDate DESC, post.postTime DESC";

              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $id = $row['id'];
                  $userID = $row['userID'];
                  $userName = $row['userName'];
                  $postDate = $row['postDate'];
                  $postTime = $row['postTime'];
                  $postTitle = $row['postTitle'];
                  $postCategory = $row['postCategory'];
                  $postKeyword = $row['postKeyword'];
                  $postContent = $row['postContent'];
                  $postLikes = $row['postLikes'];
                  $postComments = $row['postComments'];
                  $postStatus = $row['postStatus'];
                  $postRating = $row['postRating'];
                  $postFeedback = $row['postFeedback'];
                  $assignedExpert = $row['assignedExpert'];


              ?>
                  <div class="card flex-fill w-100">
                    <div class="card-header">
                      <div class="post-box">
                        <img class="profile-img" src="../../dist/img/avatars/avatar-2.jpg" alt="Profile Image">
                        <div class="post-info">
                          <div class="name"><?php echo $userName ?></div>
                          <div class="date"><?php echo "$postDate"; ?> | <?php echo "$postTime"; ?></div>
                          <div class="container-box">
                            <h3><?php echo "$postTitle"; ?></h3>
                            <div class="line"></div>

                            <p><?php echo "$postContent"; ?></p>
                          </div>

                          <div class="actions" style="color:#888">
                            <div class="icon-container">
                              <form method="POST">
                                <button type="submit" name="like_<?php echo $id; ?>"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $postLikes; ?></button>
                                <button type="submit" name="comment_<?php echo $id; ?>"><i class="fa fa-comment-o" aria-hidden="true"></i><?php echo $postComments; ?></button>
                              </form>
                              <!-- <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>0</a> -->
                              <div class="icon-container right" style="margin-left: 30px;">
                                <!-- Rates Button -->
                                <?php echo "<a href='#rateModal-$id' data-bs-toggle='modal'><i class='align-middle fa fa-star-half-o' style='color: gold;'></i></a> "; ?>
                                <!-- Rates modal -->
                                <div class="modal fade" id="rateModal-<?php echo $id; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Post Rating</h5>
                                      </div>
                                      <div class="modal-body">
                                        <div class="card-body">
                                          <form method="POST" action="process_post.php">
                                            <input type="hidden" name="id" value="<?php echo $id; ?>">

                                            <div class="row">
                                              <div class="mb-3">
                                                <label for="PostTilte">Post Title: </label>
                                                <input type="text" class="form-control" name="postTitle" id="postTitle" value="<?php echo $postTitle; ?>" disabled>
                                              </div>
                                              <div class="mb-3">
                                                <label for="assignedExpert">Assigned Expert : </label>
                                                <select class="form-select" id="assignedExpert" name="assignedExpert" disabled>
                                                  <option disabled selected><?php echo $assignedExpert; ?></option>
                                                </select>
                                              </div>
                                              <div class="mb-3 col-md-12">
                                                <label for="PostKeyword">Post Keyword :</label>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" id="php" name="postKeyword[]" value="PHP" disabled>PHP</label>
                                                  <label><input type="checkbox" id="html" name="postKeyword[]" value="HTML" disabled> HTML</label>
                                                  <label><input type="checkbox" id="js" name="postKeyword[]" value="JavaScript" disabled> JavaScript</label>
                                                  <label><input type="checkbox" id="ai" name="postKeyword[]" value="Artificial Intelligence" disabled> Artificial Intelligence</label>
                                                </div>

                                              </div>
                                              <div class="mb-3">
                                                <label>Post Content</label>
                                                <textarea class="form-control" rows="5" name="postContent" disabled><?php echo $postContent; ?></textarea>
                                              </div>
                                              <div class="mb-3 col-md-6">
                                                <label for="postRating">Post Rating : </label>
                                                <select class="form-select" name="postRating" value="postRating" aria-label="Default select example">
                                                  <option hidden>Please select the value..</option>
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4</option>
                                                  <option value="5">5</option>
                                                </select>
                                              </div>
                                              <div class="mb-3">
                                                <label>Post Content Feedback</label>
                                                <textarea class="form-control" rows="5" name="postFeedback"><?php echo $postFeedback; ?></textarea>
                                              </div>
                                            </div>
                                            <br>
                                            <div class="modal-footer">
                                              <input type="hidden" name="rate_post" value="true">
                                              <button type="button" class="btn" style="position:absolute; right: 328px; background-color: #ADDCD7; color: #000; font-weight: 400;" data-bs-dismiss="modal">Cancel</button>
                                              <button type="submit" class="btn" style=" position:relative; right: 205px;  background-color: #07A492; color: white; font-weight: 400;">Save</button>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- Closing  Rates Modal-->
                                <!-- Edit Button -->
                                <?php echo "<a href='#updateModal-$id' data-bs-toggle='modal'><i class='align-middle fas fa-fw fa-edit' style='color: blue;'></i></a> "; ?>
                                <!-- UPDATE modal -->
                                <div class="modal fade" id="updateModal-<?php echo $id; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Update Post</h5>
                                      </div>
                                      <div class="modal-body">
                                        <div class="card-body">
                                          <form method="POST" action="process_post.php">
                                            <input type="hidden" name="id" value="<?php echo $id; ?>">

                                            <div class="row">
                                              <div class="mb-3 col-md-6">
                                                <label for="PostTilte">Post Title: </label>
                                                <input type="text" class="form-control" name="postTitle" id="postTitle" value="<?php echo $postTitle; ?>">
                                              </div>
                                              <div class="mb-3 col-md-6">
                                                <label for="PostCategory">Post Category : </label>
                                                <select class="form-select" id="postCategory" name="postCategory" disabled>
                                                  <option disabled selected><?php echo $postCategory; ?></option>
                                                </select>
                                              </div>
                                              <div class="mb-3 col-md-12">
                                                <label for="PostKeyword">Post Keyword :</label>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" id="php" name="postKeyword[]" value="PHP" disabled>PHP</label>
                                                  <label><input type="checkbox" id="html" name="postKeyword[]" value="HTML" disabled> HTML</label>
                                                  <label><input type="checkbox" id="js" name="postKeyword[]" value="JavaScript" disabled> JavaScript</label>
                                                  <label><input type="checkbox" id="ai" name="postKeyword[]" value="Artificial Intelligence" disabled> Artificial Intelligence</label>
                                                </div>

                                              </div>
                                              <div class="mb-3">
                                                <label>Post Content</label>
                                                <textarea class="form-control" rows="5" name="postContent"><?php echo $postContent; ?></textarea>
                                              </div>
                                            </div>
                                            <br>
                                            <div class="modal-footer">
                                              <input type="hidden" name="update_post" value="true">
                                              <button type="button" class="btn" style="position:absolute; right: 328px; background-color: #ADDCD7; color: #000; font-weight: 400;" data-bs-dismiss="modal">Cancel</button>
                                              <button type="submit" class="btn" style=" position:relative; right: 205px;  background-color: #07A492; color: white; font-weight: 400;">Save</button>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- Closing  UPDATE Modal-->

                                <?php echo "<a href='#deleteModal-$id' data-bs-toggle='modal'><i class='align-middle fas fa-fw fa-trash' style='color: #DA3131;'></i></a> "; ?>
                                <!--Delete Modal-->
                                <div class="modal fade" id="deleteModal-<?php echo $id; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Confirmation</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                      </div>
                                      <div class="modal-body m-3">
                                        <form method="POST" action="process_post.php">
                                          <input type="hidden" name="id" value="<?php echo $id; ?>">
                                          <div class="drop" style="width:150px; height:150px; right: 50px; background-color:#fff2f2; display:flex; justify-content:center; align-items:center; border-radius: 50%; margin: -25px 0 20px 200px; position:relative; box-shadow: inset 2px 7px 6px rgba(0,0,0,0.1);">
                                            <i class="align-middle fas fa-fw fa-trash-alt" style="font-size: 65px; color: #D90000;"></i>
                                          </div>
                                          <p class="mb-0" style="font-weight: 450; font-size: 18px; text-align:center;">Are you wish to delete this post ? <br> This process cannot be undone.</p>
                                      </div>
                                      <div class="modal-footer">
                                        <input type="hidden" name="delete_post" value="true">
                                        <button type="submit" class="btn" name="delete" style="color: #fff; position:absolute; right: 300px; background-color: #DA3131; font-weight: 400; border-radius: 7px; width: 80px;">Delete</button>
                                        <button type="button" class="btn" data-bs-dismiss="modal" style=" color: #000; position:relative; right: 180px; background-color: #B2B2B4; font-weight: 400; border-radius: 7px; width: 80px;">Cancel</button>
                                      </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                <!--Closing Delete Modal-->
                              </div>
                            </div>
                            <div class="status"><?php echo "$postStatus"; ?></div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
              <?php
                }
              }
              ?>
            </div>
            <!--End of the 1st row 1'column-->

            <!-- Form fields for post title and content -->
            <div class="col-6 col-lg-4">
              <div class="card flex-fill w-100">
                <div class="card-header">
                  <h2 class="card-title mb-0" style="font-size: 1.5em;"> Post Question </h2>
                  <div class="container">
                    <form method="POST" action="process_post.php">
                      <input type="hidden" name="userID" value="">
                      <input type="text" name="postTitle" placeholder="Post Title" required>
                      <div class="form-group">
                        <select id="postCategory" name="postCategory">
                          <option selected>Choose major...</option>
                          <option value="BCN">BCN</option>
                          <option value="BCS">BCS</option>
                          <option value="BCG">BCG</option>
                        </select>
                      </div>
                      <div class="mb-3 col-md-12">
                        <label for="PostKeyword">Post Keyword :</label>
                        <div class="checkbox">
                          <div class="row">
                            <div class="col">
                              <label><input type="checkbox" id="php" name="postKeyword[]" value="PHP"> PHP</label>
                              <label><input type="checkbox" id="html" name="postKeyword[]" value="HTML"> HTML</label>
                              <label><input type="checkbox" id="js" name="postKeyword[]" value="JavaScript"> JavaScript</label>
                              <label><input type="checkbox" id="ai" name="postKeyword[]" value="Artificial Intelligence"> Artificial Intelligence</label>
                            </div>
                            <div class="col">
                              <label><input type="checkbox" id="network" name="postKeyword[]" value="Network"> Network </label>
                              <label><input type="checkbox" id="graphics" name="postKeyword[]" value="Graphics"> Graphics </label>
                              <label><input type="checkbox" id="software" name="postKeyword[]" value="Software"> Software </label>
                              <label><input type="checkbox" id="iot" name="postKeyword[]" value="Software"> Internet of Things </label>
                            </div>
                          </div>


                        </div>
                      </div>


                      <textarea name="postContent" placeholder="Post Content" required></textarea>

                      <div class="buttons">
                        <!-- Create button -->
                        <button type="submit" name="create_post" href="M2-my_questions.php">Create</button>
                        <!-- Reset button -->
                        <button type="reset" name="reset">Reset</button>
                      </div> <!--closing button-->
                  </div><!--closing container-->
                  </form>
                </div>
              </div>
            </div>
          </div> <!--closing row-->
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
    .icon-container {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .icon-container :right {
      display: flex;
      align-items: center;
      justify-content: flex-end;

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

    .actions {
      margin-left: 10px;
      justify-content: flex-start;
      align-items: center;
    }

    .right-align {
      margin-left: 10px;
      justify-content: flex-end;
      align-items: center;

    }
  </style>
</body>

</html>