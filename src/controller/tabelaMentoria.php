<?php

           include "conexao.php";
           $pdo = Database::connect();
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $sql = "SELECT * FROM mentoria";
           echo "<div>";
           echo "<table class='table table-striped text-center'>"; 
           echo "<thead>
           <tr>
           
           <th scope='col'>Nome</th>
             <th scope='col'>Fone</th>
             <th scope='col'>Tempo(min)</th>
             <th scope='col'>Tema</th>
             <th scope='col'>Deletar</th>
           </tr>
         </thead>";     
           foreach ($pdo->query($sql) as $row) {
                    
                    $idMentoria = $row["idMentoria"];
                    echo "<tr>";
                    echo "<td>". $row["userName"] . "</td>";
                    echo "<td>". $row["fone"] . "</td>";
                    echo "<td>". $row["tempoMentoria"] . "</td>";
                    echo "<td>". $row["temaMentoria"] . "</td>";
                    echo "<td> <a href='deletaMentoria.php?idMentoria={$idMentoria}'><button class='btn btn-danger'type='button'> Deletar </button></a></td>";
                    echo "</tr>";
                    
           }
           echo "</table>";
           echo "</div>";

           

           Database::disconnect();

           

      ?>

