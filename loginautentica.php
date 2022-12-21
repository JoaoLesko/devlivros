<?php
    //Autenticação do login, recependo os dados via POST para montar a query de consulta.
    $login = $_POST["email"];
    $senha = $_POST["psw"];
    //Incluindo conecção com o bando de dados.
    include "connecta.php";
    //Query para validação de login.
    $sql = "SELECT * FROM usuarios WHERE email = '$login' AND senha ='$senha'";
    //Envio da query ao banco de dados.
    $res = mysqli_query($conn,$sql);
    //Quantidade de registros
    $qtdeRegistros = mysqli_num_rows($res);
    //Verifica se encontrou resultado
    if($qtdeRegistros > 0){
        //Inicializando sessão.
        session_start();
        //Obtem dos dados do usuário.
        $row = mysqli_fetch_assoc($res);
        //Armazena as informações do usuário na Sessão.
        $_SESSION['id'] = $row['id'];
        $_SESSION['nome'] = $row ['nome'];
        //Direciona para a pagina inicial "workspace".
        header ('Location: workspace.php');
    }
    //Retorna para a pagina de login informando ERRO.
    else{
        header ('Location: login.php?erro=1');
    }

?>