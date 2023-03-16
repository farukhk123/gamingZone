 <?php
//  ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
 include "db_conn_admin.php";
 $id = $_GET['id'];
 $query = "SELECT * FROM kk where id = '$id'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

if($_POST['update']){
    $Fname = $_POST['Fname'];
    $Uname = $_POST['Uname'];
    $Email = $_POST['Email'];
    $Pnumber = $_POST['Pnumber'];
    $gender = $_POST['gender'];
    
    $query = "update kk set Fname = '$Fname', Uname='$Uname', Email='$Email', Pnumber='$Pnumber', gender='$gender' WHERE id='$id'";
    $data = mysqli_query($conn,$query);
    if($data){
        echo "<script>alert('Record Updated')</script>";
         header("Location:admin_show.php"); 
    }
    else{
        echo " faild to update";
    }
    }
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    <! <script src="Reg.js"></script>
    <link rel="stylesheet" href="update_admin.css">
</head> 

<body>

    <body>
        <div class="containerReg">
            <div class="heading">UPDATE FORM</div>
             <form method="post"> 
            <div class="card-details">
                <div class="card-box">
                    <span class="details">Full Name</span>

                    <input id="Fname" type="text" value="<?php  echo $result['Fname'];  ?>" placeholder="Enter your Name" name="Fname" required >
                </div>

                <div class="card-box">
                    <span class="details">Username</span>
                    <input id="Uname" type="text" value="<?php echo $result['Uname']; ?>" placeholder="Enter your Username" name="Uname" required>
                </div>


                <div class="card-box">
                    <span class="details">Email</span>
                    <input id="email" type="email" value="<?php echo $result['Email']; ?>" placeholder=" Enter your Email" name="Email" required>
                </div>

                <div class="card-box">
                    <span class="details">Phone Number</span>
                    <input id="phone" type="tel" value="<?php echo $result['Pnumber']; ?>"placeholder="Phone Number"
                        pattern="^/(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/" name="Pnumber" required>
                </div>
            </div>
            <div class="circal-form">
                <span class="circal-title">Gender</span>
                <div class="category">
                    <input type="radio" name="gender" value="m" <?php 
                      if($result['gender'] == 'm') 
                      {
                        echo "checked";
                      }                       
                    
                    ?> required>Male
                    <input type="radio" name="gender" value="f" 
                    <?php 
                      if($result['gender'] == 'f') 
                      {
                        echo "checked";
                      }                       
                    
                    ?>
                    required>Female
                    <input type="radio" name="gender" value="o" 
                    <?php 
                      if($result['gender'] == 'o') 
                      {
                        echo "checked";
                      }                       
                    
                    ?>
                    
                    required>Other

                </div>
            
            </div>
            <div class="button">
                <input type="submit" value="Update" class  =" button" name="update"></a>

                <br>
               
                </p>

                 </form> 
            </div>

    </body>

</html>
<?php

?>