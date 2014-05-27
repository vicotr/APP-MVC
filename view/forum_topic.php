
<h2> Forum <Br/> </h2> 
<div class="GrandCadre">
<?php 

while ($donnes = $req->fetch())
{
	//echo  $donnes['Login'] . ' ' . $donnes['Nom'] . '' . $donnes['Date'] . ' </br>';
	?>
	
<div class="cadre">
<span class="login"> <?php echo $donnes['Login']?></span>
<span class="topic"><a href="?p=forum_message&id=<?php echo $donnes['idtopic']?>"><?php echo $donnes['Nom'] ?></a></span>
<span class="date"><?php echo $donnes['Date'] ?> <Br/></span>

</div>



<?php	
}

?>
<h3 class="NouveauTopic"> Ajoutez un nouveau topic de discussion <Br/> <Br/> </h3>
<form method="post" action="?p=forum_topics">
<p> Nouveau sujet de discussion :  <input type="Topic" name="Topic"  required/></p>
<p> <input type="submit"   alt="valider"  /> </p>
</div>