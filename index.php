<?php
include_once './functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-secondary text-light">
    <h1 class="text-center p-5 bg-dark">
        Very Strong Password Generator!
    </h1>
    <div class="mx-auto mt-4 p-4 w-50 bg-primary text-center">
        <form method="get">
            <label for="length-input">
                Lunghezza Password:
            </label>
            <input type="number" name="length-input" id="length-input">
            <button type="submit">
                Invia
            </button>
        </form>
    </div>
    <?php if ((($_GET['length-input']) > 0) && (($_GET['length-input']) != null)) { ?>
        <div class="bg-info w-50 mx-auto mt-5 p-5">
            <h2>
                La tua password generata è:
            </h2>
            <p class="fs-2 text-success">
                <?php
                header('Location: ./showPassword.php');
                ?>
            </p>
        </div>
    <?php } else { ?>
        <div class="bg-warning w-50 mx-auto mt-5 p-5">
            <p>
                I parametri inseriti non sono validi, prego rincontrollare.
            </p>
        </div>
    <?php } ?>

</body>

</html>