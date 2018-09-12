<?php
    $hostname = "localhost";
    $username = "root";
    $password = "souvanik15";
    $database = "project";

    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        	die("Connection failed: " . mysqli_connect_error());
    }
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $sql = "INSERT INTO teachers (email, password) VALUES ('$email', '$pass')";

    if (mysqli_query($conn, $sql)) {
        	echo "Registration successful";
    } else {
        	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
