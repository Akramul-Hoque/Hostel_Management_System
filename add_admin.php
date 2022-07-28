<?php

    function getField($field_name)
    {
        if(!empty($_POST[$field_name])){
            return $_POST[$field_name];
        }else{
            return null;
        }

    }

    $name = getField("aName");
    $email = getField("aEmail");
    $pass = getField("aPass");

    $link = mysqli_connect("localhost", "root", "", "hostel_management");
    $query = "insert into admin(name, email, password) values ('$name', '$email', '$pass') ";

    if($name != null || $email != null || $pass != null){
        mysqli_query($link, $query);
        header("location: admin.php");
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

    <?php include "admin_nav-bar.php" ?>
    <div class="main">
        <div class="info"  style="margin-bottom: 77px; text-align: right; padding: 5px; padding-right: 50px">

            <form action=""method="post">
                <input type="text" name="aName" placeholder="New Admin Name" style="padding: 3px; font-family: 'Comic Sans MS'; margin: 2px ">
                <br>
                <input type="text" name="aEmail" placeholder="newadmin@something.com " style="padding: 3px; font-family: 'Comic Sans MS'; margin: 2px ">
                <br>
                <input type="password" name="aPass" placeholder="Password" style="padding: 3px;font-family: 'Comic Sans MS'; margin: 2px ">
                <br>
                <button type="submit" style="text-align: left; font-family: 'Comic Sans MS'; font-weight: bold; color: deepskyblue; padding: 3px; margin: 2px">Save</button>
            </form>

        </div>
        <?php include "footer.php" ?>
    </div>


</body>

</html>
