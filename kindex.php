<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
?>

<!DOCTYPE html>
<?php //echo phpinfo();die;?>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
    <title>Login Form</title>
</head>

<body>
    <div class="container">
        <div class="row text-center">
            <form class="login-form" action="loginconn.php" method="post" name="form">
                <h1>Login-Form</h1>
                <?php if (isset($_GET['msg']))  echo $_GET['msg'];  ?>
                <p>User Name</p>
                <input type="text" name="username" placeholder="User Name">
                <div id="Username_error">Please fill up your User name</div>
                <p>Password</p>
                <input type="password" name="password" id="pwd1" placeholder="password">
                <div id="pass_error">Please fill up your Password</div>
                <button type="sumbit" name="btn">Login</button> 
                <!-- <button>Register Yourself<a href="kk.php"></button>  -->
                
                <p class= "text-center">Register Yourself <a href=" kk.php">Click Here</a></p>
                <p class= "text-center">Forgot Password? <a href=" recover_email.php">Click Here</a></p>
                <p class= "text-center">Admin login <a href="/project4/admin/loginform_admin.php">Click Here</a></p>
                <p class= "text-center">Back to page <a href=" web.php">Click Here</a></p>
                <!-- <a href="kk.php">register here</a> -->

            </div>
        </div>
</form>
    </div>

</body>

</html>