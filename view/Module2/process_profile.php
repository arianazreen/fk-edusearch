<?php
include("../Module1/database.php");

session_start();
//update profile

if (isset($_POST['update_profile'])) {


    $id = $_SESSION['username'];
    $id = $_POST['id'];
    // $userID = $_POST['userID'];
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userRole = $_POST['userRole'];
    $userPhoneNo = $_POST['userPhoneNo'];
    $userPass = $_POST['userPass'];
    // $userSocMedia = $_POST['userSocMedia'];
    // $userCourse = $_POST['userCourse'];

    $sql = "UPDATE generaluser SET  userName = '$userName', userEmail = '$userEmail', userPhoneNo = '$userPhoneNo', 
            userPass = '$userPass' WHERE id = '$id'";


    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Your profile has been updated.');
                      window.location.href='M2-manage-user-profile.php'</script>";
        exit();
    } else {
        echo "<script>alert('Error updating your profile.');</script>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

//view the updates
if (isset($_POST['view_update'])) {
    //$row = stored the data

    $id = $_POST['id'];
    $userID = $_POST['userID'];
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userRole = $_POST['userRole'];
    $userPhoneNo = $_POST['userPhoneNo'];
    $userPass = $_POST['userPass'];
    $userSocMedia = $_POST['userSocMedia'];

    $sql = "SELECT * generaluser";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row["id"] . "Name: " . $row["name"] . "<br>";
        }
        echo "<script>alert('Your sharing content has been posted.');
                    window.location.href='M2-manage_user_profile.php'</script>";
        exit();
    } else {
        echo "<script>alert('Error updating your content.');</script>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}


// //Search funtion for homepage (by keyword)
// if (isset($_GET['search_keyword'])) {
//     $searchKeyword = $_GET["search_keyword"];

//     $sql = "SELECT * FROM post WHERE postKeyword LIKE '%$searchKeyword%' ORDER BY postKeyword OR postCategory";
//     $result = mysqli_query($conn, $sql);

//     if ($result) {
//         while ($row = mysqli_fetch_assoc($result)) {
//             echo "Post ID: " . $row["postID"] . "<br>";
//             echo "Post Title: " . $row["postTitle"] . "<br>";
//             echo "Post Category: " . $row["postCategory"] . "<br>";
//             echo "Post Keyword: " . $row["postKeyword"] . "<br>";
//             echo "Post Content: " . $row["postContent"] . "<br>";
//             echo "<hr>";

//             exit();
//         }
//     } else {
//         echo "<script>alert('No suitable data.');</script>" . mysqli_error($conn);
//     }

//     mysqli_close($conn);
// } else {
//     header("Location: M2-user_homepage.php");
//     exit();
// }
