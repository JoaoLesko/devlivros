<?php
    //Função para fazer logout do usuário.
    //Inicia sessão.
    session_start();
    //Apaga da memoria os valores armazenados na sessão para encerrar a sessão.
    unset($_SESSION['id']);
    unset($_SESSION['nome']);
    //Encaminha para o inicio.
    header("Location: index.php");

?>