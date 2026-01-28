<?php
include './db.connection/db_connection.php';

$data = json_decode(file_get_contents("php://input"), true);

$city = $data['city'] ?? 'Unknown';
$ip   = $_SERVER['REMOTE_ADDR'];
$date = date('Y-m-d');

$stmt = $conn->prepare("
    UPDATE visitor_logs
    SET city = ?
    WHERE ip_address = ? AND visit_date = ?
");

$stmt->bind_param("sss", $city, $ip, $date);
$stmt->execute();
?>
