<?php
include "functions.php";
session_start();

if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM project WHERE username='$username' AND password='".md5($password)."'";
    $result = mysqli_query($conn, $sql);
    if($username=="admin" && $password="admin"){
        header("Location: http://localhost/crypto/Home_page/home/admin.php");
    }
    else if (mysqli_num_rows($result)){
        $row = mysqli_fetch_assoc($result);
        header("Location: http://localhost/crypto/Home_page/home/homepage.php");
        $_SESSION["user_id"]=$row['user_id'];
        $_SESSION["username"]=$row['username'];
        $_SESSION["email"]=$row['email'];
        $_SESSION["contact"]=$row['contact'];
        $_SESSION["w_address"]=$row['w_address'];
        $_SESSION["login_sess"]="1";
    }
    else
    {
        echo '<script>alert("incorrect id/password")</script>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <section>
        <div class="imgBx">
            <img src="image/register_bg.jpg">
            <div class="text1">
                <h1>WELCOME TO  <br>CRYPTO CIRCLE</h1>
                <div class="text2"><h3>Exchange your Currency <br> Securly<br>get payment done in<br> shortest amount of time.</h3></div>
                <div class="text3"><h6>You Must Join Our Network</h6></div>
            </div>
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>sign in</h2>
                <form action="#" method="post">
                    <div class="inputBX">
                        <span>Username</span>
                        <input type="text" name="username" required>
                    </div>
                    <div class="inputBX">
                        <span>Password</span>
                        <input type="password" name="password" required>
                    </div>
                    
                    <div class="inputBX">
                        <input type="submit" value="sign in" name="signin">
                    </div>
                    <div class="inputBX">
                        <p>Don't have an account? <a href="../register/register.php">Sign up</a></p>
                    </div>
                </form>
                <h3>Login with social media</h3>
                <ul class="sci">
                    <li><img src="image/facebook-app-symbol.png"></li>
                    <li><img src="image/instagram.png"></li>
                </ul>
            </div>
        </div>
    </section>
</body>
</html>