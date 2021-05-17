<?php 
	include('lidhjaDB.php');
?>
<!DOCTYPE html>
<html>
<head>

<style type="text/css">
		
	body{
		background-position: center;
		background-image:linear-gradient(rgba(255,255,255,0.55),rgba(255,255,255,0.55)) , url("may18-23.jpg");
		background-attachment: fixed;
		background-repeat: no-repeat;
		background-size: cover;
		font-family: cursive;
		display: flex;
		flex-wrap: wrap;
	}

	#logo{
		position:absolute;
		top:15px;
		left:30px;
		float:left;
	}

	#logo:active{
	  transform: translateY(4px);
	}

	nav{
		width:100%;
		height:100px;
	  	overflow: auto;
		font-family: cursive;
		font-size: 1.4em;
		background-color: rgba(210, 105, 30, 1);
	}

	nav li{
		height: 50px;
	}

	nav li a{
		padding: 5px 10px;
		color: white;
		position: relative;
		top: 10px;
		margin-left: 5px;
		text-align: center;
		font-weight: bolder;
		text-decoration: none;
		margin-bottom: 20px;
		margin-top: 20px;
	}

	nav li a:hover{
		color: black;
	}


	nav ul{
		margin-left: 150px;
	}

	nav ul li{
		float:left;
		list-style: none;
		display: inline-block;

	}

	.subnav{
		line-height: 5px;
		height:auto;
		background-color: rgba(255, 0, 0, 0.9);
		font-family: cursive;
		font-size: 1.2em;
		margin-top: 3px;
		margin-left:30%;
		color: white;
		font-weight: bolder;
		padding-left: 15px;
		font-style: italic;
	}

	.subnav p{
		float: right;
		margin-right:20px;
	}


</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav>
		<a id="logo" href="http://localhost/Projekti/Chocoo.php">
			<img src="logoja.png" width="150px" style="border-radius: 40px 40px 40px 40px;">
		</a>
		<ul>
			<li><a href="http://localhost/Projekti/Chocoo.php">Krye</a></li>
			<li><a href="http://localhost/Projekti/ChocooMenu.php">Menu</a></li>
			<li><a href="http://localhost/Projekti/Specialitet.php">Specialitetet</a></li>
			<li><a href="http://localhost/Projekti/checkout.php">Porosit</a></li>
			<li><a href="http://localhost/Projekti/rezervo.php">Rezervo online</a></li>
			<li><a href="http://localhost/Projekti/kontakt.php">Kontaktoni</a></li>
			<li>
				<?php 
				if(isset($_SESSION['username']))
					print("<a href='http://localhost/Projekti/logout.php'>Logout</a>");
				else
					print("<a href='http://localhost/Projekti/Login.php'>Login/Signup</a>"); 
				?>
			</li>
			<li><form class="searchForm" action="search.php" method="get" style="margin-top: 6px; margin-left:10px; max-width:200px">
			  <input type="text" placeholder="Search.." name="search">
			  <button type="submit" name="submit"><i class="fa fa-search"></i></button>
			</form></li>
		</ul>
	</nav>
</body>
</html>