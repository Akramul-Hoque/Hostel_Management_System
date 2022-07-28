<?php

    function getField($field_name){
        if(!empty($_POST[$field_name])){
            return $_POST[$field_name];
        }else{
            return null;
        }

    }

    $link = mysqli_connect('localhost', 'root', '', 'hostel_management');
    $query = "select  seatrequest.*, u.name as name, u.number as number
                    from seatrequest
              join users u on seatrequest.uId = u.id  where status = 1";

    $result = mysqli_query($link, $query);
    $applications = mysqli_fetch_all($result, MYSQLI_ASSOC);


    $id = getField("id");
    $seatName = getField("seatName");
    $updateStatus = getField("updateStatus");
    $number = getField("number");

    if($id != null && $seatName != null && $updateStatus != null) {
        $query1 = "update seatrequest set status = 2 where uId = '$id'";
        $query2 = "insert into seats(seatName, uId) values ('$seatName', '$id')";
        mysqli_query($link, $query1);
        mysqli_query($link, $query2);

        $text = "You have been assign in $seatName. You are requested to contact with our management team.                
                Good Luck.
                Stay Safe Here";

        function send_message($number, $text)
        {
            $url = "http://66.45.237.70/api.php";
            $data = array(
                'username' => "01967749626",
                'password' => "57S2DEFV",
                'number' => "$number",
                'message' => "$text"
            );

            $ch = curl_init(); // Initialize cURL
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_exec($ch);

            header("location: newSeatApplication.php");
        }
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

        <?php if($applications == null): ?>
            <h3>No new request</h3>
        <?php else: ?>
            <table border="1" width="100%">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Section</th>
                    <th>Department</th>
                    <th>Advisor</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($applications as $application):?>

                    <tr>
                        <td><?= $application["vId"]?></td>
                        <td><?= $application["name"]?></td>
                        <td><?= $application["number"]?></td>
                        <td><?= $application["section"]?></td>
                        <td><?= $application["department"]?></td>
                        <td><?= $application["advisor"]?></td>
                        <td>

                            <form action="" method="post">
                                <input type="hidden" value="<?= $application["section"].$application["uId"] ?>" name="seatName">
                                <input type="hidden" value="<?= $application["uId"] ?>" name="id">
                                <input type="hidden" value="<?= $application["number"] ?>" name="number">
                                <input type="hidden" value="2" name="updateStatus">
                                <button type="submit" >
                                    Assign
                                </button>
                            </form>

                        </td>
                    </tr>

                <?php endforeach;?>
            </table>
        <?php endif; ?>

    </div>

</div>

</body>

</html>