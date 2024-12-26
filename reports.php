<?php
$conn = new mysqli("localhost", "root", "", "tour_travels");

$result = $conn->query("SELECT destination, COUNT(*) as count FROM bookings GROUP BY destination");
echo "<h3>Booking Reports:</h3><ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li>" . $row['destination'] . ": " . $row['count'] . " bookings</li>";
}
echo "</ul>";

$conn->close();
?>
