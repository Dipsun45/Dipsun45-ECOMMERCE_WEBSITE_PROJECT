<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Table Style</title>
    <link rel="stylesheet" href="user_login_detail.css">
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    

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
<h3>Admin Registered Details</h3>
<br>
<br>
<br>
</div>
<?php
// Include database connection file
include 'config.php';  // Ensure this file correctly sets up a PDO connection

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
                    <th>Image</th>
                    <th>Actions</th>
                </tr>";

        foreach ($users as $row) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['user_type']}</td>

                    <td><img src='uploaded_img1/{$row['image']}' width='50'></td>
                    <td>

                                <a href='admin_update.php?id={$row['id']}'><button>Update</button></a> | 
                        <a href='admin_delete.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\")'><button>Delete</button></a>
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


  </body>
  </html>
