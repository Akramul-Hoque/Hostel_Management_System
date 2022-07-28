<?php
session_start();

function getField($field_name)
{
    if(!empty($_POST[$field_name])) {
        return $_POST[$field_name];
    } else {
        return null;
    }

}
$a = "";
$b = "";
$email = getField("aEmail");
$pass = getField("aPass");

if($email != null && $pass != null){
    $link = mysqli_connect("localhost", "root", "", "hostel_management");
    $query = "select * from admin where email = '$email' and password = '$pass' ";
    $result = mysqli_query($link, $query);
    $data = mysqli_fetch_assoc($result);

    print_r($data);

    if($data != null){
        $_SESSION["admin"] = 1;
        header("location: admin.php");
    }else{
        $b = "Wrong Credential!!!";
    }

} else{
    $a = "Fill Up carefully....";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Side Navigation Bar</title>
    <link rel="icon" type="image/png" href="LogIn/images/icons/favicon.ico"/>
    <link rel="stylesheet" href="adminstyle.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="main" style=" padding-top: 10%; padding-left: 30%; width: 100%">
    <div style="font-size: 2vw; font-family: 'Comic Sans MS'; padding-bottom: 5%; color: #6092fa"><?= $a?></div><div style="font-size: 2vw; font-family: 'Comic Sans MS'; padding-bottom: 5%; color: red"><?= $b?></div>

    <div class="info"  style="text-align: center; background-color: #e4fffa; width: 50%;padding: 3%; border-top-left-radius: 20px; border-bottom-right-radius: 20px ">
        <div style="font-family: 'Comic Sans MS'; padding-bottom: 5%; color: #6092fa">Admin Log In</div>

        <form action="" method="post">

            <input type="text" name="aEmail" placeholder="newadmin@something.com " style="border-radius: 10px; width: 100%; padding: 3px; font-family: 'Comic Sans MS'; margin: 2px ">
            <br>
            <input type="password" name="aPass" placeholder="Password" style="border-radius: 10px; width: 100%;padding: 3px;font-family: 'Comic Sans MS'; margin: 2px ">
            <br>
            <button type="submit" style=" font-family: 'Comic Sans MS';border-radius: 10px; font-weight: bold;width: 100%; color: deepskyblue; padding: 3px; margin: 2px">Log In</button>

        </form>

    </div>
</div>


</body>

</html>
