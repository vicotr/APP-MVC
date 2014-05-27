<?php 

include_once('model/forum_topics.php');

include('controller/connexionbdd.php');
if (isset($_POST['Topic'])) {
	ajoutsujet($bdd, 'azerty', $_POST['Topic']);
}

$req= recupsujet($bdd);


include_once('view/forum_topic.php');
?>