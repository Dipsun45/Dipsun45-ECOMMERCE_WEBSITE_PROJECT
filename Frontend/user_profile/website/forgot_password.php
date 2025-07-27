<?php
include 'config.php';
session_start();
if(isset($_POST['submit'])){

    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $new_pass = md5($_POST['new_pass']);
    $confirm_pass = md5($_POST['confirm_pass']);

    $select = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $select->execute([$email]);

    if($select->rowCount() > 0){
        if($new_pass === $confirm_pass){
            $update = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
            $update->execute([$new_pass, $email]);

            // Redirect to login page after success
            header('Location: login.php');
            exit();
        } else {
            $message[] = 'Passwords do not match!';
        }
    } else {
        $message[] = 'No user found with this email!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Forgot Password</title>
   <link rel="stylesheet" href="css/style1.css">
</head>
<body>

<?php
if(isset($message)){
   foreach($message as $msg){
      echo '<div class="message"><span>'.$msg.'</span>
      <i class="fas fa-times" onclick="this.parentElement.remove();"></i></div>';
   }
}
?>

<section class="form-container">
   <form action="" method="post">
      <h3>Reset Your Password</h3>
      <br>
      <h1 style="color: white; font-size: 25px; text-align: left;">Email :</h1>
      <input type="email" name="email" placeholder="Enter your email" class="box" required>

      <h1 style="color: white; font-size: 25px; text-align: left;">New Password :</h1>
      <input type="password" name="new_pass" placeholder="Enter new password" class="box" required>

      <h1 style="color: white; font-size: 25px; text-align: left;">Confirm Password :</h1>
      <input type="password" name="confirm_pass" placeholder="Confirm new password" class="box" required>

      <input type="submit" name="submit" value="Reset Password" class="btn">
   </form>
</section>

</body>
</html>
