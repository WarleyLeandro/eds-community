<?php

           include "conexao.php";
           $pdo = Database::connect();
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $sql = "SELECT * FROM evento";
    
           
           
              
           foreach ($pdo->query($sql) as $row) {

                    $linkEvento = $row["linkEvento"];

                    echo "<div class='row text-center'>";
                    echo "<div class='col-sm-2'> </div>";
                        echo "<div class='col-sm-8'>";
                            echo "<div class='card'>";
                                echo "<br>";
                                echo "<h3>Título: ". $row["tituloEvento"] ."</h3>";
                                echo "<span> Data e Hora: ". $row["dataHoraEvento"] ."</span>";
                                echo "<p> Local: ". $row["localEvento"] ."</p>";
                                echo "<p> Descrição: " .$row["descricao"]. "</p>";
                                echo "<br>";
                                echo "<a href='{$linkEvento}'><button class='btn btn-primary'type='button'> Cadastrar </button></a>";
                                echo "<br>";
                            echo "</div>";
                        echo "</div>";
                        echo "<div class='col-sm-2'> </div>";
                    echo "</div>";
                    echo "<br>";
                    echo "<br>";
                    
           }
           

           Database::disconnect();
?>