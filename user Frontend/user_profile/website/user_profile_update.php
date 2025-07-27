<?php

include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
   exit();
}

if(isset($_POST['update'])){

   $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
   $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
   $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
   $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);

   $update_profile = $conn->prepare("UPDATE `users` SET name = ?, email = ?, phone = ?, address = ? WHERE id = ?");
   $update_profile->execute([$name, $email, $phone, $address, $user_id]);

   // Image update
   $old_image = $_POST['old_image'];
   $image = $_FILES['image']['name'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_size = $_FILES['image']['size'];
   $image_folder = 'uploaded_img/'.$image;

   if(!empty($image)){
      if($image_size > 2000000){
         $message[] = 'Image size is too large';
      }else{
         $update_image = $conn->prepare("UPDATE `users` SET image = ? WHERE id = ?");
         $update_image->execute([$image, $user_id]);
         move_uploaded_file($image_tmp_name, $image_folder);
         if(!empty($old_image)){
            unlink('uploaded_img/'.$old_image);
         }
         $message[] = 'Profile image updated!';
      }
   }

   // Password update
   $old_pass = $_POST['old_pass'];
   $previous_pass = md5($_POST['previous_pass']);
   $new_pass = md5($_POST['new_pass']);
   $confirm_pass = md5($_POST['confirm_pass']);

   if(!empty($_POST['previous_pass']) || !empty($_POST['new_pass']) || !empty($_POST['confirm_pass'])){
      if($previous_pass != $old_pass){
         $message[] = 'Old password not matched!';
      }elseif($new_pass != $confirm_pass){
         $message[] = 'Confirm password not matched!';
      }else{
         $update_password = $conn->prepare("UPDATE `users` SET password = ? WHERE id = ?");
         $update_password->execute([$confirm_pass, $user_id]);
         $message[] = 'Password has been updated!';
      }
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>User Profile Update</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $msg){
         echo '<div class="message"><span>'.$msg.'</span><i class="fas fa-times" onclick="this.parentElement.remove();"></i></div>';
      }
   }
?>

<h1 class="title" style="color: white">Update <span>User</span> Profile</h1>

<section class="update-profile-container">
   <?php
      $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
      $select_profile->execute([$user_id]);
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="Profile Image">
      <div class="flex">
         <div class="inputBox">
            <span style="color: white">Username :</span>
            <input type="text"  required placeholder="Enter New Username" name="name" required class="box" value="<?= $fetch_profile['name']; ?>">
            <span style="color: white">Email :</span>
            <input type="email" required placeholder="Enter New Email" name="email" required class="box" value="<?= $fetch_profile['email']; ?>">
            <span style="color: white">Phone No :</span>
            <input type="text" required placeholder="Enter New Phone No" name="phone" required class="box" value="<?= $fetch_profile['phone']; ?>">
            <span style="color: white">Address :</span>
            <input type="text" required placeholder="Enter New Address" name="address" required class="box" value="<?= $fetch_profile['address']; ?>">
         
         </div>

         <div class="inputBox">
         <span style="color: white">Profile Pic :</span>
            <input type="hidden" name="old_image" value="<?= $fetch_profile['image']; ?>">
            <input type="file" required placeholder="Enter New Profile Pic" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
            <input type="hidden" name="old_pass" value="<?= $fetch_profile['password']; ?>">
            <span style="color: white">Old Password :</span>
            <input type="password" class="box" name="previous_pass" placeholder="Enter old password">
            <span style="color: white">New Password :</span>
            <input type="password" class="box" name="new_pass" placeholder="Enter new password">
            <span style="color: white">Confirm Password :</span>
            <input type="password" class="box" name="confirm_pass" placeholder="Confirm new password">
         </div>
      </div>
      <div class="flex-btn">
      <input type="submit" value="Update Profile" name="update" class="btn" style="color: white;">
<a href="user_page.php" class="option-btn" style="color: white;">Go Back</a>

      </div>
   </form>
</section>

</body>
</html>
