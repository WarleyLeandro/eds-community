<?php
    include '../../controller/conexao.php';
    $id = $_GET["idCurso"];  
    if ( !empty($_GET)) { 
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM curso WHERE idCurso = ?";
        $query = $pdo->prepare($sql);
        $query ->execute(array($id));
        
        Database::disconnect();
    }
?>
    <script>
    window.alert('Curso deletado!');
    window.location.href = "http://localhost/eds-community/src/pages/adm/cadastrar-cursos.php";
    </script>