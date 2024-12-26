<?php
$conn = new mysqli("localhost", "root", "", "tour_travels");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $destination = $_POST['destination'];
    $date = $_POST['date'];

    $stmt = $conn->prepare("INSERT INTO bookings (destination, date) VALUES (?, ?)");
    $stmt->bind_param("ss", $destination, $date);

    if ($stmt->execute()) {
        echo "Booking successful! Your ID is " . $stmt->insert_id;
    } else {
        echo "Error: " . $conn->error;
    }
    $stmt->close();
}
$conn->close();
?>
