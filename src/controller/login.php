<?php
    session_start();
    include "conexao.php";
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $consulta = $pdo->prepare("SELECT * FROM usuario where nomeUser = ? and senha = ?");
    $consulta->bindParam(1, $_POST['nomeUser'], PDO::PARAM_STR);
    $consulta->bindParam(2, $_POST['senha'], PDO::PARAM_STR);

    $consulta->execute();
    $linha = $consulta->fetch(PDO::FETCH_ASSOC); 
    
    $id = $linha["idUsuario"];
    $isAdm = $linha['isAdm'];
    $nomeUser = $linha['nomeUser']; 
    $senha = $linha['senha']; 
    
    if($_POST['nomeUser'] == $nomeUser && $_POST['senha'] == $senha) {
        if($isAdm == 0) {
            $_SESSION['logado'] = true;
            $_SESSION['id'] = $id;
            $_SESSION['dadosUser'] = $linha;

            header('Location: ../pages/user/index.php');
        } else {
            $_SESSION['logado'] = true;
            $_SESSION['id'] = $id;
            $_SESSION['dadosUser'] = $linha;

            header('Location: ../pages/adm/index.php');
        }
    } else {
        echo "<script>
            window.alert('Usuário ou senha inválida!');
        </script>";
        header('Location: ../login/login.html');
    }
    Database::disconnect();
?>  
    