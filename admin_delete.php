<?php


function getData($field){
    if(!empty($_POST[$field])){
        return $_POST[$field];
    } else{
        return null;
    }
}

$adminId = getData("adminId");
if($adminId != null){
    $link = mysqli_connect("localhost", "root", "","hostel_management");
    $query = "delete from admin where id = '$adminId'";
    mysqli_query($link, $query);
    header("location: admin.php");
}
