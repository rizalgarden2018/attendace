<?php
	$con = mysqli_connect("my_host","my_user","my_password","my_db");

	$name = $_POST["name"];
	$age = $_POST["age"];
	$username = $_POST["username"];
	$password = $_POST["password"];

	$statement = mysqli_prepare($con, "INSERT INTO user (name, age, username, password) VALUES (?,?,?,?)");
	mysqli_stamt_bind_param($statement, "ssis" $name, $age, $username, $Password);
	mysqli_stamt_execute($Statement);

	$response = array();
	$response["SUCCESS"]= true;

	echo json_encode($responce);
?>