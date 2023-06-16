<!--databse file from M1 -->
<?php
  require ('../Module1/database.php');
?>


<!DOCTYPE html>
<html>
<head>
  <title>Edit Profile</title>
</head>
<body>
  <h1>Edit Profile</h1>

  <form method="POST" action="edit_profile.php">
    <label for="name"> Name: </label>
    <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>

    <label for="role"> Role: </label>
    <input type="text" name="role" value="<?php echo $data['role']; ?>"><br>
   
    <label for="department"> Department: </label>
    <input type="text" name="department" value="<?php echo $data['departmnet']; ?>"><br>
    
    <label for="role"> Role: </label>
    <input type="text" name="role" value="<?php echo $data['role']; ?>"><br>

    <!-- Add other form fields as needed -->

    <input type="submit" value="Save">
  </form>
</body>
</html>
