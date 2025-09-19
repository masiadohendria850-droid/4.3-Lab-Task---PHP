<?php
session_start();

if (!isset($_SESSION['user'])) {
    echo "No user data found. Please register first.";
    exit();
}

if ($_GET['view'] === 'details') {
    $user = $_SESSION['user'];
} else {
    echo "Invalid view parameter.";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head><title>User Profile</title></head>
<body>
    <h2>User Profile</h2>
    <p><strong>Name:</strong> <?= htmlspecialchars($user['name']) ?></p>
    <p><strong>Age:</strong> <?= htmlspecialchars($user['age']) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
</body>
</html>
