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
            <form method="post" action="add.php">
                <div class="form-control">
                    <label for="">Número da questão </label>
                    <input type="number" name="question_number">
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

                <button type="submit">Adicionar</button>
            </form>
        </div>
    </main>
</body>

</html>