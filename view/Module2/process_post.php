<?php

include("../Module1/database.php");


        //create post
        if (isset($_POST['create_post'])) {

            $postID = $_POST["postID"];
            // $userID = $_GET["userID"];
            $postTitle = $_POST["postTitle"];
            $postCategory = $_POST["postCategory"];
            $postKeyword = $_POST["postKeyword"];
            $postContent = $_POST["postContent"];
            
            $checkbox=implode(",", $postKeyword);
            //echo $alldata;

            $sql = "INSERT INTO post (postTitle, postCategory, postKeyword, postContent) 
                    VALUES ('$postTitle', '$postCategory', '$checkbox', '$postContent')";

            $result = mysqli_query($conn, $sql);

            if($result)
            {
                echo "<script>alert('Your sharing content has been posted.');</script>";
                header("Location: M2-my_questions.php");

            }

            else{
                echo "<script>alert('Error posting your content.');</script>".mysqli_error($conn);
            }

            mysqli_close($conn);


            
        }

        //update post

        if (isset($_POST['update_post'])) {

            $postID = $_POST["postID"];
            // $userID = $_GET["userID"];
            $postTitle = $_POST["postTitle"];
            $postCategory = $_POST["postCategory"];
            $postKeyword = implode(",", $_POST["postKeyword"]); 
            $postContent = $_POST["postContent"];
            
            // $checkbox=implode(",", $postKeyword);
            //echo $alldata;
        
            $sql = "UPDATE  post SET  postTitle = '$postTitle', postCategory = '$postCategory', postKeyword = '$postKeyword', postContent = '$postContent'
                    WHERE postID = '$postID'" ;       
            $result = mysqli_query($conn, $sql);
        
            if($result)
            {
                echo "<script>alert('Your content have been successfully updates.');</script>";
                header("Location: M2-my_questions.php");
        
            }
        
            else{
                echo "<script>alert('Error updating your content.');</script>".mysqli_error($conn);
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
                
                $checkbox=implode(",", $postKeyword);
                //echo $alldata;
            
                $sql = "SELECT * post" ;       
                $result = mysqli_query($conn, $sql);
            
                if($result)
                {
                    while($row = mysqli_fetch_assoc($result)){
                        echo "ID: " .$row["id"] . "Name: " . $row["name"] . "<br>";
                    }
            
                }
            
                else{
                    echo "<script>alert('Error updating your content.');</script>".mysqli_error($conn);
                }
            
                mysqli_close($conn);
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

?>
