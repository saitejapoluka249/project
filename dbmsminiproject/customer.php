<?php
        $customername = $_POST['customername'];
	$resname = $_POST['resname'];
	$food = $_POST['food'];
	$rating = $_POST['rating'];
        $feedback = $_POST['feedback'];
        $suggestions = $_POST['suggestions'];

	// Database connection
	$conn = new mysqli('localhost','root','','dbmsminiproject');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into customerinfo(customername, resname, food, rating, feedback, suggestions) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssiss", $customername, $resname, $food, $rating, $feedback, $suggestions);
		$execval = $stmt->execute();
		echo '<script type="text/javascript">';
                echo ' alert("Customer information updated succesfully")';  //not showing an alert box.
                echo '</script>';
		$stmt->close();
		$conn->close();
	}
?>