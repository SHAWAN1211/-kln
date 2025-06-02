<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $doctor = $_POST['doctor'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $query = "INSERT INTO patients (name, email, phone) VALUES ('$name', '$email', '$phone')
              ON DUPLICATE KEY UPDATE name='$name', phone='$phone'";
    $conn->query($query);

    $patient_id = $conn->insert_id ? $conn->insert_id : $conn->query("SELECT id FROM patients WHERE email='$email'")->fetch_assoc()['id'];

    $sql = "INSERT INTO appointments (patient_id, doctor, appointment_date, appointment_time, status) 
            VALUES ('$patient_id', '$doctor', '$date', '$time', 'Pending')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Appointment booked successfully!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }

    $conn->close();
}
?>
