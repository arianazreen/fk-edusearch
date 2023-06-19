<?php
include("../Module1/database.php");
//create post
session_start();
if (isset($_POST['create_post'])) {
    $id = $_SESSION['username'];
    date_default_timezone_set("Asia/Kuala_Lumpur");
    // $postID = $_POST["postID"];
    // $userID = $_GET["userID"];
    $postDate = date("Y-m-d");
    $postTime = date("H:i a");
    $postTitle = $_POST["postTitle"];
    $postCategory = $_POST["postCategory"];
    $postKeyword = $_POST["postKeyword"];
    $postContent = $_POST["postContent"];

    $checkbox = implode(",", $postKeyword);
    //echo $alldata;

    $sql = "INSERT INTO post (userID, postDate, postTime, postTitle, postCategory, postKeyword, postContent, postStatus) 
                 VALUES ('$id','$postDate', '$postTime', '$postTitle', '$postCategory', '$checkbox', '$postContent', 'Submitted')";

    // $result = mysqli_query($conn, $sql);

    if (mysqli_query($conn, $sql)) {
        // echo "<script>alert('Your sharing content has been posted.');</script>";
        //  header("Location: M2-my_questions.php");
        echo "<script>alert('Your sharing content has been posted.');
                      window.location.href='M2-my_questions.php'</script>";
        exit();
    } else {
        echo "<script>alert('Error posting your content.');</script>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

//update post

if (isset($_POST['update_post'])) {

    $id = $_POST["id"];
    // $userID = $_GET["userID"];
    $postTitle = $_POST["postTitle"];
    // $postCategory = $_POST["postCategory"];
    // $postKeyword = implode(",", $_POST["postKeyword"]);
    $postContent = $_POST["postContent"];

    // $checkbox=implode(",", $postKeyword);
    //echo $alldata;

    $sql = "UPDATE post SET  postTitle = '$postTitle', postContent = '$postContent'
                    WHERE id = '$id'";


    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Your sharing content has been updated.');
                      window.location.href='M2-my_questions.php'</script>";
        exit();
    } else {
        echo "<script>alert('Error updating your content.');</script>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

//view the updates
if (isset($_POST['view_post'])) {
    //$row = stored the data

    $postID = $_POST["postID"];
    // $userID = $_GET["userID"];

    $postTitle = $row["postTitle"];
    $postCategory = $row["postCategory"];
    $postKeyword = $row["postKeyword"];
    $postContent = $_row["postContent"];

    $checkbox = implode(",", $postKeyword);
    //echo $alldata;

    $sql = "SELECT * post";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row["id"] . "Name: " . $row["name"] . "<br>";
        }
        echo "<script>alert('Your sharing content has been posted.');
                    window.location.href='M2-my_questions.php'</script>";
        exit();
    } else {
        echo "<script>alert('Error updating your content.');</script>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

//delete the data
if (isset($_POST['delete_post'])) {
    //$row = stored the data

    $id = $_POST["id"];


    $sql = "DELETE FROM post WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Your sharing content has been successfully deleted.');
                      window.location.href='M2-my_questions.php'</script>";
        exit();
    } else {
        echo "<script>alert('Error deleting your content.');</script>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

// if (isset($_GET['keyword'])) {
//     // Retrieve the search keyword from the query parameter
//     $keyword = $_GET['keyword'];

//     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     // Sanitize the search keyword to prevent SQL injection
//     $searchKeyword = $conn->real_escape_string($keyword);

//     // Construct the SQL query
//     $sql = "SELECT post.id, generaluser.userID, generaluser.userName, post.postDate, post.postTime, post.postTitle, post.postCategory, post.postKeyword,
//             post.postContent, post.postStatus, post.postDate FROM post INNER JOIN generaluser ON post.userID = generaluser.userID 
//             WHERE post.postKeyword LIKE '%$searchKeyword%'
//             ORDER BY post.postDate DESC, post.postTime DESC";

//     // Execute the query
//     $result = $conn->query($sql);

//     if ($result->num_rows > 0) {
//         // Store the search results in an array
//         $searchResults = array();
//         while ($row = $result->fetch_assoc()) {
//             $searchResults[] = $row;
//         }
//     } else {
//         $searchResults = array();
//     }

//     // Free the result set
//     $result->free_result();

//     // Close the database connection
//     $conn->close();
// }



if (isset($_GET['keyword'])) {
    // Retrieve the search keyword from the query parameter
    $keyword = $_GET['keyword'];

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize the search keyword to prevent SQL injection
    $searchKeyword = $conn->real_escape_string($keyword);

    // Construct the SQL query
    $sql = "SELECT post.id, generaluser.userID, generaluser.userName, post.postDate, post.postTime, post.postTitle, post.postCategory, post.postKeyword,
            post.postContent, post.postStatus, post.postDate FROM post INNER JOIN generaluser ON post.userID = generaluser.userID 
            WHERE post.postKeyword LIKE '%$searchKeyword%'
            ORDER BY post.postDate DESC, post.postTime DESC";

    // Execute the query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display the search results
        echo '<div class="col-12 col-lg-10">';
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $userID = $row['userID'];
            $userName = $row['userName'];
            $postDate = $row['postDate'];
            $postTime = $row['postTime'];
            $postTitle = $row['postTitle'];
            $postCategory = $row['postCategory'];
            $postKeyword = $row['postKeyword'];
            $postContent = $row['postContent'];
            $postStatus = $row['postStatus'];

            // Output the search results in the desired HTML format
            echo '
            <div class="card flex-fill w-100">
              <div class="card-header">
                <div class="post-box">
                  <img class="profile-img" src="../../dist/img/avatars/avatar-2.jpg" alt="Profile Image" style="width:30px; height:30px;">
                  <div class="post-info">
                    <div class="name">' . $userName . '</div>
                    <div class="date">' . $postDate . ' | ' . $postTime . '</div>
                    <div class="container-box">
                      <h3>' . $postTitle . '</h3>
                      <div class="line"></div>
                      <p>' . $postContent . '</p>
                    </div>
                    <div class="actions" style="color:#888">
                      <div class="icon-container">
                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>0</a>
                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>0</a>
                      </div>
                      <div class="status">' . $postStatus . '</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
        }
        echo '</div>';
    } else {
        echo "No results found.";
    }

    // Free the result set
    $result->free_result();

    // Close the database connection
    $conn->close();
}







// Check if the form was submitted and process the data
// if (isset($_POST['create_post'])) {
//     //process of accessing the data 
//     $postID = $_POST["postID"];
//     $userID = $_GET["userID"];
//     $postTitle = $_POST["postTitle"];
//     $postCategory = $_POST["postCategory"];
//     $postContent = $_POST["postContent"];
//     $postKeyword = $_POST["postKeyword"];
//     // $postKeyword = isset($_POST['postKeyword'])?  $_POST["postKeyword"] : []; 

//     $sql = "INSERT INTO post (userID, postTitle, postCategory, postContent) 
//     VALUES ('$userID', '$postTitle', '$postCategory', '$postContent')";

//     $result = mysqli_query($conn, $sql);
   
    
//     if ($result){
//         $postID = mysqli_insert_id($conn);

//         foreach ($postKeyword as $keyword) {
//             $keyword = mysqli_real_escape_string($conn, $keyword);
//             $postKeywordSql = "INSERT INTO postKeyword (postID, postKeyword) VALUES ('$postID', '$keyword')";

//             mysqli_query($conn, $postKeywordSql);
//         }

//         header("Location: M2-my_questions.php");
//         echo "<script>alert('Your sharing content has been posted.');</script>";

//     }else{
//         echo "<script>alert('Error posting your content.');</script>".mysqli_error($conn);
//     }

//     mysqli_close($conn);
    

    
    // Prepare the INSERT query
   

//}
