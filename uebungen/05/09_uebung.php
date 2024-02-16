<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "08_treppe.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [false, false, []],
    "05_schleifen" => [true, false, [
        "aufgaben" => [true, false, [
            "01_dreieck.py" => [".py", false],
            "02_sechseck.py" => [".py", false],
            "03_stacheliges_quadrat.py" => [".py", false],
            "04_stern.py" => [".py", false],
            "05_zackiger_stern.py" => [".py", false],
            "06_zehn_quadrate.py" => [".py", false],
            "07_linien.py" => [".py", false],
            "08_treppe.py" => [".py", true]
        ]],
        "quadrat_loop.py" => [".py", false]
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
                    das die <b>Treppe</b> aus der folgenden Skizze zeichnet:
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Skizze</div>
                    <figure class="image" style="max-width: 256px;">
                        <img src="https://turtle.ginf.ch/uebungen/05/09_skizze.png" alt="Treppe">
                    </figure>
                </div>
                <p>
                    Dabei sind folgende <b>Bedingungen</b> einzuhalten:
                </p>
                <ul class="mt-0">
                    <li>
                        Alle Stufen sind gleich gross. Die <b>Breite</b> und <b>Höhe</b> einer Stufe ist
                        <b>25</b>.
                    </li>
                    <li>
                        Jede Stufe hat eine <b>zufällige Farbe</b>: rot, grün oder blau.
                    </li>
                    <li>Der Variablenname muss <b>sinnvoll</b> gewählt sein (Clean Code).</li>
                    <li>
                        Der <b>Schleifenkopf</b> benutzt die <b><code>range</code>-Funktion</b>.
                    </li>
                    <li>
                        Alle Befehle <b>zum Zeichnen der Treppenstufen</b> müssen im <b>Schleifenkörper</b> notiert
                        werden.
                    </li>
                    <li>
                        Das <q>Fundament</q> der Treppe sind <b>zwei schwarze Linien</b> der Länge <b>250</b>.
                    </li>
                </ul>
                <?php
                /** @noinspection PhpIncludeInspection */
                include("$uebungenBasePath/tastatur_tabulator.php");
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