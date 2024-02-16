<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "06_roboter.py";

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
            "04_random_walks.py" => [".py", false],
            "05_stempeln.py" => [".py", false],
            "06_roboter.py" => [".py", true]
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
                    das es dem Benutzer ermöglicht mit den <b>Pfeiltasten</b> die <b>Turtle</b> zu steuern. Gehen Sie
                    wie folgt vor:
                <ol class="mt-0" type="i">
                    <li>
                        <p>
                            Erstellen Sie für jede Pfeiltaste eine Funktion:
                        </p>
                        <ul>
                            <li>
                                Pfeiltaste <code>Up</code> bewegt die Turtle immer 100 Schritte <b>in</b> Blickrichtung.
                            </li>
                            <li>
                                Pfeiltaste <code>Down</code> bewegt die Turtle immer 100 Schritte <b>entgegen</b> der
                                Blickrichtung.
                            </li>
                            <li>
                                Pfeiltaste <code>Left</code> dreht die Turtle immer um 10&#176; nach <b>links</b>
                                drehen.
                            </li>
                            <li>
                                Pfeiltaste <code>Right</code> dreht die Turtle immer um 10&#176; nach <b>rechts</b>
                                drehen.
                            </li>
                        </ul>
                        <?php
                        /** @noinspection PhpIncludeInspection */
                        include("$uebungenBasePath/clean_code.php");
                        $text = 'Wählen Sie <b>sinnvolle</b> Funktionsnamen und denken Sie an die <b>Leerzeilen</b> bei den Funktionsdefinitionen.';
                        echoCleanCode($text);
                        ?>
                    </li>
                    <li>
                        Verwenden Sie dann <code>onkeypress</code> und <code>listen</code>.
                    </li>
                </ol>
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