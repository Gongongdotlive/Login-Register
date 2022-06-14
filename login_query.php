<?php
	//starting the session
	session_start();
	//including the database connection
	require_once 'conn.php';
 
	if(ISSET($_POST['login'])){
		// Setting variables
		$username = $_POST['username'];
		$password = $_POST['password'];
 
		// Select Query for counting the row that has the same value of the given username and password. This query is for checking if the access is valid or not.
		$query = "SELECT password,username FROM `member` WHERE `username` = :username ";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':username', $username);
		
		$stmt->execute();
		$row = $stmt->fetch();
        $encryptedPassWord= $row['password'];
        //Dy-ecrypt password
		$verify = password_verify($password,$encryptedPassWord);
		if ($verify) {
			
			header('location:home.php');
		} else {
			echo 'Incorrect Password!';
		}
		//
	}
?>