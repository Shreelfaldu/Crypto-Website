<?php 
include "functions.php";
session_start();
$s_coin=22395.70;
if(isset($_POST['f_coin']))
{
    $f_coin=$_POST['f_coin'];
    $bitcoin_Dollar = 22395.70;
    $Ethereum_Dollar = 1574.52;
    $Thereum_Dollar = 1;
    $rupee_dollar=0.012;
    $bnb_Dollar = 289.69;
    $dd2=$_POST['dd2'];
    $dd1=$_POST['dd1'];
    if($dd1=="Bitcoin")
    {
        if($dd2=="Dollar")
        {
            $s_coin=$f_coin*(30376.40);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Rupee")
        {
            $s_coin=$f_coin*(2472635.74);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Bitcoin")
        {
            $s_coin=$f_coin*(1);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Ethereum")
        {
            $s_coin=$f_coin*(16.03);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Tether")
        {
            $s_coin=$f_coin*(30174.84);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Riyal")
        {
            $s_coin=$f_coin*(113568.74);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Dirham")
        {
            $s_coin=$f_coin*(111184.02);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }

    }
    else if($dd1== "Ethereum")
    {
        if($dd2=="Dollar")
        {
            $s_coin=$f_coin*(2007.13);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Rupee")
        {
            $s_coin=$f_coin*(163913.78);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Riyal")
        {
            $s_coin=$f_coin*(7528.88);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Dirham")
        {
            $s_coin=$f_coin*(7370.65);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Ethereum")
        {
            $s_coin=$f_coin*(1);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Tether")
        {
            $s_coin=$f_coin*(1998.51);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Bticoin")
        {
            $s_coin=$f_coin*(0.066);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
    }
    
    else if($dd1== "Tether")
    {
        if($dd2=="Dollar")
        {
            $s_coin=$f_coin*(1.00);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Rupee")
        {
            $s_coin=$f_coin*(81.73);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Riyal")
        {
            $s_coin=$f_coin*(3.75);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Dirham")
        {
            $s_coin=$f_coin*(3.68);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Tether")
        {
            $s_coin=$f_coin*(1);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Bitcoin")
        {
            $s_coin=$f_coin*(0.000033);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Ethereum")
        {
            $s_coin=$f_coin*(0.00050);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
    }

    else if($dd1== "Rupee")
    {
        if($dd2=="Dollar")
        {
            $s_coin=$f_coin*(0.012);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Bitcoin")
        {
            $s_coin=$f_coin*(0.000000406);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Ethereum")
        {
            $s_coin=$f_coin*(0.0000065);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Tether")
        {
            $s_coin=$f_coin*(0.012);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Riyal")
        {
            $s_coin=$f_coin*(0.046);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Dirham")
        {
            $s_coin=$f_coin*(0.045);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Rupee")
        {
            $s_coin=$f_coin*(1);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
    }

    else if($dd1== "Dollar")
    {
        if($dd2=="Dollar")
        {
            $s_coin=$f_coin*1;
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Bitcoin")
        {
            $s_coin=$f_coin*(0.000033);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Ethereum")
        {
            $s_coin=$f_coin*(0.00053);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Tether")
        {
            $s_coin=$f_coin*(1.00);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Riyal")
        {
            $s_coin=$f_coin*(3.75);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Dirham")
        {
            $s_coin=$f_coin*(3.67);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
        else if($dd2=="Rupee")
        {
            $s_coin=$f_coin*(82.01);
            $_SESSION['first_coin']=$f_coin;
            $_SESSION['sec_coin']=$s_coin;
            $_SESSION['f_currency']=$dd1;
            $_SESSION['s_currency']=$dd2;
            header("Location: http://localhost/crypto/Home_page/home/exchange.php");
        }
    }
    
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cryptocurrency Website Design</title>
        <link rel="stylesheet" href="homepage.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    </head>
    <body>
    <nav>
    
    <img src="img/logo.svg" alt="Logo" class="profile">
       
    <img src="img/user.png" alt="profile" class="profile" onclick="toggleMenu()">
    <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
            <div class="user-info">
                <img src="img/user.png" class="profile">
                <h2><?php echo $_SESSION["username"];?></h2>
            </div>
            <hr>

            <a href="homepage.php" class="sub-menu-link">
                <img src="img/home.png" alt="">
                <p>Homepage</p>
                <span>></span>
            </a>

            <a href="profile.php" class="sub-menu-link">
                <img src="img/user.png" alt="">
                <p>My Profile</p>
                <span>></span>
            </a>
            <a href="edit_profile.php" class="sub-menu-link">
                <img src="img/edit.png" alt="">
                <p>Edit Profile</p>
                <span>></span>
            </a>
            <a href="logout.php" class="sub-menu-link">
                <img src="img/logout.png" alt="">
                <p>Logout</p>
                <span>></span>
            </a>
        </div>
    </div>
    </nav>
    <form method="POST" action="#">
    <div class="converter">
        <h1>Crypto Converter</h1>
        <div class="cards">
            <div class="card">
                <div class="select">
                    <h4 id="coin_first">B</h4>
                    <div class="select1">
                        <h6>GIVE</h6>
                        <select id="coin" name="dd1">
                            <option value="Bitcoin"><selected>Bitcoin</selected></option>
                            <option value="Ethereum">Ethereum</option>
                            <option value="Tether">Tether</option>
                            <option value="Dollar">Dollar</option>
                            <option value="Rupee">Rupee</option>
                        </select>
                    </div>
                </div>
                <div class="enter_bitcoin">
                    <input type="text" placeholder="0.1" id="crypto" name="f_coin">
                    <h6 id="btc">BTC</h6>
                </div>
                <p>Rate expressed in Digital Currency</p>
            </div>
            <input type="submit" value="exchange" style="height: 70px; width: 70px; font-weight: 700; border-radius: 60px; background-color: skyblue; color: white;">

            <!-- <div class="card2"><a href="exchange.php"><i class="bi bi-arrow-left-right"></i></a> 
            </div> -->
             
            <div class="card">
                <div class="select">
                    <h4 id="gov_coins">$</h4>
                    <div class="select1">
                        <h6>GET</h6>
                        <select id="coins" name="dd2">
                            <option value="Dollar"><selected>Dollar</selected></option>
                            <option value="Rupee">Rupee</option>
                            <option value="Riyal">Riyal</option>
                            <option value="Dirham">Dirham</option>
                            <option value="Bitcoin">Bitcoin</option>
                            <option value="Ethereum">Ethereum</option>
                            <option value="Tether">Tether</option>
                        </select>
                    </div>
                </div>
                <div class="enter_bitcoin">
                    <input type="text" placeholder="22395.70" value="" id="gov" name="s_coin">
                    <h6 id="gov_coinss">USD</h6>
                </div>
                <p>Rate expressed in Goverment Currency</p>
            </div>
            </div>
            
        </div>
</form>

    <footer class="footer">
        <div class="fcontainer">
            <div class="row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Affiliate Program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Product</h4>
                    <ul>
                        <li><a href="homepage.php">Crypto API</a></li>
                        <li><a href="homepage.php">Exchange</a></li>
                        <li><a href="#">Payment Option</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Tranding Rules</a></li>
                        <li><a href="query.php">Support Center</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Social</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script1.js"></script>
    <script>
            let subMenu = document.getElementById("subMenu");
            function toggleMenu(){
                subMenu.classList.toggle("open-menu");
            }
    </script>
    <script>
let coin_first = document.getElementById('coin_first');
let coin = document.getElementById('coin');
let btc = document.getElementById('btc');

coin.addEventListener('change',()=>{
    let a = coin.value;
    coin_first.innerText = a.slice(0, 1);
    if (a === "Bitcoin"){
        btc.innerText = "BTC"
    }
    else if (a === "Ethereum"){
        btc.innerText = "ETH"
    }
    else if (a === "Tether"){
        btc.innerText = "USDT"
    }
    else if (a === "Rupee"){
        btc.innerText = "INR"
    }
    else if (a === "Dollar"){
        btc.innerText = "USD"
    }
    else{
        btc.innerText = "BNB"
    }
})

let gov_coins = document.getElementById('gov_coins');
let coins = document.getElementById('coins');
let gov_coinss = document.getElementById('gov_coinss');

coins.addEventListener('change',() => {
    let a = coins.value;
    gov_coins.innerText = a.slice(0, 1);
    if (a === "Dollar"){
        gov_coins.innerText = "$"
        gov_coinss.innerText = "USD"
    }
    else if (a === "Rupee"){
        gov_coinss.innerText = "INR"
        gov_coins.innerText = "₹"
    }
    else if (a === "Ethereum"){
        gov_coinss.innerText = "Ether"
        gov_coins.innerText = "E"
    }
    else if (a === "Bitcoin"){
        gov_coinss.innerText = "BTC"
        gov_coins.innerText = "B"
    }
    else if (a === "Tether"){
        gov_coinss.innerText = "USDT"
        gov_coins.innerText = "T"
    }
    else if (a === "Riyal"){
        gov_coins.innerText = "S"
        gov_coinss.innerText = "SAR"
    }
    else{
        gov_coins.innerText = "A"
        gov_coinss.innerText = "AED"
    }
})



let crypto = document.getElementById('crypto');
let gov = document.getElementById('gov');

let bitcoin_Dollar = 22395.70;
let Ethereum_Dollar = 1574.52;
let Thereum_Dollar = 1;
let rupee_dollar = 0.0012;
let bnb_Dollar = 289.69;

crypto.addEventListener('change', () => {
    switch ("Bitcoin") {
        case coin.value:
            switch ("Dollar"){
                case coins.value:
                    gov.value = (crypto.value) * 30276.40;
                    break;
            }
            switch ("Bitcoin"){
                case coins.value:
                    gov.value = (crypto.value) * 1;
                    break;
            }
            switch ("Ethereum"){
                case coins.value:
                    gov.value = (crypto.value) * 16.03;
                    break;
            }
            switch ("Tether"){
                case coins.value:
                    gov.value = (crypto.value) * 30174.84;
                    break;
            }
            switch ("Rupee"){
                case coins.value:
                    gov.value = (crypto.value) * (2472635.74);
                    break;
            }
            switch ("Riyal"){
                case coins.value:
                    gov.value = (crypto.value) * (113568.74);
                    break;
            }
            switch ("Dirham"){
                case coins.value:
                    gov.value = (crypto.value) * (111184.02);
                    break;
            }
            break;
    }
})

crypto.addEventListener('change', () => {
    switch ("Rupee") {
        case coin.value:
            switch ("Dollar"){
                case coins.value:
                    gov.value = (crypto.value) * (0.012);
                    break;
            }
            switch ("Rupee"){
                case coins.value:
                    gov.value = (crypto.value) * (1);
                    break;
            }
            switch ("Bitcoin"){
                case coins.value:
                    gov.value = (crypto.value) * 0.000000406;
                    break;
            }
            switch ("Ethereum"){
                case coins.value:
                    gov.value = (crypto.value) * 0.000065;
                    break;
            }
            switch ("Riyal"){
                case coins.value:
                    gov.value = (crypto.value) * (0.046);
                    break;
            }
            switch ("Dirham"){
                case coins.value:
                    gov.value = (crypto.value) * (0.045);
                    break;
            }
            switch ("Tether"){
                case coins.value:
                    gov.value = (crypto.value) * (0.012);
                    break;
            }
            break;
    }
})

crypto.addEventListener('change', () => {
    switch ("Ethereum") {
        case coin.value:
            switch ("Dollar"){
                case coins.value:
                    gov.value = (crypto.value) * (2007.13);
                    break;
            }
            switch ("Rupee"){
                case coins.value:
                    gov.value = (crypto.value) * (163913.78);
                    break;
            }
            switch ("Riyal"){
                case coins.value:
                    gov.value = (crypto.value) * (7528.88);
                    break;
            }
            switch ("Dirham"){
                case coins.value:
                    gov.value = (crypto.value) * (7370.65);
                    break;
            }
            switch ("Ethereum"){
                case coins.value:
                    gov.value = (crypto.value) * (1);
                    break;
            }
            switch ("Tether"){
                case coins.value:
                    gov.value = (crypto.value) * (1998.51);
                    break;
            }
            switch ("Bitcoin"){
                case coins.value:
                    gov.value = (crypto.value) * (0.066);
                    break;
            }
            break;
    }
})

crypto.addEventListener('change', () => {
    switch ("Tether") {
        case coin.value:
            switch ("Dollar"){
                case coins.value:
                    gov.value = (crypto.value) * (1.00);
                    break;
            }
            switch ("Rupee"){
                case coins.value:
                    gov.value = (crypto.value) * (81.73);
                    break;
            }
            switch ("Riyal"){
                case coins.value:
                    gov.value = (crypto.value) * (3.75);
                    break;
            }
            switch ("Dirham"){
                case coins.value:
                    gov.value = (crypto.value) * (3.68);
                    break;
            }
            switch ("Tether"){
                case coins.value:
                    gov.value = (crypto.value) * (1);
                    break;
            }
            switch ("Ethereum"){
                case coins.value:
                    gov.value = (crypto.value) * (0.00050);
                    break;
            }
            switch ("Bitcoin"){
                case coins.value:
                    gov.value = (crypto.value) * (0.000033);
                    break;
            }
            break;
    }
})

crypto.addEventListener('change', () => {
    switch ("Dollar") {
        case coin.value:
            switch ("Dollar"){
                case coins.value:
                    gov.value = (crypto.value) * 1;
                    break;
            }
            switch ("Rupee"){
                case coins.value:
                    gov.value = (crypto.value) * 82.01;
                    break;
            }
            switch ("Bitcoin"){
                case coins.value:
                    gov.value = (crypto.value) * 0.000033;
                    break;
            }
            switch ("Ethereum"){
                case coins.value:
                    gov.value = (crypto.value) * 0.00053;
                    break;
            }
            switch ("Riyal"){
                case coins.value:
                    gov.value = (crypto.value) * (3.75);
                    break;
            }
            switch ("Dirham"){
                case coins.value:
                    gov.value = (crypto.value) * (3.67);
                    break;
            }
            switch ("Tether"){
                case coins.value:
                    gov.value = (crypto.value) * (1.00);
                    break;
            }
            break;
    }
})


</script>
    </body>
</html> 