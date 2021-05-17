<?php 
	include('menuBar.php');
	

	$query = "SELECT * FROM produktet ORDER BY rand()";
	$result = mysqli_query($con, $query);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chocoo Exceptional taste</title>
	<link rel="shortcut icon" type="image/png" href="favicons/Chocolate-512.png">
	<link rel="stylesheet" type="text/css" href="Menu.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
	
	<div class="subnav">
		<p>Klikoni mbi imazhe per te pare cmimin e produkteve.</p>
	</div>

<?php
while($row = mysqli_fetch_assoc($result)){

?>
	<div class="container">
		<div class="card">
			<div class="cardImage">
				<?php echo "<img src='data:image;base64,".base64_encode($row['url'])."' >"; ?>
			</div>
			<div class="cardText1"><?php echo $row['emri'];?></div>
			<div><h2><?php echo $row['cmimi'];?></h2></div>
		</div>
		<?php if($row = mysqli_fetch_assoc($result)){ ?>
		<div class="card">
			<div class="cardImage">
				<?php echo "<img src='data:image;base64,".base64_encode($row['url'])."' >";	?>
			</div>
			<div class="cardText2"><?php echo $row['emri'];?></div>
			<div><h2><?php echo $row['cmimi'];?></h2></div>
		</div>
		<?php } if($row = mysqli_fetch_assoc($result)){ ?>
		<div class="card">
			<div class="cardImage">
				<?php echo "<img src='data:image;base64,".base64_encode($row['url'])."' >"; ?>
			</div>
			<div class="cardText3"><?php echo $row['emri'];?></div>
			<div><h2><?php echo $row['cmimi'];?></h2></div>
		</div>
		<?php } if($row = mysqli_fetch_assoc($result)){ ?>
		<div class="card">
			<div class="cardImage">
				<?php echo "<img src='data:image;base64,".base64_encode($row['url'])."' >"; ?>
			</div>
			<div class="cardText4"><?php echo $row['emri'];?></div>
			<div><h2><?php echo $row['cmimi'];?></h2></div>
		</div>
		<?php } if($row = mysqli_fetch_assoc($result)){ ?>
		<div class="card">
			<div class="cardImage">
				<?php echo "<img src='data:image;base64,".base64_encode($row['url'])."' >"; ?>
			</div>
			<div class="cardText5"><?php echo $row['emri'];?></div>
			<div><h2><?php echo $row['cmimi'];?></h2></div>
		</div>
	</div>

<?php
	}
}
?>

</body>
</html>