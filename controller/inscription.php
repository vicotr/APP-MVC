<?php
include('controller/connexionbdd.php');
include_once('model/inscription.php');

if(isset($_POST['Login'],$_POST['Password'],$_POST['Mail'],$_POST['Prenom'],$_POST['Nom'],$_POST['Tel'],$_POST['Date'],$_POST['NumVoie'],$_POST['Zipcode'],$_POST['City']))
{
if(strlen($_POST['Password'])>=6){
signup($bdd);
$msg ='Vous avez bien été inscrit. Vous pouvez dorénavant vous connecter.<br />';
}
  else
                {
                        // le mot de passe nest pas assez long
                        
                        $msg ='Le mot de passe que vous avez entré contient moins de 6 caract&egrave;res.';
                }
}
include_once('view/inscription.php');
?>