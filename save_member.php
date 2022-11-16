<?php
	//starting the session
	session_start();

	//including the database connection
	require_once 'conn.php';
	
	if(ISSET($_POST['register'])){
		// Setting variables
		$username = $_POST['username'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		
		// Insertion Query
		$query = "INSERT INTO `member` (username, password, firstname, lastname) VALUES(:username, :password, :firstname, :lastname)";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':password', $password);
		$stmt->bindParam(':firstname', $firstname);
		$stmt->bindParam(':lastname', $lastname);
		
		// Check if the execution of query is success
		if($stmt->execute()){
			//setting a 'success' session to save our insertion success message.
			$_SESSION['success'] = "Successfully created an account";

			//redirecting to the index.php 
			header('location: Register.php');
		}

	}
?>