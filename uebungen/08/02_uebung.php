<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "01_kreuze.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [false, false, []],
    "05_schleifen" => [false, false, []],
    "06_rechnen" => [false, false, []],
    "07_benutzereingabe" => [false, false, []],
    "08_funktionen" => [true, false, [
        "aufgaben" => [true, false, [
            "01_kreuze.py" => [".py", true]
        ]],
        "zwei_quadrate.py" => [".py", false]
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
                    das <b>vier Kreuze</b> mit einer <b>Funktion</b> zeichnen kann. Die folgende Skizze zeigt die Figur:
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Skizze</div>
                    <figure class="image" style="max-width: 512px;">
                        <img src="https://turtle.ginf.ch/uebungen/08/02_skizze.png" alt="Vier Kreuze">
                    </figure>
                </div>
                <p>
                    Dabei sind folgende <b>Bedingungen</b> einzuhalten:
                </p>
                <ul class="mt-0">
                    <li>
                        Die Längenangaben aus der Skizze sind einzuhalten
                    </li>
                    <li>
                        <p>
                            Sie definieren eine <b>Funktion</b> <code>kreuz_40</code>, die im <b>Funktionskörper</b>
                            mit einer <code>for</code>-Schleife ein Kreuz zeichnet.
                        </p>
                        <?php
                        include("$uebungenBasePath/hints.php");
                        $text = 'Beginnen Sie die Zeichnung in der Mitte des Kreuzes.';
                        echoHints($text);
                        ?>
                    </li>
                    <li>
                        Die Turtle bewegt sich mit der <b>Zeichengeschwindigkeit</b> 10.
                    </li>
                    <li>
                        Mit einer <code>for</code>-Schleife sollen nun <b>vier Kreuze</b> nebeneinander gezeichnet
                        werden. Rufen Sie dazu die Funktion <code>kreuz_40</code> innerhalb des Schleifenkörpers auf.
                    </li>
                    <li>
                        Fügen Sie den Code für den <b>Abstand zwischen den Kreuzen</b> im Schleifenkörper hinzu.
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