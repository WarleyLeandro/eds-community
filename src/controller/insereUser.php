<?php
        include "conexao.php"; 
        
        $nomeCompleto = $_POST["nomeCompleto"];
        $nomeUser = $_POST["nomeUser"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $isAdm = 0;
       
         $pdo = Database::connect();
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $sql = "INSERT INTO usuario (nomeCompleto, nomeUser, email, senha, isAdm) values(?, ?, ?, ?, ?)";
         $query = $pdo->prepare($sql);
         $query->execute(array($nomeCompleto,$nomeUser,$email,$senha, $isAdm));       
         Database::disconnect();         
         
    

?>
<script>
    window.alert('Efetue login para aproveitar o melhor da comunidade!');
    window.location.href = "http://localhost/eds-community/src/login/login.html";
    </script>