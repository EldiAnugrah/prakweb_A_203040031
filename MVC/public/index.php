<?php 
if (!session_id()) {
  session_start();
}
//video 5 
require_once '../app/init.php';//bootstraping

$app = new App;

// di video kaliini  membuat struktur folder yang akan dipakai