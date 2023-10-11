<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>

    <form action="deletar_action.php" method="post">
        <div class="login">
            <div>
                <h1>Deletar conta?</h1>
            </div>
            <div>
                <label>Sim</label>
                <input type="radio" name="op" id="op" value="true">
                <label>Não</label>
                <input type="radio" name="op" id="op" value="">
            </div>

            <button type="submit">Escolher</button>
        </div>
    </form>
</body>
</html>
</html>