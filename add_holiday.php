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
<?php include 'header.php'; ?>
<style>
    .holiday-ward {
        width: 100%;
        max-width: 380px;
        margin: 30px auto;
        padding: 20px;
        background: #f9fbff;
        border-radius: 10px;
        border-left: 5px solid #4CAF50;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
        font-family: Arial, sans-serif;
    }


    @media (max-width:450px) {
        .holiday-ward {
        width: 100%;
        max-width: 330px;
        margin: 30px auto;
        
    }
}

    /* Header */
    .holiday-ward-title {
        font-size: 18px;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
        text-align: center;
    }

    /* Field */
    .holiday-ward-field {
        margin-bottom: 12px;
    }

    .holiday-ward-field label {
        font-size: 13px;
        font-weight: 600;
        color: #555;
        display: block;
        margin-bottom: 4px;
    }

    /* Inputs */
    .holiday-ward-input,
    .holiday-ward-select {
        width: 100%;
        padding: 9px 10px;
        font-size: 13px;
        border-radius: 6px;
        border: 1px solid #ccc;
    }

    .holiday-ward-input:focus,
    .holiday-ward-select:focus {
        outline: none;
        border-color: #4CAF50;
    }

    /* Button */
    .holiday-ward-btn {
        width: 100%;
        margin-top: 10px;
        padding: 10px;
        border: none;
        border-radius: 6px;
        background: #4CAF50;
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        cursor: pointer;
    }

    .holiday-ward-btn:hover {
        background: #43a047;
    }
</style>


<!-- <div class="container appointment_slot_leave my-5">








    <h3 class="appointment_slot_leave_h3">Add Holiday</h3>
    <form method="POST" action="">
        <div class="holiday-form-group">
            <label>Date</label>
            <input type="date" name="holiday_date" class="holiday-input" required>
        </div>

        <div class="holiday-form-group">
            <label>Type</label>
            <select name="holiday_type" class="holiday-select" required>
                <option value="">Select The Leave</option>
                <option value="morning">Morning (8AM–1PM)</option>
                <option value="afternoon">Afternoon (2PM–9PM)</option>
                <option value="fullday">Full Day</option>
            </select>
        </div>

        <div class="holiday-form-group">
            <label>Reason</label>
            <input type="text" name="reason" class="holiday-input" placeholder="Enter reason" required>
        </div>

        <button type="submit" name="submit" class="holiday-submit-btn">
            Save Holiday
        </button>
    </form>
</div> -->




<div class="holiday-ward">
    <div class="holiday-ward-title">Holiday Request</div>

    <form method="POST">
        <div class="holiday-ward-field">
            <label>Date</label>
            <input type="date" name="holiday_date" class="holiday-ward-input" required>
        </div>

        <div class="holiday-ward-field">
            <label>Leave Type</label>
            <select name="holiday_type" class="holiday-ward-select" required>
                <option value="">Select</option>
                <option value="morning">Morning (8AM–1PM)</option>
                <option value="afternoon">Afternoon (2PM–9PM)</option>
                <option value="fullday">Full Day</option>
            </select>
        </div>

        <div class="holiday-ward-field">
            <label>Reason</label>
            <input type="text" name="reason" class="holiday-ward-input" placeholder="Reason" required>
        </div>

        <button type="submit" name="submit" class="holiday-ward-btn">
            Save Holiday
        </button>
    </form>
</div>

