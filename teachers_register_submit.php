<?php
    session_start();
    $hostname = "localhost";
    $username = "root";
    $password = "souvanik15";
    $database = "project";
    $nc =0;
    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        	die("Connection failed: " . mysqli_connect_error());
    }
    
    $email = $_POST["email"];
    $pass = $_POST["password"];
    
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        	die(mysqli_error($conn));
    }

    while ($row=mysqli_fetch_array($result)) {
        $nc++;
	    if($email== $row['email'] && $pass==$row['password']){
	        $count =1;
	        break;
	    }
    }
    
    if($count==1){
	    echo "welcome " .$row['name']."</br>"."</br>";
	    $_SESSION['name'] = $row['name'];    
	}else{
	    echo "Access Denied";
	}           	

    mysqli_close($conn);

?>

