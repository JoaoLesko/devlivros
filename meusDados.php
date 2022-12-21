<?php 
    require 'autentica.php';
    include 'connecta.php';
    //Recebe o ID do usuário.
    $id = $_SESSION['id'];
    //Monta a query
    $sql = "SELECT * FROM `usuarios` WHERE id = $id";
    //Realiza a query
    $res = mysqli_query($conn,$sql);
    //Aramazenar o registro encontrado através do fetch_assoc.
    $row = mysqli_fetch_assoc($res);
    //Guarda os valores nas variaveis para preencher os campos atraves dos Values.
    $nome = $row['nome'];
    $telefone = $row['telefone'];
    $email = $row['email'];
    $senha = $row['senha'];
?>
<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Minhas informações</title>
</head>
<body>
    <div class="topnav">
        <a class="active" href="meusDados.php?id=<?php echo $_SESSION['id'] ?>">Meus dados</a>
        <a href="workspace.php">Área de trabalho</a>
        <a href="emprestimo.php">Emprestar</a>
        <a style="float: right;" href="logout.php" >Sair</a>
        <div style="text-align: right; margin-right:15px; font-size:15px">
            <p style="color:aliceblue; text-align-last: right"><?php echo $_SESSION['nome']?></p>
        </div>
    </div>
    <form method="POST" action="cadastroatentica.php" style="border:1px solid #ccc">
      <div class="container">
        <h1>Minhas informações</h1>
        <hr>

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="email"><b>Nome completo</b></label>
        <input type="text" value="<?php echo $nome?>" name="nome" required>
        
        <label for="telefone"><b>Telefone</b></label>
        <input type="text" value="<?php echo $telefone?>" name="telefone" required>

        <label for="email"><b>Email</b></label>
        <input type="text" value="<?php echo $email?>" name="email" required>
    
        <label for="psw"><b>Senha</b></label>
        <input type="password" value="<?php echo $senha?>" name="psw" required>
        
        <div class="clearfix">
        <a href="workspace.php"><button type="button" class="cancelbtn" >Voltar</button></a>
          <button type="submit" class="signupbtn">Alterar</button>
        </div>
      </div>
    </form>
  <footer>
      <p>João Pedro Otto Lesko - Análise e Desenvolvimento de Sistemas PUCPR</p>
  </footer>
 
</body>
</php>