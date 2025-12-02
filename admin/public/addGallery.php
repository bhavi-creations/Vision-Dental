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

        // Upload folder
        $upload_dir = __DIR__ . "/../uploads/gallery/";

        // Create folder if not exists
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        // Generate unique filename => 1764588740_bg_2.png
        $unique_name = time() . "_" . basename($img_name);

        // Final upload path
        $img_path = $upload_dir . $unique_name;

        // Move file to folder
        if (move_uploaded_file($tmp_name, $img_path)) {

            // Save only filename in DB
            $db_filename = $unique_name;

            $stmt = $conn->prepare("INSERT INTO gallery (title, image) VALUES (?, ?)");
            $stmt->bind_param("ss", $title, $db_filename);

            if ($stmt->execute()) {
                echo "<script>alert('Gallery image uploaded successfully'); window.location='gallery_list';</script>";
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
