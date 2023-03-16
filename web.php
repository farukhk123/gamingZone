<?php
// session_start();
ini_set("display_errors", "0");
error_reporting(E_ALL);
require 'config.php';
 if(!empty($_SESSION["id"])){
   $id = $_SESSION["id"];
   $result = mysqli_query($conn, "SELECT * FROM kk WHERE id = $id");
   $row = mysqli_fetch_assoc($result);
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 20)) {
        session_unset();    
        session_destroy(); 
        header("location: login.php");  
    }
    $_SESSION['LAST_ACTIVITY'] = time();
    // $person = new Person();
    // $age = $person->getAge();
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Website Page</title>
    <link rel="stylesheet" href="web.css">
</head>

<body>
    <div class="container">

        <div class="navbar">   
            <img src="logo.png" class="logo">
            <nav>
                <ul id="menuList">
                    <li><a href="">Media Remotes</a></li>
                    <li><a href="kk.php">Register</a></li>
                    <li><a href="kindex.php">UserLogin</a></li>
                    <li><a href="/project4/admin/loginform_admin.php">AdminLogin</a></li>
                </ul>
            </nav>
            <img src="menu.png" class="menu-icon" onclick="togglemenu()">
        </div>
        <div>
        </div>
        <marquee id="marque" behavior="alternate" direction="right"><h5>Welcome <?php echo $row["Fname"]; ?></h5></marquee>

        <div class="row">
            <div class="col-1">
                <h2>PS4<br>Dualshock 4</h2>
                <h3>Wireless Controller for PlayStation<br>Dualshock</h2>
                    <p>(Compatible/Generic)</p>
                    <h4>2000Rs</h4>
                    <button type="button">Buy Now<img src="arrow.png"></button>
            </div>
            <div class="col-2">
                <img src="controller.png" class="controller">
                <div class="color-box"></div>
                <div class="add-btn">
                    <img src="add.png">
                    <p><small>Add to Cart</small></p>
                    
                </div>
            </div>
        </div>

        <div class="social-link">
            <img src="fb.png">
            <img src="ig.png">
            <img src="tw.png">

        </div>
    </div>
    <script>
        // $(document).ready(function () {
            var menuList = document.getElementById("menuList");
            menuList.style.maxHeight = "0px";
            function togglemenu() {
                if (menuList.style.maxHeight == "0px") {
                    menuList.style.maxHeight = "130px";
                }
                else {
                    menuList.style.maxHeight = "0px";
                }
            }
        // });
    </script>
</body>

</html>
