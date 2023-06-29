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
  
    <title>INBOX(2)</title>
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
                <h1 class="header-title"> INBOX </h1>
              </div>
                </div>

               <div class="row">
                 <div class="col-10 col-lg-4">
                   <div class="card flex-fill w-100">
                      <div class="card-header">
                      <h2 class="card-title mb-0"> Developing an equivalent parallel computing system for comparison of optimization algorithms.</h2>
                      <div>I am working on a research project in which we are doing a comparative analysis of reinforcement learning (RL) with evolutionary algorithms in solving a nonconvex and nondifferentiable optimization problem with respect to solution quality and computation time.

                        We are using python implementations, but one difficulty is that, although we can use GPUs for the execution of reinforcement learning algorithm, there is not much support for using GPUs with evolutionary algorithms in Python.

                        On the other hand, if we want to compare the algorithms with respect to computation time, we have to execute them on the same hardware (parallel computing system).

                        However, we cannot run RL algorithm on CPU based parallel system because of our resource constraints.
                        Can anyone tell us how to establish an equivalent parallel computing systems, one based on CPUs & GPUs (for RL algorithms), and the other based on CPUs only (for evolutionary algorithms), so that we can compare them with respect to computation time.
                        </div>
                        <div>Thanks in advance, Best Regards</div>
                      </div>
                  </div>
                </div>

                <div class="col-6 col-lg-8">
                <h5 class="title">Comments</h5>
								<h6 class="card-subtitle text-muted">
                                <button type="submit" class="btn btn-primary" style=" color: white; position: absolute; right:1%; margin-top:-2%; background-color: #07A492; font-weight: 400;">CREATE NEW</a>
								</h6>
                    <div class="card flex-fill w-100">
                      <div class="card-header">
                          <h2 class="card-title mb-0"> Dr. Muaz bin Rizal</h2>
                          <p>Although you are right that predicting the optimal number of CPUs for running algorithm is tough, but I am currently building my knowledge base in parallel computing, algorithms and advanced computer architecture.
                            In regards to compute resources, actually I am running my machine learning and other optimization algorithms on google collab and as you probably know, we have only one gup or tpu with dual core CPU here.</p>
                        </div>
                    </div>
                </div>
              </div>
             
              <a href="ExpProfile.php" class="btn btn-primary" style="color: white; position: absolute; right: 1%; margin-top: -2%; background-color: #DA3131; font-weight: 400;">Close Post</a>


  
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
    	<!-- Time -->
        <script>
        // Set the date we're counting down to
        var countDownDate = new Date("June 7, 2023 15:37:25").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();
            
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
            
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
            
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
        }, 1000);

        $(".create-comment-btn").click(function() {
    // Prompt the user to enter a comment
    var comment = prompt("Enter your comment:");
    if (comment !== null) {
      // Send the comment to the server using AJAX
      $.ajax({
        url: "create_comment.php", // Replace with the actual server-side file to handle the request
        method: "POST",
        data: { comment: comment },
        success: function(response) {
          // Handle the server response
          if (response.success) {
            // Comment created successfully, update the UI or perform any other necessary action
            console.log("Comment created successfully");
          } else {
            // Error occurred while creating the comment, display an error message or perform any other necessary action
            console.log("Failed to create comment");
          }
        },
        error: function() {
          // Error occurred during the AJAX request, display an error message or perform any other necessary action
          console.log("An error occurred");
        }
      });
    }
  });

</script>

     <!--css-->

     <style>
      
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
