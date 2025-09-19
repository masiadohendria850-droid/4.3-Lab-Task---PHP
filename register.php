<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['user'] = [
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'email' => $_POST['email']
    ];
    header("Location: profile.php?view=details");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head><title>Register</title></head>
<body>
    <h2>User Registration</h2>
    <form method="POST" action="register.php">
        Name: <input type="text" name="name" required><br><br>
        Age: <input type="number" name="age" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
