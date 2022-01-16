<?php 
    $db = new mysqli('localhost', 'root', '', 'ratownictwo');

    $czas = date("H:i:s");
    $adres = $_POST['adress'];
    $nrDys = $_POST['nrdyspozytora'];
    $nrZespolu = $_POST['nrzespolu'];
    $pilne = 0;

    $sql = "INSERT INTO `zgloszenia` (`ratownicy_id`, `dyspozytorzy_id`, `adres`, `pilne`, `czas_zgloszenia`) VALUES ($nrZespolu, $nrDys, \"$adres\", $pilne, \"$czas\");";
    echo "$sql";
    $db->query($sql);
    $db->close();
?>