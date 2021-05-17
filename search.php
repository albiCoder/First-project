<?php 

	include('menuBar.php');
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Chocoo Exceptional taste</title>
	<link rel="shortcut icon" type="image/png" href="favicons/Chocolate-512.png">
	<link rel="stylesheet" type="text/css" href="Menu.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		.searchResults{
			text-align: center;
			color: white;
			background-color: red;
			padding: 10px;
			margin-left: 39%;
			margin-top: 4px;
			padding-bottom: 10px;
			height: 30px;
			line-height: 10px;
			font-style: italic;
			margin-right: 400px;	
		}

	</style>
</head>
<body>

	<?php
		if(!isset($_GET['search']))
			echo "";
		else{
			$search = $_GET['search'];

		if($search != ''){
			$query = "SELECT * FROM produktet WHERE emri LIKE '%$search%' OR cmimi LIKE '%$search%'";
			$searchResult = mysqli_query($con, $query);
			$num = mysqli_num_rows($searchResult);

	?>
		<div class="searchResults">
			<?php 
			if($num == 0)
				echo "Asnje rezultat nuk perputhet me kerkimin tuaj.";	
			else if($num == 1)	
				echo "1 rezultat perputhet me kerkimin tuaj."; 
			else
				echo $num . " rezultate perputhen me kerkimin tuaj.";
			?>
		</div>
		
		 
<?php		
			while($row = mysqli_fetch_assoc($searchResult)){

?>
	<div class="container">
		<div class="card">
			<div class="cardImage">
				<?php echo "<img src='data:image;base64,".base64_encode($row['url'])."' >"; ?>
			</div>
			<div class="cardText1"><?php echo $row['emri'];?></div>
			<div><h2><?php echo $row['cmimi'];?></h2></div>
		</div>
		<?php if($row = mysqli_fetch_assoc($searchResult)){ ?>
		<div class="card">
			<div class="cardImage">
				<?php echo "<img src='data:image;base64,".base64_encode($row['url'])."' >";	?>
			</div>
			<div class="cardText2"><?php echo $row['emri'];?></div>
			<div><h2><?php echo $row['cmimi'];?></h2></div>
		</div>
		<?php } if($row = mysqli_fetch_assoc($searchResult)){ ?>
		<div class="card">
			<div class="cardImage">
				<?php echo "<img src='data:image;base64,".base64_encode($row['url'])."' >"; ?>
			</div>
			<div class="cardText3"><?php echo $row['emri'];?></div>
			<div><h2><?php echo $row['cmimi'];?></h2></div>
		</div>
		<?php } if($row = mysqli_fetch_assoc($searchResult)){ ?>
		<div class="card">
			<div class="cardImage">
				<?php echo "<img src='data:image;base64,".base64_encode($row['url'])."' >"; ?>
			</div>
			<div class="cardText4"><?php echo $row['emri'];?></div>
			<div><h2><?php echo $row['cmimi'];?></h2></div>
		</div>
		<?php } if($row = mysqli_fetch_assoc($searchResult)){ ?>
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
}
}
?>


</body>



</html>
