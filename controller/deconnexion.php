<?php
$_SESSION['Login'] = array();
session_destroy();

print("<script type=\"text/javascript\">setTimeout('location=(\"index.php\")');</script>");
//header('Location:index.php');
?>