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
    <title>Register</title>
</head>
<body>
    

<?php
    // Database connection
    $conn = mysqli_connect("localhost", "root", "", "zulu");

    // Registration form submission
    if (isset($_POST['register'])) {
        // Get form data
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

        // Check if passwords match
        if ($password != $confirm_password) {
            $error = "Passwords do not match";
        } else {
            // Encrypt password
            $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert user data into the database
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$encrypted_password')";
            mysqli_query($conn, $sql);
            
            if (mysqli_query($conn, $sql)) {
    echo("<script>alert('Registration Successful .Please Login!!');
          window.location.href = 'login.php';</script>");
}


            // Redirect to login page
            header("Location: login.php");
            exit();
        }
    }
?>
<nav class="navbar navbar-expand-lg br-image fixed-top">
  <div class="container-fluid bg-transparent d-flex justify-content-center">
    <a class="navbar-brand text-dark d-flex align-items-center" href="index.html">
      <img src="assets/logo3.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top me-2" />
      <span class="mx-auto">Zulu</span>
    </a>
  </div>
</nav>


<!-- Registration form -->
<div class="container">
  <div class="login-form">
    <h2>Register</h2>
    <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
    <!-- Login form elements here -->
<form method="POST" action="">
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
    <button type="submit" name="register">Register</button>
    
    <p>Already have an account? <a href="login.php">Log in</a></p>
</form>
</div>
</div>


</body>
</html>