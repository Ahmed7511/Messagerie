<?php
function login()
{
      // Connexion à la base de données
 $db = dbconnect();
    if(isset($_POST['pseudo']))
    {

        $req = $db->prepare('SELECT id, pass_word FROM membres WHERE pseudo = ?');
        $req->execute(array($_POST['pseudo']));
    
        $response = $req->fetch();
        // Comparaison du pass envoyé via le formulaire avec la base
         $isPasswordCorrect = password_verify($_POST['password'], $response['pass_word']);
    
         if(!$response)
         {
            echo 'Mauvais identifiant ou mot de passe !';
         }
         else
         {
             if($isPasswordCorrect)
             {
                 session_start();
                 $_SESSION['id']= $response['id'];
                 $_SESSION['pseudo']= $_POST['pseudo'];
                   echo 'vous êtes connecté ! ';
                   
                   header('Location: http://localhost/Messagerie/controller/home.php');
             }
             else{
                 echo 'Mauvais pseudo où mot de passe ! ';
             }
         }
      


    }
      
}



function dbConnect()
{
    try
 {
     $db = new PDO('mysql:host=localhost;dbname=messagerie;charset=utf8', 'root', 'root');
     return $db;
 }
 catch(Exception $e)
 {
         die('Erreur : '.$e->getMessage());
 }
}