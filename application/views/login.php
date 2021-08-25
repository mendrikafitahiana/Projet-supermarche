<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<div class="col-md-12">
            <a href="ClientController/redirect">Client</a>
        <h3>Login</h3>
        <form method="post" action="UserController/authentification">
            <p>
            <label for="login">Login</label>
            <input type="text" id="login" name="username">
            </p>
            <p>
            <label for="mdp">Mot de passe</label>
            <input type="password" id="mdp" name="mdp">
            </p>
           
                <?php if($erreur != null) {?>
                    <p><?php echo $erreur;?><p>
                <?php }?>
                    
            
            <p><input type="submit" class="btn" value="Valider"></p> 
        </form>
    </div>
</body>
</html>