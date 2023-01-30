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

        <h1> <strong> Panic QUIZ Musique</strong> </h1>

    </div>

    <?php include 'utils/db_connect.php' ?>
    <?php

    $numQuestion;

    if (isset($_GET['numquestion']) || !empty($_GET['numquestion'])) {

        if ($_GET['numquestion'] == 9) {
            header("Location: result.php");
        }

        $numQuestion = $_GET['numquestion'];
    } else {
        $numQuestion = 0;
    }

    // Récupération des questions avec le thème choisit
    $sqlQuery = 'SELECT * FROM question WHERE Question_idtheme = ?';
    $questionStatement = $db->prepare($sqlQuery);

    $questionStatement->execute([$_GET['idTheme']]);
    $questions = $questionStatement->fetchAll();

    echo count($questions);
    $numQuestion++;

    ?>
    <section>
        <form action="question_musique.php?idTheme=<?= $_GET['idTheme'] ?>&&numquestion=<?= $numQuestion ?>" method="POST">

            <ul>

                <h3 class="question">
                    <li><?= $questions[$numQuestion]['Question_contenue'] ?></li>
                </h3>



                <h6>Choisissez la bonne réponse</h6>
                <input type="radio" name="choix" required><?= $questions[$numQuestion]['choix1'] ?><br>
                <input type="radio" name="choix" required><?= $questions[$numQuestion]['choix2'] ?><br>
                <input type="radio" name="choix" required><?= $questions[$numQuestion]['choix3'] ?><br>


                <input type="submit" class="style_btn" value="Valider">



            </ul>

        </form>
    </section>


    <!--
    <section class="qcm-foot">
        <form action="question_musique.php?idTheme=<?= $_GET['idTheme'] ?>&&idQuestion=<?= $idQuestion ?>" method="POST">

            <ul>

                <h3 class="Questions">
                    <li>//<?= $question['Question_contenue'] ?> </li>
                </h3>
                <input type="radio" name="choix" required> CHPOISISSEZ LA BONNE REPONSE<br>
                <input type="submit" class="style_btn" value="Valider">



            </ul>

        </form>
    </section>
    -->




</body>

</html>