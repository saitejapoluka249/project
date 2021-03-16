<?php
        $resname = $_POST['resname'];
        $Date = $_POST['Date'];
	$location = $_POST['location'];
	$slots = $_POST['slots'];


	// Database connection
	$conn = new mysqli('localhost','root','','dbmsminiproject');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into bookings(resname, location, slots, Date) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $resname, $location, $slots, $Date);
		$execval = $stmt->execute();
		echo '<script type="text/javascript">';
                echo ' alert("Your information sent to the respected Restaurant")';  //not showing an alert box.
                echo '</script>';
		$stmt->close();
		$conn->close();
	}
?>