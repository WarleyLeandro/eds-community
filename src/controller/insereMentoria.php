<?php
        include "conexao.php"; 
        
        $userName = $_POST["userName"];
        $fone = $_POST["fone"];
        $tempoMentoria = $_POST["tempoMentoria"];
        $temaMentoria = $_POST["temaMentoria"];        
       
         $pdo = Database::connect();
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $sql = "INSERT INTO mentoria (userName, fone, tempoMentoria, temaMentoria) values(?, ?, ?, ?)";
         $query = $pdo->prepare($sql);
         $query->execute(array($userName, $fone, $tempoMentoria, $temaMentoria));       
         Database::disconnect();         
         

?>

    <script>
    window.alert('Seu pedido de mentoria está em análise, aguarde!');
    window.location.href = "http://localhost/eds-community/src/pages/user/mentorias.html";
    </script>