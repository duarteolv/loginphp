<?php 
        require 'conexao.php';
        try{
            session_set_cookie_params(['lifetime' => 60, 'httponly' => true]);
            session_start();
            session_regenerate_id();
            $con = conexao::getConnection(); 
               
            if(isset($_POST['nome']) && isset($_POST['senha'])){
                $nome = strip_tags(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
                $senha = filter_input(INPUT_POST, 'senha', FILTER_VALIDATE_INT);

                if(!is_numeric($nome) && is_int($senha)){
                    $query = $con->query("SELECT * FROM [usuario] WHERE [nome] = '$nome' AND [senha] = '$senha' ");
                    $select = $query->fetch(PDO::FETCH_ASSOC);
                
                    if(array_key_exists('nome', $select) && $select['senha'] == $senha){
                        $_SESSION['user'] = $select;
                        header("location: painel.php");
                        exit;
                }
                
             }  else{
                header("location: logar.php");
                exit;
             }
            }
        } catch(Exception $e){
            echo $e->getMessage();
            exit;
         }

         
        
    ?>