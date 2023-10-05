<?php
require_once('functions/functions.php');

$id= $_GET['d'];
$del="DELETE FROM user WHERE user_id='$id'";
if(mysqli_query($con,$del)){
    header('location: all-user.php');
}else{
    echo"Failded your tast";
}
