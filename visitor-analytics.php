<?php
include './db.connection/db_connection.php';

$from = $_GET['from'] ?? '';
$to   = $_GET['to'] ?? '';
$isFiltered = false;

// =======================
// TOTAL VISITS
// =======================
$totalRes = $conn->query(
    "SELECT COUNT(*) AS total FROM visitor_logs"
);
$totalRow = $totalRes->fetch_assoc();
$totalCount = $totalRow['total'] ?? 0;

// =======================
// PAGE WISE QUERY
// =======================
$query = "
    SELECT page_name, COUNT(*) AS total_visits
    FROM visitor_logs
";

$params = [];
$types  = '';

if ($from && $to) {
    $query .= " WHERE DATE(visited_at) BETWEEN ? AND ?";
    $params = [$from, $to];
    $types  = "ss";
    $isFiltered = true;
}

$query .= " GROUP BY page_name ORDER BY total_visits DESC";

$stmt = $conn->prepare($query);

if ($isFiltered) {
    $stmt->bind_param($types, ...$params);
}

$stmt->execute();
$result = $stmt->get_result();
?>

<?php include 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>VISION DENTAL </title>

    <style>
        body {
            font-family: Arial;
            background: #f4f6f8;
            padding: 20px;
        }
        .va-container {
            max-width: 1000px;
            margin: auto;
        }
        .va-box {
            background: #fff;
            padding: 18px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .va-total {
            font-size: 28px;
            color: #1976d2;
        }
        .va-form input, .va-form button {
            padding: 8px;
            margin-right: 10px;
        }
        .reset-btn {
            background: #e53935;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        th {
            background: #f1f1f1;
        }
    </style>
</head>

<body>

<div class="va-container">

    <div class="va-box">
        <h2>👥 Total Pages Visits</h2>
        <div class="va-total"><?php echo $totalCount; ?></div>
    </div>

    <div class="va-box">
        <h3>📅 Filter by Date</h3>
        <form method="GET" class="va-form">
            <input type="date" name="from" value="<?php echo $from; ?>" required>
            <input type="date" name="to" value="<?php echo $to; ?>" required>
            <button type="submit">Show</button>

            <?php if ($isFiltered) { ?>
                <a href="visitor-analytics.php">
                    <button type="button" class="reset-btn">Reset</button>
                </a>
            <?php } ?>
        </form>
    </div>

    <div class="va-box">
        <h3>
            📄 Page-wise Visits
            <?php if ($isFiltered) echo " ($from → $to)"; ?>
        </h3>

        <table>
            <tr>
                <th>Page Name</th>
                <th>Total Visits</th>
            </tr>

            <?php if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['page_name']); ?></td>
                        <td><?php echo $row['total_visits']; ?></td>
                    </tr>
            <?php }} else { ?>
                <tr>
                    <td colspan="2">No data found</td>
                </tr>
            <?php } ?>
        </table>
    </div>

</div>

</body>
</html>
