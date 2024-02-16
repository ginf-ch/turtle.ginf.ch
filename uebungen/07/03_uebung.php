<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "07_benutzereingabe";
$pythonFilename = "farbiges_quadrat.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [false, false, []],
    "05_schleifen" => [false, false, []],
    "06_rechnen" => [false, false, []],
    "07_benutzereingabe" => [true, false, [
        "aufgaben" => [true, false, [
            "01_stern.py" => [".py", false]
        ]],
        "farbiges_quadrat.py" => [".py", true],
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
                <p>
                    Tippen oder kopieren Sie das Programm aus dem folgenden Listing in die Python-Datei
                    <code><?php echo $pythonFilename; ?></code> ab.
                </p>
                <div class="box mb-5">
                    <div class="title is-size-6">Listing</div>
                    <div class="content"><pre>
import turtle as t

farbe = t.textinput("Farbiges Quadrat", "Bitte die Farbe eingeben:")
t.pencolor(farbe)
for _ in range(4):
    t.forward(200)
    t.left(90)
t.done()
</pre>
                    </div>
                </div>
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