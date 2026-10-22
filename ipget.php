<?php

// CRITICAL: Tells the browser it is safe to read this data from elymbmx.com
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

/*

print "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\">
	<tr><td align=\"center\"><strong>Attribute</strong></td><td align=\"center\"><strong>Value</strong></td></tr>
	<tr><td>IPv4 IP Address </td><td>".$ipv4."</td></tr>
	<tr><td>IPv4 Hostname</td><td>".$host4."</td></tr>
	<tr><td>IPv6 IP Address </td><td>".$ipv6."</td></tr>
	<tr><td>IPv6 Hostname</td><td>".$host6."</td></tr>    
	<tr><td>X-Forwarded-For IP Address(es)</td><td>".$_SERVER['HTTP_X_FORWARDED_FOR']."&nbsp;</td></tr>
	<tr><td>Port</td><td>".$_SERVER['REMOTE_PORT']."</td></tr>
	<tr><td>Browser (User Agent)</td><td>".$_SERVER['HTTP_USER_AGENT']."</td></tr>
	<tr><td>Request Time (Unixtime)</td><td>" .$_SERVER['REQUEST_TIME'] ."</td></tr>
	<tr><td>Request Time</td><td>" .date("m-d-Y h:i:s A",$_SERVER['REQUEST_TIME']) ."</td></tr>
</table>";

*/

echo json_encode([
    'unixtime' => $_SERVER['REQUEST_TIME'] ?? 'Unknown',
    'time' => date("m-d-Y h:i:s A",$_SERVER['REQUEST_TIME']) ?? 'Unknown',
    'agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown',
    'port' => $_SERVER['REMOTE_PORT'] ?? 'Unknown',
    'ip' => $_SERVER['REMOTE_ADDR'] ?? 'Unknown',
	'iphost' => gethostbyaddr($_SERVER['REMOTE_ADDR']) ?? 'N/A',
	'ipfwd' => $_SERVER['HTTP_X_FORWARDED_FOR'] ?? 'N/A',
]);

?>
