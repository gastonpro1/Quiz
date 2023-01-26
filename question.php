<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> QCM Page </title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>

<div class="menu">
      
      <h1> <strong> Panic QUIZ </strong> </h1>
   
  </div>
  
 <?php include 'utils/db_connect.php'?>
 <?php
    if($_COOKIE['id_question'] > 11) {
        unset($_COOKIE['id_question']);
        echo "Le cookie à été unset";
    }

    $sqlQuery = 'SELECT * FROM question WHERE Question_id = ? AND Question_idtheme = ?';
    $questionStatement = $db->prepare($sqlQuery);

    if(!empty($_COOKIE || $_COOKIE['id_question'] > 0 )) {
        $idQuestion = $_COOKIE['id_question'];
        $idQuestion++;
        setcookie("id_question", $idQuestion, time()+3600);
    } else {
        $idQuestion = 1;
        setcookie("id_question", $idQuestion, time()+3600);
    }
    
    if($idQuestion == 11) {
        header('Location: index.php');
        setcookie("id_question", 0, time()+3600);
    }
    
    
    $questionStatement->execute([$idQuestion, $_GET['id']]);
    $question = $questionStatement->fetch();


?>
    <section class="qcm-foot">
        <form action="question.php" method="POST">

           <ul>
        
                <h3 class="question"> <li><?= $question['Question_contenue'] ?> </li> </h3>
                
                <input type="radio" name="choix" required> VRAI <br>
                <input type="radio" name="choix" required> FAUX <br>

                <input type="submit" class="style_btn" value="Valider">

             
            
        </ul>  

    


          
             <!-- <h3 class="question"> <li> Est ce que l’équipement complet d’un arbitre de foot se compose d’un sifflet, un carton jaune et un carton rouge ? </li> </h3>
             <input type="radio" name="" value="2" required> VRAI <br>
             <input type="radio" name="" value="2" required> FAUX <br>

             <h3 class="question"> <li> Est ce que l'homologation dans les compétitions officielles, le ballon de foot doit être noir et blanc ?   </li> </h3>
             <input type="radio" name="" value="2" required> VRAI <br>
             <input type="radio" name="" value="2" required> FAUX <br>

             <h3 class="question"> <li> Est ce que la largeur officielle d’une cage de but est 7,32 m ? </li> </h3>
             <input type="radio" name="" value="2" required> VRAI <br>
             <input type="radio" name="" value="2" required> FAUX <br>

             <h3 class="question"> <li>  Est ce que le gardien de but est le seul joueur à pouvoir toucher le ballon avec la main sur l’ensemble du terrain ?   </li> </h3>
             <input type="radio" name="" value="2" required> VRAI <br>
             <input type="radio" name="" value="2" required> FAUX <br>
             
             <h3 class="question"> <li> Est ce qu'un but est accordé dès lors que le ballon touche la ligne de but ? </li> </h3>
             <input type="radio" name="" value="2" required> VRAI <br>
             <input type="radio" name="" value="2" required> FAUX <br>

             <h3 class="question"> <li> Est ce qu'un ballon de foot adéquat doit avoir une circonférence de 70 cm environ ? </li> </h3>
             <input type="radio" name="" value="2" required> VRAI <br>
             <input type="radio" name="" value="2" required> FAUX <br>

             <h3 class="question"> <li> Est ce que les gardiens de but peuvent jouer en pantalon de survêtement ? </li> </h3>
             <input type="radio" name="" value="2" required> VRAI <br>
             <input type="radio" name="" value="2" required> FAUX <br>

             <h3 class="question"> <li> Est ce qu'un joueur est en position de hors-jeu s’il se trouve plus près de la ligne de but adverse que le ballon et l’avant-dernier adversaire ? </li> </h3>
             <input type="radio" name="" value="2" required> VRAI <br>
             <input type="radio" name="" value="2" required> FAUX <br>

             <h3 class="question"> <li>  Est ce qu'au football en cas d’infraction de hors-jeu l’arbitre accorde un coup franc indirect ?   </li> </h3>
             <input type="radio" name="" value="2" required> VRAI <br>
             <input type="radio" name="" value="2" required> FAUX <br> -->
  

        </form>
    </section>

           



</body>
</html>