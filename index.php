<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>titre</title>
    </head>

    <body>
        <?php
            include 'cnx.php';
            $sql = $cnx->prepare("Select id, nom, prenom from controleur");
            $sql->execute(); 

            echo "<table>";
            foreach($sql->fetchAll (PDO::FETCH_ASSOC) as $ligne)
            {
                echo "<tr>";
                    echo "<td>".$ligne['id']."</td>";
                    echo "<td>".$ligne['nom']."</td>";
                    echo "<td>".$ligne['prenom']."</td>";
                    echo "<td><a href='page2.php?nomcontroleur=".$ligne['id']."'>Tous les clients</a></td>"; 
                echo "</tr>";
            }

            echo "</table>";

        ?>
    </body>
</html>