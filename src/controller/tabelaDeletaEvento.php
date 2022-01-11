<?php

           include "conexao.php";
           $pdo = Database::connect();
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $sql = "SELECT * FROM evento";
           echo "<div>";
           echo "<table class='table table-striped'>"; 
           echo "<thead>
           <tr>
           
           <th scope='col'>Título</th>
             <th scope='col'>Data e Hora</th>
             <th scope='col'>Local</th>
             <th scope='col'>Descrição</th>
             <th scope='col'>Deletar</th>
           </tr>
         </thead>";     
           foreach ($pdo->query($sql) as $row) {
                    
                    $idEvento = $row["idEvento"];
                    echo "<tr>";
                    echo "<td>". $row["tituloEvento"] . "</td>";
                    echo "<td>". $row["dataHoraEvento"] . "</td>";
                    echo "<td>". $row["localEvento"] . "</td>";
                    echo "<td>". $row["descricao"] . "</td>";
                    echo "<td> <a href='deletaEvento.php?idEvento={$idEvento}'><button class='btn btn-danger'type='button'> Deletar </button></a></td>";
                    echo "</tr>";
                    
           }
           echo "</table>";
           echo "</div>";

           

           Database::disconnect();

           

      ?>

