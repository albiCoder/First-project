<?php include("lidhjaDB.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Kontaktoni</title>
	<link rel="shortcut icon" type="image/png" href="favicons/phone.png">
<style type="text/css">
		body{
			display: flex;
			align-items: center;
			position: relative;
			background-image: url("868085 copy.jpg");
			background-size: cover;
		}

		.container{
			font-family: cursive;
			padding: 40px;
			padding-top: 0px;
			text-align: center;
			width: 700px;
			height: 550px;
			box-sizing: border-box;
			position: absolute;
			top: 40px;
			margin-left: 25%;
		}

		.container #header{
			font-size: 3em;	
		}

		.secondPane{
			position: absolute;
		}

		.secondPane textarea{
			width: 400px;
			height: 200px;
			font-size: 1.1em;
			padding: 5px;
		}

		.secondPane input[type="text"],.secondPane input[type="email"]{
			height: 30px;
			padding-left: 5px;
			font-size: 1em;
			width: 400px;
		}


		.secondPane input[type="submit"]{
			padding: 5px 7px 5px 7px;
			font-style: bold;
		}

		.thirdPane{
			overflow: hidden;
			height: 328px;
			width: 180px;
			position: absolute;
			right: 40px;
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
		
		.firstPane{
			width: 620px;
			background-color: white;
			padding-left: 5px;
			text-align: left;
			display: flex;
			margin: 0;
			margin-bottom: 15px;
			padding: 0;
		}

		.firstEl li{
			list-style-image: url("location.png");
			list-style-position: outside;
		}

		.secondEl li{
			list-style-image: url("phone.png");
			list-style-position: outside;
		}

		.thirdEl li{
			list-style-image: url("pngguru.com (1).png");
			list-style-position: outside;
		}

		.firstPane #header{
			position: absolute;
			margin-left: 50%;
			font-style: italic;
			padding: 5px;
		}
	</style>

</head>
<body>
	<div class="return">
		<a href="http://localhost/Projekti/Chocoo.php">Kthehu ne faqen kryesore</a>
	</div>	
	<div class="container">
		<div class="firstPane"><ul>
			<div class="firstEl"><li><p>Adresa: Tirane</p></li></div>
			<div class="secondEl"><li><p>Nr. telefoni: +3556767699</p></div></li>
			<div class="thirdEl"><li><p>E-mail: info@chocoo.al</p></li></div>
		</ul>
		<p id="header">Kontaktet</p>
	</div>

		<div class="secondPane">
			<form method="post" action="">
				<input type="text" name="emri" placeholder="Emer Mbiemer:" required><br/><br/>
				<input type="email" name="email" placeholder="E-mail:" required><br/><br/>
				<textarea placeholder="Mesazhi ose sugjeroni nje recete:" name="mesazhi" required></textarea><br/>
				<input type="submit" name="DergoMesazhin" value="Dergo Mesazhin">
			</form>

		</div>

		<?php

			if(isset($_POST['DergoMesazhin'])){
				$emri = $_POST['emri'];
				$email = $_POST['email'];
				$mesazhi = $_POST['mesazhi'];

				mysqli_query($con, "INSERT INTO mesazhe (emri, email, mesazhi) VALUES ('$emri', '$email', '$mesazhi')");
			}

		?>

		<div class="thirdPane">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.347761164448!2d19.82252171479466!3d41.323050707945114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13503119603024bd%3A0xd244a3e4a21b45bb!2sMon%20Amour!5e0!3m2!1sen!2s!4v1579966425338!5m2!1sen!2s" width="250px" height="328px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>		
	</div>
</body>
</html>