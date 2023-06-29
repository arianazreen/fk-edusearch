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
    <div class="wrapper">
      <!-- CONTENT -->
      <div class="main">
          <?php
          include_once('navbarExp.php');
          ?>
        <!--Content -->
        <main class="content">
            <!--1st Row-->
            <div class="container-fluid">
            <div class="header">
                <h1 class="header-title"> Edit </h1>
              </div>
              <div class="row">
						<div class="col-12">
							<div class="card" style="padding: 50px 40px 140px; border-radius: 20px; box-shadow: 5px 8px 5px lightgray;">
                                <!-- FORM CREATE GEN USER-->
                                <form method="POST" action="crudexp.php">
                                    <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label>Date</label>
                                        <input type="text" class="form-control" name="expertResearchArea">
                                      </div>
                                      <div class="mb-3 col-md-8">
                                        <label>Time</label>
                                        <input type="text" class="form-control" name="expertPublications">
                                      </div>
                                        <div class="mb-3 col-md-7">
                                        <label>Publication Name</label>
                                        <input type="text" class="form-control" name="expertCV">
                                      </div>
                                        <div class="position-relative">
                                            <div class="position-absolute top-100 start-50 translate-middle" style="margin-top: 80px;">
                                                <div class="mb-3">
                                                    <a href='ExpProfile.php'><input id="button-submit" type="submit" name="ExpProfile" value="SUBMIT"></a>
                                                    <input id="button-cancel" type="button" value="CANCEL" onclick="history.back()">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </form>
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
          <path
            d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z"
          ></path>
        </symbol>
      </defs>
    </svg>
    <script src="../../dist/js/app.js"></script>


    <!--Script-->
	<script>
     src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
	</script>























     <!--css-->

     <style>
       .red-icon {
      color: red;
      margin-left: 20px; 
      }

      .input-container {
        margin-top: 20px;
      }

      .input-box {
        margin-bottom: 10px;
      }
      
      .document-container {
      margin-top: 20px;
      display: flex;
      flex-wrap: nowrap; /* Prevent wrapping to the next line */
      overflow-x: auto; /* Enable horizontal scrolling */
      -ms-overflow-style: none; /* Hide scrollbar in Internet Explorer */
      scrollbar-width: none; /* Hide scrollbar in Firefox */
    }

    .document-box {
      position: relative;
      display: inline-block;
      margin-right: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      padding: 10px;
      height: 150px;
      width: 200px;
    }

    .document-wrapper {
      margin-top: 10px;
      position: relative;
    }

    .document-container {
      display: flex;
      overflow-x: auto;
      scroll-behavior: smooth;
    }

    .document-box {
      flex: 0 0 auto;
      width: 200px;
      margin-right: 10px;
      padding: 10px;
      border: 1px solid #ccc;
    }

    .delete-icon {
      color: red;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }

    .row-number {
      font-weight: bold;
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
          
        label {
    display: block;
    font: 1rem 'Fira Sans', sans-serif;
      }

    input,
    label {
    margin: 0;
    }

     </style>
  </body>
</html>