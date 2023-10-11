<?php 
        require 'conexao.php';
        try{

        $con = conexao::getConnection();
        $nome = strip_tags(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
        $senhaatual = strip_tags(filter_input(INPUT_POST, 'senhaatual', FILTER_VALIDATE_INT));
        $novasenha = strip_tags(filter_input(INPUT_POST, 'novasenha', FILTER_VALIDATE_INT));

        $query = $con->query("SELECT * FROM [usuario] WHERE [nome] = '$nome' AND [senha] = '$senhaatual' ");
        $select = $query->fetch(PDO::FETCH_ASSOC);

        if($senhaatual == $select['senha'] && $nome == $select['nome']){

            $query = $con->query("UPDATE [usuario] SET [nome] = '$nome' , [senha] = '$novasenha' WHERE [nome] = '$nome' AND [senha] = '$senhaatual'");
            header("location: painel.php");
            exit;
        } else{
            print_r("Senha incorreta:");
        }

        } catch(PDOException $e){
            print_r($e->getMessage());
        }
?>