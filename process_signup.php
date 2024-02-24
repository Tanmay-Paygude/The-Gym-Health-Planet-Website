<!DOCTYPE html>
<html>
<head>
	<title>Gym Signup</title>
	<style>
		body {
			background-image: url("pho1.jpg.jpg");
			background-size: cover;
			font-family: Arial, sans-serif;
			color: white;
		}

		form {
			margin: 50px auto;
			width: 400px;
			background-color: rgba(0,0,0,0.5);
			padding: 20px;
			border-radius: 10px;
		}

		input[type=text], input[type=email], input[type=password] {
			display: block;
			margin: 10px 0;
			padding: 10px;
			width: 100%;
			border-radius: 5px;
			border: none;
			background-color: #f2f2f2;
		}

		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 10px;
			border-radius: 5px;
			border: none;
			cursor: pointer;
			width: 100%;
			margin-top: 20px;
		}

		h1 {
			text-align: center;
			margin-top: 100px;
			font-size: 36px;
			text-shadow: 2px 2px #000000;
		}

		p {
			margin-top: 50px;
			font-size: 24px;
			text-align: center;
			text-shadow: 2px 2px #000000;
		}
	</style>
</head>
<body>
	

	<p>Welcome to our gym! Our facility features state-of-the-art equipment, certified trainers, and a wide range of fitness classes. Whether you're looking to lose weight, build muscle, or simply maintain a healthy lifestyle, we have everything you need to achieve your goals. Sign up today and start your fitness journey with us!</p>

	<?php
	$servername = "localhost:8111";
	$username = "root";
	$password = "";
	$dbname = "gym_db";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $name = $_POST["name"];
	  $email = $_POST["email"];
	  $password = $_POST["password"];

	  $sql = "INSERT INTO gym_signup (name, email, password) VALUES ('$name', '$email', '$password')";
	  if ($conn->query($sql) === TRUE) {
	    echo "<p>Your gym membership account created successfully</p>";
	  } else {
	    echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
	  }
	}
	?>
</body>
</html>
