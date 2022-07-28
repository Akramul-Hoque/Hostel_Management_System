<?php
    date_default_timezone_set("Asia/Dhaka");
    $month = date("m");
    $findMonth =  $month -1;
    $monthDate = date("d");


    $link = mysqli_connect('localhost', 'root', '', 'hostel_management');
    $query = "select  uId, name, sum(afternoon) as afternoon, sum(night) as night from meals join users u on meals.uId = u.id where MONTH(date) = '$findMonth' group by uId";

    $query2 = "select * from bill";
    $result2 = mysqli_query($link, $query2);
    $data2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);

    if($monthDate ==07){
        $result = mysqli_query($link, $query);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
<body>

    <?php include "admin_nav-bar.php" ?>

    <div class="main">

        <div class="info">
            <div class="data" style="background: #d8cfb2; padding: 20px; border-top-left-radius: 15px; border-bottom-right-radius: 15px; align-content: center">
                <?php if($monthDate == 07): ?>
                    <table border="1" width="100%">
                        <tr>
                            <td style="font-size: 2vw; font-weight: bold; text-align: center">Id</th>
                            <td style="font-size: 2vw; font-weight: bold; text-align: center">Name</th>
                            <td style="font-size: 2vw; font-weight: bold; text-align: center">Afternoon Meals</th>
                            <td style="font-size: 2vw; font-weight: bold; text-align: center">Night Meals</th>
                            <td style="font-size: 2vw; font-weight: bold; text-align: center">Total Meal</th>
                            <td style="font-size: 2vw; font-weight: bold; text-align: center">Status</th>
                            <td style="font-size: 2vw; font-weight: bold; text-align: center">Action</th>

                        </tr>
                        <?php
                        foreach ($data as $datum):
                            ?>
                            <tr>
                                <th><?= $datum["uId"] ?></th>
                                <th><?= $datum["name"] ?></th>
                                <th><?= $datum["afternoon"] ?></th>
                                <th><?= $datum["night"] ?></th>
                                <th><?= $datum["afternoon"] + $datum["night"] ?></th>

                                <th>
                                    <?php foreach ($data2 as $val):
                                        if($datum["uId"] == $val["uId"]): ?>
                                            <h2>Bil Done</h2>
                                        <?php endif; endforeach; ?>

                                </th>

                                <th>
                                    <form method="post" action="billing2.php">
                                        <input type="hidden" value="<?= $datum["uId"] ?>" name="uId"/>
                                        <input type="hidden" value="<?= $datum["afternoon"] + $datum["night"] ?>" name="totalMeal"/>
                                        <button type="submit">Make Bill</button>
                                    </form>
                                </th>
                            </tr>
                        <?php endforeach;?>


                    </table>
                <?php else: ?>
                    <h3 style="color: red">You can make Bill on the first day of month</h3>
                <?php endif; ?>
            </div>

        </div>
    </div>


</body>

</html>