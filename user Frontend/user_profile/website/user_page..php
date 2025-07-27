<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user-page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Homepage</title>
</head>
<body>
<header role="banner">
    <h1>ShoppitSmart User Panel</h1>
    <ul class="utilities">
        <br>
 <li class="logout warn"><a href="user_profile_update.php">Update Profile</a></li>

        <li class="logout warn"><a href="logout.php">Log Out</a></li>
    </ul>
</header>

<div class="profile-container">
<?php
      $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
      $select_profile->execute([$user_id]);
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
   ?>
    <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="User Image" class="profile-img">
</div>

<nav role='navigation'>
  <ul class="main">
    <li class="dashboard"><a href="">Speedy Growth</a></li>
    <li class="edit"><a href="">Smart Information</a></li>
    <li class="write"><a href="">Unique Comments</a></li>
    <li class="comments"><a href="">Unique Review</a></li>
    <li class="users"><a href="">Amazing Users</a></li>
  </ul>
</nav>
<main role="main">


<b>
  
  <section class="panel important">
  <?php
      $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
      $select_profile->execute([$user_id]);
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
   ?>
    <h2><b>First Name :</b></h2>
    <ul>
    <li><?= $fetch_profile['name']; ?></li>
    </ul>
  </section>



    
  <section class="panel important">
  <?php
      $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
      $select_profile->execute([$user_id]);
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
   ?>
    <h2><b>Email Id :</b></h2>
    <ul>
    <li><?= $fetch_profile['email']; ?></li>
    </ul>
  </section>

  <section class="panel important">
  <?php
      $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
      $select_profile->execute([$user_id]);
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
   ?>
    <h2><b>Status :</b></h2>
    <ul>
    <li><?= $fetch_profile['user_type']; ?></li>
    </ul>
  </section>

  <section class="panel important">
  <?php
      $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
      $select_profile->execute([$user_id]);
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
   ?>
    <h2><b>Phone no :</b></h2>
    <ul>
    <li><?= $fetch_profile['phone']; ?></li>
    </ul>
  </section>

  <section class="panel important">
  <?php
      $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
      $select_profile->execute([$user_id]);
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
   ?>
    <h2><b>Address :</b></h2>
    <ul>
    <li><?= $fetch_profile['address']; ?></li>
    </ul>
  </section>

  <section class="panel important">
    <h2><b>User Satisfaction</b></h2>
    <ul>
    <li>Welcome,<?= $fetch_profile['name']; ?>, to ShoppitSmart—your one-stop destination for a seamless and satisfying shopping experience! At ShoppitSmart, we are committed to bringing you the best in electronics with unbeatable deals, top-notch quality, and a user-friendly shopping platform designed with you in mind. Your satisfaction is our top priority, and we strive to exceed your expectations at every step of your journey with us. Whether you are browsing our extensive collection of cutting-edge gadgets, making secure transactions, or seeking prompt customer support, we aim to provide you with a hassle-free and delightful experience. Thank you for choosing ShoppitSmart, <?= $fetch_profile['name']; ?>. We’re excited to have you as part of our growing community and look forward to helping you shop smartly and confidently. Let’s embark on this incredible journey together!</li>
    </ul>
  </section>
  
    </b>
</main>


</body>
</html>





















