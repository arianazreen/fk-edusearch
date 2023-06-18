<?php

include("../Module1/database.php");


//create post
if (isset($_POST['create_post'])) {
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

    $sql = "INSERT INTO post (postDate, postTime, postTitle, postCategory, postKeyword, postContent, postStatus) 
                    VALUES ('$postDate', '$postTime', '$postTitle', '$postCategory', '$checkbox', '$postContent', 'Submitted')";

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

//Search funtion for homepage (by keyword)
if (isset($_GET['search_keyword'])) {
    $searchKeyword = $_GET["search_keyword"];

    $sql = "SELECT * FROM post WHERE postKeyword LIKE '%$searchKeyword%' ORDER BY postKeyword OR postCategory";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Post ID: " . $row["postID"] . "<br>";
            echo "Post Title: " . $row["postTitle"] . "<br>";
            echo "Post Category: " . $row["postCategory"] . "<br>";
            echo "Post Keyword: " . $row["postKeyword"] . "<br>";
            echo "Post Content: " . $row["postContent"] . "<br>";
            echo "<hr>";

            exit();
        }
    } else {
        echo "<script>alert('No suitable data.');</script>" . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    header("Location: M2-user_homepage.php");
    exit();
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
