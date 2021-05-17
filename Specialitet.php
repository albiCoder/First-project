<?php 
	include('menuBar.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Chocoo Exceptional taste</title>
	<link rel="shortcut icon" type="image/png" href="favicons/Chocolate-512.png">
	<link rel="stylesheet" type="text/css" href="Chocoo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		
		body{
			background-image: linear-gradient(rgba(255,255,255,0.55),rgba(255,255,255,0.55)) , url("716035.jpg");
		}

		.subnav{
			margin-left:30%;
			background-color: rgba(255, 0, 0, 0.9);
		}

		.container{
			display: flex;
			justify-content: center;
			margin: 20px;
			

		}

		.card{
			display: grid;
			grid-template-columns: 270px;
			grid-template-rows: 340px 80px;
			grid-template-areas: "image" "text";
			border-radius: 20px;
			box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.9);
			text-align: center;
			margin-left: 120px;
			font-weight: bolder;
			font-size: 1.7em;
			color: white;
			overflow: hidden;
			transition: 0.5s ease;
			cursor: pointer;
			margin-bottom: 10px;
			background-color: black;
			position: relative;
			padding-bottom: 10px;
			
		}

		.card:hover{
			filter: brightness(110%);
			box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.6);
			transform: scale(0.95);
		}

		.card .cardText{
		  position: absolute;
		  top: 0px;
		  left: 0px;
		  bottom: 0px;
		  right: 0px;
		  transition: 0.5s Easy;
		  z-index: 1;
		}
		 
		.card:active .cardText{
		    transform: translateY(-40px);
		}

		.cardText{
			grid-area: text;
			border-radius: 0px 0px 18px 18px;
			background-color: rgb(255,215,0);
			overflow: hidden;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.cardImage{
			grid-area: image;
			border-radius: 15px 15px 0px 0px;
			
		}

		.card .cardImage img{
		    top: 0;
		    left: 0;
		    height: 100%;
		    object-fit: contain;
		  }

        footer{
        	background-color: white;
        	padding: 0px 20px 0px 20px;
        	margin : auto;
        	font-style: italic;
        	border-radius: 5px;
        }
        footer h4{
        	color: black;
        	text-decoration: underline;
        }
	</style>
</head>
<body>
	
	
	<div class="subnav">
		<p>Klikoni mbi imazhe per te pare cmimin e produkteve.</p>
	</div>

	<?php
		$result = mysqli_query($con, "SELECT  * FROM specialitetet");
		while($row = mysqli_fetch_assoc($result)){
	?>

	<div class="container">
		<div class="card">
			<div class="cardImage">
				<?php echo "<img src='data:image;base64,".base64_encode($row['url'])."' >"; ?>
			</div>
			<div class="cardText"><?php echo $row['emri'];?></div>
			<div><h2><?php echo $row['cmimi'];?></h2></div>
		</div>
		<?php if($row = mysqli_fetch_assoc($result)){ ?>
		<div class="card">
			<div class="cardImage">
				<?php echo "<img src='data:image;base64,".base64_encode($row['url'])."' >";	?>
			</div>
			<div class="cardText"><?php echo $row['emri'];?></div>
			<div><h2><?php echo $row['cmimi'];?></h2></div>
		</div>
		<?php } if($row = mysqli_fetch_assoc($result)){ ?>
		<div class="card">
			<div class="cardImage">
				<?php echo "<img src='data:image;base64,".base64_encode($row['url'])."' >"; ?>
			</div>
			<div class="cardText"><?php echo $row['emri'];?></div>
			<div><h2><?php echo $row['cmimi'];?></h2></div>
		<?php } ?>
		</div>
	</div>

<?php
}

?>

	<footer>
		<h3>Specialitet nuk mund te porositen. Ato mund ti gjeni vetem prane dyqanit tone! Ju presim!</h3>
		<h4>Vetem tek Chocoo!</h4>
	</footer>
</body>
		
</html>