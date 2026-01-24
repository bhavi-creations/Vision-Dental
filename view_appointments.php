<?php
include __DIR__ . '/db.connection/db_connection.php';

/* ---- Filters ---- */
$from_date = $_GET['from_date'] ?? '';
$to_date   = $_GET['to_date'] ?? '';
$search    = trim($_GET['search'] ?? '');

$sql = "SELECT * FROM appointments WHERE 1";

if (!empty($from_date) && !empty($to_date)) {
    $sql .= " AND appointment_date BETWEEN '$from_date' AND '$to_date'";
}

if (!empty($search)) {
    $sql .= " AND (
        name LIKE '%$search%' OR 
        phone LIKE '%$search%' OR 
        email LIKE '%$search%'
    )";
}

$sql .= " ORDER BY appointment_date DESC, time_slot ASC";
$result = $conn->query($sql);
?>
<?php
include './db.connection/db_connection.php';

if (isset($_POST['submit'])) {
    $date   = $_POST['holiday_date'];
    $type   = $_POST['holiday_type'];
    $reason = $_POST['reason'];

    $conn->query("INSERT INTO holidays (holiday_date, holiday_type, reason) 
                   VALUES ('$date','$type','$reason')");

    echo "<script>alert('Holiday Added');</script>";
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vision Multispeciality Dental Hospital</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-purple: #7B3F8E;
            --secondary-teal: #00BFB3;
            --dark-bg: #1a1a1a;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Top Bar */
        .top-bar {
            background: linear-gradient(135deg, var(--primary-purple), #9B5FAE);
            color: white;
            padding: 10px 0;
            font-size: 14px;
        }

        .top-bar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        .top-bar i {
            color: var(--secondary-teal);
            margin-right: 5px;
        }

        /* Main Header */
        .main-header {
            background: white;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar {
            padding: 15px 0;
        }

        .navbar-brand img {
            height: 60px;
            transition: transform 0.3s;
        }

        .navbar-brand:hover img {
            transform: scale(1.05);
        }

        /* Navigation Links */
        .navbar-nav .nav-link {
            color: var(--dark-bg);
            font-weight: 500;
            padding: 8px 15px;
            margin: 0 5px;
            position: relative;
            transition: all 0.3s;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: var(--primary-purple);
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--secondary-teal);
            transition: all 0.3s;
            transform: translateX(-50%);
        }

        .navbar-nav .nav-link:hover::after {
            width: 80%;
        }

        /* Dropdown Menu */
        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
            padding: 15px;
            margin-top: 10px;
        }

        .dropdown-item {
            padding: 10px 20px;
            border-radius: 5px;
            transition: all 0.3s;
            color: var(--dark-bg);
        }

        .dropdown-item:hover {
            background: linear-gradient(135deg, var(--primary-purple), #9B5FAE);
            color: white;
            transform: translateX(5px);
        }

        .dropdown-item i {
            color: var(--secondary-teal);
            margin-right: 10px;
            width: 20px;
        }

        /* Mega Menu */
        .mega-menu {
            min-width: 800px;
            padding: 25px;
        }

        .mega-menu-column {
            padding: 0 20px;
        }

        .mega-menu-title {
            color: var(--primary-purple);
            font-weight: 600;
            font-size: 16px;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--secondary-teal);
        }

        /* Appointment Button */
        .btn-appointment {
            background: linear-gradient(135deg, var(--secondary-teal), #00A89A);
            color: white;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 600;
            border: none;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(0, 191, 179, 0.3);
        }

        .btn-appointment:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 191, 179, 0.4);
            color: white;
        }

        /* Mobile Menu */
        .navbar-toggler {
            border: 2px solid var(--primary-purple);
            padding: 8px 12px;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%237B3F8E' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        @media (max-width: 991px) {
            .mega-menu {
                min-width: 100%;
            }

            .mega-menu-column {
                margin-bottom: 20px;
            }

            .dropdown-menu {
                border-left: 3px solid var(--secondary-teal);
            }
        }

        /* Submenu Indicator */
        .dropdown-toggle::after {
            margin-left: 8px;
            border-top: 0.35em solid;
            border-right: 0.35em solid transparent;
            border-left: 0.35em solid transparent;
        }

        /* appointment  */
        .appointment-card {
            max-width: 450px;
            background: #ffffff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            animation: fadeUp 0.5s ease-in-out;
        }

        .appointment-title {
            text-align: center;
            font-weight: 700;
            color: var(--primary-purple);
            ;
            margin-bottom: 25px;
            position: relative;
        }

        .appointment-title::after {
            content: "";
            width: 60px;
            height: 3px;
            background: var(--primary-purple);
            display: block;
            margin: 8px auto 0;
            border-radius: 10px;
        }

        .form-label {
            font-weight: 600;
            color: #444;
        }

        .form-control {
            border-radius: 10px;
            padding: 10px 14px;
            border: 1px solid #ddd;
        }

        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.15rem rgba(13, 110, 253, 0.25);
        }

        .save-holiday-btn {
            width: 100%;
            background: var(--primary-purple);
            color: #fff;
            border: none;
            padding: 12px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .save-holiday-btn:hover {
            background: var(--primary-purple);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px var(--primary-purple);
            ;
        }

        /* Small animation */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <!-- Top Bar -->
    <!-- <div class="top-bar d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="tel:+911234567890"><i class="fas fa-phone"></i> +91 123 456 7890</a>
                    <a href="mailto:info@visiondental.com"><i class="fas fa-envelope"></i> info@visiondental.com</a>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#"><i class="fas fa-clock"></i> Mon - Sat: 9:00 AM - 8:00 PM</a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Main Header -->
    <header class="main-header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="assets/img/vision/large_icon.png" alt="Vision Dental Hospital" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'200\' height=\'60\'%3E%3Ctext x=\'10\' y=\'40\' fill=\'%237B3F8E\' font-size=\'24\' font-weight=\'bold\'%3EVISION%3C/text%3E%3C/svg%3E'">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a>
                        </li>

                        <!-- Owners Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Owners
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="about-us.php"><i class="fas fa-users"></i> About Us</a></li>
                                <li><a class="dropdown-item" href="we_promise.php"><i class="fas fa-handshake"></i> We Promise</a></li>
                            </ul>
                        </li>

                        <!-- Treatments Mega Menu -->
                        <li class="nav-item dropdown position-static">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Treatments
                            </a>
                            <div class="dropdown-menu mega-menu">
                                <div class="row">
                                    <!-- Pain Relief -->
                                    <div class="col-lg-3 mega-menu-column">
                                        <h6 class="mega-menu-title">Pain Relief</h6>
                                        <a class="dropdown-item" href="root-canal-treatments-in-guntur.php"><i class="fas fa-tooth"></i> Root Canal Treatment</a>
                                        <a class="dropdown-item" href="wisdom-tooth-removel-treatments-in-guntur.php"><i class="fas fa-teeth"></i> Wisdom Tooth Removal</a>
                                        <a class="dropdown-item" href="jaw-pain-correction-treatments-in-guntur.php"><i class="fas fa-head-side-mask"></i> Jaw Pain / Correction</a>
                                    </div>

                                    <!-- Teeth Replacement -->
                                    <div class="col-lg-3 mega-menu-column">
                                        <h6 class="mega-menu-title">Teeth Replacement</h6>
                                        <a class="dropdown-item" href="dentaldentures-treatments-in-guntur.php"><i class="fas fa-teeth-open"></i> Dentures</a>
                                        <a class="dropdown-item" href="dentalcrown-bridge-treatment-in-guntur.php"><i class="fas fa-crown"></i> Crowns & Bridges</a>
                                        <a class="dropdown-item" href="dental-implants-treatments-in-guntur.php"><i class="fas fa-tooth"></i> Dental Implants</a>
                                    </div>

                                    <!-- Teeth Alignment -->
                                    <div class="col-lg-3 mega-menu-column">
                                        <h6 class="mega-menu-title">Teeth Alignment</h6>
                                        <a class="dropdown-item" href="invisalignaligners_clearaligners_treatment-in-guntur.php"><i class="fas fa-align-center"></i> Invisalign</a>
                                        <a class="dropdown-item" href="clear-aligners-treatment-in-guntur.php"><i class="fas fa-teeth"></i> Clear Aligners</a>
                                        <a class="dropdown-item" href="dentalbraces-treatments-in-guntur.php"><i class="fas fa-grip-lines"></i> Braces</a>
                                        <a class="dropdown-item" href="laminate-veneers-treatments-in-guntur.php"><i class="fas fa-smile"></i> Laminate Veneers</a>
                                        <a class="dropdown-item" href="smile-designing-treatments-in-guntur.php"><i class="fas fa-grin-stars"></i> Smile Designing</a>
                                    </div>

                                    <!-- Laser Veda -->
                                    <div class="col-lg-3 mega-menu-column">
                                        <h6 class="mega-menu-title">Laser Veda</h6>
                                        <a class="dropdown-item" href="laser-assisted-teeth-cleaning-treatments-in-guntur.php"><i class="fas fa-sparkles"></i> Laser Teeth Cleaning</a>
                                        <a class="dropdown-item" href="gum-depigmentation-treatments-in-guntur.php"><i class="fas fa-palette"></i> Gum Depigmentation</a>
                                        <a class="dropdown-item" href="laser-teeth-whitening-treatments-in-guntur.php"><i class="fas fa-star"></i> Laser Teeth Whitening</a>
                                        <a class="dropdown-item" href="laser-gum-surgeries-treatments-in-guntur.php"><i class="fas fa-scalpel"></i> Laser Gum Surgeries</a>
                                        <a class="dropdown-item" href="mouth-ulcers-treatments-in-guntur.php"><i class="fas fa-notes-medical"></i> Mouth Ulcers</a>
                                        <a class="dropdown-item" href="precancerous-lesion-in-mouth-treatments-in-guntur.php"><i class="fas fa-shield-virus"></i> Precancerous Lesions</a>
                                        <a class="dropdown-item" href="laser-crown-lengthening-treatments-in-guntur.php"><i class="fas fa-ruler-vertical"></i> Crown Lengthening</a>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <!-- Child Dentistry -->
                                    <div class="col-lg-3 mega-menu-column">
                                        <h6 class="mega-menu-title">Child Dentistry</h6>
                                        <a class="dropdown-item" href="pediatric-dentist-treatments-in-guntur.php"><i class="fas fa-child"></i> Pediatric Dentist</a>
                                        <a class="dropdown-item" href="paedodontist-doctors-treatments-in-guntur.php"><i class="fas fa-baby"></i> Paedodontist Doctors</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="equipment-in-vision-multispeciality-dental-hospital-in-guntur.php">Equipment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blogs.php">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="reviews-testimonials.php">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="smile-gallery.php">Smile Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact-us-vision-multispeciality-dental-hospital.php">Contact Us</a>
                        </li>
                        <li class="nav-item ms-lg-3">
                            <a class="btn btn-appointment" href="appointment.php">
                                <i class="fas fa-calendar-check me-2"></i>Book Appointment
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <!DOCTYPE html>
    <html>

    <head>
        <title>Appointments List</title>
        <style>
            body {
                background: #f4f6f9;
                font-family: 'Segoe UI', sans-serif;
            }

            .filter-box,
            .table-container {
                background: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 2px 6px rgba(0, 0, 0, .1);
                margin-bottom: 25px;
            }

            table th {
                background: #0d6efd;
                color: #fff;
                white-space: nowrap;
            }

            table td {
                vertical-align: middle;
            }
        </style>
    </head>

    <body>
        <div class="container py-5">
            <h2 class="text-center mb-4">📋 Booked Appointments</h2>

            <!-- Filters -->
            <div class="filter-box">
                <form method="GET" class="row g-3">
                    <div class="col-md-3">
                        <label>From Date</label>
                        <input type="date" name="from_date" class="form-control" value="<?= htmlspecialchars($from_date) ?>">
                    </div>
                    <div class="col-md-3">
                        <label>To Date</label>
                        <input type="date" name="to_date" class="form-control" value="<?= htmlspecialchars($to_date) ?>">
                    </div>
                    <div class="col-md-4">
                        <label>Name / Phone / Email</label>
                        <input type="text" name="search" class="form-control" value="<?= htmlspecialchars($search) ?>">
                    </div>
                    <div class="col-md-2 d-grid">
                        <button class="btn btn-primary">Filter</button>
                        <a href="view_appointments.php" class="btn btn-outline-secondary mt-2">Reset</a>
                    </div>
                </form>

                <?php
                if (!empty($from_date) && !empty($to_date)) {
                    $count = $conn->query("SELECT COUNT(*) total FROM appointments 
                WHERE appointment_date BETWEEN '$from_date' AND '$to_date'")
                        ->fetch_assoc()['total'];
                    echo "<p class='mt-3'><strong>Total Appointments:</strong> $count</p>";
                }
                ?>
            </div>

            <!-- Table -->
            <div class="table-container">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date</th>
                                <th>Time Slot</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php if ($result->num_rows > 0) {
                                $i = 1;
                                while ($row = $result->fetch_assoc()) { ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= htmlspecialchars($row['name']); ?></td>
                                        <td><?= htmlspecialchars($row['email']); ?></td>
                                        <td><?= htmlspecialchars($row['phone']); ?></td>
                                        <td><?= htmlspecialchars($row['appointment_date']); ?></td>
                                        <td><?= htmlspecialchars($row['time_slot']); ?></td>
                                        <td><?= nl2br(htmlspecialchars($row['message'])); ?></td>
                                        <td>
                                            <a href="delete_appointment.php?id=<?= $row['id']; ?>"
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('Delete this appointment?')">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                            } else { ?>
                                <tr>
                                    <td colspan="8" class="text-center">No Appointments Found</td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </body>

    </html>