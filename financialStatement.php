<?php
    include "logCheck.php";
    $uId = $_SESSION["id"];
    $link = mysqli_connect('localhost', 'root', '', 'hostel_management');
    $query = "select * from bill where uId = '$uId'";
    $query1 = "select * from dues where  uId = '$uId'";
    $data = mysqli_query($link, $query);
    $data1 = mysqli_query($link, $query1);
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
    <?php include "nav-bar.php" ?>
    <div class="main">
        <div class="info" style="padding-left: 20%; padding-top: 5%">

            <table width="75%" style="background: #ccfff8">

                <tr >
                    <td colspan="3" style="background: #6773de; color: #e6a257; padding: 1%">Monthend Bill Recod....</td>
                </tr>

                <tr>
                    <td style="color: white; background: #0fe8c0; text-align: center">Month</td>
                    <td style="color: white; background: #ffdb23; text-align: center">Bill</td>
                    <td style="color: white; background: #12fc76; text-align: center">Status</td>
                </tr>

               <?php foreach ($data as $datum): ?>
                <tr>
                    <td style="text-align: center; color: grey; font-size: 12px; background: #afd4e0" > <?= $datum['month'] ?></td>
                    <td style="text-align: center; color: grey; font-size: 12px; background: #afd4e0" > <?= $datum['monthEndBill'] ?></td>
                    <td style="text-align: center; color: grey; font-size: 12px; background: #afd4e0" > <?= $datum['status'] ?></td>
                </tr>
                <?php endforeach; ?>
            </table>

            <br>
            <br>

            <table width="75%" style="background: #ccfff8">

                <tr >
                    <td colspan="3" style="background: #6773de; color: #e6a257; padding: 1%">Month wise Due Recod....</td>
                </tr>

                <tr>
                    <td style="color: white; background: #0fe8c0; text-align: center">Month</td>
                    <td style="color: white; background: #ffdb23; text-align: center">Due</td>
                    <td style="color: white; background: #12fc76; text-align: center">Status</td>
                </tr>

                <?php foreach ($data1 as $datum1): ?>
                    <tr>
                        <td style="text-align: center; color: grey; font-size: 12px; background: #afd4e0" > <?= $datum1['month'] ?></td>
                        <td style="text-align: center; color: grey; font-size: 12px; background: #afd4e0" > <?= $datum1['due'] ?></td>
                        <td style="text-align: center; color: grey; font-size: 12px; background: #afd4e0" > Request to pay in this month.//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// </td>
                    </tr>
                <?php endforeach; ?>

            </table>

        </div>
    </div>
</body>

</html>