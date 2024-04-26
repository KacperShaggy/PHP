<?php
session_start();
?>
<!DOCTYPE html>
<head>
<title>Koszyk</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<p>Twoja zawartość koszyka:</p>
<?php
if (isset($_SESSION['koszyk'])) {
    foreach(unserialize($_SESSION['koszyk']) as $produkt) {
        echo "<li>" . $produkt . "</li>";
    }
} else {
    echo "brak sesji";
}
?>
<p><a href="lista.php">Przejdź do listy produktów</a></p>
</body></html>
