<?php
    include 'conexao.php';
    $idUsuario = $_GET["idUsuario"];  
    $isAdm = $_GET["isAdm"];
    if ( !empty($_GET)) { 
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE usuario set isAdm = ? WHERE idUsuario = ?";
        $query = $pdo->prepare($sql);
        $query ->execute(array($isAdm, $idUsuario));             
    }
    Database::disconnect();
?>
    <script>
    window.alert('Prioridades alteradas!');
    window.location.href = "http://localhost/eds-community/src/pages/adm/listagem-user.php";
    </script>