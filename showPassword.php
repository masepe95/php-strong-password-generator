<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Password Show</title>
</head>

<body class="bg-secondary text-light">
    <h1 class="text-center p-5 bg-dark">
        La tua password generata è:
    </h1>
    <div class="bg-info w-50 mx-auto mt-5 p-5">
        <p class="fs-2 text-success">
            <?php
            session_start();
            echo $_SESSION['generatedPassword'];
            ?>
        </p>
    </div>
</body>

</html>