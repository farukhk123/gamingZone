<?php
include("db_conn_admin.php");
$id = $_GET['id'];

$query = "DELETE FROM kk WHERE id='$id'";
$data = mysqli_query($conn, $query);

if($data){
    
    echo "<script>alert('Record Deleted')</script>";
    
    header("Location: admin_show.php"); 

}
else{
    echo "error";
}

?>