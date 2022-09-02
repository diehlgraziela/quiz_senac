<?php include 'connection.php'; ?>

<?php
if (isset($_POST['submit'])) {
    //get post variables
    $question_number = $_POST['question_number'];
    $question_text = $_POST['question_text'];
    $correct_choice = $_POST['correct_choice'];

    //choices array
    $choices = array();
    $choices[1] = $_POST['choice1'];
    $choices[2] = $_POST['choice2'];
    $choices[3] = $_POST['choice3'];
    $choices[4] = $_POST['choice4'];

    //question query
    $query = "INSERT INTO `questions` (question_number, text) VALUES ('$question_number', '$question_text')";

    //run query
    $insert_row = $mysqli->query($query) or die($mysqli->error . __LINE__);

    //validate insert
    if ($insert_row) {
        foreach ($choices as $choice => $value) {
            if ($value != '') {
                if ($correct_choice == $choice) {
                    $is_correct = 1;
                } else {
                    $is_correct = 0;
                }
                //choice query
                $query = "INSERT INTO `choices` (question_number, is_correct, text) VALUES ('$question_number','$is_correct', '$value')";

                //run query
                $insert_row = $mysqli->query($query) or die($mysqli->error . __LINE__);

                //validate insert
                if ($insert_row) {
                    continue;
                } else {
                    die('Erro : (' . $mysqli->errno . ') ' . $mysqli->error);
                }
            }
        }
        $message = 'Questão adicionada';
    }
}

//get total number of questions
$query = "SELECT * FROM questions";
//get results
$results = $mysqli->query($query) or die($mysqli->error . __LINE__);
$total = $results->num_rows;
$next = $total + 1;
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

    <main class="add">
        <div class="container">
            <h2>Adicione uma questão</h2>
            <?php
            if (isset($message)) {
                echo '<p>' . $message . '</p>';
            }
            ?>

            <form method="post" action="add.php">
                <div class="form-control">
                    <label for="">Número da questão </label>
                    <input type="number" value="<?php echo $next; ?>" name="question_number">
                </div>

                <div class="form-control">
                    <label for="">Texto da questão </label>
                    <input type="text" name="question_text">
                </div>

                <div class="form-control">
                    <label for="">Opção 1 </label>
                    <input type="text" name="choice1">
                </div>

                <div class="form-control">
                    <label for="">Opção 2 </label>
                    <input type="text" name="choice2">
                </div>

                <div class="form-control">
                    <label for="">Opção 3 </label>
                    <input type="text" name="choice3">
                </div>

                <div class="form-control">
                    <label for="">Opção 4 </label>
                    <input type="text" name="choice4">
                </div>

                <div class="form-control">
                    <label for="">Número da opção correta </label>
                    <input type="number" name="correct_choice">
                </div>

                <input type="submit" name="submit" value="Adicionar">
                <a href="../index.php" class="go-back">Voltar ao início</a>
            </form>
        </div>
    </main>
</body>

</html>