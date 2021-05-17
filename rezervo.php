<?php
    include("lidhjaDB.php");
    function myAlertBox(){
      ?>
      <script>
          swal("Sukses!", "Rezervimi juaj u krye!", "success");
        </script>
      <?php
    return true;
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/png" href="favicons/happy.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="rezervo.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
<body>

<h2>Rezervo online</h2>
<div class="return">
    <a href="http://localhost/Projekti/Chocoo.php">Kthehu ne faqen kryesore</a>
  </div>
  <div class="porosit">
    <a href="http://localhost/Projekti/checkout.php">Porosit Online</a>
  </div>
<div class="rowR">
  <div class="col-75">
    <div class="container">
      <form method="get" action="">
      
        <div class="row">
          <div class="col-50">
            <h3>Te dhenat</h3>
            <label for="fname"><i class="fa fa-user"></i> Emer Mbiemer</label>
            <input type="text" id="fnameR" name="firstname" placeholder="John M. Doe" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="emailR" name="email" placeholder="john@example.com" required>
            <label for="adr"><i class="fa fa-phone"></i> Telefon</label>
            <input type="tel" id="adr" name="tel" placeholder="+3556XXXXXXXX" required>
            <label for="city"><i class="fa fa-users"></i> Numri i personave</label>
            <input type="number" id="city" name="nrPersona" placeholder="10" required>

          <div class="row">
              <div class="col-50">
                <label for="state"><i class="fa fa-calendar"></i> Data</label>
                <input type="date" id="state" name="data" placeholder="NY" required>
              </div>
              <div class="col-50">
                <label for="zip"><i class="fa fa-clock-o"></i> Ora</label>
                <input type="time" id="zip" name="ora" placeholder="10001" required>
              </div>
            </div>
          </div>
        </div>
        <input type="submit" value="Perfundo rezervimin" class="btn" name="submit">
      </form>
    </div>
  </div>
</div>
<?php

    if(isset($_GET['submit'])){
        $emer = $_GET['firstname'];
        $email = $_GET['email'];
        $tel = $_GET['tel'];
        $nrPersona = $_GET['nrPersona'];
        $data = $_GET['data'];
        $ora = $_GET['ora'];

        mysqli_query($con, "INSERT INTO rezervim (emer, email, telefon, nrPersona, data, ora) VALUES ('$emer', '$email', '$tel', '$nrPersona', '$data', '$ora')");
        $x = myAlertBox();
        ?>
        
        <?php
  
    }

?>

</body>
</html>