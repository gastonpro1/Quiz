<?php include "../utils/db_connect.php"?>
<?php

    echo $_POST['pseudo'];
        if(!empty($_POST['pseudo'])) {
        
            $sql = "INSERT INTO user(pseudo) VALUES (:pseudo)";
            $stmt= $db->prepare($sql);

            $stmt->execute([
                "pseudo" => $_POST['pseudo'],
            ]);
          header('Location: http://localhost:81/QuizF/select.php');
        } else {
            echo "Entrez votre pseudo !!! ";
        }


