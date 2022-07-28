<?php
    include "logCheck.php";

    $uId = $_SESSION["id"];
    $link = mysqli_connect('localhost', 'root', '', 'hostel_management');
    $query = "select * from users where id = '$uId'";
    $result = mysqli_query($link, $query);
    $info = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en" xmlns:padding-right="http://www.w3.org/1999/xhtml" xmlns:color="http://www.w3.org/1999/xhtml"
      xmlns:text-align="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>DIU Hostel</title>
    <link rel="stylesheet" href="userstyle.css">
    <link rel="icon" type="image/png" href="LogIn/images/icons/favicon.ico"/>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="nav.js" defer></script>
</head>
<body>
   <div class="nav">
       <?php include "nav-bar.php" ?>
   </div>
   <div class="main">
       <div class="info" style="padding: 5%" >
           <div class="info-data" style="background: #7e82de; width: auto; border-radius: 15px; padding: 3%">
               <table  border="2" width="100%" style="background: #dedc92;">
                   <tr>
                       <th style="padding-right: 3%; text-align: right; color: #0d8f83">Name</th>
                       <td style="text-align: left; padding-top: 1%; padding-left: 3%; padding-bottom: 1%; color: #d34435; font-size: 2vw; font-weight: bold"><?= $info["name"] ?></td>
                   </tr>
                   <tr>
                       <th style="padding-right: 3%; text-align: right; color: #0d8f83">Number</th>
                       <td style="text-align: left; padding-top: 1%; padding-left: 3%; padding-bottom: 1%; color: #d34435; font-size: 2vw; font-weight: bold"><?= $info["number"] ?></td>
                   </tr>
                   <tr>
                       <th style="padding-right: 3%; text-align: right; color: #0d8f83">National ID</th>
                       <td style="text-align: left; color: #d34435; padding-top: 1%; padding-left: 3%; padding-bottom: 1%; font-size: 2vw; font-weight: bold"><?= $info["nId"] ?></td>
                   </tr>
                   <tr>
                       <th style="padding-right: 3%; text-align: right; color: #0d8f83">Gurdian Name</th>
                       <td style="text-align: left; color: #d34435; font-size: 2vw; padding-top: 1%; padding-left: 3%; padding-bottom: 1%; font-weight: bold"><?= $info["gurdianName"] ?></td>
                   </tr>
                   <tr>
                       <th style="padding-right: 3%; text-align: right; color: #0d8f83">Gurdian Number</th>
                       <td style="text-align: left; color: #d34435; font-size: 2vw; padding-top: 1%; padding-left: 3%; padding-bottom: 1%; font-weight: bold"><?= $info["gurdianNumber"] ?></td>
                   </tr>
                   <tr>
                       <th style="padding-right: 3%; text-align: right; color: #0d8f83">Email</th>
                       <td style="text-align: left; color: #d34435;font-size: 2vw; padding-top: 1%; padding-left: 3%; padding-bottom: 1%; font-weight: bold"><?= $info["mail"] ?></td>
                   </tr>
                   <tr>
                       <th style="padding-right: 3%; text-align: right; color: #0d8f83">Password</th>
                       <td style="text-align: left; color: #d34435; font-size: 2vw; padding-top: 1%; padding-left: 3%; padding-bottom: 1%; font-weight: bold"><?= $info["password"] ?></td>
                   </tr>

               </table>
           </div>
       </div>
   </div>
</body>

</html>