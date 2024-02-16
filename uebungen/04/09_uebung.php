<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "08_zufallsdreieck.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [true, false, [
        "aufgaben" => [true, false, [
            "01_dreieck.py" => [".py", false],
            "02_rechteck.py" => [".py", false],
            "03_stern.py" => [".py", false],
            "04_rhombus.py" => [".py", false],
            "05_zufallsquadrat.py" => [".py", false],
            "06_ringe.py" => [".py", false],
            "07_stempeln.py" => [".py", false],
            "08_zufallsdreieck.py" => [".py", true]
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
                    das ein <b>zufälliges Dreieck</b> gemäss der folgenden Skizze zeichnet:
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Skizze</div>
                    <figure class="image" style="max-width: 512px;">
                        <img src="https://turtle.ginf.ch/uebungen/04/09_skizze.png" alt="Zufälliges Dreieck">
                    </figure>
                </div>
                <p>
                    Dabei sind folgende <b>Bedingungen</b> einzuhalten:
                </p>
                <ul class="mt-0">
                    <li>
                        Das Turtle-Icon soll <b>nicht</b> sichtbar sein.
                    </li>
                    <li>
                        Die <b>Koordinaten</b> (x-Koordinate und y-Koordinate) werden <b>pro Ecke</b> zufällig aus dem
                        <b>Bereich -250 bis 250</b> gewählt. Der erste Punkt muss ebenfalls zufällig gewählt werden
                        und <b>nicht</b> der Ursprung sein (ausser bei zufälliger Wahl von x=0 und y=0).
                        <?php
                        include("$uebungenBasePath/hints.php");
                        $text = '
                            <div class="content">
                                Sie können die Turtle im Fenster wie in einem <b>Koordinatensystem</b> positionieren. Die Turtle
                                beginnt
                                immer im <b>Ursprung</b> (x=0 und y=0) des Koordinatensystems. Dieser befindet sich in der <b>Bildmitte</b>.
                            </div>
                            <figure class="image" style="max-width: 512px;">
                                <img src="https://turtle.ginf.ch/uebungen/04/09_koordinatensystem.png" alt="Koordinatensystem">
                            </figure>
                            <div class="content">
                                Mit <code>goto(x, y)</code> kann die Turtle direkt zur Koordinate (x, y) gehen. 
                                Wenn sich die Turtle im Zeichenmodus befindet, dann wird eine Linie gezeichnet. 
                                Befindet sich die Turtle im Wandermodus (<code>penup</code>), dann wird keine Linie gezeichnet.
                            </div>
                        ';
                        echoHints($text);
                        /** @noinspection PhpIncludeInspection */
                        include("$uebungenBasePath/clean_code.php");
                        $text = 'Denken Sie an das Leerzeichen bei mehreren Argumenten! Beispiel: <code>random.randrange(start,<span class="has-text-grey-light">&sqcup;</span>stop)</code>.';
                        echoCleanCode($text);
                        ?>
                    </li>
                    <li>
                        Die <b>Farben der Ecken</b> werden in <b>drei Variablen</b> gespeichert.
                    </li>
                    <li>
                        An <b>jeder Ecke</b> des Dreiecks wird ein <b>ausgefüllter, farbiger Punkt</b> gezeichnet. Alle
                        Punkte sind gleich gross. Der <b>Durchmesser</b> der Punkte wird in einer <b>Variablen</b>
                        gespeichert.
                        <?php
                        $text = '
                            <div class="content">
                                Mit <code>dot(20, "red")</code> zeichnet die Turtle einen ausgefüllten <b>roten Punkt</b>. 
                                Der Punkt hat den <b>Durchmesser 20</b>.
                            </div>
                        ';
                        echoHints($text);
                        ?>
                    </li>
                    <li>
                        Alle drei Ecken werden mit einer schwarzen Linie verbunden und bilden somit ein Dreieck.
                    </li>
                    <li>Die Variablenname<b>n</b> müssen <b>sinnvoll</b> gewählt sein (Clean Code).</li>
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