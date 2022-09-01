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
        <div class="container">
            <h1>Quiz</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="current">Questão 1 de 5</div>
            <h2 class="question">
                Essa questão está correta?
            </h2>

            <form action="post" action="process.php">
                <ul class="choices">
                    <li><input name="choice" type="radio" value="1">Sim</li>
                    <li><input name="choice" type="radio" value="2">Não</li>
                    <li><input name="choice" type="radio" value="3">Claro</li>
                    <li><input name="choice" type="radio" value="4">Talvez</li>
                </ul>
                <button type="submit">Responder</button>
                <button type="submit">Pular</button>
            </form>
        </div>
    </main>
</body>

</html>