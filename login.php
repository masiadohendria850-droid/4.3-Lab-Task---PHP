<?php
// Start session to store session data
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Collect login credentials
$email = $_POST['email'];
$password = $_POST['password'];

// Dummy check for credentials (use your real validation logic here)
if ($email == "user@example.com" && $password == "password123") {
// Save user info in the session (In a real app, this would be from a database)
$_SESSION['user'] = [
'id' => 1,
'email' => $email,
'name' => 'John Doe'
];

// Redirect to profile page after successful login
header('Location: profile.php?user=1');
exit();
} else {
$error_message = "Invalid credentials.";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
body {
font-family: Arial, sans-serif;
background-color: #f0f0f0;
margin: 0;
padding: 0;
}
.container {
max-width: 400px;
margin: 100px auto;
padding: 20px;
background-color: #fff;
border-radius: 8px;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
h2 {
text-align: center;
}
label {
display: block;
margin-bottom: 8px;
font-weight: bold;
}
input[type="email"], input[type="password"] {
width: 100%;
padding: 10px;
margin-bottom: 15px;
border: 1px solid #ccc;
border-radius: 4px;
}
button {
width: 100%;
padding: 10px;
background-color: #4CAF50;
color: white;
border: none;
border-radius: 4px;
font-size: 16px;
}
button:hover {
background-color: #45a049;
}
.error {
color: red;
text-align: center;
}
.register-link {
text-align: center;
margin-top: 20px;
}
.register-link a {
text-decoration: none;
color: #4CAF50;
}
.register-link a:hover {
text-decoration: underline;
}
</style>
</head>
<body>
<div class="container">
<h2>Login</h2>

<?php if (isset($error_message)) { ?>
<div class="error"><?php echo $error_message; ?></div>
<?php } ?>

<form method="POST" action="login.php">
<label for="email">Email:</label>
<input type="email" id="email" name="email" required>
<label for="password">Password:</label>
<input type="password" id="password" name="password" required>
<button type="submit">Login</button>
</form>

<div class="register-link">
<p>Don't have an account? <a href="register.php">Register here</a></p>
</div>
</div>
</body>
</html>