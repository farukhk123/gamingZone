<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// session_start();

require "db_conn_admin.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);

    // $pass = md5($_POST['password']);

    if (empty($uname)) {
        $msg = "Username is required";
        header("Location: loginform_admin.php?msg=".$msg);
        exit();
    } else if (empty($pass)) {
        $msg = "Password is required";
        header("Location: loginform_admin.php?msg=".$msg);
        exit();
    } else {
        $sql = "SELECT * FROM admin WHERE username='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            // echo "sdfgh";
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
                
                $msg = "login successfully";
                header("Location: admin_show.php?msg=".$msg);
                exit();
            } else {
                // header("Location: form_admin.php?error=Incorect usename or password");

                exit();
            }
        } else {
            $msg = "Incorect username or password";
            header("Location: loginform_admin.php?msg=".$msg);

            exit();
        }
    }

} else {
    header("Location: loginform_admin.php");
    exit();
}