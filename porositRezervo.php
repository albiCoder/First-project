<?php include("lidhjaDB.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php  
$result = mysqli_query($con, "SELECT * FROM klientet WHERE emri = 'albi'");
$row = mysqli_fetch_assoc($result);
  echo $row['id']."<br/>";

?>
</body>
</html>