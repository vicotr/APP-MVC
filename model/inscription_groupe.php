<?php

function signupgroupe($bdd)
{
$pass_hache = sha1($_POST['Password']);
	$req=$bdd->prepare ('INSERT INTO groupes (Nom,Membre,Creation,Nation,Genre,Password) Values(:Nom,:Membre,:Creation,:Nation,:Genre,:Password');
$req->execute(array(
'Login'=> $_POST['Nom'],
'Password'=> $pass_hache,
// 'Mail'=> $_POST['Mail'],
'Membre'=> $_POST['Membre'],
'Creation'=> $_POST['Creation'],
'Nation'=> $_POST['Nation'],
'Genre'=> $_POST['Genre'],
'Password'=> $_POST['Password'],
));
}
?>