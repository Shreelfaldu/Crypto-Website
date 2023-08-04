<?php
require("functions.php");
session_start();
$user_id = $_SESSION['user_id'];
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['cpassword'])) {
	
	$name = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['contact'];
	$password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $h_pass=md5($password);
  $w_address = $_POST['w_address'];

  $sql="select * from project where username='$name'";
  $res=mysqli_query($conn,$sql);
  if (mysqli_num_rows($res)>0){
    $row = mysqli_fetch_assoc($res);
    if($username==$row['username'])
    {
    header("Location: register.php?error=username already exists.....");
    }
  }
  else if ($password != $cpassword) 
    {
      header("Location: register.php?error=Both password doesn't match");
    }
  else if (strlen($password)<8) 
    {
      header("Location: register.php?error=Password length is lessthan 8");
    }
  else if (strlen($contact)!=10) 
    {
      header("Location: register.php?error=Contact length is lessthan 10");
    }
  else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    header("Location: register.php?error=invalid email format!");
  }
	
	$sql = "update project set username='$name', email='$email', contact='$phone', password='$h_pass', w_address='$w_address' where user_id='$user_id'";
	
	if (mysqli_query($conn, $sql)) {
		echo "Profile updated successfully.";
    header("Location: http://localhost/crypto/Home_page/Login/login.php");
	} else {
		echo "Error updating profile: ";
	}
	
  exit();
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit_profile.css">
    <title>Profile</title>
</head>
<body>
<div class="container">
<div class="title">Update your profile</div>
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
            <input type="text" placeholder="Enter your username" name="username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="tel" placeholder="Enter your number" name="contact" maxlength="10" onkeypress="return /[0-9]/i.test(event.key)" required>
          </div>
          <div class="input-box">
            <span class="details">Wallet</span>
            <input type="text" placeholder="Enter your Wallet address" name="w_address" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" name="cpassword" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Update">
        </div>      
</form>
</div>
</div>
</body>
</html>