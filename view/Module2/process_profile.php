<?php
include("../Module1/database.php");


//update post

if (isset($_POST['update_profile'])) {

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
        echo "<script>alert('Your profile has been updated.');
                      window.location.href='M2-my_questions.php'</script>";
        exit();
    } else {
        echo "<script>alert('Error updating your profile.');</script>" . mysqli_error($conn);
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



