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
    <section class="container">
      <br /><br />
      <br>

      <div class="row">
      <div class="col-sm-7 ">
        <?php require('../../controller/tabelaDeletaCurso.php') ?>
      </div>
      <div class="col-sm-1"></div>
      
      <div class="col-sm-4 bg-light">

      <div class="text-center">
      <br>
      <h2>Cadastro Curso</h2>
      </div>
      <br>
          <form action="../../controller/insereCurso.php" method="POST">
            <div class="form-group">
              <label for="tituloVideo"> Título do vídeo:</label>
              <input
                type="text"
                name="tituloVideo"
                class="form-control"
                id="tituloVideo"
                size="200"
                placeholder="Digite o título do vídeo..."
                required
              />
            </div>
            <br />
            <div class="form-group">
              <label for="linkVideo"> Link do vídeo:</label>
              <input
                type="text"
                name="linkVideo"
                class="form-control"
                id="linkVideo"
                size="200"
                placeholder="Insira o link do vídeo..."
                required
              />
            </div>
            <br />
            <div class="form-group">
              <label for="tipoVideo">Tipo do vídeo:</label>
              <input
                type="text"
                name="tipoVideo"
                class="form-control"
                id="tipoVideo"
                size="200"
                placeholder="Digite tipo do vídeo..."
                required
              />
            </div>

            
            <br />
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Cadastrar Curso</button>
            </div>
          </form>
          <br />
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
