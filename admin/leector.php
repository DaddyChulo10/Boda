<?php
include "phpqrcode/qrlib.php" ;
$content = "http://192.168.1.73/boda/admin/index.php?id=3" ;
QRcode::png($content) ;

?>

