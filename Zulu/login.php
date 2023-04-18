<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/loginnn.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets//logo3.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <title>Login</title>
</head>
<body>
<?php
    // Database connection
    $conn = mysqli_connect("localhost", "root", "", "zulu");

    // Login form submission
    if (isset($_POST['login'])) {
        // Get form data
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Check if username exists in the database
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            // Verify password
            if (password_verify($password, $user['password'])) {
                // Start session and redirect to dashboard
                session_start();
                $_SESSION['username'] = $username;
                header("Location: indexuser.php");
                exit();
            } else {
                $error = "Invalid username or password";
            }
        } else {
            $error = "Invalid username or password";
        }
    }
?>

<!-- Login form -->
<nav class="navbar navbar-expand-lg br-image fixed-top">
  <div class="container-fluid bg-transparent d-flex justify-content-center">
    <a class="navbar-brand text-dark d-flex align-items-center" href="index.html">
      <img src="assets/logo3.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top me-2" />
      <span class="mx-auto">Zulu</span>
    </a>
  </div>
</nav>

<div class="container">
    
  <div class="login-form">
  <h2>Login</h2>
  <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
    <!-- Login form elements here -->
 
<form method="POST" action="">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="login">Log in</button>
    <p>Don't have an account? <a href="register.php">Register here</a></p>
</form>
</div>
</div>


</body>
</html>