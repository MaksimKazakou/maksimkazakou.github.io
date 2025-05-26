<?php
echo '<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Imieniny</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<section class="srodkowy">
    <h2>Sprawdź kto ma urodziny</h2>';

if (isset($_POST['data'])) {
    $data = $_POST['data'];
    $imieniny = [
        "2024-01-24" => "Felicji, Franciszka, Rafała",
        "2024-01-01" => "Marii, Mieczysława",
    ];
    if (array_key_exists($data, $imieniny)) {
        echo "<p>Dnia $data są imieniny: " . $imieniny[$data] . "</p>";
    } else {
        echo "<p>Brak danych o imieninach dla daty: $data</p>";
    }
} else {
    echo "<p>Nie przesłano daty.</p>";
}

echo '<p><a href="kalendarz.html">Powrót</a></p>
</section>
</body>
</html>';
?>
