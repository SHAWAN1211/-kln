<?php
include 'db.php';

if (isset($_GET['id']) && isset($_GET['status'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];

    $sql = "UPDATE appointments SET status='$status' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Appointment status updated to $status!'); window.location='admin.php';</script>";
    } else {
        echo "<script>alert('Error updating status: " . $conn->error . "');</script>";
    }

    $conn->close();
}
?>
