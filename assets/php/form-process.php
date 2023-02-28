<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Bạn chưa nhập tên";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["phone"])) {
    $errorMSG .= "Bạn chưa nhập số điện thoại";
} else {
    $phone = $_POST["phone"];
}

// MSG Guest
if (empty($_POST["guest"])) {
    $errorMSG .= "Bạn chưa chọn số khách";
} else {
    $guest = $_POST["guest"];
}


// MSG Event
if (empty($_POST["day"])) {
    $day .= "Bạn chưa chọn ngày";
} else {
    $event = $_POST["day"];
}


// MESSAGE
if (empty($_POST["time"])) {
    $time .= "Bạn chưa chọn giờ";
} else {
    $message = $_POST["time"];
}


$EmailTo = "armanmia7@gmail.com";
$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "guest: ";
$Body .= $guest;
$Body .= "\n";
$Body .= "day: ";
$Body .= $day;
$Body .= "\n";
$Body .= "time";
$Body .= $time;
$Body .= "\n";

// send email
//$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>
