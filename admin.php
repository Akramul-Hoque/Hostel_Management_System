<?php
session_start();

//    if(!isset($_SESSION["admin"]) || $_SESSION["admin"] != 1){
//        header("location:admin_log_in.php");
//    }

    date_default_timezone_set("Asia/Dhaka");
    $link = mysqli_connect("localhost", "root", "", "hostel_management");
    $query = "select * from admin";
    $result = mysqli_query($link, $query);
    $admins = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $date = date("d/m/y");
    $month = date('m');
    $full_month = date("F");
    $query2 = "select sum(afternoon) as afternoon , sum(night) as night from meals where date = '$date'";
    $result2 = mysqli_query($link, $query2);
    $data = mysqli_fetch_assoc($result2);

    $sum = 0;
    if($data != null){
        $sum = $data["afternoon"] + $data["night"];
    }

    $query3 = "select sum(due) as dues from due where month = '$month' ";
    $result3 = mysqli_query($link, $query3);
    $due_data = mysqli_fetch_assoc($result3);

    $due = 0;
    if($due_data != null){
        $due = $due + $due_data["dues"];
    }

    $query4 = "select count(id) as total from users";
    $result4 = mysqli_query($link, $query4);
    $users = mysqli_fetch_assoc($result4);

    $user = 0;
    if($users != null){
        $user = $users["total"];
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
    <script src="nav.js" defer></script>

</head>
<body ">

    <?php include "admin_nav-bar.php" ?>

    <div class="main" style="background-color: #b1dfbb">

        <div class="info">

            <div class="branch" style="text-align: center">
                <h2 style="padding: 15px; color: #368183; font-family: 'Comic Sans MS'">At a glance....</h2>
                <div class="branch-content" style="padding-right: 10%;padding-left: 10%;display: inline-flex; width: 100%">
                    <div style="float: left;padding-top: 10px;padding-left: 20px;border-top-left-radius: 15px; width: 250px; background-color: #cbffd8">
                        <h4 style="text-align: right; padding-right: 10px; background: #7e82de;border-top-left-radius: 30px; color: white">Today's Total Meal</h4>
                        <p style="font-size: 30px; text-align: center; color: orange; padding-right: 10px">
                            <?= $sum ?>
                        </p>
                    </div>

                    <div style="float: left;padding-top: 10px;padding-left: 10px;padding-right: 10px ;margin-left: 70px;width: 250px; background-color: #cbffd8">
                        <h4 style="text-align: right; padding-right: 10px; background: #7e82de; color: white">Total Student</h4>
                        <p style="font-size: 30px; text-align: center; color: orange">
                            <?= $user ?>
                        </p>
                    </div>

                    <div style="float: right;padding-top: 10px;padding-right: 20px; width: 250px; margin-left: 70px; background: #dae6f9; border-bottom-right-radius: 15px">
                        <h4 style="text-align: left; padding-left: 10px; background: #7e82de;border-top-right-radius: 30px; color: white">Dues of <?= $full_month?></h4>
                        <p style="font-size: 30px;padding-left: 10px; text-align: center; color: darkgoldenrod">
                           <?= $due ?>/-
                        </p>
                    </div>
                </div>
            </div>

            <br>
            <br>

            <div class="admin" style="text-align: center">
                <h2 style="padding: 15px; color: #c0488f; font-family: 'Comic Sans MS'">Admin Team</h2>
                <div class="admin-content" style="padding: 10px;  display: inline-flex; width: 100%">

                    <div style="padding: 15px; background: #ffdea0; width: 100%">
                        <table border="1" width="100%" style="border-radius: 15px">
                            <tr>
                                <td style="font-size: 2vw; font-weight: bold; color: #1e7e34">Id</td>
                                <td style="font-size: 2vw; font-weight: bold; color: #1e7e34">Name</td>
                                <td style="font-size: 2vw; font-weight: bold; color: #1e7e34">Email</td>
                                <td style="font-size: 2vw; font-weight: bold; color: #1e7e34">Role</td>
                                <td style="font-size: 2vw; font-weight: bold; color: #1e7e34">Action</td>
                            </tr>
                            <?php foreach ($admins as $admin): ?>
                                <tr>
                                    <td style="font-size: 2vw; color: #bc5e4d"><?= $admin["id"] ?></td>
                                    <td style="font-size: 2vw; color: #bc5e4d"><?= $admin["name"] ?></td>
                                    <td style="font-size: 2vw; color: #bc5e4d"><?= $admin["email"] ?></td>
                                    <td style="font-size: 2vw; color: #bc5e4d">Admin</td>
                                    <td>
                                        <form action="admin_delete.php" method="post">
                                            <input type="hidden" value="<?= $admin["id"] ?>" name="adminId" >
                                            <button type="submit" style="font-size: 2vw; padding: 10px" >Delete Admin</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>

                </div>
            </div>

        </div>


    </div>

</body>

</html>