<?php
function getLink($link){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "op=download2&id=kcaebiy0pa27&rand=&referer=&method_free=Free+Download&method_premium=");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    $result = curl_exec($ch);
    $response = curl_getinfo($ch);
    curl_close ($ch);
    return $response['redirect_url'];
}