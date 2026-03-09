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

    echo '<h1>Rozdział II</h1>';

    $ifa = 1;
    $ifb = 2;
    $ifc = 3;

    echo '<h3> If </h3>';
    if($ifa < $ifb) {
        echo 'a jest mniejsze od b <br>';
    };

    if($ifb > $ifa) {
        echo 'b jest większe od a <br>';
    };

    if($ifa > $ifc) {
        echo 'a jest wieksze od b <br>';
    } else {
        echo 'a nie jest wieksze od b <br>';
    };

    if($ifa > $ifc) {
        echo 'a jest wieksze od b <br>';
    } elseif($ifb < $ifc){
        echo 'c jest wieksze od b <br>';
    };

    echo '<h3> Switch </h3>';

    $switcha = 72; // przypisujemy wartość zmiennej $a

        switch ($switcha) {
        case 1:
        echo "Wartość zmiennej a to 1";
        break;

        case 2:
        echo "Wartość zmiennej a to 2";
        break;

        case 3:
        echo "Wartość zmiennej a to 3";
        break;

        case 72:
        echo "Wartość zmiennej a to 72";
        break;

        default:
        echo "Żadna z powyższych";
        break;
        }
    
    echo '<h3> While </h3>';
    
    $whilea = 1;
    while($whilea <= 10) {
    echo "Pętla while: $whilea <br>";
    $whilea++;
    } 

    echo '<h3> Do While </h3>';

    $whileb = 1;
    do  {
    echo "Pętla do while: $whileb <br>";
    $whileb++;
    }  while($whileb <= 10);
    
    echo '<h3> For </h3>';

    for($i=0; $i <= 10; $i++)
    {
        echo "Pętla for: $i <br>";
    }

    echo '<h3> Operator ? </h3>';

    $opa = 5;
    echo ($opa>5) ? 'Większa od 5' : 'Mniejsza, bądź równa 5';

    echo "<h3> Podsumowanie Działu </h3>";

    echo "1. Tabliczka mnozenia: <br>";
    for($i = 1; $i <= 10; $i++){
        for($j = 1; $j <=10; $j++){    
            if($i*$j % 2 == 0){
                echo "<font color='blue'> $i * $j = ".$i*$j."<br> </font>";
            } else {
                 echo "<font color='green'> $i * $j = ".$i*$j."<br> </font>";
            }
        }
    };
    echo "<br><br>";
    echo "2. Switchcase: <br>";

    $switchrozdz2 = 2;

        switch ($switchrozdz2) {
        case 1: {
        echo "$switchrozdz2 do potęgi 10 = ".$switchrozdz2**10;
        break; }
        case 2: {
        echo "$switchrozdz2 do potęgi 10 = ".$switchrozdz2**10;
        break; }
        case 3: {
        echo "$switchrozdz2 do potęgi 10 = ".$switchrozdz2**10;
        break; }

        default:
        echo "Żadna z powyższych";
        break;
        }

?>