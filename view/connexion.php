<?php if(empty($_SESSION['Login']))
{
?>
<form method="post" action="?p=connexion">
<p> Login <input type="text" name="Login" autofocus  required/></p>
<p> Password <input type="Password" name="Password"  required/></p>
<p> <input type="image"  img src="ok1.png" alt="Smiley face"  /> </p>

</form>
<?php 
}
?>
  <?php
           if(isset($msg1))
           {
               echo ''.$msg1.'';
           }
           
           
           ?>