<?php
 session_start();
 require_once 'config.php'; // ajout connexion bdd 
 if(!isset($_SESSION['user']))
    header('Location:index.php');
 ?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <title>bonjour!</title>
        </head>
        <body>

<h1 class="text-center">bonjour!  
    <?php echo  $_SESSION['user'];?></h1></br>
    <div class="form-group">
    <p class="text-center"> <a href="deconnexion.php" class="btn btn-danger btn-lg" >déconnexion</a></p>
                </div>   
            </form>
         
        </div>

        </body>
</html>