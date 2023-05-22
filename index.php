<?php

include __DIR__ . '/include/partials/functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Password Generator</title>
</head>

<body>

    <div class="container">
        <div class="text-center">
            <h1 class="mt-4">Strong Password Generator</h1>
            <h2 class="mb-4">Genera una password sicura</h2>
        </div>
        <div class="output-pw text-start p-3 rounded mb-4">
            <?php
            if (isset($_GET['password_length'])) {
                $passwordLength = $_GET['password_length'];
                $characterRepeat = isset($_GET['flexRadioDefault']) && $_GET['flexRadioDefault'] === '1';
                $includeLetters = isset($_GET['letters']);
                $includeNumbers = isset($_GET['numbers']);
                $includeSymbols = isset($_GET['symbols']);

                $generatedPassword = generateRandomPassword($passwordLength, $characterRepeat, $includeLetters, $includeNumbers, $includeSymbols);

                echo '<p class="mb-0 text-success">Password generata: ' . $generatedPassword . '</p>';
            } else {
                echo '<p class="mb-0 text-danger">Nessun parametro valido inserito</p>';
            }
            ?>
        </div>
        <div class="container-input p-3 rounded row mx-0">
            <div class="col-6 d-flex flex-column">
                <div class="mb-4">
                    <span>Lunghezza password:</span>
                </div>
                <div>
                    <span>Consenti ripetizioni di uno o più caratteri:</span>
                </div>
                <div class="col-6 mt-auto">
                    <button type="submit" class="btn btn-primary" form="password-form">Invia</button>
                    <button type="submit" class="btn btn-secondary" form="password-form">Annulla</button>
                </div>

            </div>
            <form id="password-form" action="index.php" method="GET" class="col-6">
                <div class="row justify-content-between">
                    <div class="col-6 w-25 mb-3">
                        <input type="number" class="form-control" name="password_length" min="6" max="50" required>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="1">
                    <label class="form-check-label" for="flexRadioDefault1">Si</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="0" checked>
                    <label class="form-check-label" for="flexRadioDefault2">No</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="letters" checked>
                    <label class="form-check-label" for="letters">Lettere</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="numbers" checked>
                    <label class="form-check-label" for="numbers">Numeri</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="symbols" checked>
                    <label class="form-check-label" for="symbols">Simboli</label>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>