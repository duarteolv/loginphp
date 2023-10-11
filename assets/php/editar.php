<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>

    <form action="editar_action.php" method="post">
        <div class="login">
            <div>
                <h1>Editar usuário</h1>
            </div>
            <div>
                <label for="nome">Usuário</label>
                <input type="text" id="nome" name="nome">
            </div>
            <div>
                <label for="senhat">Senha atual</label>
                <input type="password" id="senhaatual" name="senhaatual"  placeholder="apenas numeros">
            </div>
            <div>
                <label for="nsenha">Nova senha</label>
                <input type="password" id="novasenha" name="novasenha"  placeholder="apenas numeros">
            </div>

            <button type="submit">Salvar</button>
            <button><a href="painel.php" style="text-align: center; margin: 0 auto; text-decoration: none; color: black; width: 100%; height: 30px; border-radius: 8px; text-transform: uppercase; border: none; margin-top: 20px; font-weight: 800;">Voltar</a></button>
        </div>
    </form>
    <div>
     
    </div>
</body>
</html>