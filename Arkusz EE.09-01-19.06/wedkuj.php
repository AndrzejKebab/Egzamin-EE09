<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <div id="lewy">
        <h2> Ryby drapieżne naszych wód</h2>
        <ul>
            <?php
            $db = new mysqli('localhost','root','','wedkowanie');
            $sql = "SELECT nazwa, wystepowanie FROM `ryby` WHERE styl_zycia = 1" ;
                $wynik = $db->query($sql);
                while($wiersz = $wynik->fetch_assoc()) {
                    $nazwa = $wiersz['nazwa'];
                    $wystepowanie = $wiersz['wystepowanie'];
                    echo "<li>$nazwa, wystepowanie: $wystepowanie</li>";
                }
                $db->close();
            ?>
        </ul>
    </div>
    <div id="prawy">
        <img src="ryba1.jpg" alt="sum"><br>
        <a href="kwerendy.txt">Pobierz kwerndy</a>
    </div>
    <footer>
        <p> Strone wykonał: 02262809375</p>
    </footer>
</body>
</html>