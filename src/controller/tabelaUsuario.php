<?php

           include "conexao.php";
           $pdo = Database::connect();
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $sql = "SELECT * FROM usuario";
           echo "<div>";
           echo "<table class='table table-striped'>"; 
           echo "<thead>
           <tr>
           <th scope='col'>Nome Completo</th>
             <th scope='col'>Login</th>
             <th scope='col'>E-mail</th>
             <th scope='col'>Tipo</th>
             <th scope='col'>Tornar:</th>
           </tr>
         </thead>";     
           foreach ($pdo->query($sql) as $row) {
            //nomeCompleto, nomeUser, email, senha, isAdm
                    
                    $idUsuario = $row["idUsuario"];
                    echo "<tr>";
                    echo "<td>". $row["nomeCompleto"] . "</td>";
                    echo "<td>". $row["nomeUser"] . "</td>";
                    echo "<td>". $row["email"] . "</td>";
                    $isAdm = $row["isAdm"];

                    if($isAdm == 0) {
                      echo "<td> Membro </td>";
                      echo "<td> <a href='../../controller/isAdm.php?idUsuario={$idUsuario}&&isAdm=1'><button class='btn btn-primary'type='button'>&nbsp;&nbsp; ADM &nbsp;&nbsp;</button></a></td>";
                    } else {
                      echo "<td> ADM </td>";
                      echo "<td> <a href='../../controller/isAdm.php?idUsuario={$idUsuario}&&isAdm=0'><button class='btn btn-primary'type='button'> Membro </button></a></td>";
                    }


                    echo "</tr>";
                    
           }
           echo "</table>";
           echo "</div>";

           

           Database::disconnect();

           

      ?>

