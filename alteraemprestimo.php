<?php
    // Conecta com banco de dados.
    include "connecta.php";
    //Obtem id do livro devolvido.
    $id = $_GET['id'];
    //Monta querry para alterar status do livro apra devolvido e inserir data de devolução.
    $sql = "UPDATE emprestimos SET status = 'Devolvido', datadevolvido = CURRENT_TIMESTAMP WHERE id = $id";
    //Realiza a query.
    $res = mysqli_query($conn, $sql);
    if($res){ //Se verdadeiro
        header("location: workspace.php");
    }else{//Se falso.
        echo"Erro na alteração.";
    }
?>