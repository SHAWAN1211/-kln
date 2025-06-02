<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center text-primary">Book an Appointment</h2>
        <div class="card shadow p-4">
            <form action="book_appointment.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="doctor" class="form-label">Doctor:</label>
                    <input type="text" name="doctor" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Appointment Date:</label>
                    <input type="date" name="date" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="time" class="form-label">Appointment Time:</label>
                    <input type="time" name="time" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success w-100">Book Appointment</button>
            </form>
        </div>
    </div>
</body>
</html>

