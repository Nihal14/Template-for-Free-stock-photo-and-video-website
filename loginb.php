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
                echo("<script>alert('Invalid username or password!!');
          window.location.href = 'login.html';</script>");
            }
        } else {
            $error = "Invalid username or password";
            echo("<script>alert('Invalid username or password!!');
          window.location.href = 'login.html';</script>");
        }
    }
?>
