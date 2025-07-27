<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch user data
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        die("User not found.");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $user_type = $_POST['user_type'];
       
        $old_image = $_POST['old_image'];
        $new_image_name = $old_image;

        // Image upload logic
        if (isset($_FILES['user_image']) && $_FILES['user_image']['error'] == 0) {
            $target_dir = "uploads/";
            $image_name = basename($_FILES["user_image"]["name"]);
            $target_file = $target_dir . $image_name;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $allowed = ['jpg', 'jpeg', 'png', 'gif'];

            if (in_array($imageFileType, $allowed)) {
                // Optional: delete old image if exists
                if (!empty($old_image) && file_exists($target_dir . $old_image)) {
                    unlink($target_dir . $old_image);
                }

                if (move_uploaded_file($_FILES["user_image"]["tmp_name"], $target_file)) {
                    $new_image_name = $image_name;
                }
            }
        }

        // Update user in DB including image
        $stmt = $conn->prepare("UPDATE users SET name = ?, email = ?, user_type = ?, image = ? WHERE id = ?");
        $stmt->execute([$name, $email, $user_type, $new_image_name, $id]);

        echo '<div style="background-color: #d4edda; color: #155724; padding: 10px 15px; font-size: 18px; border-radius: 5px; margin-top: 10px;">
        <center> Admin updated successfully.</center>
        </div>';

        // Refresh user data
        $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>

<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="add_products_laptop.css">
</head>
<body>
<header>
    <center><h1>Admin Panel</h1></center>
</header>

<section class="product-form">
    <form action="" method="POST" enctype="multipart/form-data">
        <h3>Update User Login Details</h3>

        <p>Name <span>*</span></p>
        <input type="text" name="name" placeholder="Enter Name" class="box" value="<?= htmlspecialchars($user['name']) ?>">

        <p>Email<span>*</span></p>
        <input type="text" name="email" placeholder="Enter Email" class="box" value="<?= htmlspecialchars($user['email']) ?>">

        <p>User Type<span>*</span></p>
        <input type="text" name="user_type" class="box" value="<?= htmlspecialchars($user['user_type']) ?>">

        

        <!-- Image Section -->
    
        <input type="hidden" name="old_image" value="<?= htmlspecialchars($user['image']) ?>">

        <p>Upload New Image<span>*</span></p>
        <input type="file" name="user_image" class="box" accept="image/*">

        <input type="submit" class="btn" name="add" value="Update">
    </form>
</section>
</body>
</html>
