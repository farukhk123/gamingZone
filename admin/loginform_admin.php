<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="login_admin.css">
    <!-- <script src="login.js"></script> -->
    <title>Admin Login</title>
</head>

<body>
    <div class="container">
        <div class="row text-center">
            <form class="login-form" action="login_admin.php" method="post" name="form">
                <h1>Admin Login</h1>
                <?php if (isset($_GET['msg']))  echo $_GET['msg'];  ?>
              
                <p>User Name</p>
                <input type="text" name="username" placeholder="User Name">
                <div id="Username_error">Please fill up your User name</div>
                <p>Password</p>
                <input type="password" name="password" id="pwd1" placeholder="password">
                <div id="pass_error">Please fill up your Password</div>
                <button type="sumbit" name="btn" onclick="login()">Login</button>
                <!-- <a href="kk.php">register here</a> -->
                <br>
                    <h3>User Login<a href="../kindex.php">Login</a></h1>
             </form>
        </div>
    </div>
    
</body>

    
  
</html>