<?php 
	include('lidhjaDB.php') 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="shortcut icon" type="image/png" href="faviconLogin.png">

</head>
<body>
	<div class="return">
		<a href="http://localhost/Projekti/Chocoo.php">Kthehu ne faqen kryesore</a>
	</div>
	<div class="signupbox">
		<img src="avatarSign.png" class="avatarSign">
			<h1>Sign Up Here</h1>  
			<form method="post" action="">
				<p>Username</p>
				<input type="text" name="emri" placeholder="Enter Username" required>
				<p>Password</p>
				<input type="Password" name="password" placeholder="Enter Password" required>
				<p>Confirm Password</p>
				<input type="Password" name="rePassword" placeholder="Re-enter Password" required>
				<input type="submit" name="signup" value="Sign Up">
				<a href="http://localhost/Projekti/Login.php">Aktualisht ke nje llogari!</a>
			</form>
	</div>

	<?php

		if(isset($_POST['signup'])){
			
			$password = $_POST['password'];
			$rePassword = $_POST['rePassword'];
			$emri = $_POST['emri'];
			$emratLlogari = mysqli_query($con, "SELECT * FROM klientet WHERE emri = '$emri'");
			if($r = mysqli_fetch_assoc($emratLlogari)){
				?>
				<div class="error">
					<p>Nje llogari me kete emer ekziston.<br/> Zgjidhni nje emer tjeter!</p>
				</div>
				<?php			
			}
			elseif($password != $rePassword){
			?>
			<div class="error">
				<p>Fjalekalimet nuk perputhen! <br/>Ju lutem riplotesoni te dhenat!</p>
			</div>
			<?php
			}
			else{
				mysqli_query($con, "INSERT INTO klientet (emri, fjalekalimi) VALUES ('$emri','$password')");
				$_SESSION['username'] = $emri;
				$_SESSION['password'] = $password;
				header('Location: http://localhost/Projekti/Chocoo.php');	
			}
			
		}
		

	?>
</body>
<style type="text/css">
	body{
		margin: 0px;
		padding: 0px;
		background: url("712229.jpg");
		background-attachment: fixed;
		background-repeat: no-repeat;
		background-size: cover;
		font-family: cursive;
		display: flex;
		flex-wrap: wrap;
		background-size: cover;
		background-position: center;
		font-family: sans-serif;
		} 
	
	.return a{
	      text-decoration: none;
	      background-color: #4CAF50;
	      color: white;
	      top: 30px;
	      right: 30px;
	      position: absolute;
	      padding: 12px;
	      margin: 10px 10px;
	      border: none;
	      border-radius: 3px;
	      cursor: pointer;
	      font-size: 17px;    
	    }

	.return a:hover {
	  background-color: #45a049;
	}
	
	h1{
		margin: 0;
		padding: 0 0 15px;
		text-align: center;
		font-size: 22px;
	}

	.signupbox{
		width: 320px;
		height: 460px;
		background: #fff;
		color: #000;
		bottom: -200px;
		left: 50%;
		position: absolute;
		transform: translate(-50%, -50%);
		box-sizing: border-box;
		padding: 70px 30px;
		flex-grow: 1;
	}

	.avatarSign{
		width: 100px;
		height: 100px;
		border-radius: 50%;
		position: absolute;
		top: -50px;
		left: calc(50% - 50px);

	}

	.signupbox p{
		margin: 0;
		padding: 0;
		font-weight: bold;
	}

	.signupbox input{
		width: 100%;
		margin-bottom: 20px;
	}

	.signupbox input[type="text"]{
		border: none;
		border-bottom: 1px solid #000;
		background: transparent;
		outline: none;
		height: 40px;
		color: #000;
		font-size: 16px;
	}

	.signupbox input[type="password"]{
		border: none;
		border-bottom: 1px solid #000;
		background: transparent;
		outline: none;
		height: 40px;
		color: #000;
		font-size: 16px;
	}

	.signupbox input[type="submit"]{
		border: none;
		outline: none;
		height: 40px;
		background: cyan;
		color: #000;
		font-size: 18px;
		border-radius: 20px;
	}

	.signupbox input[type="submit"]:hover{
		cursor: pointer;
		background: green;
		color: #fff;
	}


	.signupbox a{
		text-decoration: none;
		font-size: 12px;
		line-height: 20px;
		color: darkgrey;
	}

	.signupbox a:hover{
		color: blue;
	}

	.error{
		position: absolute;
		background-color: cyan;
		border-radius: 4px;
		text-align: center;
		padding: 0px 15px 0px 15px;
		left: 41%;
		margin-top: 10px;
		font-style: italic;
	}
</style>
</html>