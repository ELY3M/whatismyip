<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {
color: white;
background: black;
}
table, td, th {
  border: 1px solid blue;
  padding: 10px;
}

table {
  border-collapse: collapse;
}
</style>
    <meta charset="UTF-8">
    <title>Your Infos</title>
</head>
<body>
   

<table border="1" cellpadding="5" cellspacing="5">
	<tr><td align=\"center\"><strong>Attribute</strong></td><td align=\"center\"><strong>Value</strong></td></tr>
	<tr><td>IPv4 IP Address </td><td><span id="ipv4">Loading...</span></td></tr>
	<tr><td>IPv4 Hostname</td><td><span id="ipv4host">Loading...</span></td></tr>
	<tr><td>IPv6 IP Address </td><td><span id="ipv6">Loading...</span></td></tr>
	<tr><td>IPv6 Hostname</td><td><span id="ipv6host">Loading...</span></td></tr>
    <tr><td>X-Forwarded-For IPv4 IP Address(es)</td><td><span id="ipv4fwd">Loading...</span></td></tr>    
	<tr><td>X-Forwarded-For IPv6 IP Address(es)</td><td><span id="ipv6fwd">Loading...</span></td></tr>
	<tr><td>Port</td><td><span id="port">Loading...</span></td></tr>
	<tr><td>Browser (User Agent)</td><td><span id="agent">Loading...</span></td></tr>
	<tr><td>Request Time (Unixtime)</td><td><span id="unixtime">Loading...</span></td></tr>
	<tr><td>Request Time</td><td><span id="time">Loading...</span></td></tr>
</table>

    <script>
        // Update these URLs to match your subdomains
        const ipv4Url = 'https://ipv4.replace-with-your-dns.com/ipget.php';
        const ipv6Url = 'https://ipv6.replace-with-your-dns.com/ipget.php';
        const Url = 'https://replace-with-your-dns.com/ipget.php';

        // Fetch IPv4
        fetch(ipv4Url)
            .then(res => res.json())
            .then(data => document.getElementById('ipv4').innerText = data.ip)
            .catch(() => document.getElementById('ipv4').innerText = 'Not detected / Not available');

        fetch(ipv4Url)
            .then(res => res.json())
            .then(data => document.getElementById('ipv4host').innerText = data.iphost)
            .catch(() => document.getElementById('ipv4host').innerText = 'Not detected / Not available');


        // Fetch IPv6
        fetch(ipv6Url)
            .then(res => res.json())
            .then(data => document.getElementById('ipv6').innerText = data.ip)
            .catch(() => document.getElementById('ipv6').innerText = 'Not detected / Not available');
			
        fetch(ipv6Url)
            .then(res => res.json())
            .then(data => document.getElementById('ipv6host').innerText = data.iphost)
            .catch(() => document.getElementById('ipv6host').innerText = 'Not detected / Not available');	
            
        fetch(ipv4Url)
            .then(res => res.json())
            .then(data => document.getElementById('ipv4fwd').innerText = data.ipfwd)
            .catch(() => document.getElementById('ipv4fwd').innerText = 'Not detected / Not available');            
            
        fetch(ipv6Url)
            .then(res => res.json())
            .then(data => document.getElementById('ipv6fwd').innerText = data.ipfwd)
            .catch(() => document.getElementById('ipv6fwd').innerText = 'Not detected / Not available');             

        fetch(Url)
            .then(res => res.json())
            .then(data => document.getElementById('port').innerText = data.port)
            .catch(() => document.getElementById('port').innerText = 'Not detected / Not available');

        fetch(Url)
            .then(res => res.json())
            .then(data => document.getElementById('agent').innerText = data.agent)
            .catch(() => document.getElementById('agent').innerText = 'Not detected / Not available');	
            
        fetch(Url)
            .then(res => res.json())
            .then(data => document.getElementById('unixtime').innerText = data.unixtime)
            .catch(() => document.getElementById('unixtime').innerText = 'Not detected / Not available');	            

        fetch(Url)
            .then(res => res.json())
            .then(data => document.getElementById('time').innerText = data.time)
            .catch(() => document.getElementById('time').innerText = 'Not detected / Not available');	
            
    </script>
</body>
</html>
