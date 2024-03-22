<?php 
    $do_bazy = mysqli_connect('localhost', 'root','','ksiegarnia');
/*     $in = mysqli_query($do_bazy, "INSERT INTO klient VALUES(NULL, 'Kudła', 'Kacper', '33-100', 'Tarnow', 'Bordowa', '69/420', 021212121212, 232332231, 'joool@ok.pl')");
    $wynik = mysqli_query($do_bazy, $in); */
    echo mysqli_error($do_bazy);

    $nazwisko = $_POST['nazwisko'];
    $imie = $_POST['imie'];
    $kod_pocztowy = $_POST['kd_pcz'];
    $miejscowosc = $_POST['msc'];
    $ulica = $_POST['ul'];
    $nr_domu = $_POST['nr_dom'];
    $pesel = $_POST['pesel'];
    $telefon = $_POST['tel'];
    $email = $_POST['mail'];

    $zapyt2 = mysqli_query($do_bazy, "INSERT INTO klient VALUES(NULL, '$nazwisko', '$imie', '$kod_pocztowy', '$miejscowosc', '$ulica', '$nr_domu', $pesel, $telefon, '$email')");
    $zapyt3 = mysqli_query($do_bazy, "DELETE FROM klient where id_klienta = 3 or id_klienta  = 4");
    $zapyt4 = mysqli_query($do_bazy, "SELECT * FROM klient");

    echo mysqli_affected_rows($do_bazy);
?>