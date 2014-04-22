<?php

header('Content-Type: text/html; charset=utf-8');

require 'IP.class.php';

$ip_list = array (
    '8.8.8.8',
    '192.168.0.1',
    '211.144.86.221',
    '121.201.7.36',
);

foreach($ip_list as $ip) {
    echo $ip . ": " . implode('', IP::find($ip)) . '<br>';
}
