<?php 
	include("lidhjaDB.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Historiku i klientit</title>

<style type="text/css">

    body{
        background-color: #001f3f;
   	}


	.return a, .returnPorosi a{
        text-decoration: none;
        background-color: #4CAF50;
        color: white;
        
        left: 42%;
        position: absolute;
        padding: 12px;
        margin: 10px 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 17px;    
      }

    .return a:hover, .returnPorosi a:hover{
    	background-color: #45a049;
    }
  
  .returnPorosi a{
  		left: 226px;
  }
  
  h1 { color: #ffffff; 
       font-family: 'Raleway',sans-serif; 
       font-size: 32px; 
       font-weight: 800; 
       line-height: 72px; 
       margin: 0 0 24px; 
       text-align: center; 
       text-transform: uppercase;
       background-color: #0080ff; 
  }

  table{
    border: 3px solid white;
    position: absolute;
    left: 17%;
    top: 70px;
    background-color: #0080ff;
    margin-bottom: 80px;
  }

  table td{
    color: #f8f8f8; 
    font-family: 'Raleway',sans-serif; 
    font-size: 18px; 
    font-weight: 500; 
    line-height: 32px; 
    margin: 0 0 24px;
    border: 2px solid white;
    padding: 20px;
    font-style: italic;
  }

  table th{
    color: #f8f8f8; 
    font-family: 'Raleway',sans-serif; 
    font-size: 18px; 
    font-weight: 500; 
    line-height: 32px; 
    margin: 0 0 24px;
    border: 2px solid white;
    padding: 20px;
    text-align: left;
  }

</style>

	
</head>
<body>


<div class="return">
    <a href="http://localhost/Projekti/Chocoo.php">Kthehu ne faqen kryesore</a>
</div>

<div class="returnPorosi">
    <a href="http://localhost/Projekti/checkout.php">Kthehu tek porosia</a>
</div>


<table border="1px">
	<tr>
		<th>Id porosise</th>
		<th>Data</th>
		<th>Produkti</th>
		<th>Sasia</th>
		<th>Cmimi</th>
	</tr>

<?php
	$query = "SELECT porosi.id_porosi, porosi.dateporosi, rreshtporosi.produkti, rreshtporosi.sasia, rreshtporosi.cmimi
FROM (klientet INNER JOIN porosi ON klientet.id = porosi.id_klient) INNER JOIN rreshtporosi ON porosi.id_porosi = rreshtporosi.id_porosi";

	$result = mysqli_query($con, $query);
	while($row = mysqli_fetch_assoc($result)){
?>
	<tr>
		<td><?php echo $row['id_porosi']; ?></td>
		<td><?php echo $row['dateporosi']; ?></td>
		<td><?php echo $row['produkti']; ?></td>
		<td><?php echo $row['sasia']; ?></td>
		<td><?php echo $row['cmimi']; ?></td>
	</tr>
<?php
}
?>

</table>


</body>
</html>