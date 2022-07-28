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
    $findMonth =  $month -1;

    $uId = getField("uId");
    $totalMeal = getField("totalMeal");

    $link = mysqli_connect('localhost', 'root', '', 'hostel_management');
    $query1 = "select * from users where id = '$uId'";
    $res_q1 = mysqli_query($link, $query1);
    $userData  = mysqli_fetch_assoc($res_q1);
    $number = $userData["number"];

    $query2 = "select * from dues where uId = '$uId' and month = '$findMonth'";
    $res_q2 = mysqli_query($link, $query2);
    $duesData  = mysqli_fetch_assoc($res_q2);
    $due = $duesData["due"];

    if($due == null){
        $due = 0;
    }

    $seatFare = 2500;
    $mealRate = 50;
    $monthEndBill = $seatFare + $totalMeal*$mealRate + $due;

    $query3 = "insert into bill(uId, monthEndBill, month, status) values ('$uId', '$monthEndBill', '$month', 'Unpaid')";
    mysqli_query($link, $query3);

    $text = "Your MonthEndBill for month: ".$month." is ".$monthEndBill."tk. Please check your profile...
            
            Good Luck.
            Stay Safe Here";


        $url = "http://66.45.237.70/api.php";
        $data= array(
            'username'=>"01967749626",
            'password'=>"57S2DEFV",
            'number'=>"$number",
            'message'=>"$text"
        );

        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);



    header("location: billing.php");

