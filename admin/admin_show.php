<html>
    <head>
        <title>dispaly</title>
        <style>
            body{
                background-color: #D071f9;
            }
            table{
                background-color: white;
            }
            .delete{
                background-color: red;
                color: white;
                border: 0;
                outline: none;
                border-radius: 5px;
                height: 22px;
                width: 50px;
                cursor: pointer;
                font-weight: bold;
            }
            .update{
                background-color: orange;
                color: white;
                border: 0;
                outline: none;
                border-radius: 5px;
                height: 22px;
                width: 50px;
                cursor: pointer;
                font-weight: bold;
            }
            .{
                background-color: orange;
                color: white;
                border: 0;
                outline: none;
                border-radius: 5px;
                height: 22px;
                width: 50px;
                cursor: pointer;
                font-weight: bold;
            }
        </style>
    </head>
</html>
<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include "db_conn_admin.php";
$query = "SELECT * FROM kk";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


if($total != 0){
?>
<center><h2>Displaying  All Records</h2>
<table border="1px" cellspacing='7'>
    <tr>
    <th width='5%'>id</th>
    <th width='15%'>Fname</th>
    <th width='15%'>Uname</th>
    <th width='15%'>email</th>
    <th width='15%'>phone</th>
    <th width='15%'>Pass</th>
    <th width='5%'>Gender</th>
    <th width='15%'>Operations</th> 

</tr>

<?php
while($result = mysqli_fetch_assoc($data))
    {
            echo " <tr>
            <td align='center'>".$result['id']."</td>
            <td align='center'>".$result['Fname']."</td>
            <td align='center'>".$result['Uname']."</td>
            <td align='center'>".$result['Email']."</td>
            <td align='center'>".$result['Pnumber']."</td>
            <td align='center'>".$result['Pass']."</td>
            <td align='center'>".$result['gender']."</td>

<td><a href='updatedetails_admin.php?id=$result[id]'><input 
type='sumbit' value='Update' class ='update'></a></tb>

<a href='drop_admin.php?id=$result[id]'><input 
type='sumbit' value='Delete' class ='delete' onclick='return checkdelete()'></a></tb>

           
            </tr>
        ";
    }
    
}
else{
    echo "no data";
}
?>
 </table>
</center>
<br>
<center><a href="../kindex.php"><button type="button" > Logout </button></a>
</center>


<script>
    function checkdelete(){
        return confirm('Are sure You Want to Delete this?');
    }
</script>
