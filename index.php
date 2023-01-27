<?php
    try {
        $db = new PDO(
            'mysql:host=localhost;dbname=quiz;charset=utf8',
            'root',
            ''
        );
    } catch(Exception $e){
        echo "erreur db";
        die('Erreur : '.$e->getMessage());
    }
?>

<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pseudo Page</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>

    <!-- menu -->

    <div class="menu">

        <h1> <strong> Panic QUIZ </strong> </h1>

    </div>

    <!-- Fin menu -->

    <section class="pseudo">
        <form action="process/process_ajout_user.php" method="POST">
            <p class="error"> 
                <?php 
                    //afficher l'erreur si elle existe 
                    if(isset($error)) echo $error;
                ?>    
            </p>
            <label> <strong> Entrez votre pseudo : <strong> </label>
            <input type="text" name="pseudo" placeholder="Ex: Goku" autocomplete="off"> <br>
            <input type="submit" value="Se connecter">
        </form>
    </section>










    <!-- <header>
        <h1 class="CultG"> <strong> QUIZ 3 Thème </strong> </h1> 
       
      <form>
        
            <h2 class ="fs-1"> <strong> Entrez votre pseudo : </strong> </h2>  

            <div class="input">
                <input type="pseudo" placeholder="Pseudo" style="width: 300px; height: 50px" /> 
            </div>
            
            <br>

            <div align="center">
                <button type="submit" style="width:300px; height: 50px"> Se connecter </button>
            </div>
            
     </form>

     </header>

<footer>

<h1 class="Foot"> <strong> Rios Brice <br>
                           Medjo Gaston <br>
                           Litaudon Alexandre
</strong> </h1> 

</footer> -->

    <script src="main.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

<?php include 'partials/footer.php' ?>

</html>