<?php 
    include "connecta.php";
    require 'autentica.php';
?>
<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Emprestimo</title>
</head>
<body>
    <div class="topnav">
        <a href="meusDados.php?id=<?php echo $_SESSION['id'] ?>">Meus dados</a>
        <a href="workspace.php">Área de trabalho</a>
        <a class="active" href="emprestimo.php">Emprestar</a>
        <a style="float: right;" href="logout.php" >Sair</a>
        <div style="text-align: right; margin-right:15px; font-size:15px">
            <p style="color:aliceblue; text-align-last: right"><?php echo $_SESSION['nome']?></p>
        </div>    
    </div>
    <form method="POST" action="emprestimoautentica.php" style="border:1px solid #ccc">
      <div class="container">
        <h1>Registro de emprestimo</h1>
        <hr>
    
        <label for="livro"><b>Nome do livro</b></label>
        <input type="text" placeholder="Insira nome do livro" name="livro" required>
        
        <label for="destinatario"><b>Para quem estou emprestando</b></label>
        <input type="text" placeholder="Nome de quem esta recebendo o livro" name="destinatario" required>
        
        <label for="telefonedest"><b>Telefone</b></label>
        <input type="text" placeholder="(DD)944445555" name="telefonedest" required>
    
        <label for="datadevolucao"><b>Data para devolução</b></label>
        <input type="date" name="datadevolucao">

        <div class="clearfix">
            <a href="workspace.php"><button type="button" class="cancelbtn">Voltar</button></a>
            <button type="submit" class="signupbtn">Cadastrar</button>
        </div>
      </div>
    </form>
  <footer>
      <p>João Pedro Otto Lesko - Análise e Desenvolvimento de Sistemas PUCPR</p>
  </footer>
 
</body>
</php>