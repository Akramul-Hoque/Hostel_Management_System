<?php

    function getField($field_name)
    {
        if(!empty($_POST[$field_name])){
            return $_POST[$field_name];
        }else{
            return null;
        }

    }

    date_default_timezone_set("Asia/Dhaka");
    $month = date("m");
    $date = date("d/m/y");

    $uId = getField("uId");
    $amount = getField("pay");
    $bill = getField("bill");
    $due = $bill - $amount;

    $link = mysqli_connect("localhost", "root", "", "hostel_management");
    $query = "update bill set  status = 'Paid' where uId = '$uId'";
    mysqli_query($link, $query);

    $query2 = "insert into dues(uId, due, month) values ('$uId', '$due', '$month')";
    mysqli_query($link, $query2);

    $subject = "MonthEnd Bill";
    $content = "Thank You!!Your MonthEnd Bill for ".$month." is paid";
    $query3 = "insert into notifications(uid, month, subject, content, date) values ('$uId', '$month', '$subject', '$content', '$date')";
    mysqli_query($link, $query3);

    header("location: collection.php");