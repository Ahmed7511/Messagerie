<?php 


function getPosts()
{
session_start();

    $db = dbConnect();

    if (isset($_SESSION['pseudo'])) {
        
        echo '<p>welcome '.$_SESSION['pseudo'].' ' .$_SESSION['id'].'</p>';
       }else{
           header('Location: login.php');
        
       }
       $see_tchat = $db->query('SELECT membres.pseudo, membres.id , messages.content, messages.date_message
                              FROM messages
                              LEFT JOIN membres ON messages.membreId = membres.id 
                             ORDER BY date_message');
        
         while($post = $see_tchat->fetch()){
      echo '<p><strong>'.$post['pseudo'].' :</strong>'.$post['content'].' <small>'.$post['date_message'].'</small></p>';
         }

}


