<?php
    $result = shell_exec("C:\\Windows\\System32\\TRACERT.exe www.google.com");
    print $result;
    echo "<br/>Success!";
?>
