<?php 

while ($donnes = $req->fetch())
{

	?>
	
<div class="cadre">
<span class="login"> <?php echo $donnes['login']?></span>
<span class="msg"><?php echo $donnes['msg'] ?></span>
<span class="date"><?php echo $donnes['date'] ?> <Br/></span>

</div>



<?php	
}

?>
<h3 class="NouveauCommentaire"> Ajoutez un nouveau commentaire <Br/> <Br/> </h3>
<form method="post" action="?p=forum_message&id=<?= $_GET['id'] ?>">
<p> Nouveau commentaire :  <input type="msg" name="msg"  required/></p>
<p> <input type="submit"   alt="valider"  /> </p>
</div>
