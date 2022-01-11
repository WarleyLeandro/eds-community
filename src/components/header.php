<?php

echo "
<header>
<nav class='navbar navbar-expand-lg navbar-fixed-top container-blue navbar-dark nav justify-content-center'>
  <div class='container'>
    <a class='navbar-brand' href='index.php'>EDS</a>

    <button
      class='navbar-toggler'
      type='button'
      data-toggle='collapse'
      data-target='#navbarSupportedContent'
      aria-controls='navbarSupportedContent'
      aria-expanded='false'
      aria-label='Toggle navigation'
    >
      <span class='navbar-toggler-icon'></span>
    </button>

    <div class='collapse navbar-collapse ' id='navbarSupportedContent'>
    <div class='nav-item active'>
          Bem vindo(a),";
        ?>
        <?php 
        echo " " .$_SESSION['dadosUser']['nomeUser']. "!";?>

      <?php
      echo "
        </div>
        &nbsp;
        &nbsp;
        &nbsp;
      <ul class='navbar-nav mr-auto'>
      
        <li class='nav-item '>
          <a class='nav-link' href='perfil-adm.php'>&nbsp; Editar Perfil</a>
        </li>

        <li class='nav-item'>
          <a class='nav-link' href='listagem-user.php'>&nbsp; Listagem de Usuários </a>
        </li>

        <li class='nav-item'>
          <a class='nav-link' href='cadastrar-eventos.php'>&nbsp;Cadastrar Eventos </a>
        </li>

        <li class='nav-item text-center'>
          <a class='nav-link' href='eventos.php'>&nbsp; Eventos </a>
        </li>

        <li class='nav-item'>
          <a class='nav-link' href='cadastrar-mentorias.php'>&nbsp;Vizualizar Mentorias </a>
        </li>

        <li class='nav-item'>
          <a class='nav-link' href='cadastrar-cursos.php'>&nbsp;Cadastrar Cursos </a>
        </li>

        <li class='nav-item'>
          <a class='nav-link' href='../../controller/logout.php'>&nbsp; Sair </a>
        </li>
        
        
      </ul>
      
    </div>
  </div>
</nav>
</header>
";
?>