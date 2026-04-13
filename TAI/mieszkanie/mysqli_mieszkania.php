<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "mieszkanie";

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Błąd połączenia: " . $conn->connect_error);
    }

    $conn->set_charset("utf8mb4");

    $sql = "SELECT * FROM adres WHERE metraz > 100 AND ulica LIKE 'K%' ORDER BY metraz DESC";
    $result = $conn->query($sql);

    echo "<!DOCTYPE html>
        <html lang='pl'>
        <head>
        <meta charset='UTF-8'>
        <title>Mieszkania - MySQLi</title>
        <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h2 { color: #333; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background: #3E83C7 ; color: white; font-weight: bold; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        tr:hover { background-color: #f1f1f1; }
        </style>
        </head>
        <body>";

    echo "<h2>Mieszkania (MySQLi) - metraż > 100m², ulica na K, sort. malejąco wg metrażu</h2>";

    if ($result) {
        echo "<table>";
        echo "<tr>";
        $fields = $result->fetch_fields();
        foreach ($fields as $field) {
            echo "<th>" . htmlspecialchars($field->name) . "</th>";
        } echo "</tr>";

        $result->data_seek(0);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>" . htmlspecialchars($value ?? '') . "</td>";
                }
                echo "</tr>";
            }
        } else {
            $colspan = count($fields);
            echo "<tr><td colspan='$colspan' style='text-align:center; color:#999;'>Brak wyników spełniających kryteria.</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Błąd zapytania: " . $conn->error . "</p>";
    }

    $conn->close();
?>

