<?php include 'php/connection.php'; ?>

<?php
//get total number of questions
$query = "SELECT * FROM questions";

//get result
$results = $mysqli->query($query) or die($mysqli->error . __LINE__);
$total = $results->num_rows;
?>

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
                <li><b>Número de questões:</b> <?php echo $total; ?></li>
            </ul>
            <a href="php/question.php?n=1" class="start">Começar Quiz</a>
        </div>
    </main>
</body>

</html>