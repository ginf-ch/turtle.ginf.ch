<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "04_random_walks.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [false, false, []],
    "05_schleifen" => [false, false, []],
    "06_rechnen" => [false, false, []],
    "07_benutzereingabe" => [false, false, []],
    "08_funktionen" => [true, false, [
        "aufgaben" => [true, false, [
            "01_kreuze.py" => [".py", false],
            "02_rad.py" => [".py", false],
            "03_waben.py" => [".py", false],
            "04_random_walks.py" => [".py", true]
        ]],
        "quadrate.py" => [".py", false],
        "vier_quadrate.py" => [".py", false],
        "zwei_quadrate.py" => [".py", false]
    ]],
];
include("$uebungenBasePath/hints.php");
?>

<div class="block">
    <div class="title is-size-6">Beschreibung</div>
    <div class="content">
        <ol>
            <?php
            /** @noinspection PhpIncludeInspection */
            include("$uebungenBasePath/0x_uebung_template.php");
            ?>
            <li>
                <p class="mb-2">
                    Erstellen Sie in der Python-Datei <code><?php echo $pythonFilename; ?></code> ein Python-Programm,
                    das beim <b>Drücken der Taste <code>g</code></b> die Turtle zu einer zufälligen Koordinate bewegt
                    und dabei eine farbige Linie zeichnet. Folgende Skizze zeigt ein Beispiel:
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Skizze</div>
                    <figure class="image" style="max-width: 512px;">
                        <img src="https://turtle.ginf.ch/uebungen/08/07_skizze.png" alt="Random Walks">
                    </figure>
                </div>
                <p>
                    Dabei sind folgende <b>Bedingungen</b> einzuhalten:
                </p>
                <ul class="mt-0">
                    <li>
                        <p>
                            Sie definieren eine <b>Funktion</b> <code>goto_randomly</code>, die im
                            <b>Funktionskörper</b> die Turtle zu einer zufälligen Koordinate bewegt.
                        </p>
                        <?php
                        $text = 'Verwenden Sie <code>goto</code>, um die Turtle zu einer xy-Koordinate zu bewegen.';
                        echoHints($text);
                        ?>
                    </li>
                    <li>
                        Die x- und y-Koordinate werden zufällig aus dem <b>Bereich -250 bis 250</b> gewählt.
                    </li>
                    <li>
                        Die <b>Linienfarbe</b> (rot, grün, blau, pink, gelb oder braun) wird <b>jedes Mal zufällig</b>
                        gewählt.
                    </li>
                    <li>
                        Die <b>Stiftbreite</b> ist 3.
                    </li>
                    <li>
                        Die Turtle bewegt sich mit der <b>Zeichengeschwindigkeit</b> 10.
                    </li>
                    <li>
                        <p>
                            Die Linie wird nur dann gezeichnet, wenn der <b>Benutzer die Taste <code>g</code> drückt</b>.
                        </p>
                        <?php
                        $text = 'Denken Sie daran die Funktion <code>listen</code> aufzurufen.';
                        echoHints($text);
                        ?>
                    </li>
                </ul>
                <?php
                /** @noinspection PhpIncludeInspection */
                include("$uebungenBasePath/pycharm_reformat_code.php");
                ?>
            </li>
            <li>
                <p>
                    Führen Sie das Programm anschliessend aus.
                </p>
                <?php
                /** @noinspection PhpIncludeInspection */
                include("$uebungenBasePath/pycharm_run_python_file.php");
                ?>
            </li>
        </ol>
    </div>
</div>