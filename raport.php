<?php
    include("lidhjaDB.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Raport</title>
<style type="text/css">

    body{
        background-color: #001f3f;
   }

    .bg {
        background-image: url("delivery.jpg");
        background-position-x: 100%;
        animation-delay: 0s;
        animation-duration: 18s;
        animation-name: panoramic;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
        animation-fill-mode: both;
        width: 100%;
        height: 500px;
        overflow: hidden;
        margin: 0 auto;
        border: 1px solid gold;
        will-change: background-position-x;

      }

      @keyframes panoramic {
        0% {
          background-position-x: 0%;
        }
        50% {
          background-position-x: 50%;
        }
        100% {
          background-position-x: 100%;
        }
      }    

.return a{
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

  .return a:hover{
    background-color: #45a049;
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
    left: 37%;
    top: 120px;
    background-color: #0080ff;
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
    text-align: right;
  }

</style>
</head>
<body>


<div class="bg">
  <img src="">
<h1>Porosia juaj u krye me sukses!</h1>
<?php 
    $result = mysqli_query($con, "SELECT * FROM porosi ORDER BY id_porosi DESC LIMIT 1");
    $porosia = mysqli_fetch_assoc($result);    
    $idPorosise = $porosia['id_porosi'];
    $adresa = $porosia['adresa'];
    $totali = $porosia['totali'];
    $searchRreshtporosi = mysqli_query($con, "SELECT id_porosi FROM rreshtporosi WHERE id_porosi = '$idPorosise'");
    $numriArtikujve = 0;
    while($r = mysqli_fetch_assoc($searchRreshtporosi))
      $numriArtikujve++; 
?>

<table border="1px">
    <tr>
      <th>Numri i artikujve: </th>
      <td><?php echo $numriArtikujve; ?></td>
    </tr>
    <tr>
      <th>Adresa e dergeses: </th>
      <td><?php echo $adresa; ?></td>
    </tr>  
    <tr>
      <th>Menyra e pageses: </th>
      <td>Ne dorezim</td>
    </tr>
    <tr>
      <th>Totali: </th>
      <td><?php echo $totali; ?></td>
    </tr>
</table>

</div>
<footer>
<div class="return">
    <a href="http://localhost/Projekti/Chocoo.php">Kthehu ne faqen kryesore</a>
</div>
</footer>
</body>
</html>