<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$host = "localhost";
$user = "root"; // <-- change to hosting username
$pass = "";     // <-- change to hosting password
$db   = "vision"; 
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $blog_id    = intval($_POST['blog_id']);
    $user_name  = trim($_POST['user_name']);
    $user_email = trim($_POST['user_email']);
    $comment    = trim($_POST['comment']);

    $stmt = $conn->prepare("INSERT INTO blog_comments (blog_id, user_name, user_email, comment) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $blog_id, $user_name, $user_email, $comment);

    if ($stmt->execute()) {
        echo "<script>
                alert('Comment added successfully!');
                window.location.href = document.referrer;
              </script>";
    } else {
        echo "<script>alert('Error: " . addslashes($stmt->error) . "');</script>";
    }
    $stmt->close();
}
?>
