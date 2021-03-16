<?php
        $cuisine = $_POST['cuisine'];
	$snacks = $_POST['snacks'];
	$nonveg = $_POST['nonveg'];
	$veg = $_POST['veg'];

	// Database connection
	$conn = new mysqli('localhost','root','','dbmsminiproject');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into foodinfo(cuisine, snacks, nonveg, veg) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $cuisine, $snacks, $nonveg, $veg);
		$execval = $stmt->execute();
		echo '<script type="text/javascript">';
                echo ' alert("Food information updated succesfully")';  //not showing an alert box.
                echo '</script>';
		$stmt->close();
		$conn->close();
	}
?>