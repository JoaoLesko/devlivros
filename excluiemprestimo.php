<?php
    // Conecta com o banco de dados.
    include "connecta.php";
    //Obtem o id enviado via get.
    $id = $_GET['id'];
    //Monta a query de exclusão.
    $sql = "DELETE FROM emprestimos WHERE id = $id";
    //Envia a query para o banco de dados.
    $res = mysqli_query($conn, $sql);
    //Redireciona para a listagem de pacientes
    header("Location: workspace.php")
?>