<?php 
    // Inclui conecção ao banco de dados.
    include "connecta.php";
    //Recebe as informações do formulário de cadastro.
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['psw'];
    //Se o ID estiver vazio, faz um novo cadastro no banco de dados.
    if(empty($id)){
        //Cria a querry para novo cadastro
        $sql = "INSERT INTO `usuarios`(`nome`, `telefone`, `email`, `senha`) 
        VALUES ('$nome','$telefone','$email','$senha')";
        //Envia a querry para o banco de dados.
        $res = mysqli_query($conn, $sql);
        //verifica se querry deu certo e entra no workspace do usuário.
        if($res){
            header ("Location: login.php?cadastrado=1");
        }else{
            echo "Erro";
        }
    }else{
        // Monta querry de UPDATE com os campos enviados pelo usuario.
        $sql = "UPDATE usuarios SET 
                nome = '$nome',
                telefone = '$telefone',
                email = '$email',
                senha = '$senha' 
                WHERE id = $id";
        // Envia a query ao banco de dados.
        $res = mysqli_query($conn,$sql);
        // Resposta se o sql inserir sem erros.
        if($res){  
            header("Location: workspace.php?alterado=1");
        } // Resposta se der erro.
        else{
            echo"erro";
        }
    }
?>