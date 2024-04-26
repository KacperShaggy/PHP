<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Koszyk w sklepie</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<p><b>Lista artykułów:</b></p>

<?php
if (isset($_POST['lista'])) {
    if (!empty($_SESSION['koszyk'])) {
        $koszyk = array_unique(array_merge(unserialize($_SESSION['koszyk']), $_POST['lista']));
        $_SESSION['koszyk'] = serialize($koszyk);
    } else {
        $_SESSION['koszyk'] = serialize($_POST['lista']);
    }

echo "<p>Wybrane produkty zostały umieszczone w koszyku</p>";
}
?>

<form action="http://localhost/sesje/lista.php" method="post">
<select name="lista[]" multiple="multiple" size="5">
<option value="Monitor">Monitor</option>
<option value="Drukarka">Drukarka</option>
<option value="Plikiwarka">Plikiwarka</option>
<option value="Myjka">Myjka</option>
<option value="Głośniki">Głośniki</option>
<option value="Kamera internetowa">Kamera internetowa</option>
<option value="Słuchawki">Słuchawski</option>
<option value="Stacja DVD">Stacja DVD</option>
<option value="Dysk twardy">Dysk twardy</option>
<select></p>
<input type="submit" value="Wyślij"></p>
</form>
<a href="koszyk.php">Przejdź do koszyka</a>
</body>
</html>

