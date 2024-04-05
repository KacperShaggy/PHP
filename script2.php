<?php
    $do_bazy = mysqli_connect("localhost", "root", "");
    if(mysqli_select_db($do_bazy, 'audioteka'))
    {
        echo "Utworzono baze danych";
        $zapyt2 = "USE audioteka";
        $wynik2 = mysqli_query($do_bazy, $zapyt2);
        
    }
    else {
        $zapyt1 = "CREATE DATABASE audioteka";
        $wynik1 = mysqli_query($do_bazy, $zapyt1);
        $zapyt2 = "USE audioteka";
        $wynik2 = mysqli_query($do_bazy, $zapyt2);
        echo "Utworzono baze danych";
    }

    $zap1 = "CREATE TABLE utwory (Id int auto_increment primary key, Tytul varchar(30), Wykonawca varchar(30), Rok_wydania int(4))";
    $wyn1 = mysqli_query($do_bazy, $zap1);
    $zap2 = "CREATE TABLE sluchacze (Id_sluchacza int auto_increment primary key, Nazwisko_imie varchar(40), Imie varchar(20), login varchar(7), haslo varchar(5))";
    $wyn2 = mysqli_query($do_bazy, $zap2);
    $zap3 = "INSERT INTO utwory VALUES(null, 'Deszcz na betonie', 'Taco Hemingway', 2016)";
    $wyn3 = mysqli_query($do_bazy, $zap3);
    $zap4 = "INSERT INTO sluchacze VALUES(null, 'Kudla_Kacper', 'Kacper', '2TP_13', '13_KK')";
    $wyn4 = mysqli_query($do_bazy, $zap4);
?>