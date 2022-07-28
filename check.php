<?php session_start();
$a = $_SESSION["status"];
$id = $_SESSION["id"];
if($a == 0){
    $a = 1;
} else{
    $a = 0;
}
    $link = mysqli_connect("localhost", "root", "", "hostel_management");
    $query = " update users set status = '$a' where id = '$id' ";
    $result = mysqli_query($link, $query);
    $_SESSION["status"] = $a;
    header("location: index.php");
