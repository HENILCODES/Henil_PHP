<?php

// PHP code to get the MAC address of Server
$MAC = exec('getmac');

// Storing 'getmac' value in $MAC
$MAC = strtok($MAC, ' ');

// Updating $MAC value using strtok function,
// strtok is used to split the string into tokens
// split character of strtok is defined as a space
// because getmac returns transport name after
// MAC address
echo "MAC address of Server is: $MAC" . "<br>";
?>

<?php

// Declaring a variable to hold the IP
// address getHostName() gets the name
// of the local machine getHostByName()
// gets the corresponding IP
$localIP = getHostByName(getHostName());

// Displaying the address
echo $localIP;

?>
<?php
$ipaddress = getenv("REMOTE_ADDR") ;
Echo "Your IP Address is " . $ipaddress;
?>
