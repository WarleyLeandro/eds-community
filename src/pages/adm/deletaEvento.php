<?php
    include '../../controller/conexao.php';
    $id = $_GET["idEvento"];  
    if ( !empty($_GET)) { 
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM evento WHERE idEvento = ?";
        $query = $pdo->prepare($sql);
        $query ->execute(array($id));
        
        Database::disconnect();
    }
?>
    <script>
    window.alert('Evento deletado!');
    window.location.href = "http://localhost/eds-community/src/pages/adm/eventos.php";
    </script>