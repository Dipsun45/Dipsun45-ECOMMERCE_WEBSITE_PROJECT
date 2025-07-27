<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShoppitSmart</title>
    <link rel="stylesheet" href="product1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<?php
session_start();
include("connect.php");
?>

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
<body>




<section id="Home">
        <nav>
            <div class="logo">
                <img src="logo1.png">
            </div>

            <ul>
                <li><a href="before_home.php">Home</a></li>
                <li><a href="#Home">Products</a></li>
                <li><a href="before_About.php">About-Us</a></li>
                <li><a href="">Order</a></li>
                <li><a href="http://localhost/ECOMMERCE_WEBSITE_PROJECT/Frontend/Login%20&%20Register%20Web%20Form/">login</a></li>

            </ul>

            <div class="icon">
                

             
                <i class="fa-solid fa-cart-shopping"></i>

            </div>

        </nav>


    <body>

<div class="header">
    <div class="icon-container">
    <div class="review_profile">
        <img src="1..webp">
    </div>
    <div class="review_profile">
        <img src="4..webp">
    </div>
    <div class="review_profile">
        <img src="6..webp">
    </div>
    <div class="review_profile">
        <img src="rr.avif">
    </div>
    <div class="review_profile">
        <img src="9..webp">
    </div>
    <div class="review_profile">
        <img src="10..png">
    </div>
    <div class="review_profile">
        <img src="11..jpg">
    </div>
    <div class="review_profile">
        <img src="8..jpg">
    </div>
    <div class="review_profile">
        <img src="bbb.webp">
    </div>
    <div class="review_profile">
        <img src="12..webp">
    </div>
    </div>
</div>




<div class="main">

<div class="men_text">
    <h1><span>ShoppitSmart</span><br>Smarter Choices,<br> Smarter Shopping</h1>
</div>

<div class="main_image">
    <img src="p3.png">
</div>

</div>

<p><b>
ShoppitSmart is your go-to destination for a smarter, seamless shopping experience. With a wide range of high-quality products, unbeatable deals, and a commitment to customer satisfaction, ShoppitSmart ensures you get the best value for your money. Shop smarter, save more, and enjoy convenience like never before with ShoppitSmart!
  </b> </p>

<div class="main_btn">
<a href="#">Order Now</a>
<i class="fa-solid fa-angle-right"></i>

</div>

</section>



<!--products-->
<br>
<br>
<br>
<br>
<br>
<br>

<div class="menu" id="Menu">
<h1>Our<span>Products</span></h1>

<div class="menu_box">
<div class="menu_card">

    <div class="menu_image">
        <img src="1..webp">
    </div>

    <div class="small_card">
        <i class="fa-solid fa-heart"></i>
    </div>

    <div class="menu_info">
        <h2>ShoppitSmart</h2>
        <h3>
            Iphone 16 Pro Max
        </h3>

        <h3>₹1,44,900.00</h3>
        <div class="menu_icon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#" class="menu_btn">Order Now</a>
    </div>

</div> 

<div class="menu_card">

    <div class="menu_image">
        <img src="2..jpg">
    </div>

    <div class="small_card">
        <i class="fa-solid fa-heart"></i>
    </div>

    <div class="menu_info">
        <h2>ShoppitSmart</h2>
        <h3>
            Samsung Galaxy S24 Ultra
        </h3>
        <h3>₹1,21,999.00</h3>
        <div class="menu_icon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#" class="menu_btn">Order Now</a>
    </div>

</div> 

<div class="menu_card">

    <div class="menu_image">
        <img src="p3.png">
    </div>

    <div class="small_card">
        <i class="fa-solid fa-heart"></i>
    </div>

    <div class="menu_info">
        <h2>ShoppitSmart</h2>
        <h3>
        OnePlus 12 Specs
            </h3>
        <h3>₹64,999.00</h3>
        <div class="menu_icon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#" class="menu_btn">Order Now</a>
    </div>

</div> 

<div class="menu_card">

    <div class="menu_image">
        <img src="p4.jpg">
    </div>

    <div class="small_card">
        <i class="fa-solid fa-heart"></i>
    </div>

    <div class="menu_info">
        <h2>ShoppitSmart</h2>
        <h3>
        Vivo X100 ultra pro
        </h3>
        <h3>₹70,000.00</h3>
        <div class="menu_icon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#" class="menu_btn">Order Now</a>
    </div>

</div> 

<div class="menu_card">

    <div class="menu_image">
        <img src="p555.jpg">
    </div>

    <div class="small_card">
        <i class="fa-solid fa-heart"></i>
    </div>

    <div class="menu_info">
        <h2>ShoppitSmart</h2>
        <h3>
        OPPO FIND X7 Ultra
        </h3>
        <h3>₹70,000.00</h3>
        <div class="menu_icon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#" class="menu_btn">Order Now</a>
    </div>

</div> 

<div class="menu_card">

    <div class="menu_image">
        <img src="p6.webp">
    </div>

    <div class="small_card">
        <i class="fa-solid fa-heart"></i>
    </div>

    <div class="menu_info">
        <h2>ShoppitSmart</h2>
        <h3>Celular Motorola Edge 40 Neo</h3>
        <h3>₹69,610.08</h3>
        <div class="menu_icon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#" class="menu_btn">Order Now</a>
    </div>

</div> 

<div class="menu_card">

    <div class="menu_image">
        <img src="p7.webp">
    </div>

    <div class="small_card">
        <i class="fa-solid fa-heart"></i>
    </div>

    <div class="menu_info">
        <h2>ShoppitSmart</h2>
        <h3> Nothing Phone (2)</h3>

        <h3>₹40,000.00</h3>
        <div class="menu_icon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#" class="menu_btn">Order Now</a>
    </div>

</div> 

<div class="menu_card">

    <div class="menu_image">
        <img src="p88.webp">
    </div>

    <div class="small_card">
        <i class="fa-solid fa-heart"></i>
    </div>

    <div class="menu_info">
        <h2>ShoppitSmart</h2>
        <h3>
        Google Pixel 9 Pro                 </h3>
        <h3>₹75,000.00</h3>
        <div class="menu_icon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#" class="menu_btn">Order Now</a>
    </div>

</div> 

<div class="menu_card">

    <div class="menu_image">
        <img src="p9.webp">
    </div>

    <div class="small_card">
        <i class="fa-solid fa-heart"></i>
    </div>

    <div class="menu_info">
        <h2>ShoppitSmart</h2>
        <h3>
        Redmi Note 14 Pro+ With Snapdragon 7s                 </h3>
        <h3>₹50,000.00</h3>
        <div class="menu_icon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#" class="menu_btn">Order Now</a>
    </div>

</div> 

<div class="menu_card">

    <div class="menu_image">
        <img src="p10.webp">
    </div>

    <div class="small_card">
        <i class="fa-solid fa-heart"></i>
    </div>

    <div class="menu_info">
        <h2>ShoppitSmart</h2>
        <h3>
        Realme 14 Pro 5G
        </h3>
        <h3>₹35,000.00</h3>
        <div class="menu_icon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#" class="menu_btn">Order Now</a>
    </div>

</div> 

<div class="menu_card">

    <div class="menu_image">
        <img src="p11.webp">
    </div>

    <div class="small_card">
        <i class="fa-solid fa-heart"></i>
    </div>

    <div class="menu_info">
        <h2>ShoppitSmart</h2>
        <h3>
        Samsung Galaxy Z Flip6                </h3>
        <h3>₹25,000.00</h3>
        <div class="menu_icon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#" class="menu_btn">Order Now</a>
    </div>

</div> 

<div class="menu_card">

    <div class="menu_image">
        <img src="p13.jpg">
    </div>

    <div class="small_card">
        <i class="fa-solid fa-heart"></i>
    </div>

    <div class="menu_info">
        <h2>ShoppitSmart</h2>
        <h3>
        SAMSUNG GALAXY Z FOLD 6
        </h3>
        <h3>₹1,69,999.00</h3>
        <div class="menu_icon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <a href="#" class="menu_btn">Order Now</a>
    </div>

</div> 

</div>

</div>




<div class="review" id="Review">
<h1>Customer<span>Review</span></h1>

<div class="review_box">
<div class="review_card">

    <div class="review_profile">
        <img src="review_1.png">
    </div>

    <div class="review_text">
        <h2 class="name">MRS Flair</h2>

        <div class="review_icon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
        </div>

        <div class="review_social">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-linkedin-in"></i>
        </div>

        <p>
            I recently purchased a smart TV from ShoppitSmart, and the experience was outstanding. The website was easy to navigate, and I found the perfect model within minutes. The product arrived well-packaged and in pristine condition. I was impressed with the prompt delivery and excellent customer support that helped me track my order. I’ll definitely be shopping here again for all my electronics!
        </p>

    </div>

</div>

<div class="review_card">

    <div class="review_profile">
        <img src="review_2.png">
    </div>

    <div class="review_text">
        <h2 class="name">John Deo</h2>

        <div class="review_icon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
        </div>

        <div class="review_social">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-linkedin-in"></i>
        </div>

        <p>
            ShoppitSmart has completely changed the way I shop for electronics online. From the easy-to-use website to the detailed product descriptions and reviews, everything is top-notch. I bought a wireless earbud set, and the sound quality is amazing. What impressed me the most was their customer service—they followed up to ensure my satisfaction. Highly recommend this site for anyone looking for quality gadgets!
        </p>

    </div>

</div>

<div class="review_card">

    <div class="review_profile">
        <img src="review_3.png">
    </div>

    <div class="review_text">
        <h2 class="name">Shelvi Verma</h2>

        <div class="review_icon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
        </div>

        <div class="review_social">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-linkedin-in"></i>
        </div>

        <p>
            I’ve bought several gadgets from ShoppitSmart, including a gaming console and smartphone accessories, and each time I’ve been more impressed. The prices are reasonable, and I always find the latest models. What I appreciate most is their excellent return policy, which gives me peace of mind. I’m now a loyal customer and will continue recommending them to friends and family!
        </p>

    </div>

</div>

<div class="review_card">

    <div class="review_profile">
        <img src="review_4.png">
    </div>

    <div class="review_text">
        <h2 class="name">David Willams</h2>

        <div class="review_icon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
        </div>

        <div class="review_social">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-linkedin-in"></i>
        </div>

        <p>
            Shopping at ShoppitSmart was a breeze. I purchased a laptop, and the process was so smooth from browsing to checkout. The site’s filter options helped me narrow down my choices, and I was able to make an informed decision. My laptop arrived a day early, and the performance is exceptional. I’ll definitely return for future electronics needs. This is hands down one of the best online shopping experiences I’ve had!


        </p>

    </div>

</div>

</div>

</div>

<br>
<br>



<!--Team-->

<div class="team">
<h1>Our<span>Servises</span></h1>
<br>


<div class="team_box">
<div class="profile">
    <img src="s1.jpeg">

    <div class="info">
        <h2 class="name">Smart Shopping</h2>
        <p class="bio"></p>Personalized product <br>recommendations for a <br>smarter shopping experience.</p>
        <h2 class="name">ShoppitSmart  SSSS</h2>


    </div>

</div>

<div class="profile">
    <img src="s2.jpeg">

    <div class="info">
        <h2 class="name">Secure Payments</h2>
        <p class="bio"></p>Safe and encrypted <br>payment options for worry- <br>free transactions.</p>
        <h2 class="name">ShoppitSmart  SSSS</h2>

    </div>

</div>

<div class="profile">
    <img src="s3.jpeg">

    <div class="info">
        <h2 class="name">Speedy Delivery</h2>
        <p class="bio">Fast and reliable delivery to your doorste</p>
        <h2 class="name">ShoppitSmart  SSSS</h2>
    </div>

</div>

<div class="profile">
    <img src="s4.jpeg">

    <div class="info">
        <h2 class="name">Savings Deals</h2>
        <p class="bio">Exclusive discounts and offers to help you save more</p>
        <h2 class="name">ShoppitSmart  SSSS</h2>

    </div>

</div>

</div>

</div>







<!--Footer-->

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


<script src="all-file.js"></script>




</body>
</html>