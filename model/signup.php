<?php 


function signUp()
{
    // Connexion à la base de données
 $db = dbConnect();
// Vérification de la validité des informations
if (isset($_POST['email'])) {
    if(isset($_POST['pseudo'])){
        $req = $db->prepare('SELECT id, pseudo, email FROM membres WHERE pseudo = ?');
               $req->execute(array($_POST['pseudo']));
    
                $response = $req->fetch();
              
    }
    $pseudo = htmlspecialchars($_POST['pseudo']); // On rend inoffensives les balises HTML que le visiteur a pu entrer
    
    $email = htmlspecialchars($_POST['email']);
     if (preg_match('#^[a-zA-Z0-9._-]+@[a-zA-z0-9._-]{2,}\.[a-z]{2,4}$#', $_POST['email'])) {
        echo 'adress '.$_POST['email'].' valide !';
          
        //vérification du password 
        $_POST['password'] = htmlspecialchars($_POST['password']);
        $_POST['confirmePassword'] = htmlspecialchars($_POST['confirmePassword']);

        if ($_POST['confirmePassword'] == $_POST['password']) {
            // Hachage du mot de passe
            $pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);
            // Insertion 
            $req = $db->prepare('INSERT INTO membres(pseudo, email, pass_word, date_inscription) VALUES(:pseudo, :email, :pass_word, CURDATE())');
            $req -> execute(array(
                'pseudo' => $pseudo,
                'email' => $email,
                'pass_word' => $pass_hache
            ));
               $req = $db->prepare('SELECT id, pseudo FROM membres WHERE pseudo = ?');
               $req->execute(array($_POST['pseudo']));
    
                $response = $req->fetch();
            //session
            session_start();
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['id'] = $response['id'];
             //redirection 
             header('Location: home.php');
        } else {
            echo 'password non match !';
        }

    } else {
        echo 'adress '.$_POST['email'].' non valide !';
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