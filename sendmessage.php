<?php
define('PW_AUTH', 'x5ZgwKEIdufsDooUEvkXnNrw52rHP5WxaeZbzrfjVSCjzevJAUl2RNxYMlXMSr9YQTsT5leNzLfysXcYoHUd');
define('PW_APPLICATION', '9FD69-50304');
define('PW_DEBUG', true);
 
function pwCall($method, $data) {
    $url = 'https://cp.pushwoosh.com/json/1.3/' . $method;
    $request = json_encode(['request' => $data]);
 
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
 
    $response = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);
 
    if (defined('PW_DEBUG') && PW_DEBUG) {
        //print "[PW] request: $request\n";
        //print "[PW] response: $response\n";
        print "[PW] info: " . print_r($info, true);
    }
}
 
 
pwCall('createMessage', [
    'application' => PW_APPLICATION,
    'auth' => PW_AUTH,
    'notifications' => [
            [
                'send_date' => 'now',
                'content' => 'test',
                'data' => ['custom' => 'json data'],
                'link' => 'http://www.wohlig.com'
            ]
        ]
    ]
);