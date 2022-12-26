
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Moocs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

    $cours = $_GET['cours'];
    $taille = strlen($cours) - 3;

    if(substr($cours, $taille)=='mp4') {
        echo "
            <nav>
                <h2>COURS<span> VIDEO</span></h2>
                <ul>
                    <li><a href='index.php'>Home</a></li>
                </ul>
                <a href='login.php' class='btn'>Log out</a>
            </nav>
            <div class='vd'>
                <video class='video' controls autoplay>
                    <source src='$cours' type='video/mp4'>
                </video>
            </div>
            ";
    }
    else {
        $list = scandir($cours);
        echo "
            <nav>
                <a href='index.php'><h2>GENIE<span> INFO</span></h2></a>
                <a href='login.php' class='btn'>Log out</a>
            </nav>
            <br>
            <div class>
                <h4>Veuillez choisir un cours pour suivi</h4>
                <table>
                    <tr>
                        <th>Cours</th>
                        <th>Liens</th>
                    </tr>";
                foreach($list as $li) {
                    echo "
                        <tr>
                            <td><img src='img/folder.jpg'/></td>
                            <td><a href=ana.php?cours=$cours/$li>$li</a></td>
                        </tr>
                    ";
                }
                echo "</table>";
            echo "</div>";
        }
?>
</body>
</html>
