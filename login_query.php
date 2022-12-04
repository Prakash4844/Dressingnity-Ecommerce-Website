<?php
	session_start();
	require_once 'conn.php';
	
	if(ISSET($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = "SELECT COUNT(*) as count FROM `member` WHERE `username` = :username AND `password` = :password";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':password', $password);
		$stmt->execute();
		$row = $stmt->fetch();
		
		$count = $row['count'];
		
		if($count > 0){
			
		// Test Code
		$Userinfoquery = "SELECT * FROM `member`";
		// $statement = $conn->prepare($Userinfoquery);
		// $statement->execute();
		// $row = $statement->fetchAll();
		// $LoggedUsername = $row['username'];

		$result = $conn->query($Userinfoquery);
		foreach($result as $row)
    	{
        	$LoggedUsername = $row['username'] . "\n";
			print_r($LoggedUsername);
			$LoggedEmail = $row['email'] . "\n";
			$LoggedFirstName = $row['firstname'] . "\n";
			$LoggedLastName = $row['lastname'] . "\n";
			break;
    	}
		// Test Code
			$_SESSION['username'] = $username;
			$_SESSION['Logged-in'] = "Logged-in";
			header('location:index.php');
		}else{
			$_SESSION['error'] = "Invalid username or password";
			header('location: Login.php');
		}
	}
?>