
<?php

function recupMessage($bdd)

{
	$id_topic=$_GET['id'];
	$req = $bdd->query("SELECT * FROM message WHERE id_topic=$id_topic");
	return $req;
}

function ajoutmessage($bdd,$msg, $login, $id_topic)
{
	$req = $bdd->query("INSERT INTO message ( msg, login,id_topic) VALUES ('$msg','$login', '$id_topic')");
}


?>