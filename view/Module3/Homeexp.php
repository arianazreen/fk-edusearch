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
  
    <title>HomePage</title>
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
	<body>
    <div class="wrapper">
      <!-- CONTENT -->
      <div class="main">
          <?php
          include_once('navbarExp.php');
          ?>
        <!--Content -->
        <main class="content">
        <div class="container-fluid">
          <div class="header">
            <h1 class="header-title">Homepage</h1>
            <br>
          </div>
          <div class="row">

            <div class="center">
              <div class="col-12 col-lg-10">
                <?php
                $sql = "SELECT post.id, generaluser.userID, generaluser.userName, post.postDate, post.postTime, post.postTitle, post.postCategory, post.postKeyword,
               post.postContent, post.postStatus, post.postLikes, post.postComments, post.postDate
               FROM post
               INNER JOIN generaluser ON post.userID = generaluser.userID
               WHERE post.postStatus = 'COMPLETED' 
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

                    // Handle like and comment actions
                    if (isset($_POST['like_' . $id])) {
                      // Increment the like count for the post
                      $postLikes++;
                      // Update the postLikes column in the database
                      $updateLikesSql = "UPDATE post SET postLikes = $postLikes WHERE id = $id";
                      mysqli_query($conn, $updateLikesSql);
                    }

                    if (isset($_POST['comment_' . $id])) {
                      // Increment the comment count for the post
                      $postComments++;
                      // Update the postComments column in the database
                      $updateCommentsSql = "UPDATE post SET postComments = $postComments WHERE id = $id";
                      mysqli_query($conn, $updateCommentsSql);
                    }
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
        <path d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z"></path>
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
      padding: 7px 20px;
      /* background-color: #BBE3E5; */
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }


    .search-icon {
      position: absolute;
      top: 24px;
      right: 261px;
      width: 30px;
      height: 30px;
      background-color: transparent;
      border: none;
    }

    .fa-search {
      color: #000;
      /* Change the color of the search icon */
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
      width: 890px;
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

    .card-header-search {
      background-color: #008080;
      border-bottom: 0 solid rgba(0, 0, 0, 0.125);
      margin-bottom: 0;
      padding: 0.75rem 1.25rem;
    }
</style>

</body>

</html>