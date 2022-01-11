<?php
        include "conexao.php"; 
        
        $tituloEvento = $_POST["tituloEvento"];
        $linkEvento = $_POST["linkEvento"];
        $dataHoraEvento = $_POST["dataHoraEvento"];
        $localEvento = $_POST["localEvento"];
        $descricao = $_POST["descricao"];
        
       
         $pdo = Database::connect();
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $sql = "INSERT INTO evento (tituloEvento, linkEvento, dataHoraEvento, localEvento, descricao) values(?, ?, ?, ?, ?)";
         $query = $pdo->prepare($sql);
         $query->execute(array($tituloEvento, $linkEvento, $dataHoraEvento, $localEvento, $descricao));       
         Database::disconnect();         
         
    

?>

    <script>
    window.alert('Evento cadastrado com sucesso!');
    window.location.href = "http://localhost/eds-community/src/pages/adm/cadastrar-eventos.php";
    </script>