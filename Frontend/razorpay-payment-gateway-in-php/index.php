<?php 
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Courses</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f8f9fa;
        margin: 0;
    }
    .payment-container {
        width: 100%;
        max-width: 420px;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
  </style>

</head>
<body>

<div class="payment-container">
  <p class="fw-bold">Enter Your Electronic Product Price Below.</p>
  <input type="number" class="form-control custom-price" placeholder="Enter price" min="1">
  <a href="javascript:void(0)" data-productid="<?php echo $data['id'];?>" class="btn btn-primary buynow mt-3">Buy Now</a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
$(document).on("click", ".buynow", function(){
    var productid = $(this).attr('data-productid');
    var amount = $(".custom-price").val();
    
    if(amount <= 0 || isNaN(amount)){
        alert("Please enter a valid price");
        return;
    }
    
    var options = {
        "key": "rzp_test_zHhNFsppG7bIjH",
        "amount": amount * 100,
        "name": "The Digital Oceans",
        "description": "Course Payment",
        "handler": function (response){
            var paymentid = response.razorpay_payment_id;
            
            $.ajax({
                url: "payment-process.php",
                type: "POST",
                data: {product_id: productid, payment_id: paymentid, amount: amount},
                success: function(finalresponse){
                    if(finalresponse == 'done'){
                        window.location.href = "success.php";
                    } else {
                        alert('Payment failed, check console for details.');
                        console.log(finalresponse);
                    }
                }
            })
        },
        "theme": {
            "color": "#3399cc"
        }
    };
    var rzp1 = new Razorpay(options);
    rzp1.open();
});
</script>

</body>
</html>
