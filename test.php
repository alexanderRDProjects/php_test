<?php
$IP=$_REQUEST['IP'];
set_time_limit(120);
echo "<h1>Traceroute $IP</h1><pre>";
passthru("tracert.exe -h 8 $IP");
?>
