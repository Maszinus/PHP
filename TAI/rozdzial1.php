<?php
    echo '<h1>Rozdział I</h1>';
    
    echo "Przykładowy tekst na stronie";
    echo '<br>';

    define("NR_TEL","666258147");
    $nr_tel = "792297792";

    echo '<h3> Zmienne </h1>';
    echo NR_TEL;
    echo '<br>';
    echo $nr_tel;

    echo '<h3> Operatory </h1>';
    $a = 5;
    $b = 10;
    echo $a + $b; // Wynik: 15
    echo '<br>';
    echo $b % $a; // Wynik: 0
    echo '<br>';
    var_dump($a == $b); // bool(true)
    echo '<br>';
    var_dump($a === $b); // bool(false)
    echo '<br>';
    $uzytkownik = "admin";
    $tryb = "pilny";
    if ($uzytkownik == "admin" || $tryb == "pilny") 
    { 
    echo "Dostęp możliwy!";
    }
    else
    { 
    echo "Brak dostępu!";
    }

    echo '<h3> Komentarze i debugowanie </h3>';
    echo 'Komentarze są w kodzie';

    // $a2 "2ab23c";
    // $b2= 12;
    // $c = $a2 * $b2;
    // var_dump($c);

?>