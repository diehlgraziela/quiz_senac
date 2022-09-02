<?php include 'php/connection.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senac Quiz</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1>Quiz</h1>
    </header>

    <main class="first-page">
        <div class="container">
            <ul>
                <li><b>Número de questões:</b> 5</li>
            </ul>
            <a href="php/question.php?n=1" class="start">Começar Quiz</a>
        </div>
    </main>
</body>

</html>