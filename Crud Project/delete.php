<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
    $srno=$_GET['deleteid'];

    $sql="DELETE FROM `crudapp` WHERE `Sr.no`=$srno";
    $result=mysqli_query($conn, $sql);
    if($result){
        header('location:home.php');
    }
    else{
        die(mysqli_connect_error($conn));
    }
}
?>