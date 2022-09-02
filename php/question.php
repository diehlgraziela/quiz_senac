<?php include 'connection.php'; ?>

<?php
//set question number
$number = (int)$_GET['n'];

//get question
$query = "SELECT * FROM `questions` WHERE question_number = $number";

//get result
$result = $mysqli->query($query) or die($mysqli->error . __LINE__);
$question = $result->fetch_assoc();

//get choices
$query = "SELECT * FROM `choices` WHERE question_number = $number";

//get result
$choices = $mysqli->query($query) or die($mysqli->error . __LINE__);

//get total questions
$query = "SELECT * from questions";
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

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <h1>Quiz</h1>
    </header>

    <main class="question">
        <div class="container">
            <div class="current">Questão <?php echo $question['question_number'] ?> de <?php echo $total ?></div>
            <h2 class="question">
                <?php echo $question['text']; ?>
            </h2>

            <form method="post" action="./process.php">
                <ul class="choices">
                    <?php while ($row = $choices->fetch_assoc()) : ?>

                        <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>"> <?php echo $row['text']; ?> </li>

                    <?php endwhile; ?>
                </ul>

                <button type="submit">Responder</button>
                <input type="hidden" name="number" value="<?php echo $number ?>">
            </form>
        </div>
    </main>
</body>

</html>