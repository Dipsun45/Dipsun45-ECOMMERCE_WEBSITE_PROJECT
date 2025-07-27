<?php

include 'conn.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location:admin_login.php');
    exit;
}

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $delete_message = $conn->prepare("DELETE FROM `messages` WHERE id = ?");
    $delete_message->execute([$delete_id]);
    header('location:see_message.php');
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
   <title>All Messages</title>
   <link rel="stylesheet" href="set_message.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<section id="Home">
    <nav>
        <div class="logo">
            <img src="logo1.png">
        </div>

        <ul>
            <li><a href="http://localhost/ECOMMERCE_WEBSITE_PROJECT/Frontend/Home/home.php">Home</a></li>
            <li><a href="http://localhost/ECOMMERCE_WEBSITE_PROJECT/Frontend/shopping%20cart%20for%20ecom/project/project1_mobile.php">Products</a></li>
            <li><a href="http://localhost/ECOMMERCE_WEBSITE_PROJECT/Frontend/Home/About.php">About-Us</a></li>
            <li><a href="http://localhost/ECOMMERCE_WEBSITE_PROJECT/user%20frontend/user_profile/website/user_detail_panel.php">User Details Panel</a></li>
            <li><a href="http://localhost/ECOMMERCE_WEBSITE_PROJECT/Frontend/shopping%20cart%20for%20ecom/project/user_order_detail.php">User Order Details</a></li>
            <li><a href="http://localhost/ECOMMERCE_WEBSITE_PROJECT/Frontend/shopping%20cart%20for%20ecom/project/add_1.php">Add Products</a></li>
            <li><a href="">User Messages</a></li>

        </ul>

        <div class="icon">
            <a href="http://localhost/ECOMMERCE_WEBSITE_PROJECT/Frontend/user_profile/website/user_page..php">
                <i class="fas fa-user"></i>
            </a>
        </div>
    </nav>
</section>

<article class="contacts">
    <h1 class="heading">Admin Panel</h1>
    <br><br>
    <h1 class="heading">User Messages</h1>
    <div class="box-container">

        <?php
        $select_messages = $conn->prepare("SELECT * FROM `messages`");
        $select_messages->execute();
        if ($select_messages->rowCount() > 0) {
            while ($fetch_message = $select_messages->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <div class="box">
                    <p> user id : <span><?= $fetch_message['user_id']; ?></span></p>
                    <p> name : <span><?= $fetch_message['name']; ?></span></p>
                    <p> email : <span><?= $fetch_message['email']; ?></span></p>
                    <p> number : <span><?= $fetch_message['number']; ?></span></p>
                    <p> message : <span><?= $fetch_message['message']; ?></span></p>
                    <a href="see_message.php?delete=<?= $fetch_message['id']; ?>" onclick="return confirm('delete this message?');" class="delete-btn">delete</a>
                </div>
                <?php
            }
        } else {
            echo '<p class="empty">you have no messages</p>';
        }
        ?>

    </div>
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
            <p>+91 78620 41942</p>
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

</body>
</html>