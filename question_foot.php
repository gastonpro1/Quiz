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

        <h1> <strong> Panic QUIZ Football </strong> </h1>

    </div>

    <?php include 'utils/db_connect.php' ?>

<div id="timer"> 


</div>

    <?php
    $idQuestion;

    if (isset($_GET['idQuestion']) || !empty($_GET['idQuestion'])) {

        if ($_GET['idQuestion'] == 11) {
            header("Location: result.php");
        }

        $idQuestion = $_GET['idQuestion'];
    } else {
        $idQuestion = 1;

    }

    // Récupération des questions avec le thème choisit
    $sqlQuery = 'SELECT * FROM question WHERE Question_id = ? AND Question_idtheme = ?';
    $questionStatement = $db->prepare($sqlQuery);

    $questionStatement->execute([$idQuestion, $_GET['idTheme']]);
    $question = $questionStatement->fetch();

    $idQuestion++;
    ?>
    <section class="qcm-foot">
        <form action="question_foot.php?idTheme=<?= $_GET['idTheme'] ?>&&idQuestion=<?= $idQuestion ?>" method="POST">

            <ul>

                <h3 class="question">
                    <li><?= $question['Question_contenue'] ?> </li>
                </h3>

                <input type="radio" name="choix" required> VRAI <br>
                <input type="radio" name="choix" required> FAUX <br>

                <input type="submit" class="style_btn" value="Valider">



            </ul>

        </form>
    </section>





</body>


<?php include 'partials/footer.php' ?>

</html>

<script src="main.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>