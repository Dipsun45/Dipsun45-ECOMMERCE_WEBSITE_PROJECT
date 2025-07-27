<?php

include 'config.php';

if (isset($_POST['submit'])) {

    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $pass = filter_var(md5($_POST['pass']), FILTER_SANITIZE_STRING);
    $cpass = filter_var(md5($_POST['cpass']), FILTER_SANITIZE_STRING);
    $user_type = filter_var($_POST['user_type'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);

    $image = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $image_folder = 'uploaded_img/' . $image;

    $select = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
    $select->execute([$email]);

    if ($select->rowCount() > 0) {
        $message[] = 'User already exists!';
    } else {
        if ($pass != $cpass) {
            $message[] = 'Confirm password not matched!';
        } elseif ($image_size > 2000000) {
            $message[] = 'Image size is too large!';
        } else {
            $insert = $conn->prepare("INSERT INTO `users` (name, email, password, user_type, phone, address, image) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $insert->execute([$name, $email, $cpass, $user_type, $phone, $address, $image]);
            if ($insert) {
                move_uploaded_file($image_tmp_name, $image_folder);
                $message[] = 'Registered successfully!';
                header('Location: login.php');
            }
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
    <title>User Register</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style1.css">

    <style>
        .form-container form {
            background: #000;
            border-radius: .5rem;
            padding: 2rem;
            width: 90%;
            max-width: 800px;
            margin: 2rem auto;
        }

        
        .box {
            width: 100%;
            padding: .8rem 1rem;
            font-size: 1rem;
            margin: .5rem 0 1.5rem 0;
            border-radius: .3rem;
            border: none;
        }


        .message {
            background: #ffefef;
            color: red;
            padding: 1rem;
            margin: 1rem auto;
            width: 90%;
            max-width: 500px;
            border-left: 5px solid red;
            position: relative;
        }

        .message i {
            position: absolute;
            right: 10px;
            top: 10px;
            cursor: pointer;
        }

        .form-columns {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        .form-columns .column {
            flex: 1;
            min-width: 300px;
        }

        .form-columns h1 {
            color: white;
            font-size: 25px;
            margin-bottom: 5px;
            text-align: left;
        }

        .form-container form p {
            color: #fff;
            margin-top: 1rem;
        }

        .form-container form p a {
            color: red;
            text-decoration: none;
        }

        .form-container form p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php
if (isset($message)) {
    foreach ($message as $msg) {
        echo '
        <div class="message">
            <span>' . $msg . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}
?>

<section class="form-container">

    <form action="" method="post" enctype="multipart/form-data">
        <h3>User Register Now</h3>
        <br>

        <div class="form-columns">

            <div class="column">
                <h1>Username :</h1>
                <input type="text" required placeholder="Enter your username" class="box" name="name">

                <h1>Email :</h1>
                <input type="email" required placeholder="Enter your email" class="box" name="email">

                <h1>Password :</h1>
                <input type="password" required placeholder="Enter your password" class="box" name="pass">

                <h1>Confirm Password :</h1>
                <input type="password" required placeholder="Confirm your password" class="box" name="cpass">
            </div>

            <div class="column">
                <h1>Status :</h1>
                <select name="user_type" class="box">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>

                <h1>Phone Number :</h1>
                <input type="text" required placeholder="Enter your phone number" class="box" name="phone">

                <h1>Address :</h1>
                <input type="text" required placeholder="Enter your address" class="box" name="address">

                <h1>Image :</h1>
                <input type="file" name="image" required class="box" accept="image/jpg, image/png, image/jpeg">
            </div>

        </div>

        <p>Already have an account? <a href="login.php">Login Now</a></p>

        <input type="submit" value="Register Now" class="btn" name="submit">
    </form>

</section>

</body>
</html>
