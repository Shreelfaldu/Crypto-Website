<?php
include "functions.php";
session_start();
$username = $_SESSION['username'];


if(isset($_POST['query']))
{

	$query=$_POST['query'];
	$qury="insert into query(username,query) values('$username','$query');";
	$res=mysqli_query($conn,$qury);
	if (isset($res))
	{
        $_SESSION['query']=$query;
        echo "<script>alert('Query submitted!');</script>";
	}
	else
	{
		echo "<script>alert('Some error occured!');</script>";
	}
}
$sql = " SELECT * FROM query where username='$username' ORDER BY q_id ASC ";
$result = $conn->query($sql);
if(isset($_POST['home']))
{
    header("Location: http://localhost/crypto/Home_page/home/homepage.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="query.css">
    <title>Customer Support</title>
</head>
<body> 
<div class="container">
<div class="content">
<section>
		<h1>Queries</h1>
		<Br>
		<table>
			<tr>
                <th>q_id</th>
				<th>query</th>
				<th>Reply</th>
			</tr>
			<?php
            $num = 0; 
				while($rows=$result->fetch_assoc())
				{
                    $num = $num + 1;
			?>
			<tr>
                <td><?php echo $num; ?></td>
				<td><?php echo $rows['query'];?></td>
				<td><?php echo $rows['reply'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
	<br>
   
    <form action="#" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details" style="font-size: larger; font-weight: 700;">Query</span>
            <input type="text" placeholder="Enter Your Query" name="query" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Submit" name="submit">
          <input type="Button" value="Home"  id="home">
        </div>

</form>

</div>
</div>

<script type="text/javascript">
    document.getElementById("home").onclick =function()
    {
        location.href = "http://localhost/crypto/Home_page/home/homepage.php"
    }
    </script>
</body>
</html>