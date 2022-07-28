<?php
    include "logCheck.php";
    $uId = $_SESSION["id"];
    date_default_timezone_set('Asia/Dhaka');
    $month = date("m");

    $link = mysqli_connect('localhost', 'root', '', 'hostel_management');
    $query = "select * from notifications where uId = '$uId' and month = '$month'";
    $result = mysqli_query($link, $query);
    $notifications = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Side Navigation Bar</title>
    <link rel="icon" type="image/png" href="LogIn/images/icons/favicon.ico"/>
    <link rel="stylesheet" href="userstyle.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="nav.js" defer></script>
</head>
<body>

<div class="wrapper">
    <?php include "nav-bar.php" ?>
    <div class="main">
        <div class="info" style="background: #fffcde; padding: 15px; margin: 50px; border-top-left-radius: 15px; border-bottom-right-radius: 15px ">
            <?php foreach ($notifications as $notification): ?>
                <div class="notification" style="width: 100%; margin-bottom: 3px">

                    <div class="notification-header">

                        <div class="notification-subject" style="background: #ff5037;float: left; width: 50% ">
                            <p style="text-align: center; font-weight: bold ;color: #eaeaea;padding: 2px; font-size: 10px"><?= $notification["subject"] ?></p>
                        </div>

                        <div class="notification-at" style="background: #2adaff; float: right; width: 50% ">
                            <p style="text-align: right;color: #939393;padding: 2px; font-size: 10px; padding-right: 20px"><?= $notification["date"] ?></p>
                        </div>

                    </div>

                    <div class="notification-body" style="background: darkorange">
                        <p style="padding: 5px; font-family: 'Comic Sans MS'; font-size: 12px; color: #e6e6e6"><?= $notification["content"] ?></p>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

</body>

</html>