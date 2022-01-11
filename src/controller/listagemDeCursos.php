<?php

           include "conexao.php";
           $pdo = Database::connect();
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $sql = "SELECT * FROM curso";

           foreach ($pdo->query($sql) as $row) {

                    echo "<div class='col-sm'>";
                    echo "</div>";
                    echo "<div class='col-sm-3'>";
                    
                    echo "<div class='embed-responsive embed-responsive-16by9'>";
                    echo "<iframe class='embed-responsive-item' src=". $row["linkVideo"]. " allowfullscreen></iframe>";
                    echo "</div>";
                    echo "<h6> Título: ". $row["tituloVideo"] ." -  ". $row["tipoVideo"] ."</h6>";
                    echo "</div>";
                    echo "<div class='col-sm'>";
                    echo "</div>";
                               
           }
           

           Database::disconnect();
?>