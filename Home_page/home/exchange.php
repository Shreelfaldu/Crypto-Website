<?php
include "functions.php";
session_start();

if(isset($_POST['username']) && isset($_POST['r_address']))
{
$w_address = $_SESSION['w_address'];
$username = $_SESSION['username'];
$name = $_POST['username'];
$r_address = $_POST['r_address'];
$s_address = $_POST['s_address'];
$f_coin = $_SESSION['first_coin'];
$s_coin = $_SESSION['sec_coin'];
$f_currency = $_SESSION['f_currency'];
$s_currency = $_SESSION['s_currency'];
  if($username == $name)
  {
      
      $query="insert into transaction(s_address,username,r_address,recieved,deducted,f_currency,s_currency) values('$s_address','$name','$r_address','$s_coin','$f_coin','$f_currency','$s_currency')";
      $reslut=mysqli_query($conn,$query);
      if(isset($reslut))
      {
          $_SESSION['r_address']=$r_address;
          $_SESSION['s_address']=$s_address;
          header("Location: http://localhost/crypto/Home_page/home/payment.php");
      }
      else{
          echo "<script>alert('Transaction Failed');</script>";
        }
  }
  else{
      header("Location: exchange.php?error=enter valid username!");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exchange.css">
    <title>Exchange</title>
</head>
<body>
<div class="container">
<div class="title">Exchange</div>
<div class="content">
<form action="#" method="post">
        
        <div class="user-details">
        <div class="input-box">
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
          </div>
        <div class="input-box"></div>
        <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="username" id="username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" id="email" required>
          </div>
          <div class="input-box">
            <span class="details">Sending wallet address</span>
            <input type="text" placeholder="From where you want to send" name="s_address"  required>
          </div>
          <div class="input-box">
            <span class="details">Recieving Wallet address</span>
            <input type="text" placeholder="Where you will recieve" name="r_address" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Confirm">
        </div>      
</form>
</div>
</div>
</body>
</html>