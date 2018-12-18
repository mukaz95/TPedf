<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>titre</title>
    </head>

    <body>
        <?php
            include 'cnx.php';
            $sql = $cnx->prepare("Select identifiant, nom, prenom from client where idcontroleur=".$_GET['nomcontroleur']);
            $sql->execute(); 

            echo "<table>";
            foreach($sql->fetchAll (PDO::FETCH_ASSOC) as $ligne)
            {
                echo "<tr>";
                    echo "<td>".$ligne['nom']."</td>";
                    echo "<td>".$ligne['prenom']."</td>";
                    echo "<td><a href='index.php?accueil=".$ligne['prenom']."'>home</a></td>"; 
                echo "</tr>";
            }

            echo "</table>";

        ?>
    </body>
</html>