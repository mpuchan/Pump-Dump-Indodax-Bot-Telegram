<?php
function curlindodax()
{
    $ch = curl_init("https://indodax.com/api/tickers");
    // set URL
    // return as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $hasil = curl_exec($ch);

    curl_close($ch);
    return $hasil;
}

function curlbittrex()
{
    $ch = curl_init("https://indodax.com/api/btc_idr/ticker");
    // set URL
    // return as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $hasil = curl_exec($ch);

    curl_close($ch);
    return $hasil;
}
