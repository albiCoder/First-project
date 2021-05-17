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
	<div class="loginbox">
		<img src="avatar.png" class="avatar">
			<h1>Login Here</h1>  
			<form method="post" action="">
				<p>Username</p>
				<input type="text" name="emri" placeholder="Enter Username" required>
				<p>Password</p>
				<input type="Password" name="password" placeholder="Enter Password" required>
				<br/><br/><input type="submit" name="login" value="Login">
				<a href="http://localhost/Projekti/SignUp.php">Nuk keni nje llogari!<br/>Rregjistrohu tani!</a>
			</form>
	</div>

	<?php
		if(isset($_POST['login'])){
			$emri = $_POST['emri'];
			$password = $_POST['password'];
			$query = "SELECT * FROM klientet WHERE emri = '$emri' AND fjalekalimi = '$password'";
			$result = mysqli_query($con, $query);
			if(mysqli_num_rows($result) == 1) {
				$_SESSION['username'] = $emri;
				$_SESSION['password'] = $password;
				header('Location: http://localhost/Projekti/Chocoo.php');
			} 
			else{?>
				<div class="error">
					<p>Te dhenat jane gabim ose ju nuk keni nje llogari!</p>
				</div>
				 <?php
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

	.loginbox{
		width: 320px;
		height: 460px;
		background: #000;
		color: #fff;
		bottom: -200px;
		left: 50%;
		position: absolute;
		transform: translate(-50%, -50%);
		box-sizing: border-box;
		padding: 80px 30px;
	}

	.avatar{
		width: 100px;
		height: 100px;
		border-radius: 50%;
		position: absolute;
		top: -50px;
		left: calc(50% - 50px);
	}
	
	h1{
		margin: 0;
		padding: 0 0 20px;
		text-align: center;
		font-size: 22px;
	}

	.loginbox p{
		margin: 0;
		padding: 0;
		font-weight: bold;
	}

	.loginbox input{
		width: 100%;
		margin-bottom: 20px;
	}

	.loginbox input[type="text"], input[type="password"]{
		border: none;
		border-bottom: 1px solid #fff;
		background: transparent;
		outline: none;
		height: 40px;
		color: #fff;
		font-size: 16px;
	}

	.loginbox input[type="submit"]{
		border: none;
		outline: none;
		height: 40px;
		background: #fb2525;
		color: #fff;
		font-size: 18px;
		border-radius: 20px;
	}

	.loginbox input[type="submit"]:hover{
		cursor: pointer;
		background: #ffc107;
		color: #000;
	}

	.loginbox a{
		text-decoration: none;
		font-size: 12px;
		line-height: 20px;
		color: darkgrey;
	}

	.loginbox a:hover{
		color: #ffc107;
	}

	.error{
		position: absolute;
		background-color: #fb2525;
		border-radius: 4px;
		text-align: center;
		padding: 0px 15px 0px 15px;
		left: 36%;
		margin-top: 10px;
		font-style: italic;
	}
</style>
</html>