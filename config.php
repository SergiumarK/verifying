<?php
    // stabilim conexiunea
    $conn = new mysqli("localhost", "root", "", "appearance");

    // verificam daca conexiunea a fost stabilita cu succes sau nu
    // daca exista o eroare de conexiunea noi oprim programul prin functia "die"
    if ($conn -> connect_error) {
        die("Connection failed:" . $conn -> connet_error);
    }


    // comanda de incepere a sesiunii
    session_start();