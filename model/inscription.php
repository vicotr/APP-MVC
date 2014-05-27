<?php

function signup($bdd)
{
$pass_hache = sha1($_POST['Password']);
	$req=$bdd->prepare ('INSERT INTO membres (Login,Password,Prenom,Nom,Tel,Date,NumVoie,Zipcode,City) Values(:Login, :Password,:Prenom,:Nom,:Tel,:Date,:NumVoie,:Zipcode,:City)');
$req->execute(array(
'Login'=> $_POST['Login'],
'Password'=> $pass_hache,
// 'Mail'=> $_POST['Mail'],
'Prenom'=> $_POST['Prenom'],
'Nom'=> $_POST['Nom'],
'Tel'=> $_POST['Tel'],
'Date'=> $_POST['Date'],
'NumVoie'=> $_POST['NumVoie'],
'Zipcode'=> $_POST['Zipcode'],
'City'=> $_POST['City'],
/*'Style'=> $_POST['Style'],*/
));
}
?>