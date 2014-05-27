<?php 
include_once('model/connexion.php');

if(isset($_POST['Login'], $_POST['Password']))
{
     include('controller/connexionbdd.php');
		if(LoginPass($bdd))
			{
            $_SESSION['Login']= $_POST['Login'];
			$msg1='Tu est co';
			print("<script type=\"text/javascript\">setTimeout('location=(\"index.php\")');</script>");
			}
		else {
		$msg1='Le pseudo ou le mdp nest pas correct';
		}
}
include "view/accueil.php";
?>