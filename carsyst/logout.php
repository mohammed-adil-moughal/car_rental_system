<?php
session_start();
unset($_SESSION['useremail']);
session_destroy();
header ("Expires: ".gmdate("D, d M Y H:i:s", time())." GMT");  
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");  
header ("Cache-Control: no-cache, must-revalidate");  
header ("Pragma: no-cache");
header("Location: modular-business/index.html");
exit;
?>
