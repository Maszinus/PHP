<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Menu PHP</title>
    <style>
        button {
            width: 200px;
            height: 30px;
            background-color: #3E83C7;
            color: white;
            margin: 5px;
            font-size: large;
            border: 0;
            border-radius: 15px;
            cursor: pointer;
            display: block;
        }
        button:hover {
            width: 210px;
            height: 40px;
            background-color: #326ba3;
        }
        h1 { margin: 0; }
        h2 { margin-top: 0; margin-bottom: 20px; }

        .dropdown-menu {
            display: none;
            background: #f1f1f1;
            border-radius: 10px;
            padding: 5px;
            width: fit-content;
        }
        .dropdown-menu button {
            width: 180px;
            background-color: #5a96d1;
            font-size: medium;
        }
    </style>
</head>
<body>

<center>
    <h1>MENU</h1>
    <h2>Tworzenie Aplikacji Internetowych<br>Marcel Osoliński<br>Klasa IV Td</h2>

    <?php
    $menu = [
        "Rozdział I" => "rozdzial1.php",
        "Rozdział II" => "rozdzial2.php",
        "Rozdział III" => "rozdzial3.php",
        "Formularze" => "formularze.php",
    ];

    foreach ($menu as $label => $url) {
        echo "<button onclick=\"location.href='$url'\"><b>$label</b></button>";
    }
    ?>
    <button onclick="toggleMenu()"><b>Mieszkania ▾</b></button>
    <div id="mieszkania-list" class="dropdown-menu">
        <?php
        $mieszkania = [
            "MySQLi" => "mieszkanie/mysqli_mieszkania.php",
            "PDO" => "mieszkanie/pdo_mieszkania.php"
        ];

        foreach ($mieszkania as $typ => $sciezka) {
            echo "<button onclick=\"location.href='$sciezka'\">$typ</button>";
        }
        ?>
    </div>
</center>

<script>
    function toggleMenu() {
        const div = document.getElementById('mieszkania-list');
        div.style.display = (div.style.display === 'block') ? 'none' : 'block';
    }
</script>

</body>
</html>
