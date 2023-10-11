<?php 
        require 'conexao.php';
        try{
            session_set_cookie_params(['lifetime' => 60, 'httponly' => true]);
            session_start();
            session_regenerate_id();
            $con = conexao::getConnection(); 
               
            if(isset($_POST['nome']) && isset($_POST['senha'])){
                $nome = strip_tags(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
                $senha = strip_tags(filter_input(INPUT_POST, 'senha', FILTER_VALIDATE_INT));

                $query = $con->query("SELECT * FROM [usuario] WHERE [nome] = '$nome' AND [senha] = '$senha' ");
                $select = $query->fetch(PDO::FETCH_ASSOC);
                
                if($select['nome'] == $nome && $select['senha'] == $senha){
                    header("location: painel.php");
                    $_SESSION['user'] = $select;
                    header("location: painel.php");
                    exit;
                }

                
             } else{
                echo "Digite algo";
             }
        } catch(Exception $e){
            echo $e->getMessage();
            exit;
         }

         
        
    ?>