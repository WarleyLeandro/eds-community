<?php

           include "conexao.php";
           $pdo = Database::connect();
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $sql = "SELECT * FROM curso";
           echo "<div>";
           echo "<table class='table table-striped'>"; 
           echo "<thead>
           <tr>
           
           <th scope='col'>Título</th>
             <th scope='col'>Link</th>
             <th scope='col'>Tipo</th>
             <th scope='col'>Deletar</th>
           </tr>
         </thead>";     
           foreach ($pdo->query($sql) as $row) {
                    
                    $idCurso = $row["idCurso"];
                    echo "<tr>";
                    echo "<td>". $row["tituloVideo"] . "</td>";
                    echo "<td>". $row["linkVideo"] . "</td>";
                    echo "<td>". $row["tipoVideo"] . "</td>";
                    echo "<td> <a href='deletaCurso.php?idCurso={$idCurso}'><button class='btn btn-danger'type='button'> Deletar </button></a></td>";
                    echo "</tr>";
                    
           }
           echo "</table>";
           echo "</div>";

           Database::disconnect();
?>