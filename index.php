<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Concert Pro</title>
        <link rel="stylesheet" href="view/css/normalize.css" />
		    <link rel="stylesheet" href="view/css/accueil.css" />
        <link rel="stylesheet" href="view/css/event.css" />
        <link rel="stylesheet" href="view/css/forum_topic.css" />
    </head>
		 <body>
		 <header>
            <div class="container">
            <div class="logo">
                <a href="index.php"><img src="view/images/logo.png" style="height:70px"></a>
            </div>
            <?php 
             if(!empty($_SESSION['Login']) && isset($_SESSION['Login']))
             {
                  echo ''.$_SESSION['Login'].'<div class="deconnecte"><a href="?p=deconnexion">Se d&eacute;connecter</a></div>';
           
              if(isset($msg1))
              {
                  echo ''.$msg1.'';
              }          
              else
              {
                echo '';
              }   
           }
           if(empty($_SESSION['Login']))
            {
            ?>
             
              <div class="co">
              <form method="post" action="?p=accueil">
              <label class="form-col">Login :</label><input type="text" name="Login" autofocus  required/>
              <label class="form-col">Password :</label><input type="Password" name="Password"  required/>
              <input type="submit" name="submit"  />

              </form>
            </div>
            <?php 
            }
            ?>
            <?php
                if(isset($msg1))
                {
                   echo ''.$msg1.'';
                }
           
           
            ?>
          </div>
            
            
    </header>
    
    <?php include 'view/menu.php';?>
		 <section>
    <?php
    		
          if(isset($_GET['p'])&& !empty($_GET['p']) && is_file('controller/'.$_GET['p'].'.php'))
          {
              include 'controller/'.$_GET['p'].'.php';
          }
          else
          {
              include('controller/accueil.php');
          }

         
          ?>
         </section> 
 <?php include('view/footer.php');?>




        
		 </body>
</html>
