<?php

$pattern_number = '/^(\+88|088)?01[3-9]\d{8}$/';
$pattern_email = '/^\w{2,8}[0-9]{2}\-[0-9]{4}\@diu.edu.bd$/';
$pattern_nId = '/^[0-9]{8,11}/';
$pattern_name = '/^[a-zA-Z]+\s?[a-zA-Z]+$/';
$error = "";

function getField($field_name){
    if(!empty($_POST[$field_name])){
        return $_POST[$field_name];
    }else{
        return null;
    }

}

$name = getField("name");
$number = getField("number");
$email = getField("mail");
$gName = getField("gName");
$gNumber = getField("gNumber");
$pass = getField("pass");
$conPass = getField("conPass");
$nId = getField("nId");



if(!preg_match($pattern_number, $number)
    || !preg_match($pattern_number, $gNumber)
    || !preg_match($pattern_name, $name)
    || !preg_match($pattern_name, $gName)
    || !preg_match($pattern_nId, $nId)
    || !preg_match($pattern_email, $email)
    || strlen($pass)  < 8){

    if(!preg_match($pattern_number, $number) || !preg_match($pattern_number, $gNumber)){
        $error .= "Wrong Bangladeshi Phone Number Pattern!<br>";
    }
    if(!preg_match($pattern_name, $name) || !preg_match($pattern_name, $gName)){
        $error .= "Name Field allow only Character!<br>";
    }
    if(!preg_match($pattern_nId, $nId)){
        $error .= "Number Only!<br>";
    }
    if (!preg_match($pattern_email, $email)) {
        $error .= "Wrong Email Format. Use DIU Mail<br>";
    }
    if(strlen($pass) < 8){
        $error .= "Password should Has Minimum 8 digit!<br>";
    }
    if($conPass != $pass){
        $error .= "Password  Confirm Password don't match!";
    }
    header("location: signUp.php?error=$error");
}else{
    $digit = rand(1111, 9999);
    echo $digit;
    $text = "Your Code $digit.
    
             Good Luck.";


    $url = "http://66.45.237.70/api.php";
    $data= array(
        'username'=>"01883269224",
        'password'=>"P5R49VZH",
        'number'=>"$number",
        'message'=>"$text"
    );

    $ch = curl_init(); // Initialize cURL
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);

}



?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DIU Hostel</title>
</head>
<body>
<div>


    <h4>You will receive an OTP....Please provide the OTP here!</h4>
    <form action="validate_signUP.php" method="post">
        <input type="text" name="validate">
        <input type="hidden" name="name" value="<?= $name ?>">
        <input type="hidden" name="number" value="<?= $number ?>">
        <input type="hidden" name="email" value="<?= $email ?>">
        <input type="hidden" name="gName" value="<?= $gName ?>">
        <input type="hidden" name="gNumber" value="<?= $gNumber ?>">
        <input type="hidden" name="pass" value="<?= $pass ?>">
        <input type="hidden" name="conPass" value="<?= $conPass ?>">
        <input type="hidden" name="nId" value="<?= $nId ?>">
        <input type="hidden" name="OTP" value="<?= $digit ?>">
        <button type="submit">Check</button>
    </form>
</div>
</body>
</html>

<?php
    $name = getField("name");
    $number = getField("number");
    $email = getField("mail");
    $gName = getField("gName");
    $gNumber = getField("gNumber");
    $pass = getField("pass");
    $conPass = getField("conPass");
    $nId = getField("nId");
    $otp = getField("otp");


