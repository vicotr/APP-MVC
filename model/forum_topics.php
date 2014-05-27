<?php

function recupsujet($bdd)
{
	$req = $bdd->query('SELECT * FROM topic');
	return $req;
}

?>
<?php

function ajoutsujet($bdd, $login, $nom)
{
	$req = $bdd->query("INSERT INTO `topic`( `Login`, `Nom`) VALUES ('$login', '$nom')");
	return $req;
}

?>