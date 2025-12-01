<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "vision";
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $description = $_POST['description'] ?? '';

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $img_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $upload_dir = __DIR__ . "/../uploads/gallery/";

        // Create folder if not exists
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        $img_path = $upload_dir . time() . '_' . basename($img_name);

        if (move_uploaded_file($tmp_name, $img_path)) {
            // Store relative path in DB for frontend use
            $db_path = "uploads/gallery/" . time() . '_' . basename($img_name);

            $stmt = $conn->prepare("INSERT INTO gallery (title, image) VALUES (?, ?)");
            $stmt->bind_param("ss", $title, $db_path);

            if ($stmt->execute()) {
                echo "<script>alert('Gallery image uploaded successfully'); window.location='gallery_list.php';</script>";
            } else {
                echo "Database error: " . $stmt->error;
            }
        } else {
            echo "Failed to upload image.";
        }
    } else {
        echo "Please select an image.";
    }
}
?>
