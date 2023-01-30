<<<<<<< HEAD
<?php
    // connexion bdd

    // requête INSERT

    // redirection vers SELECT
=======
<?php include "../utils/db_connect.php"?>
<?php

    echo $_POST['pseudo'];
        if(!empty($_POST['pseudo'])) {
        
            $sql = "INSERT INTO user(pseudo) VALUES (:pseudo)";
            $stmt= $db->prepare($sql);

            $stmt->execute([
                "pseudo" => $_POST['pseudo'],
            ]);
          
        } else {
            echo "Entrez votre pseudo !!! ";
        }
 
>>>>>>> 9b4fc4467e3902fd3bd9aa74cd94f3cb558d8dc5
