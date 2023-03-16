<?php
$sname= "localhost";
$unmae= "root";
$password = "123456";
$db_name = "project4data";
// print_r($_REQUEST);
$conn = mysqli_connect($sname, $unmae, $password, $db_name)or die("Connect failed: %s\n". $conn -> error);
// echo "You have Sucessfulliy login";


if(isset($_POST['Email'])){
    $Email=$_POST['Email'];
    $sql="SELECT  *from kk where Email='".$Email."'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num==0)
    {
       
        echo '<script>alert("Email is notvalid")</script>'; 
        header("Location: /project4/recover_email.php");   
    }   
    else{
        echo '<script>alert("Email is valid")</script>';
        $id = $_REQUEST['Email'];
        $query = "SELECT * FROM kk where Email = '$id'";
// echo $id."farook:";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
if($_POST['Update']){
    // $Pass = $_POST['Pass'];
    
    $hash = password_hash($_POST['Pass'],PASSWORD_DEFAULT);
    $query = "UPDATE kk SET Pass= '$hash' WHERE Email='$id'";
    // echo $query;die;    
    $data = mysqli_query($conn,$query);
    if($data)
    {
        echo "<script>alert('Record Updated')</script>";
         header("Location:/project4/login.php"); 
    }
    else
    {
        echo " faild to update";
    }
}
    }
}
// else{
//     echo "error";
// }
?>

<!DOCTYPE html>
<html lang="en">

 <!-- <head>
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
        crossorigin="anonymous"></script> -- !> -->
     <script src="update_validation.js"></script> 
    <link rel="stylesheet" href="update_pass.css">
</head> 

<body>

    <body>
        <div class="containerReg">
            <div class="heading">UPDATE FORM</div>
             <form method="post"> 
            <div class="card-details">
                <div class="card-box">
                   
                
                <div class="card-box">
                    <span class="details">Password</span>
                    <input id="password" type="password" placeholder="Enter new Password"
                        pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,28}$" name="Pass" required>
                </div>
                <div class="card-box" style="display:none">
                    <span class="details">Email</span>
                    <input id="Email" type="text" name="Email" value='<?php echo $id; ?>'>
                </div>

                <div class="card-box">
                    <span class="details">Confirm Password</span>
                    <input id="confpassword" type="password" placeholder="Confirm Password"  class="text-name" required>
                </div>

          
            
            </div>
            <div class="button">
                <input type="submit" value="Update" class  =" button" name="Update"></a>

                <br>
               
                </p>

                 </form> 
            </div>

    </body>

</html>
<?php

?>