<div class="container">
<h2>Inscription</h2>


<form method="post" style="text-align:justify" action="?p=inscription">


		<label class="form-col">Login :</label>
		<input type="text" name="Login" autofocus  required/><br/><br/>
		 
		<label class="form-col">Password :</label>
		<input type="Password" name="Password"  required/><br/><br/>

		<label class="form-col">Pr&eacute;nom :</label>
		<input type="text" name="Prenom" required/><br/><br/>

		<label class="form-col">Nom :</label>
		<input type="text" name="Nom"  required  /><br/><br/>

		<label class="form-col">Addresse Mail :</label>
		<input type="text" name="Mail"  required/><br/><br/>

		<label class="form-col">T&eacute;l :</label>
		<input type="text" name="Tel"  /><br/><br/>

		<label class="form-col">Num&eacute;ro Voie :</label>
		<input type="text" name="NumVoie"  /><br/><br/>

		<label class="form-col">Rue :</label>
		<input type="text" name="Rue"  /><br/><br/>

		<label class="form-col">ZipCode :</label>
		<input type="number" name="Zipcode"  /><br/><br/>

		<label class="form-col">Ville :</label>
		<input type="text" name="City"  /><br/><br/>


		<label class="form-col">Date de naissance :</label>
		<input type="number" name="Date"  /><br/><br/>

		<label class="form-col">Style :</label>
		<input type="text" name="Style"  /><br/><br/>

		<label class="form-col">Etes vous un groupe? </label>
		<input type="checkbox" name="B" /> <label for="B"> OUI</label><br/><br/>
		 
		<label class="form-col"></label>
		<input class="submit" type="submit" alt="Smiley face"  /><br/><br/> 
</form>

<?php if(isset($msg)){ echo '<div class="message">'.$msg.'</div>'; }?>
</div>
