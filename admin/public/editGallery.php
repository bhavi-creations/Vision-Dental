<?php
include '../../db.connection/db_connection.php';

if (!isset($_GET['id'])) {
    die("Invalid request");
}

$id = intval($_GET['id']);

// Fetch current data
$result = $conn->query("SELECT * FROM gallery WHERE id=$id");
if ($result->num_rows == 0) {
    die("Image not found");
}

$row = $result->fetch_assoc();

// Update logic
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $image_path = $row['image'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $img_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $upload_dir = "uploads/gallery/";

        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        $new_img_name = time() . '_' . basename($img_name);
        $new_img_path = $upload_dir . $new_img_name;

        if (move_uploaded_file($tmp_name, $new_img_path)) {
            // Delete old image if exists
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $image_path = $new_img_path;
        }
    }

    // Update database
    $stmt = $conn->prepare("UPDATE gallery SET title=?, image=? WHERE id=?");
    $stmt->bind_param("ssi", $title, $image_path, $id);
    if ($stmt->execute()) {
        echo "<script>alert('Gallery updated successfully'); window.location='gallery_list.php';</script>";
    } else {
        echo "Database error: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Gallery Image</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
<div id="wrapper">
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- End of Sidebar -->

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- Topbar -->
            <?php include 'navbar.php'; ?>
            <!-- End of Topbar -->

            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Edit Gallery Image</h1>
                </div>

                <div class="row">
                    <div class="col-xl-8">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Update Image Details</h6>
                            </div>
                            <div class="card-body">
                                <form method="post" enctype="multipart/form-data">
                                    <!-- Title -->
                                    <div class="mb-3">
                                        <label class="form-label text-primary">Image Title</label>
                                        <input type="text" class="form-control" name="title" 
                                               value="<?php echo htmlspecialchars($row['title']); ?>" required>
                                    </div>

                                    <!-- Current Image -->
                                    <div class="mb-3">
                                        <label class="form-label text-primary">Current Image</label><br>
                                        <?php if (!empty($row['image'])) { ?>
                                            <img src="<?php echo $row['image']; ?>" style="max-width:200px;" class="img-thumbnail">
                                        <?php } ?>
                                    </div>

                                    <!-- Change Image -->
                                    <div class="mb-3">
                                        <label class="form-label text-primary">Change Image</label>
                                        <input type="file" name="image" class="form-control" accept="image/*">
                                    </div>

                                    <div class="row p-3">
                                        <div class="col-xl-6"></div>
                                        <button type="reset" class="btn btn-danger mx-1 col-xl-2">Clear</button>
                                        <button type="submit" name="submit" class="btn btn-success mx-1 col-xl-2">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <!-- End of Footer -->
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
</body>
</html>
