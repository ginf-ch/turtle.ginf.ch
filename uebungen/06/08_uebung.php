<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = " 06_schraube.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [false, false, []],
    "05_schleifen" => [false, false, []],
    "06_rechnen" => [true, false, [
        "aufgaben" => [false, false, [
            "01_dreiecke.py" => [".py", false],
            "02_verschachtelte_quadrate.py" => [".py", false],
            "03_drei_quadrate.py" => [".py", false],
            "04_farbiger_stern.py" => [".py", false],
            "05_zackige_sterne.py" => [".py", false],
            "06_schraube.py" => [".py", true]
        ]],
        "kreise.py" => [".py", false],
        "linien.py" => [".py", false],
        "rechteck.py" => [".py", false],
    ]],
];
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
                    das die <b>Schraube</b> aus der folgenden Skizze zeichnet:
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Skizze</div>
                    <figure class="image" style="max-width: 256px;">
                        <img src="https://turtle.ginf.ch/uebungen/06/08_skizze.png" alt="Schraube">
                    </figure>
                    <p>
                        Die erste Linie in der Mitte hat die Länge 1. Jede weitere Linie ist um 5 länger.
                    </p>
                </div>
                <p>
                    Dabei sind folgende <b>Bedingungen</b> einzuhalten:
                </p>
                <ul class="mt-0">
                    <li>
                        Beginnen Sie in der <b>Mitte</b> zu zeichnen.
                    </li>
                    <li>
                        Die Turtle verwendet die <b>Stiftbreite 3</b>.
                    </li>
                    <li>
                        Stellen Sie die Turtle auf die <b>maximale Zeichengeschwindigkeit</b>. Verwenden Sie den
                        passenden <b>String</b>!
                    </li>
                    <li>
                        Die erste Linie ist 1 lang und wird in einer Variablen gespeichert.
                    </li>
                    <li>
                        Jede weitere Linie ist <b>um 5 länger</b> als die <b>vorherige Linie</b>. Es gibt insgesamt <b>25
                            Linien</b>. Sie <b>müssen</b> im Schleifenkörper eine passende Addition und Zuweisung verwenden.
                    </li>
                    <li>
                        Nach jeder Linie dreht sich die Turtle um 40&#176; nach links.
                    </li>
                </ul>
                <?php
                /** @noinspection PhpIncludeInspection */
                include("$uebungenBasePath/clean_code.php");
                $text = '<p><b>Tipp</b>: Lassen Sie <b>PyCharm</b> alle <b>Leerzeichen und Leerzeilen</b> anpassen!</p>';
                echoCleanCode($text);
                ?>
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