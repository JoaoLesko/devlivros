<?php
    //Verificar autenticação para obter numero do ID do usuário.
    require "autentica.php";
    //Incluir conexão.
    include "connecta.php";
    //Receber informações do cadastro de emprestimo via POST.
    $idusuario = $_SESSION['id'];
    $idlivro = $_POST['id'];
    $livro = $_POST['livro'];
    $destinatario = $_POST['destinatario'];
    $telefone = $_POST['telefonedest'];
    $datadevolucao = $_POST['datadevolucao'];
    // Verifica se ID esta vazio e faz um INSERT no banco de dados.   
    if(empty($id)){
        $sql = "INSERT INTO `emprestimos`(`nomeLivro`, `destinatario`, `telefoneDestinatario`, `dataDevolucao`, `idusuario`,`status`,`datadevolvido`) 
        VALUES ('$livro','$destinatario','$telefone','$datadevolucao', '$idusuario','Emprestado', null)";
        $res = mysqli_query($conn,$sql);
        if($res){
            header ("location: workspace.php?inserido=1"); //Get para informar que livro foi inserido.
        }
        else{
            echo"Erro na inserção de livro";
        }
    }
    else{//Se livro já possuir ID, siginifica que é uma altreração e faz query de UPDATE. !!!FUNÇÃO NÃO IMPLEMENTADA!!!
        $sql = "UPDATE `emprestimos` SET `id`='$idlivro',`nomeLivro`='$livro', `destinatario`='$destinatario',
        `telefoneDestinatario`='$telefone,`dataDevolucao`='$datadevolucao', 'idusuario' = '$idusuario' 
        WHERE 'id' = $id";
        //Enviar query.
        $res = mysqli_query($conn,$sql);
        //Respostas da querry.
        if($res){ //Se verdadeiro
            header("location: workspace.php?alterado=1");
        }else{//Se falso.
            echo"Erro na alteração.";
        }
    }
?>