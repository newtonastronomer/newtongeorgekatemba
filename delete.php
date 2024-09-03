<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `list` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
       // echo  "delete successfully";
       header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>