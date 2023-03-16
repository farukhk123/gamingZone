<?php
    ini_set("display_errors", "1");
    error_reporting(E_ALL);
    
    $host="localhost";
    $user="root";
    $password="123456";
    $db="project4data"; 
    $dbhandle = mysqli_connect($host,$user,$password);
    mysqli_select_db($dbhandle ,$db);
    
    if(isset($_POST['username']) && isset($_POST['password'])){
        
        $Uname=$_POST['username'];
        $pass=$_POST['password'];
        
        if (empty($Uname)) {
            $msg = "Username is required";
            header("Location: login.php?msg=".$msg);
            exit();
        }
        else if (empty($pass)) {
            $msg = "Password is required";
            header("Location: login.php?msg=".$msg);
            exit();
        }
        
       
        $sql="select * from kk where Uname='".$Uname."'";

        
        $result = mysqli_query($dbhandle, $sql);
        $num = mysqli_num_rows($result);
        if($num>0){
            while($row=mysqli_fetch_assoc($result)){
                if(password_verify($pass,$row['Pass'])){
                    session_start();
                    $_SESSION['LAST_ACTIVITY'] = time();
                    $_SESSION["id"] = $row['id']; 
                    $msg= "Sucessfulliy login.";
                   header("Location: http:/project4/user_login.php?msg=".$msg); 
                }
                 else{   
                    $msg= "Incorect username and Password.";
                    header("Location: http:/project4/login.php?msg=".$msg);                 
                    
                }
            }
         
        }    
        else{
            $msg= "Incorect username and Password.";
            header("Location: http:/project4/login.php?msg=".$msg);
        }
            
    }
                                                        
?>