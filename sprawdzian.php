<?php
$dobazy = mysqli_connect('localhost', 'root', '', 'sprawdzian');


$dbname = "nazwa_bazy";
$dobazy->select_db($dbname);

$sql = "SELECT imie, nazwisko, data_zatrudnienia FROM pracownicy WHERE zawod='informatyk'";
$result = mysqli_query($dobazy, $sql);

$pracownicy = $result->num_rows;
echo "W naszej firmie zatrudnionych jest $pracownicy informatyków.<br>";

if ($result->num_rows > 0) {
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>Pracownik ".$row["imie"]." ".$row["nazwisko"]." został zatrudniony ".$row["data_zatrudnienia"].".</li>";
    }
    echo "</ul>";
} else {
    echo "Brak wyników.";
}
$id = 13;
$sql_update = "UPDATE pracownicy SET imie='Twoje', nazwisko='Nazwisko', data_zatrudnienia='29.04.2024', stanowisko='uczeń ZSME' WHERE id=13";
if (mysqli_query($dobazy, $sql_update) === TRUE) {
    echo "Dane pracownika zostały zaktualizowane.<br>";
} else {
    echo "Błąd podczas aktualizacji danych: ";
}

$sql_insert = "INSERT INTO placowki (nazwa, miasto, adres) VALUES ('ZSME', 'Tarnów', 'Szujskiego 13')";
if (mysqli_query($dobazy, $sql_insert) === TRUE) {
    echo "<br> Dodano nową placówkę.<br>";
} else {
    echo "<br>Nie dodano nowej placówki: ";
}
?>

