<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zulu";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the email address from the form submission
$email = mysqli_real_escape_string($conn, $_POST['email']);

// Insert the email address into the database
$sql = "INSERT INTO subscribers (email) VALUES ('$email')";
if (mysqli_query($conn, $sql)) {
    echo("<script>alert('Thank You for Subscribing !!');
          window.location.href = 'index.html';</script>");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>