<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senac Quiz</title>

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header class="final">
        <h1>Quiz</h1>
    </header>

    <main class="final">
        <div class="container">
            <h2>Pontuação final: <?php echo $_SESSION['score']; ?></h2>
            <a href="../index.php" class="start">Reiniciar</a>
            <?php session_destroy(); ?>
        </div>
    </main>
</body>

</html>