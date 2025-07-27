
<?php
session_start();
include("connect1.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_page.css">
    <title>Homepage</title>
</head>
<body>
<header role="banner">
    <h1>ShoppitSmart User Panel</h1>
   
    <ul class="utilities">
        <br>
        <li class="logout warn"><a href="before_home.php">Log Out</a></li>
    </ul>
</header>


        <?php 
        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$email'");
            if ($row = mysqli_fetch_array($query)) {
            } else {
                echo "User not found.";
            }
        } else {
            echo "No user session found.";
        }
        ?>
  

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
    <h2><b>First Name :</b></h2>
    <ul>
    <li><?php echo $row['firstname'].' '?></li>
    </ul>
  </section>

    
  <section class="panel important">
    <h2><b>Last Name :</b></h2>
    <ul>
    <li><?php echo $row['lastname'].' '?></li>
    </ul>
  </section>

  <section class="panel important">
    <h2><b>Full Name :</b></h2>
    <ul>
    <li><?php echo $row['firstname'].' '.$row['lastname'];   ?></li>
    </ul>
  </section>

    
  <section class="panel important">
    <h2><b>Email Id :</b></h2>
    <ul>
    <li><?php echo isset($email) ? $email : 'N/A'; ?></li>
    </ul>
  </section>

  <section class="panel important">
    <h2><b>User Satisfaction</b></h2>
    <ul>
    <li>Welcome,<?php echo $row['lastname'].' '?>, to ShoppitSmart—your one-stop destination for a seamless and satisfying shopping experience! At ShoppitSmart, we are committed to bringing you the best in electronics with unbeatable deals, top-notch quality, and a user-friendly shopping platform designed with you in mind. Your satisfaction is our top priority, and we strive to exceed your expectations at every step of your journey with us. Whether you are browsing our extensive collection of cutting-edge gadgets, making secure transactions, or seeking prompt customer support, we aim to provide you with a hassle-free and delightful experience. Thank you for choosing ShoppitSmart, <?php echo $row['lastname'].' '?>. We’re excited to have you as part of our growing community and look forward to helping you shop smartly and confidently. Let’s embark on this incredible journey together!</li>
    </ul>
  </section>
  
    </b>
</main>


</body>
</html>





















