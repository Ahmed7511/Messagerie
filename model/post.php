<?php

function post()
{
    $db = dbConnect();
    if(isset($_SESSION['pseudo'])){
        if(isset($_GET['content'])){
  

        $content = $_GET['content'] = htmlspecialchars($_GET['content']);
           if($content == ""){
          echo "veuillez écrire un message " ;

           }else {
               
            $req = $db->prepare('INSERT INTO messages(membreId, content, date_message) VALUES(:membreId, :content, CURDATE());');
                $req->execute(array(
                     'membreId'=> $_SESSION['id'],
                      'content'=> $content
                ));
                 echo "votre message est envoyé";
                 header('Location: http://localhost/Messagerie/controller/home.php');
                 
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
