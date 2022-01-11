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
    <title>Mentorias</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-fixed-top container-blue navbar-dark nav justify-content-center">
        <div class="container">
          <a class="navbar-brand" href="index.php">EDS</a>

          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <div class="nav-item active">
                Bem vindo(a), <?php 
              echo " " . $_SESSION['dadosUser']["nomeUser"] . "!"?> 
              </div>
              &nbsp;
              &nbsp;
              &nbsp;

            <ul class="navbar-nav mr-auto">
             
              <li class="nav-item text-center">
                <a class="nav-link" href="perfil.php">&nbsp; Editar Perfil </a>
              </li>

              <li class="nav-item text-center">
                <a class="nav-link" href="eventos.php">&nbsp; Eventos </a>
              </li>

              <li class="nav-item text-center">
                <a class="nav-link" href="mentorias.php">&nbsp;Agendar Mentorias </a>
              </li>

              <li class="nav-item text-center">
                <a class="nav-link" href="cursos.php">&nbsp; Cursos </a>
              </li>

              <li class="nav-item text-center">
                <a class="nav-link" href="../../controller/logout.php">&nbsp; Sair </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <section class="container">
      <br /><br />
      <div class="row">
        <div class="col-sm-5 text-center">
          <h2>Requisição de mentoria</h2>
          <br>
          <img class="img-fluid" src="../../../public/mentoria-banner.png" alt="img">
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
          <form action="../../controller/insereMentoria.php" method="POST">
            <div class="form-group">
                <label for="userName"> Nome de usuário / login:</label>
                <input
                  type="text"
                  name="userName"
                  class="form-control"
                  id="userName"
                  size="200"
                  value= <?php echo $_SESSION['dadosUser']['nomeUser']; ?>
                  required
                  disabled
                />
              </div>
              <br>
            <div class="form-group">
              <label for="fone"> Seu telefone:</label>
              <input
                type="number"
                name="fone"
                class="form-control"
                id="fone"
                size="200"
                placeholder="Digite seu número..."
                required
              />
            </div>
            <br>
            <div class="form-group">
              <label for="tempoMentoria">Digite os minutos necessários:</label>
              <input
                type="text"
                name="tempoMentoria"
                class="form-control"
                id="tempoMentoria"
                size="200"
                placeholder="Digite o tempo de mentoria necessário..."
                required
              />
            </div>

              <br>
              <div class="form-group">
                <label for="temaMentoria">Sobre:</label>
                <input
                  type="text"
                  name="temaMentoria"
                  class="form-control"
                  id="temaMentoria"
                  size="200"
                  placeholder="explique o tema da sua mentoria..."
                  required
                />
              </div>

            <br />
            
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Registrar mentoria</button>
            </div>
          </form>
          <br>
          
        </div>
        
      </div>
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