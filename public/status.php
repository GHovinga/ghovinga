<?php
$live = "./images/icon_user_online.gif";
$dead = "./images/icon_user_offline.gif";


$server = $_GET['server']."listen.waddensound.nl";
$s_server = str_replace("::", ":", $server);
list($addr,$port)= explode (':',"$s_server");
if (empty($port)){
    $port = 8000;
}
$churl = @fsockopen(server($addr), $port, $errno, $errstr, 20);
             if (!$churl){
               header("Location: $dead");
                }
             else {
                   header("Location: $live");             
          }
function server($addr){
         if(strstr($addr,"/")){$addr = substr($addr, 0, strpos($addr, "/"));}
         return $addr;
}
?>
