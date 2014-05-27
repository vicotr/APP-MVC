<?php 

include_once('model/forum_message.php');

include('controller/connexionbdd.php');

if (isset($_POST['msg'])) {
	ajoutmessage($bdd,$_POST['msg'], 'azerty',$_GET['id']); 
}
$req= recupmessage($bdd);


include_once('view/forum_message.php');
?>