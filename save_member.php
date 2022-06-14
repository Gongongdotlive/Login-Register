<?php
	
		
	//starting the session
	session_start();
 
	//including the database connection
	require_once 'conn.php';
 
	if(ISSET($_POST['register']))
	   {
		$username = $_POST['username'];
		$password = $_POST['password'];
		//Encrypt password
		$encrypted_pwd =password_hash($password,PASSWORD_DEFAULT);

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$query = "SELECT COUNT(*) as count FROM `member` WHERE `username` = :username";

		$stmt = $conn->prepare($query);
		$stmt->bindParam(':username', $username);
		$stmt->execute();
		$row = $stmt->fetch();
		$count = $row['count'];

		if($count>0){
        
			$_SESSION['error'] = "username already exist";
			header('location: index.php');
		}else{

			$query = "INSERT INTO `member` (username, password, firstname, lastname) VALUES(:username, :password, :firstname, :lastname)";
			$stmt = $conn->prepare($query);
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':password', $encrypted_pwd);
		    $stmt->bindParam(':firstname', $firstname);
		    $stmt->bindParam(':lastname', $lastname);

	   // Check if the execution of query is success
			  if($stmt->execute()){
			  //setting a 'success' session to save our insertion success message.
				$_SESSION['success'] = "Successfully created an account";

				//redirecting to the index.php 
			   header('location: index.php');
			  }
			
		
		}

	   }


	   
		

		
		
		

		

		

		
 
		
	 
      

 
	
?>