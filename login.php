<!DOCTYPE html>
<?php 
//starting the session
session_start();
?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Gongong Auth</title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="css/global.css">
	</head>

<body class="login">

	<div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">
		<div class="form-wrapper">
		
		<h3><b>LOGIN</b></h3>

            <form method="POST" action="login_query.php" class="form">
				<div class="form-group mb-3">
				<input type="email" name="username" class="form-control" placeholder="@email.com" required="required"/>
				</div>
				<div class="form-group mb-3">
					<input type="password" name="password" class="form-control" placeholder="Password" required>
				</div>

		
				<?php
					if(ISSET($_SESSION['error'])){
				?>
				<!-- Display Login Error message -->
					<div class="alert alert-danger"><?php echo $_SESSION['error']?></div>
				<?php
                //Unsetting the 'error' session after displaying the message. 
					unset($_SESSION['error']);
                }
            	?>
			
			
		   <label>
		   	<input type="checkbox" class="mb-3"> Remember me</label>
		   	<br>
		   	<button class="btn btn-block mb-3" name="login" type="sumbit">Login</button>
		   	<br>
			<a href="index.php"><small>Not a member yet? Register here...</small></a>	
            
			</div>
        </form>	
       </div>
   </div>
</body>
</html>