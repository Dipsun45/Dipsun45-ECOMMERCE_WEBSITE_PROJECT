<?php

include 'conn.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $msg = $_POST['msg'];
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);

   $select_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_message->execute([$name, $email, $number, $msg]);

   if($select_message->rowCount() > 0){
      $message[] = 'already sent message!';
   }else{

      $insert_message = $conn->prepare("INSERT INTO `messages`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
      $insert_message->execute([$user_id, $name, $email, $number, $msg]);

      $message[] = 'sent message successfully!';

   }

   

}


?>



<!DOCTYPE html>
<html>
<head>
   <title>All Orders</title>
   <link rel="stylesheet" href="message.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>




<section id="Home">
        <nav>
            <div class="logo">
                <img src="logo1.png">
            </div>

            <ul>
            <li><a href="http://localhost/ECOMMERCE_WEBSITE_PROJECT/user%20Frontend/Home/home.php">Home</a></li>
                <li><a href="http://localhost/ECOMMERCE_WEBSITE_PROJECT/user%20Frontend/shopping%20cart%20for%20ecom/project/project1_mobile.php">Products</a></li>
                <li><a href="http://localhost/ECOMMERCE_WEBSITE_PROJECT/user%20Frontend/Home/about.php">About-Us</a></li>
                <li><a href="http://localhost/ECOMMERCE_WEBSITE_PROJECT/user%20Frontend/shopping%20cart%20for%20ecom/project/orders.php">Order</a></li>
                <li><a href="">Contact Us</a></li>




            </ul>

            <div class="icon">
            
            <a href="http://localhost/ECOMMERCE_WEBSITE_PROJECT/user%20Frontend/user_profile/website/user_page..php">
            <i class="fas fa-user"></a></i>              

            <a href="http://localhost/ECOMMERCE_WEBSITE_PROJECT/user%20Frontend/shopping%20cart%20for%20ecom/project/shopping_cart.php">  
                <i class="fa-solid fa-cart-shopping"></i>  </a>
                
            </div>

        </nav>

        </section>




<?php
if(isset($message)){
   foreach($message as $msg){
      echo '<div class="success-message">'.$msg.'</div>';
   }
}
?>

<article class="contact">

   <form action="" method="post">
      <h3>get in touch</h3>
      <input type="text" name="name" placeholder="enter your name" required maxlength="20" class="box">
      <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
      <input type="number" name="number" min="0" max="9999999999" placeholder="enter your number" required onkeypress="if(this.value.length == 10) return false;" class="box">
      <textarea name="msg" class="box" placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" name="send" class="btn">
   </form>

</article>







<footer>
<div class="footer_main">

<div class="footer_tag">
    <h2>Location</h2>
    <p>Surat</p>
    <p>Delhi</p>
    <p>Mumbai</p>
    <p>Chennai</p>
    <p>Bangalore</p>
</div>

<div class="footer_tag">
    <h2>Populer Products</h2>
    <p>Mobile Phone</p>
    <p>Television</p>
    <p>Refrigerator</p>
    <p>Air Conditioner</p>
    <p>Computer</p>
</div>

<div class="footer_tag">
    <h2>Contact</h2>
    <p>+91 78620 41942 </p>
    <p>pateldipsun23145@gmail.com</p>

</div>

<div class="footer_tag">
    <h2>Our Service</h2>
    <p>Fast Delivery</p>
    <p>Easy Payments</p>
    <p>24 x 7 Service</p>
</div>

<div class="footer_tag">
    <h2>Follows</h2>
    <i class="fa-brands fa-facebook-f"></i>
    <i class="fa-brands fa-instagram"></i>
    <i class="fa-brands fa-linkedin-in"></i>
</div>

</div>

<p class="end"><span><i class="fa-solid fa-face-grin"></i>ShoppitSmart</span></p>

</footer>
<script>
setTimeout(() => {
   const message = document.querySelector('.success-message');
   if(message){
      message.style.opacity = '0';
      setTimeout(() => message.remove(), 1000); // Remove after fade out
   }
}, 10000); // 10000ms = 10 seconds
</script>

</body>
</html>
