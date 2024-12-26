<?php
$conn = new mysqli("localhost", "root", "", "tour_travels");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashedPassword);

    if ($stmt->fetch() && password_verify($password, $hashedPassword)) {
        echo "Login successful!";
    } else {
        echo "Invalid credentials!";
    }
    $stmt->close();
}
$conn->close();
?>
