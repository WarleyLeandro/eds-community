<?php

                session_start();
                include 'conexao.php';
                $id =  $_SESSION["id"];
                $isAdm = $_SESSION['dadosUser']['isAdm'];
                $nomeCompleto = $_POST["nomeCompleto"];
                $nomeUser = $_POST["nomeUser"];
                $email = $_POST["email"];
                $senha = $_POST["senha"];
                $descricao = $_POST["descricao"];
                
                $pdo = Database::connect();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "UPDATE usuario set nomeCompleto = ?, nomeUser = ?, email = ?, senha = ?, descricao = ? WHERE idUsuario = ?";
                $query = $pdo->prepare($sql);
                $query ->execute(array($nomeCompleto, $nomeUser, $email, $senha, $descricao, $id));
                
                if($isAdm == 0) {
                    echo "
                <script>
                window.alert('Dados atualizados!');
                window.location.href = 'http://localhost/eds-community/src/pages/user/index.php';
                </script>";
                } else {
                    echo "
                <script>
                window.alert('Dados atualizados!');
                window.location.href = 'http://localhost/eds-community/src/pages/adm/index.php';
                </script>";
                } 
                Database::disconnect();
?>