<?php
require "./websocket_client.php";
$server = 'wss://ws.dogechain.info/inv';
$message = "{"op":"addr_sub", "addr":"$dogecoin_address"}";

if( $sp = websocket_open($server, 443,'',$errstr, 10,true) ) {
  echo "Sending message to server: '$message' \n";
  websocket_write($sp,$message);
  echo "Server responed with: '" . websocket_read($sp,$errstr) ."'\n";
}else {
  echo "Failed to connect to server\n";
  echo "Server responed with: $errstr\n";
}

?>
