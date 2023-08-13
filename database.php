<?php
$servername = "localhost";
$username = "root";
$password = 1234;
$dbname = "phpmyadmin";

$mysqli = new mysqli($servername,$username,$password,$dbname);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Assuming you have a table named 'users'
// $query = "INSERT INTO signup (username, email, password) VALUES (?, ?, ?)";

$query = "SELECT * FROM pma_bookmark";
// Initialize a prepared statement
// $stmt = $mysqli->stmt_init();

// if ($stmt->prepare($query)) {
//     // Bind parameters and execute the statement
//     $username = $_POST['user'];
//     $email = $_POST['email'];
//     $password = $_POST['pass']; // Remember to hash your password
//     $stmt->bind_param("sss", $username, $email, $password);

//     if ($stmt->execute()) {
//         echo "Registration successful.";
//     } else {
//         echo "Error: " . $stmt->error;
//     }

//     // Close the statement
//     $stmt->close();
// } else {
//     echo "Error: " . $mysqli->error;
// }

// Close the connection
$mysqli->close();
?>
?>