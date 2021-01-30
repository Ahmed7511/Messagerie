<?php 


function getPosts()
{
session_start();

    $db = dbConnect();

    if (isset($_SESSION['pseudo'])) {
        
<<<<<<< HEAD
        echo '<h2>welcome <em style="color : red;"> '.$_SESSION['pseudo'].'</em> </h2>';
=======
        echo '<h2>welcome <em style="color : rgb(0,0,128);"> '.$_SESSION['pseudo'].'</em> </h2>';
>>>>>>> newbranch
       }else{
           header('Location: login.php');
        
       }
       $see_tchat = $db->query('SELECT membres.pseudo, membres.id , messages.content, messages.date_message
                              FROM messages
                              LEFT JOIN membres ON messages.membreId = membres.id 
                             ORDER BY date_message');
        
         while($post = $see_tchat->fetch()){
<<<<<<< HEAD
      echo '<p ><strong>'.$post['pseudo'].' : </strong>'.$post['content'].' <small>'.$post['date_message'].'</small></p>';
=======
      echo '<div style="margin : 20px;" >
       <p><strong style="color : blue" ;>'.$post['pseudo'].' : </strong>'.$post['content'].' <br>
          <em style="font-size : 10px;">'.$post['date_message'].'</em><p>
            </div>';
>>>>>>> newbranch
         }

}


