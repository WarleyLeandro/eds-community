<?php
    include '../../controller/conexao.php';
    $id = $_GET["idMentoria"];  
    if ( !empty($_GET)) { 
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM mentoria WHERE idMentoria = ?";
        $query = $pdo->prepare($sql);
        $query ->execute(array($id));
        Database::disconnect();                
    }
?>
    <script>
    window.alert('Mentoria deletada!');
    window.location.href = "http://localhost/eds-community/src/pages/adm/cadastrar-mentorias.php";
    </script>