<?php
$ip = '192.168.1.1';
echo $ip. ' => ' . ip2long($ip) . ' => ' . long2ip(ip2long($ip));