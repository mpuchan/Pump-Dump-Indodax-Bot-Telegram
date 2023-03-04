<?php
header("Refresh:10");
date_default_timezone_set("Asia/Jakarta");
ini_set('display_errors', 1);
require "retrieveData.php";

$token = "YOUR_BOT_TELEGRAM_TOKEN";   // isi dengan token bot yang didapat dari @BotFather
$apiURL = "https://api.telegram.org/bot$token";
$chatID = $data = [
    'chat_id' => 'YOUR_CHAT_ID' // isi dengan Chat Id group/channel yang didapat dari @https://t.me/Get_Channel_User_Telegram_ID_Bot
];
///////////////////////// INDODAX API //////////////////////////
//crash 5%
$crash5 = datacrash5();
$pesan1 = str_replace(" ", "%20", " " . urlencode("\n$crash5"));
//crash 10%
$crash10 = datacrash10();
$pesan2 = str_replace(" ", "%20", " " . urlencode("\n$crash10"));
//crash 20%
$crash20 = datacrash20();
$pesan3 = str_replace(" ", "%20", " " . urlencode("\n$crash20"));
//naik 5%
$naik5 = datanaik5();
$pesan4 = str_replace(" ", "%20", " " . urlencode("\n$naik5"));
//naik 10%
$naik10 = datanaik10();
$pesan5 = str_replace(" ", "%20", " " . urlencode("\n$naik10"));
//naik 20%
$naik20 = datanaik20();
$pesan6 = str_replace(" ", "%20", " " . urlencode("\n$naik20"));

// $pump = getdump();
// $pesanpump = str_replace(" ", "%20", " " . urlencode("\n$pump"));

$timeminutes = date("i");
$for10minutes = $timeminutes / 10;
echo $for10minutes;
switch ($for10minutes) {
    case 1: // Aset Terkoreksi diatas 5%
        $hasilcrash = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data) . "&text=$pesan1");
        $hasilcrash10 = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data) . "&text=$pesan2");
        $hasilcrash20 = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data) . "&text=$pesan3");
        echo $timeminutes;
        echo "bit menit ke 10";
        break;
    case 2: // Aset Terkoreksi diatas 10%
        $hasilcrash10 = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data) . "&text=$pesan2");
        $hasilcrash20 = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data) . "&text=$pesan3");
        $hasilnaik = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data) . "&text=$pesan4");
        // $a = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data));
        echo "bit menit ke 20";
        break;
    case 3: // Aset Terkoreksi diatas 20%
        $hasilcrash20 = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data) . "&text=$pesan3");
        $hasilnaik = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data) . "&text=$pesan4");
        $hasilnaik10 = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data) . "&text=$pesan5");
        //$a = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data));
        echo "bit menit ke 30";
        break;
    case 4:
        $hasilnaik10 = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data) . "&text=$pesan5");
        $hasilnaik20 = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data) . "&text=$pesan6");
        $hasilcrash10 = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data) . "&text=$pesan2");
        // $a = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data));
        echo "bit menit ke 40";
        break;
    case 5:
        $hasilnaik20 = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data) . "&text=$pesan6");
        $hasilcrash10 = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data) . "&text=$pesan2");
        $hasilcrash = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data) . "&text=$pesan1");
        //$a = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data));
        echo "bit menit ke 50";
        break;
    case 6:
        $hasilnaik = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data) . "&text=$pesan4");
        $hasilnaik10 = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data) . "&text=$pesan5");
        $hasilnaik20 = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data) . "&text=$pesan6");
        //$a = file_get_contents($apiURL . "/sendMessage?" . http_build_query($data));
        echo "bit menit ke 60";
        break;
}
