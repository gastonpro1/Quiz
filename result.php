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
      
      <h1> <strong> Résultat </strong> </h1>
   
  </div>
  
 <?php include 'utils/db_connect.php'?>
 <?php

    
?>
    <section class="qcm-foot">
        <form action="select.php" method="POST">
            <ul>
                <h3 class="question"> <li> Bravo </li> </h3>
                <input type="submit" class="style_btn" value="Retour aux thèmes">
            </ul>  

        </form>
    </section>

           



</body>
<?php include 'partials/footer.php' ?>
</html>