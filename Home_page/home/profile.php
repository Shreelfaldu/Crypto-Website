<?php 
session_start();
include "functions.php";
if(!isset($_SESSION["login_sess"]))
{
    header("Location: http://localhost/crypto/Home_page/Login/login.php");
}
$username = $_SESSION['username'];
$sql = " SELECT * FROM transaction where username = '$username' ";
$result = $conn->query($sql);
$conn->close();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Register page</title>
    <link rel="stylesheet" href="profile.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">My Profile</div>
    <div class="content">
      <div>
    <ul>
      <li><strong>Username:</strong> <?php echo $_SESSION['username']; ?></li>
      <li><strong>Email:</strong> <?php echo $_SESSION['email']; ?></li>
      <li><strong>Phone:</strong> <?php echo $_SESSION['contact']; ?></li>
      <li><strong>Wallet:</strong> <?php echo $_SESSION['w_address']; ?></li>
    </ul><br>
    <button><a href="edit_profile.php">Edit profile</a></button></div>
    
    <br><h1 style="text-align: center;">Transactions</h1>
    <div style="display: flex;
        align-items: center;
        justify-content: center;">
        
    <table style=" align: center;">
			<tr>
				<th>T_id</th>
				<th>s_address</th>
				<th>r_address</th>
        <th>f_currency</th>
        <th>Deducted</th>
        <th>s_currency</th>
        <th>Recieved</th>
			</tr>
			<?php
        $num = 0;
				while($rows=$result->fetch_assoc())
				{
          
          $num = $num + 1;
			?>
			<tr>
				<td><?php echo $num;?></td>
				<td><?php echo $rows['s_address'];?></td>
				<td><?php echo $rows['r_address'];?></td>
        <td><?php echo $rows['f_currency'];?></td>
        <td><?php echo $rows['deducted'];?></td>
        <td><?php echo $rows['s_currency'];?></td>
        <td><?php echo $rows['recieved'];?></td>

			</tr>
			<?php
				}
			?>
		</table>
    </div>
    </div>
  </div>

</body>
</html>

