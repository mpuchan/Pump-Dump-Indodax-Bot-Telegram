<?php
ini_set('display_errors', 1);
require "multicurl.php";

function getHigh()
{
    $regis = curlindodax();
    $result = json_decode($regis, true);
    $list_high = "";

    foreach ($result as $tickers) {
        foreach ($tickers as $aset => $a) {
            if ($a['last'] == $a['high']) {
                $list_high = $list_high . "\n$aset";
            }
        }
    }

    $pesan = "Daftar market dengan nilai tinggi Hari ini : $list_high";
    return $pesan;
}

function getLow()
{
    $regis = curlindodax();
    $result = json_decode($regis, true);
    $list_low = "";


    foreach ($result as $tickers) {
        foreach ($tickers as $aset => $a) {
            if ($a['last'] == $a['low']) {
                $list_low = $list_low . "\n$aset";
            }
        }
    }

    $pesan = "Daftar market dengan nilai rendah Hari ini : $list_low";
    return $pesan;
}

function datacrash5()
{
    $regis = curlindodax();
    $result = json_decode($regis, true);
    $list_crash5 = "";

    foreach ($result as $tickers) {
        foreach ($tickers as $aset => $a) {
            $minus  = (($a['high'] - $a['last']) / $a['last']) * 100;
            $minusku = substr($minus, 0, 4);
            $harga = $a['last'];
            if ($minus >= 5 and $minus < 10) {
                $list_crash5 = $list_crash5 . "\n\n $aset ||🔻$minusku % ||💸$harga";
            }
        }
    }

    $pesan = "Daftar aset pada market indodax koreksi diatas 5% : $list_crash5";
    return $pesan;
}

function datacrash10()
{
    $regis = curlindodax();
    $result = json_decode($regis, true);
    $list_crash10 = "";

    foreach ($result as $tickers) {
        foreach ($tickers as $aset => $a) {
            $minus  = (($a['high'] - $a['last']) / $a['last']) * 100;
            $minusku = substr($minus, 0, 4);
            $harga = $a['last'];
            if ($minus >= 10 and $minus < 20) {
                $list_crash10 = $list_crash10 . "\n\n $aset ||🔻$minusku % ||💸$harga";
            }
        }
    }

    $pesan = "Daftar aset pada market indodax koreksi diatas 10% : $list_crash10";
    return $pesan;
}

function datacrash20()
{
    $regis = curlindodax();
    $result = json_decode($regis, true);
    $list_crash20 = "";

    foreach ($result as $tickers) {
        foreach ($tickers as $aset => $a) {
            $minus  = (($a['high'] - $a['last']) / $a['last']) * 100;
            $minusku = substr($minus, 0, 4);
            $harga = $a['last'];
            if ($minus > 20) {
                $list_crash20 = $list_crash20 . "\n\n $aset ||🔻$minusku % ||💸$harga";
            }
        }
    }

    $pesan = "Daftar aset pada market indodax koreksi diatas 20% : $list_crash20";
    return $pesan;
}

function datanaik5()
{
    $regis = curlindodax();
    $result = json_decode($regis, true);
    $list_naik5 = "";

    foreach ($result as $tickers) {
        foreach ($tickers as $aset => $a) {
            $minus  = (($a['last'] - $a['low']) / $a['low']) * 100;
            $minusku = substr($minus, 0, 4);
            $harga = $a['last'];
            if ($minus >= 5 and $minus < 10) {
                $list_naik5 = $list_naik5 . "\n\n $aset ||✳$minusku % ||💸$harga";
            }
        }
    }

    $pesan = "Daftar aset pada market indodax yang naik diatas 5% : $list_naik5";
    return $pesan;
}

function datanaik10()
{
    $regis = curlindodax();
    $result = json_decode($regis, true);
    $list_naik10 = "";

    foreach ($result as $tickers) {
        foreach ($tickers as $aset => $a) {
            $minus  = (($a['last'] - $a['low']) / $a['low']) * 100;
            $minusku = substr($minus, 0, 4);
            $harga = $a['last'];
            if ($minus >= 10 and $minus < 20) {
                $list_naik10 = $list_naik10 . "\n\n $aset ||✳$minusku % ||💸$harga";
            }
        }
    }

    $pesan = "Daftar aset pada market indodax yang naik diatas 10% : $list_naik10";
    return $pesan;
}

function datanaik20()
{
    $regis = curlindodax();
    $result = json_decode($regis, true);
    $list_naik20 = "";

    foreach ($result as $tickers) {
        foreach ($tickers as $aset => $a) {
            $minus  = (($a['last'] - $a['low']) / $a['low']) * 100;
            $minusku = substr($minus, 0, 4);
            $harga = $a['last'];
            if ($minus > 20) {
                $list_naik20 = $list_naik20 . "\n\n $aset ||✳$minusku % ||💸$harga";
            }
        }
    }

    $pesan = "Daftar aset pada market indodax yang naik diatas 20% : $list_naik20";
    return $pesan;
}


// function databitrex()
// {
//     $regis = curlbittrex();
//     $result = json_decode($regis);
//     // $listbittrex = "";
//     // foreach ($result as $tickers) {
//     //     foreach ($tickers as $aset => $a) {
//     //         $symbol = $aset;
//     //         $harga = $a['lastTradeRate'];
//     //         $listbittrex = $listbittrex . "$aset $harga";
//     //     }
//     // }
// }
// function datacrash5bitrex()
// {
//     // $listbittrexs = databitrex();
//     $regis = curlbittrex();
//     $result = json_decode($regis);
//     $list_crash5bittrex = "";

//     foreach ($result as $tickers) {
//         foreach ($tickers as $aset => $a) {
//             // $minus  = (($a["high"] - $a["low"]) / $a["low"]) * 100;
//             // $minusku = substr($minus, 0, 4);
//             // $harga = $a["low"];
//             // if ($minus > 10) {
//             //     $list_crash5bittrex = $list_crash5bittrex . "\n\n $aset ||🔻$minusku % ||💸$harga";
//             // }
//             $list_crash5bittrex = $list_crash5bittrex . $a['symbol'];
//         }
//     }

//     $pesan = "Daftar aset pada market Bittrex koreksi diatas 10% : $list_crash5bittrex";
//     return $pesan;
// }
