<?php
        $chefname = $_POST['chefname'];
	$experience = $_POST['experience'];
	$mobile = $_POST['mobile'];
	$previous = $_POST['previous'];

	// Database connection
	$conn = new mysqli('localhost','root','','dbmsminiproject');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into chefinfo(chefname, experience, mobile, previous) values(?, ?, ?, ?)");
		$stmt->bind_param("siis", $chefname, $experience, $mobile, $previous);
		$execval = $stmt->execute();
		echo '<script type="text/javascript">';
                echo ' alert("Chef information updated succesfully")';  //not showing an alert box.
                echo '</script>';
		$stmt->close();
		$conn->close();
	}
?>