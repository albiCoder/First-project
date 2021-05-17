<?php
    ob_start();/*This will start buffering the output, so that nothing is really output until the PHP script ends (or until you flush the buffer manually) - and also no headers are sent until that time!*/
    include("lidhjaDB.php");
    if(!isset($_SESSION['username'])){
?>
    <script type="text/javascript">
    
    
    if(confirm("Para se te porosisni eshte e nevojshme te futeni ne llogarine tuaj!\n\n" + "▬▬▬▬▬▬▬▬▬▬▬▬▬ஜ۩۞۩ஜ▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n\n" + "Deshironi te logoheni?")){
        window.location.href='http://localhost/Projekti/Login.php';
    }
    else
      window.history.back();  
    
    </script>

<?php

    }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/png" href="favicons/happy.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="rezervo.css">
<style>
  body {
    font-family: Arial;
    font-size: 17px;
    padding: 8px;
    background-image: url("735862.jpg");
  }

  * {
    box-sizing: border-box;
  }

  .row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 0 -16px;
  }

  .rowR {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -16px;
    width: 60%;
    left: 20%;
    position: absolute;
  }

  .col-25 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
  }

  .col-50 {
    -ms-flex: 50%; /* IE10 */
    flex: 30%;
  }

  .col-75 {
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
  }

  .col-25,
  .col-50,
  .col-75 {
    padding: 0 16px;
  }

  .container{
    background-color: #f2f2f2;
    padding: 5px 20px 15px 20px;
    border: 1px solid lightgrey;
    border-radius: 3px;
    margin-bottom: 50px;
  }

  input[type=text], input[type=tel], input[type=date], input[type=time], input[type=number]{
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }

  label {
    margin-bottom: 10px;
    display: block;
  }

  .icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
  }

  .btn {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
  }

  .btn:hover {
    background-color: #45a049;
  }

  a {
    color: #2196F3;
  }

  hr {
    border: 1px solid lightgrey;
  }

  span.price {
    float: right;
    color: grey;
  }

  /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
  @media (max-width: 800px) {
    .row {
      flex-direction: column-reverse;
    }
    .col-25 {
      margin-bottom: 20px;
    }
  }

  .return a, .rezervo a, .historia a{
        text-decoration: none;
        background-color: #4CAF50;
        color: white;
        top: 30px;
        right: 343px;
        position: absolute;
        padding: 12px;
        margin: 10px 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 17px;    
      }
  .rezervo a{
    right: 6px;
  }

  .return a:hover, .rezervo a:hover, .historia a:hover{
    background-color: #45a049;
  }

  .historia a{
    right: 151px;
  }
  .produktet{
    padding: 10px;
    overflow: scroll;
    height: 520px;
    padding-bottom: 20px;

  }

  .emriArtikullit{
    padding-bottom: 10px;
    border-bottom: dotted 1px black;
    margin-bottom: 5px;
  }

  .col-51{
    flex: 55%;
  }

  .cmimiArtikullit{
    position: relative;
    float: right;
    top: -32px;
    margin-left
  }

  .produktet a{
    position: relative;
    float: right;
    background: url(addButton1.png);
    border: 0;
    height: 30px;
    width: 30px;
    top: -6px;
    margin-left: 5px;
  }

  .produktet a:hover{
    cursor: pointer;
    filter: brightness(120%);
  }

  .decrease a{
    position: relative;
    float: right;
    background: url(removeButton.png);
    border: 0;
    height: 30px;
    width: 30px;
    top: -6px;
    margin-left: 5px;
  }

  .decrease a:hover{
    cursor: pointer;
    filter: brightness(120%);
  }

</style>
</head>
<body>

<h2>Porosit online</h2>
<div class="return">
    <a href="http://localhost/Projekti/Chocoo.php">Kthehu ne faqen kryesore</a>
  </div>
  <div class="rezervo">
    <a href="http://localhost/Projekti/rezervo.php">Rezervo Online</a>
  </div>
  <div class="historia">
    <a href="http://localhost/Projekti/historia.php">Historiku porosive</a>
  </div>  
<div class="row">
  <div class="col-75">
    <div class="container">

      <form action="" method="get">      
        <div class="row">
          <div class="col-50">
            <h3>Adresa</h3>
            <label for="fname"><i class="fa fa-user"></i> Emer Mbiemer</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Adresa</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>
            <label for="city"><i class="fa fa-institution"></i> Qyteti</label>
            <input type="text" id="city" name="city" placeholder="New York" required>
            <label for="zip">Zip</label>
            <input type="text" id="zip" name="zip" placeholder="10001" required>        
          </div>
          <div class="col-51">
            <div class="produktet">  
              <?php
                  $query = "SELECT * FROM produktet";
                  $result = mysqli_query($con, $query);
                  while($row = mysqli_fetch_assoc($result)){
                      print "<div class='emriArtikullit'>";
                      echo $row['emri'];
                      print "</div><div class='cmimiArtikullit'>";
                      print "<a href='?shto={$row['id_prod']}'></a>";
                      echo $row['cmimi'];
                      print "</div>";
                  }
              ?>
            </div>
          </div>
        </div>
        <input type="submit" value="Perfundo pagesen" class="btn" name="submit">
      </form>
    
    </div>
  </div>

<?php
   if(isset($_GET['shto'])){
      $shto = $_GET['shto'];
      $r = mysqli_query($con, "SELECT * FROM produktet WHERE id_prod = '$shto'");
      $vektori = mysqli_fetch_assoc($r);
      $idd = $vektori['id_prod'];
      $emrii = $vektori['emri'];
      $cmimii = $vektori['cmimi'];
          
      $qryFindIfExist = "SELECT * FROM cart WHERE id_cart = '$idd'";
      $resultOfFind = mysqli_query($con, $qryFindIfExist);
      if($produktiEkzistion = mysqli_fetch_assoc($resultOfFind)){
          mysqli_query($con, "UPDATE cart SET sasia = cart.sasia+1 WHERE id_cart = '$idd'");
          header('Location: http://localhost/Projekti/checkout.php');   
      }
      else{
          mysqli_query($con, "INSERT INTO cart (id_cart, emri, cmimi, sasia) VALUES ('$idd', '$emrii','$cmimii', 1)");
          header('Location: http://localhost/Projekti/checkout.php');
      }

  }
?>

<div class="col-25">
    <div class="container">
      <?php 
          $resCart = mysqli_query($con, "SELECT * FROM cart WHERE id_cart != 0");
          $numriProdukteve = mysqli_num_rows($resCart);
      ?>
      <h4>Shporta <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php echo $numriProdukteve; ?></b></span></h4>
      <?php 
        while($rowsCart = mysqli_fetch_assoc($resCart)){
      ?>
      
      <p>
        <?php echo "<a class='cartPrd' target='_blank' href='http://localhost/Projekti/search.php?search=".$rowsCart['emri']."'>"; 
        echo $rowsCart['emri']. "</a>"; 
        echo "<span class='decrease'><a href='?remove={$rowsCart['id_cart']}'></a></span>"; ?>
        <span class="price"><?php echo $rowsCart['sasia'] . "*"; echo $rowsCart['cmimi'] . "L"; ?></span>
        
      </p>

      <?php 
        } 
      ?>
      <hr>
      <p>Totali <span class="price" style="color:black"><b>
      <?php
        $totali = 0;
        $resCart = mysqli_query($con, "SELECT * FROM cart WHERE id_cart != 0");
        while($rowsCart = mysqli_fetch_assoc($resCart)){
          $totali = $totali + ($rowsCart['sasia'] * $rowsCart['cmimi']);
        }
        echo $totali . "L";
      ?>
      </b></span></p>
    </div>
  </div>
</div>

<?php
      if(isset($_GET['remove'])){
        $idDecrease = $_GET['remove'];
        
        $qryFindToDecrease = "SELECT * FROM cart WHERE id_cart = '$idDecrease'";
        $resultDecrease = mysqli_query($con, $qryFindToDecrease);
        if($sasia1 = mysqli_fetch_assoc($resultDecrease)){
          if($sasia1['sasia'] ==1){

            mysqli_query($con, "DELETE FROM cart WHERE id_cart = '$idDecrease'");
            header('Location: http://localhost/Projekti/checkout.php');
          }
          else{
            mysqli_query($con , "UPDATE cart SET sasia = cart.sasia-1 WHERE id_cart = '$idDecrease'");
            header('Location: http://localhost/Projekti/checkout.php');
          }
        }
        
      }
?>

<?php

    if(isset($_GET['submit'])){
        $name = $_GET['firstname'];
        $email = $_GET['email'];
        $address = $_GET['address'];
        $city = $_GET['city'];
        $zip = $_GET['zip'];
        $perdoruesi = $_SESSION['username'];
        
        //merr id e klientit
        $klienti = mysqli_query($con, "SELECT * FROM klientet WHERE emri = '$perdoruesi'");
        $rowKlienti = mysqli_fetch_assoc($klienti);
        $id_klient = $rowKlienti['id'];

        mysqli_query($con, "INSERT INTO porosi (id_klient, klient, email, adresa, qyteti, zip, totali) VALUES ('$id_klient', '$name', '$email', '$address', '$city', '$zip', '$totali')");
        
        $r = mysqli_query($con ,"SELECT id_porosi FROM porosi ORDER BY id_porosi DESC LIMIT 1");
        $rr = mysqli_fetch_assoc($r);
        
        $idPorosi = $rr['id_porosi'];

        $getCart = mysqli_query($con, "SELECT * FROM cart");
        
        while($cartRows = mysqli_fetch_assoc($getCart)){
            $porosiProd = $cartRows['emri'];
            $porosiSasi = $cartRows['sasia'];
            $porosiCmim = $cartRows['cmimi'];
            mysqli_query($con, "INSERT INTO rreshtporosi (id_porosi, produkti, sasia, cmimi) VALUES ('$idPorosi', '$porosiProd', '$porosiSasi', '$porosiCmim')");
            mysqli_query($con, "UPDATE produktet SET shitur = shitur + '$porosiSasi', sasiaGjendje = sasiaGjendje - '$porosiSasi' WHERE emri = '$porosiProd'");
        }

        mysqli_query($con, "DELETE FROM cart");
        header('Location: http://localhost/Projekti/raport.php');
    }
?>

</body>
</html>