<?php
$servername = "localhost:8111"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "gym_db"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM gym_signup WHERE name='$name' AND email='$email' AND password='$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Login successful, redirect to member area
    header("Location: member_area.php");
    exit();
  } else {
    // Login failed, display error message
    echo "<div class='alert alert-danger' role='alert'>Invalid login credentials please create your account</div>";
  }
}

$conn->close();
?>
