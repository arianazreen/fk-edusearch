<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">
  
    <title>INBOX</title>
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
                         <!--<h6 class="card-subtitle text-muted">A line chart is a way of plotting data points on a line.</h6>-->
                         <img src="./imageM3/profilecirclenew.png" alt="imageM3" style="width: 35px; height: 35px;" >
                         <div class="name"> <h2>Dr.Muaz bin Rizal<h2> </div>
                      </div>
                  </div>
                </div>
                <div class="col-6 col-lg-8">
                    <div class="card flex-fill w-100">
                      <div class="card-header">
                          <h2 class="card-title mb-0"> What theoretical framework could be used to study the perception of pre-service teacher students about artificial intelligence?</h2>
                          <p>Artificial intelligence (AI) refers to the theory and development of computer systems to perform tasks that normally require human intelligence. Because of the massive, often quite unintelligible publicity that it gets, artificial intelligence is almost completely misunderstood by individuals inside the field of Education. ....</p>
                          <div class="text-muted small mt-1">From: Nur Maisarah</div>
                          <a href="./Inbox(2).php" button type="accept" class="btn btn-primary" style=" color: white; position: left; background-color: #07A492; font-weight: 400;">Accept</a>
                          <div class="text-muted small mt-1 countdown">
                            <div class="countdown-container">
                                <p class="countdown-label">Time remaining:</p>
                                <p id="timer">24:00:00</p>
                            </div>
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
    	<!-- Time -->
      <script>
    // Set the initial time to 24 hours
    var initialTime = 24 * 60 * 60 * 1000;

    // Set the date and time to count down to
    var countDownDate = new Date().getTime() + initialTime;

    // Update the countdown every 1 second
    var countdown = setInterval(function() {

      // Get the current date and time
      var now = new Date().getTime();

      // Calculate the distance between now and the countdown date
      var distance = countDownDate - now;

      // Calculate hours, minutes, and seconds
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Convert hours to two digits format
      if (hours < 10) {
        hours = "0" + hours;
      }

      // Convert minutes to two digits format
      if (minutes < 10) {
        minutes = "0" + minutes;
      }

      // Convert seconds to two digits format
      if (seconds < 10) {
        seconds = "0" + seconds;
      }

      // Display the countdown timer in the "timer" element
      document.getElementById("timer").innerHTML = hours + ":" + minutes + ":" + seconds;

      // If the countdown is finished, display a message
      if (distance < 0) {
        clearInterval(countdown);
        document.getElementById("timer").innerHTML = "Countdown expired";
      }
    }, 1000);

  </script>

     <!--css-->

     <style>
      
      .countdown {
      font-size: 12px;
      }


      .countdown-container {
      display: flex;
        align-items: center;
      }

      .countdown-label {
        margin-right: 10px;
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
