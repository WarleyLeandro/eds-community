<?php
    session_start();
    if(!isset($_SESSION['logado'])) :
      header('Location: ../../index.html');
    endif;
?>

<!DOCTYPE html>
<html lang="pt-Br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../global.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
      integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
      integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
      crossorigin="anonymous"
    ></script>
    <title>Bem vindo ADM</title>
  </head>
  <body>
    
  <?php include "../../components/header.php";?>

    <?php
    
    
    $id = $_SESSION['id'];
    include "../../controller/conexao.php";
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $consulta = $pdo->prepare("SELECT * FROM usuario WHERE idUsuario = $id");
    $consulta->bindParam(1, $_GET['id'], PDO::PARAM_STR);

    $consulta->execute();
    $linha = $consulta->fetch(PDO::FETCH_ASSOC); 

    $descricao = $linha['descricao'];
    if($descricao != null) {
      $descricao = $linha['descricao'];
    } else {
      $descricao = "Descreva-se...";
    }
        
?>  
    <section>
      <br />
      <section class="container">
      <br />
      <div class="row text-center">
        <h2>Atualize seus Dados</h2>
      </div>
      
      <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm-4 bg-light">
        <br>
          <form action="../../controller/atualizaAdm.php" method="POST">

            <div class="form-group">
                <label for="nomeCompleto"> Nome Completo:</label>
                <input
                  type="text"
                  name="nomeCompleto"
                  class="form-control"
                  id="nomeCompleto"
                  size="200"
                  value= "<?php echo $linha['nomeCompleto']; ?>"
                  placeholder="Atualize seu nome completo..."
                  required
                />
              </div>
              <br>
            <div class="form-group">
              <label for="nomeUser"> Nome de Usuário:</label>
              <input
                type="text"
                name="nomeUser"
                class="form-control"
                id="nomeUser"
                size="200"
                value= "<?php echo $linha['nomeUser']; ?>"
                placeholder="Atualize seu nome de usuário..."
                required
              />
            </div>
            <br>
              <div class="form-group">
                <label for="email"> Email:</label>
                <input
                  type="email"
                  name="email"
                  class="form-control"
                  id="email"
                  size="200"
                  value= "<?php echo $linha['email']; ?>"
                  placeholder="Atualize seu e-mail..."
                  required
                />
              </div>
              <br>
            <div class="form-group">
              <label for="senha">Senha:</label>
              <input
                type="password"
                name="senha"
                class="form-control"
                id="senha"
                size="200"
                maxlength="8"
                value= "<?php echo  $linha['senha']; ?>"
                placeholder="Atualize sua senha..."
                required
              />
            </div>
            <br>
            <div class="form-group">
              <label for="descricao">Descrição:</label>
              <input
                type="text"
                name="descricao"
                class="form-control"
                id="descricao"
                size="200"
                maxlength="245"
                value= "<?php echo $descricao ?>"
                placeholder="Descreva sua jornada tech..."
              />
            </div>

            <br />
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
          </form>
          <br>
        </div>
        <div class="col-sm"></div>
      </div>
      <br>
    </section>
    </section>
</body>
<script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"
></script>
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
  crossorigin="anonymous"
></script>
<script
  src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
  crossorigin="anonymous"
></script>
</html>