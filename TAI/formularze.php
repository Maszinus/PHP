<?php

$link = "";

if(isset($_FILES['obrazy'])){
    $nazwaZip = "paczka_" . time() . ".zip";
    $zip = new ZipArchive();

    if($zip->open($nazwaZip, ZipArchive::CREATE) === TRUE){
        $dozwolone = ['jpg','jpeg','png'];
        foreach($_FILES['obrazy']['tmp_name'] as $i => $tmp){
            $nazwa = $_FILES['obrazy']['name'][$i];
            $rozszerzenie = strtolower(pathinfo($nazwa, PATHINFO_EXTENSION));
            if(in_array($rozszerzenie, $dozwolone)){
                $zip->addFile($tmp, $nazwa);
            }
        }
        $zip->close();
        $link = $nazwaZip;

    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <style>
        body{
    margin:0;
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(135deg,#3E83C7,#32679b);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

center{
    background:white;
    padding:40px;
    border-radius:12px;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
    width:350px;
}

h1{
    margin:0;
    color:#2c3e50;
}

h2{
    margin-top:5px;
    margin-bottom:25px;
    color:#555;
    font-weight:normal;
}

input[type="file"]{
    margin:15px 0;
}

button{
    width:180px;
    height:40px;
    background-color:#3E83C7;
    color:white;
    margin:10px;
    font-size:16px;
    border:0;
    border-radius:6px;
    cursor:pointer;
    transition:0.2s;
}

button:hover{
    background-color:#32679b;
    transform:scale(1.05);
}

p{
    margin-top:20px;
    font-weight:bold;
}

a{
    display:inline-block;
    margin-top:5px;
    text-decoration:none;
    color:white;
    background:#27ae60;
    padding:10px 20px;
    border-radius:6px;
    transition:0.2s;
}

a:hover{
    background:#219150;
}
    </style>
</head>
<body>

<center>
    <h1>Pakowanie Plików</h1>
    <h2>Marcel Osoliński<br>Klasa IV Td</h2>

    <form method="POST" enctype="multipart/form-data">
    <input type="file" name="obrazy[]" multiple accept=".jpg,.jpeg,.png">
    <br><br>
    <button type="submit">Wyślij</button>
    </form>

<?php
if($link){
    echo "<p id='resp1'>Paczka gotowa:</p>";
    echo "<a href='$link' id='resp2'>Pobierz ZIP</a>";
}
?>
</center>
</body>
</html>