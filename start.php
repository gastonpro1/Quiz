<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Page</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>

    <div class="menu">

        <h1> <strong> Panic QUIZ </strong> </h1>

    </div>

    <section id="thème">

        <h1 style="margin-top:15px" ;> <strong> Quiz sur le thème choisie : <?= $_GET['theme'] ?></strong> <br><br>

        </h1>
        <?php
        $theme = $_GET['theme'];

        switch ($theme) {
            case "football":
        ?>
                <a href="question_foot.php?theme=<?= $_GET['theme'] ?>&&idTheme=<?= $_GET['idTheme'] ?>">
                <?php
                break;
            case "musique":
                ?>
                    <a href="question_musique.php?theme=<?= $_GET['theme'] ?>&&idTheme=<?= $_GET['idTheme'] ?>">
                    <?php
                    break;
                case "animaux":
                    ?>
                        <a href="question_animaux.php?theme=<?= $_GET['theme'] ?>&&idTheme=<?= $_GET['idTheme'] ?>">
                    <?php
                    break;
            }
                    ?>
                    <button style="background-color:rgb(48, 173, 163);" type="button" class="btn btn-primary btn-lg "> Démarrer le Quiz </button> </a>

    </section>


    <script src="main.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
<?php include 'partials/footer.php' ?>

</html>