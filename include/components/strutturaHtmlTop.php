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

    <main class="container">
        <div class="text-center">
            <h1 class="mt-4">Strong Password Generator</h1>
            <h2 class="mb-4">Genera una password sicura</h2>
        </div>
        <div class="output-pw text-start p-3 rounded mb-4">
            <?php if (empty($_SESSION['password'])) { ?>
                <p class="mb-0 text-danger">Nessun parametro valido inserito</p>
            <?php } else { ?>
                <p class="mb-0 text-success">Password generata: "<?php echo $_SESSION['password']; ?>"</p>
            <?php } ?>
        </div>
        <?php include __DIR__ . '/form.php' ?>
    </main>