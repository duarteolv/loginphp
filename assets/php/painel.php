<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/perfil.css">
    <title>Login</title>
</head>
<body>
    
    <form>
        <div class="perfil">
            <div>
                <h1><img src="../img/perfil.png" alt="perfil" class="avatar"></h1>
            </div>
            <div>
                <h2><span>ID:</span>
                    <?php 
                        session_start();
                        print_r($_SESSION['user']['id']);
                    ?>          
                </h2>
            </div>
            <div>
            <h2><span>Nome:</span>
                    <?php 
                        print_r($_SESSION['user']['nome']);
                    ?>          
                </h2>
            </div>

            <button><a href="editar.php" style="text-align: center; margin: 0 auto; text-decoration: none; color: black; width: 100%; height: 30px; border-radius: 8px; text-transform: uppercase; border: none; margin-top: 20px; font-weight: 800;">Alterar senha</a></button>
            <button><a href="deletar.php" style="text-align: center; margin: 0 auto; text-decoration: none; color: black; width: 100%; height: 30px; border-radius: 8px; text-transform: uppercase; border: none; margin-top: 20px; font-weight: 800;">Deletar</a></button>
        </div>
    </form>
    <div>
    </div>
</body>
</html>