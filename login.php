<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
  <div class="topnav">
    <a href="index.php">Inicio</a>
    <a class="active"  href="login.php">Login</a>
    <a href="cadastroUsuario.php">Cadastro</a>
  </div>
  <div>
    <?php 
    //Caso login ou senha não seja encontrado.
    if(isset($_GET['erro'])){
      echo '<p style ="color:red">Usuário e/ou senha incorreto(s)</p>';
    }
    //Caso não tenha sido autenticado, informa usuário.
    if(isset($_GET['autentica'])){
      echo '<p style ="color:red">Sem permissão de acesso, faça login novamente</p>';
    }
    //Caso seja realizado algum cadastro de item.
    if(isset($_GET['cadastrado'])){
      echo '<p style ="color:red">Cadastro realizado!</p>';
    }
    ?>
    <form method="POST" action="loginautentica.php" style="border:1px solid #ccc">
      <div class="container">
        <h1>Login</h1>
        <hr>
    
        <label for="email"><b>Usuário</b></label>
        <input type="text" placeholder="usuario@devlivros.com" name="email">
    
        <label for="psw"><b>Senha</b></label>
        <input type="password" placeholder="**********" name="psw">
        
        <div class="clearfix">
          <a href="index.php"><button type="button" class="cancelbtn">Voltar</button></a>
          <button type="submit" class="signupbtn">Acessar</button>
        </div>
      </div>
    </form>
  </div>

  <footer>
      <p>João Pedro Otto Lesko - Análise e Desenvolvimento de Sistemas PUCPR</p>
      <p>teste de versionamento</p>
  </footer>
</body>
</html>