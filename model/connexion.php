<?php

function Loginpass($bdd)
{
	$req = $bdd->prepare('SELECT Login,Password FROM membres WHERE Login= ? AND Password = ?');
	$req->execute(array($_POST['Login'],sha1($_POST['Password'])));
	$data = $req->fetch();
	if($data['Login']!= NULL AND $data['Password']!=NULL)
	{
		return true;
	}
	else{
		return false;
	}
        
}