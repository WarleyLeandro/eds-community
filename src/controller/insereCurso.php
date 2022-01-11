<?php
        include "conexao.php"; 

        $tituloVideo = $_POST["tituloVideo"];
        $linkVideo = $_POST["linkVideo"];
        $tipoVideo = $_POST["tipoVideo"];
        
       
         $pdo = Database::connect();
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $sql = "INSERT INTO curso (tituloVideo, linkVideo, tipoVideo) values(?, ?, ?)";
         $query = $pdo->prepare($sql);
         $query->execute(array($tituloVideo, $linkVideo, $tipoVideo));
         
         Database::disconnect();
?>

    <script>
    window.alert('Curso cadastrado com sucesso!');
    window.location.href = "http://localhost/eds-community/src/pages/adm/cadastrar-cursos.php";
    </script>