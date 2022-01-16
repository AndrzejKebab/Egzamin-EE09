<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>

<div id="banner1">
    <h2>MÓJ ORGANIZER</h2>
</div>
<div id="banner2">
    <form action="
        <?php
            $db = new mysqli('localhost', 'root', '', 'egzamin6');
    
            if (isset($_POST['wpis'])) {
            
                $wpis = $_POST['wpis'];
                $sql = "UPDATE `zadania` SET `wpis` = '$wpis' WHERE `dataZadania` = \"2020-08-27\"";
                $db->query($sql);
                $db->close();
            }
        ?>
    " method="post">
        <label for="wpis">Wpis wydarzenia:</label>
        <input type="text" name="wpis" id="wpis">
        <button type="submit">ZAPISZ</button>
    </form>

</div>
<div id="banner3"> <img src="logo2.png" alt="Mój organizer"></div>

<main>
    <?php
                $db = new mysqli('localhost', 'root', '', 'egzamin6');
        
                $sql = "SELECT dataZadania, miesiac, wpis FROM `zadania` WHERE miesiac = 'sierpien'";
                $result = $db->query($sql);
    
                while ($row = $result->fetch_assoc()) {
                    $data = $row['dataZadania'];
                    $wpis = $row['wpis'];
                    $miesiac = $row['miesiac'];
                
                    echo '<div>';
                    echo "<h6>$data , $miesiac</h6>";
                    echo "<p>$wpis</p>";
                    echo '</div>';
                }
            
                mysqli_close($db)
    ?>
</main>

<footer>
    <?php
        $db = new mysqli('localhost', 'root', '', 'egzamin6');

        $sql = "SELECT miesiac, rok FROM `zadania` WHERE dataZadania = '2020-08-01'";
        $result = $db->query($sql);

        $row = $result->fetch_assoc();

        $miesiac = $row['miesiac'];
        $rok = $row['rok'];

        echo "<h1> miesiąc: $miesiac, rok: $rok </h1>";

        $db->close();
    ?>
    <p>Strone wykonał: PESEL</p>
</footer>
</body>
</html>

