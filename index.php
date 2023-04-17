<?php
require_once 'vendor/autoload.php';

echo date('Y-m-d H:i:s') . "\n";

$requestArray = [];
$http    = new \GuzzleHttp\Client(['debug' => false]);

for ($i = 1; $i <= 5; $i ++) {

    $url = "http://ipv4.download.thinkbroadband.com/5MB.zip";
    $path = "./test{$i}.zip";

    $options = [
        'sink' => $path
    ];

    echo "[Set] {$url} ... ";
    $requestArray[] = $http->requestAsync('GET', $url, $options);
    echo " done! \n";
}

echo date('Y-m-d H:i:s') . "\n";
echo "Download start... \n";
foreach (\GuzzleHttp\Promise\Utils::settle($requestArray)->wait() as $key => $obj) {
    echo "[Download]{$key} {$obj['state']}\n";
}

echo date('Y-m-d H:i:s') . "\n";