<?php 
    require 'autentica.php';
    include 'connecta.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Área do usuário</title>
</head>
<body>   
    <div class="topnav">
        <a href="meusDados.php?id=<?php echo $_SESSION['id'] ?>">Meus dados</a>
        <a class="active" href="workspace.php">Área de trabalho</a>
        <a href="emprestimo.php">Emprestar</a>
        <a style="float: right;" href="logout.php" >Sair</a>
        <div style="text-align: right; margin-right:15px; font-size:15px">
            <p style="color:aliceblue; text-align-last: right"><?php echo $_SESSION['nome']?></p>
        </div>
    </div>
    <?php 
        //Caso não tenha sido autenticado, informa usuário.
        if(isset($_GET['alterado'])){
        echo '<p style ="color:red">Informações alteradas com sucesso!</p>';
        }
        //Informa se foi inserido algum item
        if(isset($_GET['inserido'])){
            echo '<p style ="color:red">Livro inserido com sucesso!</p>';
        }
    ?>
    <div class="container" style="border:1px solid #ccc">
        <h1>Lista de livros emprestados</h1>
        <hr>
        <table border = "1">
            <tr>
                <td>Nome do Livro</td>
                <td>Destinatario</td>
                <td>Telefone</td>
                <td>Data prevista para devolução</td>
                <td>Marcar devolução</td>
                <td>Data de devolução</td>
                <td>Excluir</td>
            </tr>
            <?php
            //Monta query para consulta dos livros.
            $sql = "SELECT * FROM `emprestimos` WHERE idusuario = $_SESSION[id]";
            //Realiza a query.
            $res = mysqli_query($conn,$sql);
            if($res){ //Resposta se verdadeiro
                // Laço para percorre o banco de dados coletando as informações.
                while($row = mysqli_fetch_assoc($res)){
                    //Imprimirnova linha na tabela
                    echo"<tr>
                            <td>".$row["nomeLivro"]."</td>
                            <td>".$row["destinatario"]."</td>
                            <td>".$row["telefoneDestinatario"]."</td>
                            <td>".$row["dataDevolucao"]."</td>
                            <td><a href='alteraemprestimo.php?id=".$row["id"]."'>".$row["status"]."</td>
                            <td>".$row["datadevolvido"]."</td>
                            <td><a href='excluiemprestimo.php?id=".$row["id"]."'>Excluir</td>
                        </tr>";
                }
            }            
        ?>
        </table>
    </div>
    <footer>
        <p>João Pedro Otto Lesko - Análise e Desenvolvimento de Sistemas PUCPR</p>
    </footer>
</body>
</html>