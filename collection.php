<?php
date_default_timezone_set("Asia/Dhaka");
$month = date("m");

$link = mysqli_connect("localhost", "root", "", "hostel_management");
$query = "select *, name from bill join users u on bill.uId = u.id where month = '$month'";
$result = mysqli_query($link, $query);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Side Navigation Bar</title>
    <link rel="icon" type="image/png" href="LogIn/images/icons/favicon.ico"/>
    <link rel="stylesheet" href="adminstyle.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="nav.js" defer></script>
</head>
<body>

    <?php include "admin_nav-bar.php" ?>

    <div class="main">
        <div class="info" >
            <div class="data" style="margin-left: 10%;">
                <table border="1" width="100%" ">
                <tr>
                    <td style="font-size: 2vw; font-weight: bold; text-align: center">ID</td>
                    <td style="font-size: 2vw; font-weight: bold; text-align: center">Name</td>
                    <td style="font-size: 2vw; font-weight: bold; text-align: center">Month</td>
                    <td style="font-size: 2vw; font-weight: bold; text-align: center">MonthBill</td>
                    <td style="font-size: 2vw; font-weight: bold; text-align: center">Status</td>
                    <td style="font-size: 2vw; font-weight: bold; text-align: center">Action</td>
                </tr>
                <?php foreach ($data as $datum): ?>
                    <tr>
                        <td style="font-size: 2vw"> <?= $datum["uId"] ?> </td>
                        <td style="font-size: 2vw"> <?= $datum["name"] ?> </td>
                        <td style="font-size: 2vw"> <?= $datum["month"] ?> </td>
                        <td style="font-size: 2vw"> <?= $datum["monthEndBill"] ?> </td>
                        <td style="font-size: 2vw; color: red"> <?= $datum["status"] ?> </td>
                        <td>
                            <form action="collectBill.php" method="post">
                                <input type="number" name="pay" placeholder="Enter Amount">
                                <input type="hidden" value="<?= $datum["uId"]?>" name="uId">
                                <input type="hidden" value="<?= $datum["monthEndBill"]?>" name="bill">
                                <button type="submit">Collect Bill</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>

                </table>
            </div>
        </div>
    </div>


</body>

</html>