<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Success</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Payment has been successful</h2>

  <div class="alert alert-success">
    <strong>Please note your payment id!</strong> 
    <?php echo isset($_SESSION['paymentid']) ? $_SESSION['paymentid'] : 'N/A'; ?> 
    <br>
  <a href="http://localhost/ECOMMERCE_WEBSITE_PROJECT/Frontend/shopping%20cart%20for%20ecom/project/orders.php"> <button> Go To Order Page</button></a>
  </div>
  
</div>

</body>
</html>
