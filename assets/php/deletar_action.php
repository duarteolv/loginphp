<?php
    require 'conexao.php'; 
    session_start();
    try{
        $conn = conexao::getConnection();
        $id = $_SESSION['user']['id'];
        $op = $_POST['op'];   
        
        if($op){
            $query = $conn->query("SELECT * FROM [usuario] WHERE [id] = '$id' ");
            $select = $query->fetch(PDO::FETCH_ASSOC);

            if($select['id'] == $id){
                $query2 = $conn->query("DELETE FROM [usuario] WHERE [id] = '$id' ");
                header("location: criar.php");
                exit;
            } else{
                print_r("Usuário não encontrado");
            }
        } else{
            header("location: painel.php");
            exit;
        }
    } catch(PDOException $e){
        print_r($e->getMessage());
    }

?>