<?php
file_put_contents("test.txt", "update start...\n", FILE_APPEND);
header('Content-type: text/plain; charset=utf8', true);
function sendFile($path) {
    header($_SERVER["SERVER_PROTOCOL"].' 200 OK', true, 200);
    header('Content-Type: application/octet-stream', true);
    header('Content-Disposition: attachment; filename='.basename($path));
    header('Content-Length: '.filesize($path), true);
    header('x-MD5: '.md5_file($path), true);
    file_put_contents("test.txt", "bin path=" . $path . "\n", FILE_APPEND);
    file_put_contents("test.txt", " 200 OK" . "Content-Type: application/octet-stream " . "basename=" . basename($path) . "Content-Length: " + filesize($path) . "x-MD5: " . md5_file($path) . "\n",FILE_APPEND);

    readfile($path);
}
//    sendFile("latestPackage.bin");

    file_put_contents("test.txt", "HTTP_USER_AGENT=" . $_SERVER['HTTP_USER_AGENT']."\n" , FILE_APPEND);
    file_put_contents("test.txt", "HTTP_X_ESP8266_STA_MAC=" . $_SERVER['HTTP_X_ESP8266_STA_MAC']."\n",FILE_APPEND);
    file_put_contents("test.txt","HTTP_X_ESP8266_AP_MAC=" . $_SERVER['HTTP_X_ESP8266_AP_MAC']."\n" ,FILE_APPEND);
    file_put_contents("test.txt", "HTTP_X_ESP8266_FREE_SPACE=" . $_SERVER['HTTP_X_ESP8266_FREE_SPACE']."\n" ,FILE_APPEND);
    file_put_contents("test.txt", "HTTP_X_ESP8266_SKETCH_SIZE=" . $_SERVER['HTTP_X_ESP8266_SKETCH_SIZE']."\n" ,FILE_APPEND);
    file_put_contents("test.txt", "HTTP_X_ESP8266_CHIP_SIZE=" . $_SERVER['HTTP_X_ESP8266_CHIP_SIZE']."\n" ,FILE_APPEND);
    file_put_contents("test.txt","HTTP_X_ESP8266_SDK_VERSION=" . $_SERVER['HTTP_X_ESP8266_SDK_VERSION']."\n" , FILE_APPEND);
    file_put_contents("test.txt", "HTTP_X_ESP8266_VERSION=" . $_SERVER['HTTP_X_ESP8266_VERSION']."\n" ,FILE_APPEND);

if($_SERVER['HTTP_X_ESP8266_VERSION']=='1.0.04'){
header($_SERVER["SERVER_PROTOCOL"].' 304 no version for ESP MAC', true, 304);
exit();
}

sendFile("latestPackage.bin");
  //  header($_SERVER["SERVER_PROTOCOL"].' 304 no version for ESP MAC', true, 304);

header($_SERVER["SERVER_PROTOCOL"].' 500 no version for ESP MAC', true, 500);

?>