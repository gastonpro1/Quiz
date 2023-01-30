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
    <?php

    $idQuestion;

    if (isset($_GET['idQuestion']) || !empty($_GET['idQuestion'])) {

        if ($_GET['idQuestion'] == 11) {
            header("Location: result.php");
        }

<<<<<<< HEAD:question_foot.php
        $idQuestion = $_GET['idQuestion'];
    } else {
        $idQuestion = 1;
=======

        $idQuestion = $_GET['idQuestion'];
    } else {
        $idQuestion = 1;
     
>>>>>>> 9b4fc4467e3902fd3bd9aa74cd94f3cb558d8dc5:question.php
    }


    // Récupération des questions avec le thème choisit
    $sqlQuery = 'SELECT * FROM question WHERE Question_id = ? AND Question_idtheme = ?';
    $questionStatement = $db->prepare($sqlQuery);

    $questionStatement->execute([$idQuestion, $_GET['idTheme']]);
    $question = $questionStatement->fetch();

    $idQuestion++;
    ?>
    <section class="qcm-foot">
        <form action="question_foot?idTheme=<?= $_GET['idTheme'] ?>&&idQuestion=<?= $idQuestion ?>" method="POST">

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
<<<<<<< HEAD:question_foot.php

=======
<?php include 'partials/footer.php' ?>
>>>>>>> 9b4fc4467e3902fd3bd9aa74cd94f3cb558d8dc5:question.php
</html>