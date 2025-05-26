<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kalendarz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Dni, miesiące, lata...</h1>
    </header>

    <section class="napis">
        <p>
            <?php
                echo "Dzisiaj jest " . strftime("%A, %d-%m-%Y", strtotime("2023-05-25")) . ", imieniny: Grzegorza, Urbana, Magdaleny";
            ?>
        </p>
    </section>

    <main>
        <section class="lewy">
            <table>
                <tr>
                    <th>liczba dni</th>
                    <th>miesiąc</th>
                </tr>
                <tr><td rowspan="7">31</td><td>styczeń</td></tr>
                <tr><td>marzec</td></tr>
                <tr><td>maj</td></tr>
                <tr><td>lipiec</td></tr>
                <tr><td>sierpień</td></tr>
                <tr><td>październik</td></tr>
                <tr><td>grudzień</td></tr>
                <tr><td rowspan="4">30</td><td>kwiecień</td></tr>
                <tr><td>czerwiec</td></tr>
                <tr><td>wrzesień</td></tr>
                <tr><td>listopad</td></tr>
                <tr><td>28 lub 29</td><td>luty</td></tr>
            </table>
        </section>

        <section class="srodkowy">
            <h2>Sprawdź kto ma urodziny</h2>
            <form method="post" action="kalendarz.php">
                <input type="date" name="data" min="2024-01-01" max="2024-12-31" required>
                <button type="submit">wyślij</button>
            </form>

            <p>
                <?php
                    if (isset($_POST['data'])) {
                        $data = $_POST['data'];
                        $imieniny = [
                            "2024-01-24" => "Felicji, Franciszka, Rafała",
                            "2024-01-01" => "Marii, Mieczysława",
                        ];
                        if (array_key_exists($data, $imieniny)) {
                            echo "Dnia $data są imieniny: " . $imieniny[$data];
                        } else {
                            echo "Brak danych o imieninach dla daty: $data";
                        }
                    }
                ?>
            </p>
        </section>

        <section class="prawy">
            <a href="https://pl.wikipedia.org/wiki/Kalendarz_Majów" target="_blank">
                <img src="kalendarz.gif" alt="Kalendarz Majów">
            </a>
            <h2>Rodzaje kalendarzy</h2>
            <ol>
                <li>słoneczny
                    <ul>
                        <li>kalendarz Majów</li>
                        <li>juliański</li>
                        <li>gregoriański</li>
                    </ul>
                </li>
                <li>księżycowy
                    <ul>
                        <li>starogrecki</li>
                        <li>babiloński</li>
                    </ul>
                </li>
            </ol>
        </section>
    </main>

    <footer>
        <p>Stronę opracował(a): Maksim Kazakou</p>
    </footer>

</body>
</html>
