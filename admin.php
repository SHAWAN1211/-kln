<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center text-danger">Admin - Manage Appointments</h2>
        <table class="table table-bordered table-striped shadow">
            <thead class="table-dark">
                <tr>
                    <th>Patient</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Doctor</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT a.id, p.name, p.email, p.phone, a.doctor, a.appointment_date, a.appointment_time, a.status 
                    FROM appointments a JOIN patients p ON a.patient_id = p.id";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['doctor']}</td>
                    <td>{$row['appointment_date']}</td>
                    <td>{$row['appointment_time']}</td>
                    <td><span class='badge bg-".($row['status']=='Approved'?'success':($row['status']=='Canceled'?'danger':'warning'))."'>
                        {$row['status']}
                    </span></td>
                    <td>
    <a href='update_status.php?id={$row['id']}&status=Approved' class='btn btn-success btn-sm'>Approve</a>
    <a href='update_status.php?id={$row['id']}&status=Canceled' class='btn btn-danger btn-sm'>Cancel</a>
</td>

                </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>
