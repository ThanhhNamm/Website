<?php


require('../includes/db.php');
require('../includes/function.php');
if(!isset($_SESSION['isUserLoggedIn'])){
  header('Location:login.php');
}
$admin=getAdminInfo($db,$_SESSION['email']);


if(isset($_POST['update_profile'])){

   
   $update_email = mysqli_real_escape_string($db, $_POST['update_email']);

   mysqli_query($db, "UPDATE `profile` SET email = '$update_email' " )  or die('query failed');
   $message[] = 'email updated succssfully!';
   
   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'uploaded_img/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'image is too large';
      }else{
         $image_update_query = mysqli_query($db, "UPDATE `profile` SET image = '$update_image' ") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
         $message[] = 'image updated succssfully!';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="profile.css">

</head>
<body>
   
<div class="update-profile">

   <?php
      $select = mysqli_query($db, "SELECT * FROM `profile`") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <?php
         if($fetch['image'] == ''){
            echo '<img src="img/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
      <div class="flex">
         <div class="inputBox">
            <!-- <span>username :</span>
            <input type="text" name="update_name" value="<?php echo $fetch['name']; ?>" class="box"> -->
            <span>your email :</span>
            <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box" autofocus required>
            <span>update your pic :</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
         </div>
         
      </div>
      <div class=  "button_profile">
      <input type="submit" value="Cập nhật" name="update_profile" class="btn">
      <a href="profile_admin.php" class="delete-btn">Trở về</a>
      </div>
   </form>

</div>

</body>
</html>