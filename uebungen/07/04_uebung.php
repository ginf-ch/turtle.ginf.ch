<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "02_farbiger_stern.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [false, false, []],
    "05_schleifen" => [false, false, []],
    "06_rechnen" => [false, false, []],
    "07_benutzereingabe" => [true, false, [
        "aufgaben" => [true, false, [
            "01_stern.py" => [".py", false],
            "02_farbiger_stern.py" => [".py", true]
        ]],
        "farbiges_quadrat.py" => [".py", false],
        "quadrat.py" => [".py", false]
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
                    das einen <b>farbigen Stern</b> zeichnen kann. Die folgende Skizze zeigt ein Beispiel:
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Skizze</div>
                    <figure class="image" style="max-width: 256px;">
                        <img src="https://turtle.ginf.ch/uebungen/07/04_skizze.png" alt="Farbiger Stern">
                    </figure>
                    <p class="content">
                        Der rote Stern hat 300 Strahlen (nur ein Beispiel!)
                    </p>
                </div>
                <p>
                    Dabei sind folgende <b>Bedingungen</b> einzuhalten:
                </p>
                <ul class="mt-0">
                    <li>
                        Alle Strahlen sind gleich lang.
                    </li>
                    <li>
                        <p class="my-0 mb-1">
                            Die <b>Seitenlänge</b> \(a\) ist ein <b>Float</b> und muss durch den <b>Benutzer</b> gewählt
                            werden.
                        </p>
                        <ul class="mt-0">
                            <li>Fenstertitel: <code>Stern 1</code></li>
                            <li>Fensterinhalt: <code>Bitte geben Sie die Seitenlänge ein:</code></li>
                        </ul>
                    </li>
                    <li>
                        Alle Strahlen haben die gleiche Farbe.
                    </li>
                    <li>
                        <p class="my-0 mb-1">
                            Die <b>Farbe</b> ist ein <b>String</b> und muss durch den <b>Benutzer</b> gewählt
                            werden.
                        </p>
                        <ul class="mt-0">
                            <li>Fenstertitel: <code>Stern 2</code></li>
                            <li>Fensterinhalt: <code>Bitte geben Sie die Farbe ein:</code></li>
                        </ul>
                    </li>
                    <li>
                        Die <b>Anzahl der Strahlen</b> wird <b>zufällig</b> gewählt (Bereich: zwischen 300 und 360).
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