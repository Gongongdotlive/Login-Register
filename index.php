<?php 
//starting the session
session_start();
?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Gongong Auth</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="css/global.css">
	</head>

<body class="register">
	
	<div class="container-fluid d-flex justify-content-center align-items-center h-100">
		<div class="form-wrapper">
			<img src="" alt="" class="logo">
		<h3><b>Register</b></h3>
			<!-- Registration Form start -->
			<form method="POST" action="save_member.php" class="form">	
				<div class="form-group mb-3">
					<input type="email" name="username" class="form-control"  placeholder="Email Eddress" required="required"/>
				</div>
				<div class="form-group mb-3">
					<input type="password" name="password" class="form-control" placeholder="Password" required="required"/>
				</div>
				<div class="form-group mb-3">
					<input type="text" name="firstname" class="form-control" placeholder="Firstname" required="required"/>
				</div>
				<div class="form-group mb-3">
					<input type="text" name="lastname" class="form-control" placeholder="Lastname" required="required"/>
				</div>

				<?php
					//checking if the session 'success' is set.
				if(ISSET($_SESSION['success'])){
					?>
					<!-- Display regostration success message -->
					<div class="alert alert-success"><?php echo $_SESSION['success']?></div>
					<?php
                //Unsetting the 'success' session after displaying the message. 
					unset($_SESSION['success']);
				}else{
					?>
					<!-- <div class="alert alert-danger"><?php //echo $_SESSION['error']?></div>  -->
					<?php
					unset($_SESSION['error']);
				}
				?>
            <button class="btn customBtn mb-3" name="register"><span class="glyphicon glyphicon-save"></span> Register</button>
			<br>
			<a href="login.php" class="login"><small>Already a member? Log in here...</small></a>
        </form>	
        <!-- Registration Form end -->
    </div>
</div>

</body>
</html>