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
		
.mySlides{
    display: none;
}

img{
    vertical-align: middle;
    background-attachment: contain;
    border-radius: 15px;
}

/* Slideshow container */
.slideshow-container { 
    width: 250px;
    height: 250px;  	
    position: absolute;
    margin-left: 40%;
}


/* Caption text */
.text {
    color: #000;
    font-size: 1em;
    padding: 8px 12px;
    position: relative;
    bottom: 8px;
    width: 100%;
    text-align: center;
}


/* The dots/bullets/indicators */
.dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
    position: relative;
    top: 70px;
    right: 411px;
}

.active {
    background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


.miresevini{
	margin-top: 30%;
}

.miresevini h1{
	color: #0080ff;
}

.miresevini h3{
	color: black;
}
</style>

</head>
<body>
	
		
	
	<div class="subnav">
		<p>Adresa: Tirane. Hapur gjate oreve: 07:00-21:00. Nga e Hena ne te Shtune</p>
	</div>
	<br/><br/><br/>
	<?php
		$result = mysqli_query($con, "SELECT emri, url FROM produktet ORDER BY shitur DESC LIMIT 3");
		while($row = mysqli_fetch_assoc($result)){
	?>


	<div class="slideshow-container" style="top: 200px; position: absolute; margin-left: 40%">
		<div class="mySlides fade">
			<div class="numbertext"><?php echo "<img style='width:250px; height: 250px; object-fit: contain;' src='data:image;base64,".base64_encode($row['url'])."' >"; ?></div>
			<div class="text"><?php echo $row['emri'];?></div>
		</div>
	</div>

	<?php
		}
	?>
	
	<br>
	<div style="text-align:center">
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	</div>
	<br>

	<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  for (i = 0; i < slides.length; i++) {
		    slides[i].style.display = "none";  
		  }
		  slideIndex++;
		  if (slideIndex > slides.length) {slideIndex = 1}    
		  for (i = 0; i < dots.length; i++) {
		    dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		  setTimeout(showSlides, 3000); // Change image every 3 seconds
		}

	</script>



	<div class="miresevini">
		<h1>Miresevini ne Chocoo!</h1>
		<h3>Exceptional taste</h3>
		<p>Chocoo i ka fillesat e saj ne vitin 2007, me dyqanin e pare ne qender te Tiranes, tek rruga e Barrikadave, ku shume shpejt u dallua per embelsirat artizanale te prodhuara nga familja Sina, qe krijoi kete biznes pas nje eksperience shume vjecare ne Itali. Shpejt, dy brezat e kesaj familje rinovohen dhe zhvillohen akoma me shume duke hapur pasticerine e dyte ne nje zone te njohur te Tiranes, tek rruga e Elbasanit. Ne ambjente moderne dhe me nje game te gjere produktesh, duke i qendruar besnike traditave te tyre per sa i perket freskise, zgjedhjes te cilesise me te larte te lendes te pare, perkushtimit dhe respektit ndaj klientit. Sot "Chocoo" gezon vlerat ne llojin e saj ne Tirane dhe jo vetem.</p>
	</div>

	<footer>
		<div class="Footer">
			<p class="name">Chocoo</p>
			<p class="subname">Exceptional taste</p>
			<p class="nrTel">+355676767699</p>
			<p class="email">info@chocoo.al</p>
			<img src="logoja.png">
			<p class="copyright">Copyright © 2020 Chocoo Exceptional taste. All rights reserved.</p>
		</div>
	</footer>
</body>

</html>