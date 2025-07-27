<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Table Style</title>
    <link rel="stylesheet" href="user_login_detail.css">
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
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
                <li><a href="">User Details Panel</a></li>
                <li><a href="http://localhost/ECOMMERCE_WEBSITE_PROJECT/Frontend/shopping%20cart%20for%20ecom/project/user_order_detail.php">User Order Details</a></li>

                <li><a href="http://localhost/ECOMMERCE_WEBSITE_PROJECT/Frontend/shopping%20cart%20for%20ecom/project/add_product.php">Add Products</a></li>


            </ul>

            <div class="icon">
            <a href="http://localhost/ECOMMERCE_WEBSITE_PROJECT/Frontend/user_profile/website/user_page..php">
            <i class="fas fa-user"></a></i> 


            
            </div>

        </nav>
    </section>
    <center>
<div class="table-title">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
   
    <br><br>
<h1>Admin Panel</h1>
<br>
<br>
<br>
<h3>User Registered Details</h3>
<br>
<br>
<br>
</div>
<?php
// Include database connection file
include 'config 1.php';  // Ensure this file correctly sets up a PDO connection

try {
    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($users) > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>User Type</th>
                    <th>Phone No</th>
                    <th>Address</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>";

        foreach ($users as $row) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['user_type']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['address']}</td>
                    <td><img src='uploaded_img/{$row['image']}' width='50'></td>
                    <td>

                                <a href='update_user_detail.php?id={$row['id']}'><button>Update</button></a> | 
                        <a href='user_delete.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\")'><button>Delete</button></a>
                    </td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No users found.";
    }
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}

// Close connection (not needed in PDO, but set to null)
$conn = null;
?>
</center>

<br><br><br><br><br><br><br><br><br><br><br><br><br>

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


  </body>
  </html>
