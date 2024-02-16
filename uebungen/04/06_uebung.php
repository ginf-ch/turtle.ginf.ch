<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "05_zufallsquadrat.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [true, false, [
        "aufgaben" => [true, false, [
            "01_dreieck.py" => [".py", false],
            "02_rechteck.py" => [".py", false],
            "03_stern.py" => [".py", false],
            "04_rhombus.py" => [".py", false],
            "05_zufallsquadrat.py" => [".py", true]
        ]],
        "quadrat_var.py" => [".py", false]
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
                    das ein <b>Quadrat</b> mit <b>zufälliger Seitenlänge</b> zeichnet. Dabei sind folgende
                    <b>Bedingungen</b> einzuhalten:
                </p>
                <ul class="mt-0">
                    <li>
                        Die <b>Seitenlänge</b> muss zwischen <b>10</b> und <b>100</b> liegen.
                    </li>
                    <li>
                        Die Seitenlänge wird mit der <b>Funktion</b> <code>randrange</code> aus dem Modul
                        <code>random</code> erzeugt.
                        <?php
                        include("$uebungenBasePath/hints.php");
                        $text = '<p>Sie müssen das <code>random</code>-Modul importieren und die Zufallszahl mit einer Zuweisung abspeichern. 
                        Passen Sie dafür folgendes Beispiel an:</p>
                        <pre><code>import random

zufallszahl = random.randrange(1, 7)</code></pre>';
                        echoHints($text);

                        /** @noinspection PhpIncludeInspection */
                        include("$uebungenBasePath/clean_code.php");
                        $text = 'Denken Sie an das Leerzeichen bei mehreren Argumenten! Beispiel: <code>random.randrange(start,<span class="has-text-grey-light">&sqcup;</span>stop)</code>.';
                        echoCleanCode($text);
                        ?>
                    </li>
                    <li>Der <b>Variablenname</b> muss <b>sinnvoll</b> gewählt sein (Clean Code).</li>
                </ul>
            </li>
            <li>
                <p>
                    Führen Sie das Programm anschliessend <b>mehrmals</b> aus.
                </p>
                <?php
                /** @noinspection PhpIncludeInspection */
                include("$uebungenBasePath/pycharm_run_python_file.php");
                ?>
            </li>
        </ol>
    </div>
</div>