<?php
    $dsn = "mysql:host=localhost;dbname=mieszkanie;charset=utf8mb4";
    $user = "root";
    $pass = "";

    try {
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM adres WHERE metraz > 100 AND ulica LIKE 'K%' ORDER BY metraz DESC";
        $stmt = $pdo->query($sql);

        echo "<!DOCTYPE html>
            <html lang='pl'>
            <head>
            <meta charset='UTF-8'>
            <title>Mieszkania - PDO</title>
            <style>
            body { font-family: Arial, sans-serif; margin: 20px; }
            h2 { color: #333; }
            table { border-collapse: collapse; width: 100%; margin-top: 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
            th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
            th { background: #3E83C7; color: white; font-weight: bold; }
            tr:nth-child(even) { background-color: #f9f9f9; }
            tr:hover { background-color: #f1f1f1; }
            </style>
            </head>
            <body>";

        echo "<h2>Mieszkania (PDO) - metraż > 100m², ulica na K, sort. malejąco wg metrażu</h2>";

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $colStmt = $pdo->query("DESCRIBE adres");
        $headers = $colStmt->fetchAll(PDO::FETCH_COLUMN);

        echo "<table>";
        echo "<thead><tr>";
        foreach ($headers as $col) {
            echo "<th>" . htmlspecialchars($col) . "</th>";
        }
        echo "</tr></thead>";
        echo "<tbody>";

        if (!empty($rows)) {
            foreach ($rows as $row) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>" . htmlspecialchars($value ?? '') . "</td>";
                }
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='" . count($headers) . "' style='text-align:center; color:#999;'>Brak wyników spełniających kryteria.</td></tr>";
        }
        echo "</tbody></table>";


    } catch (PDOException $e) {
        echo "<p>Błąd bazy danych: " . htmlspecialchars($e->getMessage()) . "</p>";
    }
?>

