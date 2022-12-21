<?php
    //(Re)iniciar a sessão
    session_start();
    // Verificar se Não foi criada uma sessão autenticada e NÃO existe valor ID guardado
    if(!isset($_SESSION['id'])){
        header("Location: login.php?autentica=1");
    }
?>