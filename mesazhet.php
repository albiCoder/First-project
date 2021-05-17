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


	.return a, .allMessages a, .notReadMessages a{
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

    .return a:hover, .allMessages a:hover, .notReadMessages a:hover{
    	background-color: #45a049;
    }
  
  .allMessages a{
  		left: 290px;
  }

  .notReadMessages a{
    left: 20px;
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
    padding: 5px;
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
    <a href="http://localhost/Projekti/ChocooAdmin.php">Kthehu ne faqen kryesore</a>
</div>

<div class="allMessages">
    <a href="?allmess=<?php echo TRUE; ?>">Shfaq te gjithe mesazhet</a>
</div>

<div class="notReadMessages">
    <a href="?notReadMess=<?php echo TRUE; ?>">Shfaq mesazhet e reja</a>
</div>

<table border="1px">
	<tr>
		<th>Mesazhi</th>
		<th>Derguesi</th>
    <th>Emaili</th>
    <th>Mesazhi</th>
    <th>Data</th>
		<th>Ora</th>
    <th>I pare</th>
    <th>Fshi</th>
	</tr>


<?php
  if(isset($_GET['allmess'])){
	$query = "SELECT * FROM mesazhe";

	$result = mysqli_query($con, $query);
	while($row = mysqli_fetch_assoc($result)){
?>
	<tr>
		<td><?php echo $row['id_mesazh']; ?></td>
		<td><?php echo $row['emri']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td style="padding:5px; width: 200px;"><?php echo $row['mesazhi']; ?></td>
		<td><?php echo $row['data']; ?></td>
    <td><?php echo $row['ora']; ?></td>
    <td><a href="?seen=<?php echo $row['id_mesazh'];?>">I pare</a></td>
    <td><a href="?fshi=<?php echo $row['id_mesazh'];?>">Fshi</a></td>
	</tr>
<?php
}
}
?>

<?php
  if(isset($_GET['notReadMess'])){
  $query = "SELECT * FROM mesazhe WHERE pare = false";

  $result = mysqli_query($con, $query);
  while($row = mysqli_fetch_assoc($result)){
?>
  <tr>
    <td><?php echo $row['id_mesazh']; ?></td>
    <td><?php echo $row['emri']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td style="padding:5px; width: 200px;"><?php echo $row['mesazhi']; ?></td>
    <td><?php echo $row['data']; ?></td>
    <td><?php echo $row['ora']; ?></td>
    <td><a href="?seen=<?php echo $row['id_mesazh'];?>">I pare</a></td>
    <td><a href="?fshi=<?php echo $row['id_mesazh'];?>">Fshi</a></td>
  </tr>
<?php
}
}
?>

</table>

<?php 
  if(isset($_GET['fshi'])){
    $idFshi = $_GET['fshi'];
    $query3 = "DELETE FROM mesazhe WHERE id_mesazh = '$idFshi'";
    mysqli_query($con, $query3);
  }
?>

<?php 
  if(isset($_GET['seen'])){
    $idSeen = $_GET['seen'];
    $query3 = "UPDATE mesazhe SET pare = TRUE WHERE id_mesazh = '$idSeen'";
    mysqli_query($con, $query3);
  }
?>

</body>
</html>