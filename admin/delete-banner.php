<?php
require_once('functions/functions.php');

$id= $_GET['bd'];
$del="DELETE FROM banners WHERE ban_id='$id'";
if(mysqli_query($con,$del)){
    header('location: all-banner.php');
}else{
    echo"Failded your tast";
}
