<?php
        $restaurantname = $_POST['restaurantname'];
	$locations = $_POST['locations'];
	$mobile = $_POST['mobile'];
	$country = $_POST['country'];

	// Database connection
	$conn = new mysqli('localhost','root','','dbmsminiproject');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into location(restaurantname, locations, mobile, country) values(?, ?, ?, ?)");
		$stmt->bind_param("ssis", $restaurantname, $locations, $mobile, $country);
		$execval = $stmt->execute();
		echo '<script type="text/javascript">';
                echo ' alert("Registration location updated succesfully")';  //not showing an alert box.
                echo '</script>';
		$stmt->close();
		$conn->close();
	}
?>