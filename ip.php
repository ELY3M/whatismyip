<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // Prevent caching
header("Pragma: no-cache"); // For HTTP/1.0
header("Expires: 0"); // Proxies

/*

What is my ip address  

This is fucking simple way to get both ipv4 and ipv6  

ELY M.  

*/

$ipv4host = ""; //dns must be pointed to ipv4 ip address on your server, for example  ipv4.yourdomain.com pointing to 24.24.24.24   
$ipv6host = ""; //dns must be pointed to ipv6 ip address on your server, for example  ipv6.yourdomain.com pointing to 2001:12312:12321:123213:12321:ffff:0000

$ipv4 = $_GET['ipv4'] ?? "";
$ipv6 = $_GET['ipv6'] ?? "";

$ip = $_SERVER['REMOTE_ADDR'];
if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
    $ipv4 = $ip;
} elseif (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
    $ipv6 = $ip;
}

$host4 = gethostbyaddr($ipv4);
$host6 = gethostbyaddr($ipv6); 


/*
echo "<br><br><center>";
echo "<table><tr><td style=\"font-size: 30px;\">";
echo "Your IPv4 is: $ipv4 <br>";
echo "Your IPv4 hostname is: $host4 <br>";
echo "Your IPv6 is: $ipv6 <br>";
echo "Your IPv6 hostname is: $host6 <br>";
echo "</tr></td></table>";	<tr><td>IPv4 IP Address </td><td>".$IPv4."</td></tr>
	<tr><td>IPv4 Hostname</td><td>".$host4."</td></tr>
*/


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




// Redirect user to this page with the other IP version if one is missing
if($ipv4 == "") 
{ 
    header("Location: https://$ipv4host/ip.php?ipv6=$ipv6");
}

if($ipv6 == "")
{
    header("Location: https://$ipv6host/ip.php?ipv4=$ipv4");
}





?>
