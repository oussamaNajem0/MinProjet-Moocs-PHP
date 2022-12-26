
    <title>Moocs</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,400;1,500&family=Roboto&display=swap" rel="stylesheet">

    

<?php
    $cours = "moocs";
    $list = scandir($cours);
    echo "
        <nav>
            <a href='index.php'><h2>GENIE<span> INFO</span></h2></a>
            <a href='login.php' class='btn'>Log out</a>
        </nav>
        <br>
        <div>
            <h4>Veuillez choisir un cours pour suivi</h4>
            <table>
                <tr>
                    <th>Cours</td>
                    <th>Lien</td>
                </tr>
            ";
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
?>