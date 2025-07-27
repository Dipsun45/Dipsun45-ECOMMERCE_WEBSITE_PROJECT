<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->execute([$id]);

    echo "User deleted successfully.";
    header("Location: user_detail_panel.php"); // Redirect back to the list
    exit();
}
?>
