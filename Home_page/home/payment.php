<?php
include "functions.php";
session_start();
if(isset($_POST['home']))
{
    header("Location: http://localhost/crypto/Home_page/home/Homepage.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Register page</title>
    <link rel="stylesheet" href="payment.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Payment Details</div>
    <div class="content">
      <P><?php echo "<br>";
    echo "Recieving adrress: ". $_SESSION['r_address'];
    echo "<br>Sending address: ". $_SESSION['s_address'];
    echo "<br><br>Sending currency: ".$_SESSION['f_currency'];
    echo "<br>recieving currency:".$_SESSION['s_currency'];?></p>
    <Br>
    <form action="#" method="post">
    <input type="submit" name="home" value="Home" style="height: 70px; width: 70px; font-weight: 700; font-size: medium; border-radius: 60px; background-color: #0d0430; color: #e0580f; margin-left: 270px;">
    </form>
    </div>
  </div>

</body>
</html>