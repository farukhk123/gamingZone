<?php

//  ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

//  require '/opt/lampp/htdocs/project4/forgot_pass.php';



$conn = new mysqli('localhost','root','123456','project4data');


 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    <script src="Reg.js"></script>
    <link rel="stylesheet" href="registration.css">
</head>

<body>

    <body>
        <div class="containerReg">
            <div class="heading">Forgot Password</div>
            <form action="update_pass.php" method="post"> 
              <form method="post">  
            <div class="card-details">
                <!-- <div class="card-box">
                    <span class="details">Full Name</span>
                    <input id="fullname" type="text" placeholder="Enter your Name" name="Fname" required >

                </div> -->

                <!-- <div class="card-box">
                    <span class="details">Username</span>
                    <input id="username" type="text" placeholder="Enter your Username" name="Uname" required>
                </div> -->


                <div class="card-box">
                    <span class="details">Email</span>
                    <input id="Email" type="Email" placeholder=" Enter your Email" name="Email" required>
                </div>

                <!-- <div class="card-box">
                    <span class="details">Phone Number</span>
                    <input id="phone" type="tel" placeholder="Phone Number"
                        pattern="^/(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/" name="Pnumber" required>
                </div> -->
                
                <!-- <div class="card-box">
                    <span class="details">Password</span>
                    <input id="password" type="password" placeholder="Enter your Password"
                        pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,28}$" name="Pass" required>
                </div>

                <div class="card-box">
                    <span class="details">Confirm Password</span>
                    <input id="confpassword" type="password" placeholder="Confirm Password" required class="text-name" required>
                </div> -->

            <!-- </div>
            <div class="circal-form">
                <span class="circal-title">Gender</span>
                <div class="category">
                    <input type="radio" name="gender" value="m" required>Male
                    <input type="radio" name="gender" value="f" required>Female
                    <input type="radio" name="gender" value="o" required>Other

                </div> -->
            
            </div>
            <div class="button">
               <input type="submit" value="Forgot-Password" ></a>

                <br>
                <!-- <center>
                    <p>already have a account?<a href="login.php">Login</a>
                </center> -->
                </p>

                 </form> 
            </div>

    </body>

</html>