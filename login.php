<?php
	$con = mysqli_connect("localhost","id4111610_android","123456","user");
	
		$username = $_POST("username");
		$password = $_POST("password");
		
		$statement = mysqli_prepare($con, "SELECT = FROM user WHERE username = ? AND password =?");
		mysqli_stmt_bind_param($statement,"ss", $name, $age, $username, $password);
		mysqli_stmt_store_result($statement);
		
		
		$response = array();
		$response["success"] = false;
		
		while(mysqli_stmt_fetch($statement)){
		$response["success"] = true;
		$response["name"] = $name;
		$response["age"] = $age;
		$response["username"] = $username;
		$response["password"] = $password;
	}
		echo json_encode($response);
?>
