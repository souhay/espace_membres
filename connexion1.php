<?php 
    session_start(); // Démarrage de la session
    require_once 'config.php'; // On inclut la connexion à la base de données

if(isset($_POST['email']) && isset($_POST['password'])) // Si il existe les champs email, password et qu'il sont pas vident
    {
       
        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);

        
        // On regarde si l'utilisateur est inscrit dans la table utilisateurs
        $check = $bdd->prepare('SELECT pseudo,email, password FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        

        // Si > à 0 alors l'utilisateur existe
        if($row == 1)
        {
            // Si le mail est bon niveau format
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {   $password=hash('sha256',$password);
               if($data['password']===$password)
               {
                $_SESSION['user'] = $data['pseudo'];
                header('Location:landing1.php');


               }else header('Location:index.php?login_err=password');    
            }else header('Location:index.php?login_err=email'); 
        }else header('Location:index.php?login_err=already');
    }else header('Location:index.php'); // si le formulaire est envoyé sans aucune données*/
    ?>