<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>

    <form action="logar_action.php" method="post">
        <div class="login">
            <div>
                <h1>Login</h1>
            </div>
            <div>
                <label for="user">Usuário</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div>
                <label for="pass">Senha</label>
                <input type="password" id="senha" name="senha" required placeholder="apenas numeros">
            </div>

            <button type="submit">Logar</button>
        </div>
    </form>
    <div>
    </div>
</body>
</html>