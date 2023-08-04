<?php
$host = 'localhost';
$db = 'student';
$user = 'root';
$password = 'shreel';

$conn = mysqli_connect($host, $user, $password, $db);
if (!$conn){
	echo "connection failed";
}
$sql = " SELECT * FROM transaction ORDER BY t_id ASC ";
$result = $conn->query($sql);


if(isset($_POST['r_user']))
{

	$user=$_POST['r_user'];
	$qury="select * from project where username='$user'";
	$res=mysqli_query($conn,$qury);
	if (mysqli_num_rows($res)>0)
	{
		$query1="delete from project where username='$user'";
		$result1=mysqli_query($conn,$query1);
		if(isset($result1))
		{
			echo "<script>alert('User removed!');</script>";
		}
	}
	else
	{
		echo "<script>alert('User doesn't exist!');</script>";
	}
}

if(isset($_POST['q_id']) && isset($_POST['username']) && isset($_POST['reply']))
{
	$username = $_POST['username'];
	$reply = $_POST['reply'];
	$q_id = $_POST['q_id'];

	$query2 = "update query set reply='$reply' where q_id='$q_id'";
	$res3 = mysqli_query($conn,$query2);
	if(isset($res3))
	{
		echo "<script>alert('Query Replied successfully!');</script>";
	}
	else{
		echo "<script>alert('provide valid Q_ID!');</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin panel</title>
</head>
<body>
<div class="container">
<div class="content">
<section>
		<h1>Transactions</h1>
		<Br>
		<table>
			<tr>
				<th>T_id</th>
				<th>Username</th>
				<th>s_address</th>
				<th>r_address</th>
                <th>f_currency</th>
                <th>Deducted</th>
                <th>s_currency</th>
                <th>Recieved</th>
			</tr>
			<?php
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['t_id'];?></td>
				<td><?php echo $rows['username'];?></td>
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
	</section>
	<br>
    <section>
        <h1>Queries</h1>
		<?php 
		$sql2 = "select * from query order by q_id asc";
		$res2=$conn->query($sql2);
		?>
		<table>
			<tr>
				<th>Q_id</th>
				<th>Username</th>
				<th>Query</th>
				<th>Reply</th>
			</tr>
			<?php
				while($rows=$res2->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['q_id'];?></td>
				<td><?php echo $rows['username'];?></td>
				<td><?php echo $rows['query'];?></td>
				<td><?php echo $rows['reply'];?></td>
				
			</tr>
			<?php
				}
			?>
		</table>
		<form action="#" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details" style="font-size: large; font-weight: 700;">Reply Users</span>
            <input type="text" placeholder="Enter Query ID" name="q_id" required>
            <input type="text" placeholder="Enter Username" name="username" required>
            <input type="text" placeholder="Enter Answer" name="reply" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Reply" name="Reply">
        </div>      
</form>
    </section>
	<br>
    <section>
        <h1>Users</h1>
		<br>
	<?php 
	$sql1 = "select * from project order by user_id asc";
	$res1=$conn->query($sql1);
	?>
	<table>
			<tr><td colspan="5" style="background-color: #00030">
			<?php
		$sql = "select * from project";
		if($result=mysqli_query($conn,$sql))
		{
			$usercount = mysqli_num_rows($result);
		}
		 echo "<h3>Total number of users: ".$usercount."</h3>";?></td>
			</tr>
			<tr>
				<th>User_id</th>
				<th>Username</th>
				<th>Contact</th>
				<th>Email</th>
                <th>W_address</th>
			</tr>
			<?php
				while($rows=$res1->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['user_id'];?></td>
				<td><?php echo $rows['username'];?></td>
				<td><?php echo $rows['contact'];?></td>
				<td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['w_address'];?></td>
        	</tr>
			<?php
				}
			?>
		</table>
    </section>
<form action="#" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Remove Users</span>
            <input type="text" placeholder="Enter Username" name="r_user" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Remove" name="remove">
        </div>      
</form>
</div>
</div>
</body>
</html>