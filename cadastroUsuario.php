<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de usuário</title>
</head>
<body>
  <div class="topnav">
    <a href="index.php">Inicio</a>
    <a  href="login.php">Login</a>
    <a class="active" href="cadastroUsuario.php">Cadastro</a>
  </div>
  <form method="POST" action="cadastroatentica.php" style="border:1px">
      <div class="container">
        <h1>Cadastro de usuário</h1>
        <hr>

        <input type="hidden" name="id">

        <label for="nome"><b>Nome completo</b></label>
        <input type="text" placeholder="Insira seu nome completo" name="nome" required>
        
        <label for="telefone"><b>Telefone</b></label>
        <input type="text" placeholder="(DD)944445555" name="telefone" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Insira seu e-mail" name="email" required>
    
        <label for="psw"><b>Senha</b></label>
        <input type="password" placeholder="Insira sua senha" name="psw" required>
        
        <div class="clearfix">
          <button type="button" class="cancelbtn">Voltar</button>
          <button type="submit" class="signupbtn">Cadastrar</button>
        </div>
      </div>
    </form>
  <footer>
      <p>João Pedro Otto Lesko - Análise e Desenvolvimento de Sistemas PUCPR</p>
  </footer>
 
</body>
</php>