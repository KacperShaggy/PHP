<?php
    $do_bazy = mysqli_connect("localhost", "root", "");
    if(mysqli_select_db($do_bazy, 'kino'))
    {
        echo "Utworzono baze danych";
        $zapyt2 = "USE kino";
        $wynik2 = mysqli_query($do_bazy, $zapyt2);
        
    }
    else {
        $zapyt1 = "CREATE DATABASE kino";
        $wynik1 = mysqli_query($do_bazy, $zapyt1);
        $zapyt2 = "USE kino";
        $wynik2 = mysqli_query($do_bazy, $zapyt2);
        echo "Utworzono baze danych";
    }

    $zap1 = "CREATE TABLE filmy (Id_filmu int auto_increment primary key, Tytul_filmu varchar(20), Rezyser varchar(30), Rok_prod int(4))";
    $wyn1 = mysqli_query($do_bazy, $zap1);
    $zap2 = "CREATE TABLE klient (Id_klienta int auto_increment primary key, Nazwisko_imie varchar(40))";
    $wyn2 = mysqli_query($do_bazy, $zap2);
    $zap3 = "INSERT INTO klient VALUES (Id_klienta int auto_increment primary key, Nazwisko_imie varchar(40))";


?>