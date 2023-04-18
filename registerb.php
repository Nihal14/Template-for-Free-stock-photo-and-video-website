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
            echo("<script>alert('Password do not match!!');
          window.location.href = 'register.html';</script>");
        } else {
            // Encrypt password
            $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert user data into the database
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$encrypted_password')";
            mysqli_query($conn, $sql);
            
            if (mysqli_query($conn, $sql)) {
    echo("<script>alert('Registration Successful .Please Login!!');
          window.location.href = 'login.html';</script>");
}


            // Redirect to login page
            header("Location: login.html");
            exit();
        }
    }
?>