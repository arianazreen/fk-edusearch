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
                <h1 class="header-title"> PROFILE </h1>
              </div>
              <div class="post-box">
                <img src="./imageM3/profilecirclenew.png" alt="imageM3" style="width: 35px; height: 35px;">
                <div class="post-info">
                  <div class="name"> Dr.Muaz bin Rizal </div>
                  <div class="date"> Expert | Edit Profile </div>
                </div>
              </div>
            </div>

                
               <div class="row">
                 <div class="col-12 col-lg-7">
                   <div class="card flex-fill w-100">
                      <div class="card-header">
                       <h2 class="card-title"> Title </h2>
                       <h6 class="card-subtitle text-muted">
                    <button class="create-button btn btn-primary" style=" color: white; position: absolute; left:70%; margin-top:-2%; background-color: #07A492; font-weight: 400;">CREATE NEW</a>
								      </h6>
                         <!--<h6 class="card-subtitle text-muted">A line chart is a way of plotting data points on a line.</h6>-->
                          <div>
                            <!--Research Input-->
                            <div class="input-container">
                                <div class="input-box">
                                <input type="text" placeholder="Research Name">
                                <i class="fas fa-trash-alt red-icon" ></i>
                            </div> 
                          </div>
                      </div>
                  </div>
                </div>
              </div>
             
               <!--2nd Row-->

               <div class="row">
                  <div class="col-12 col-lg-7">
                    <div class="card flex-fill w-100">
                      <div class="card-header">
                        <h2 class="card-title">Publications History</h2>
                      </div>
                      <div class="card-body d-flex">
                        <div class="align-self-center w-100">
                          <div class="document-wrapper">
                            <!-- Table Container -->
                            <div class="table-container">
                            <table id="myTable">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Publication Name/th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                              
                                      $query = "SELECT * FROM publications";
                                      $result = mysqli_query($connection, $query);

                                      while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['no'] . "</td>";
                                        echo "<td>" . $row['date'] . "</td>";
                                        echo "<td>" . $row['time'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>i class='fas fa-trash-alt delete-icon' onclick='deletePublication(" . $row['id'] . ")'></i>";
                                        echo "</tr>";
                                      }

                                      mysqli_close($connection);
                                      ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
  
           <!--3nd Row-->

           <div class="row">
              <div class="col-12 col-lg-7">
                <div class="card flex-fill w-100">
                  <div class="card-header">
                    <h2 class="card-title"> List of Publications </h2>
                    <div class="card-body d-flex">
                      <div class="align-self-center w-100">
                        <div class="document-wrapper">
                          <!-- Document Container -->
                          <div class="document-container">
                            <!-- Create new button -->
                            <a href="create.php" class="create-button btn btn-primary" style="color: white; position: absolute; left:70%; margin-top:-2%; background-color: #07A492; font-weight: 400;">
                              CREATE NEW
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>

            <div class="col-6 col-lg-4">
                  <div class="card flex-fill w-100">
                    <div class="card-header">
                      <h2 class="card-title mb-0">Social Media Accounts</h2>
                      <h6 class="card-subtitle text-muted">
                        <button class="create-button btn btn-primary" style="color: white; position: absolute; left: 70%; margin-top: -2%; background-color: #07A492; font-weight: 400;" onclick="createSocialMediaAccount()">CREATE NEW</button>
                      </h6>
                    </div>
                    <div>
                      <!-- Social Media Account Inputs -->
                      <div class="input-container">
                        <div class="input-box">
                          <input type="text" placeholder="Social Media Account">
                          <i class="fas fa-trash-alt red-icon"></i>
                        </div>
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
 // Get references to the button, input container, and input boxes
 const createButton = document.querySelector(".create-button");
    const inputContainer = document.querySelector(".input-container");

    // Function to create a new input box
    function createInputBox() {
      const newInputBox = document.createElement("div");
      newInputBox.classList.add("input-box");

      const newInput = document.createElement("input");
      newInput.type = "text";
      newInput.placeholder = "Research Name";

      const deleteIcon = document.createElement("i");
      deleteIcon.classList.add("fas", "fa-trash-alt", "red-icon");
      deleteIcon.addEventListener("click", function() {
        deleteResearch(newInputBox);
      });

      newInputBox.appendChild(newInput);
      newInputBox.appendChild(deleteIcon);
      inputContainer.appendChild(newInputBox);
    }

    // Add event listener to the button
    createButton.addEventListener("click", createInputBox);

    // Assign event listener to the delete icon of the first input box
    const firstInputBox = document.querySelector(".input-box");
    const firstDeleteIcon = firstInputBox.querySelector(".red-icon");
    firstDeleteIcon.addEventListener("click", function() {
      deleteResearch(firstInputBox);
    });

    // Function to handle delete action
    function deleteResearch(inputBox) {
      inputBox.remove();
    }

     src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
 
    // function deletePublication(id) {
      // Replace 'your_connection' with your actual database connection
      var connection = mysqli_connect("localhost", "username", "password", "your_database");
      var confirmDelete = confirm("Are you sure you want to delete this publication?");
      if (confirmDelete) {
        $.ajax({
          url: "deletelist.php",
          type: "POST",
          data: { id: id },
          success: function(response) {
            if (response === "success") {
              // Reload the page after successful deletion
              location.reload();
            } else {
              alert("Failed to delete publication.");
            }
          }
        });
      }
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