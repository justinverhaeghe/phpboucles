<?php
$number1 = 100;
$number2 = 20;
?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>PHP Boucles - Exercice 3</title>
</head>
<!-- Header -->

<body>
    <header class="d-flex flex-column justify-content-center align-items-center text-light">
        <h1>PHP Boucles</h1>
        <h2>Exercice 3</h2>
    </header>
    <main>
        <!-- Consigne de l'exercice -->
        <div class=" text-center pt-4">
            <p>Consigne : Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1
                et 100. <br>
                Tant que la première variable n'est pas inférieure ou égale à 10 :<br>
                - multiplier la première variable avec la deuxième<br>
                - afficher le résultat<br>
                - décrémenter la première variable</p>

        </div>
        <hr>
        <!-- Réponse -->
        <div class="text-center ">
            <p>
                <?php
                while ($number1 >= 10) {
                    $result = $number1 * $number2;
                    $number1--;
                    echo "$result <br>";
                }
                ?>

            </p>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>