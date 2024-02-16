<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "03_bunte_schraube.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [false, false, []],
    "05_schleifen" => [false, false, []],
    "06_rechnen" => [false, false, []],
    "07_benutzereingabe" => [true, false, [
        "aufgaben" => [true, false, [
            "01_stern.py" => [".py", false],
            "02_farbiger_stern.py" => [".py", false],
            "03_bunte_schraube.py" => [".py", true]
        ]],
        "farbiges_quadrat.py" => [".py", false],
        "quadrat.py" => [".py", false],
        "zufallsquadrat.py" => [".py", false]
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
                    das eine <b>bunte Schraube</b> zeichnen kann. Die folgende Skizze zeigt ein Beispiel:
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Skizze</div>
                    <figure class="image" style="max-width: 256px;">
                        <img src="https://turtle.ginf.ch/uebungen/07/06_skizze.png" alt="Bunte Schraube">
                    </figure>
                    <p class="content">
                        Die Schraube besteht aus 60 Teilstrecken.
                    </p>
                </div>
                <p>
                    Dabei sind folgende <b>Bedingungen</b> einzuhalten:
                </p>
                <ul class="mt-0">
                    <li>
                        <p class="my-0 mb-1">
                            Die <b>Anzahl der Strecken</b> ist ein <b>Integer</b> und muss durch den <b>Benutzer</b>
                            gewählt werden.
                        </p>
                        <ul class="mt-0">
                            <li>Fenstertitel: <code>Bunte Schraube 1</code></li>
                            <li>Fensterinhalt: <code>Bitte Anzahl Strecken eingeben:</code></li>
                        </ul>
                    </li>
                    <li>
                        Jede Strecke wird <b>dreimal</b> gezeichnet. Beim ersten Mal wird die Strecke in <b>blau</b>
                        gezeichnet, dann in <b>rot</b> und zum Schluss in <b>grün</b>.
                    </li>
                    <li>
                        Nach jeder <b>farbigen Strecke</b> dreht sich die Turtle um <b>30&#176;</b> nach links.
                    </li>
                    <li>
                        Die <b>erste Streckenlänge</b> ist 1.
                    </li>
                    <li>
                        Nachdem eine Strecke in allen drei Farben gezeichnet wurde, <b>erhöht</b> sich die
                        Streckenlänge.
                    </li>
                    <li>
                        <p class="my-0 mb-1">
                            Die <b>Schrittgrösse</b> (das heisst um wie viel sich die Strecke verlängert) ist ein
                            <b>Float</b> und muss durch den <b>Benutzer</b> gewählt werden.
                        </p>
                        <ul class="mt-0">
                            <li>Fenstertitel: <code>Bunte Schraube 2</code></li>
                            <li>Fensterinhalt: <code>Bitte Schrittgrösse eingeben:</code></li>
                        </ul>
                    </li>
                    <li>
                        Lassen Sie das <b>Icon verschwinden</b> und stellen Sie die <b>Zeichengeschwindigkeit</b> auf
                        das <b>Maximum</b> (<b>String</b> verwenden).
                    </li>
                </ul>
                <?php
                /** @noinspection PhpIncludeInspection */
                include("$uebungenBasePath/pycharm_reformat_code.php");
                ?>
            </li>
            <li>
                <p>
                    Führen Sie das Programm anschliessend aus. Wählen Sie eine <b>passende Benutzereingabe</b>.
                </p>
                <?php
                /** @noinspection PhpIncludeInspection */
                include("$uebungenBasePath/pycharm_run_python_file.php");
                ?>
            </li>
        </ol>
    </div>
</div>