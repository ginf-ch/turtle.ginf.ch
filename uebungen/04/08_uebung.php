<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "07_stempeln.py";

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
            "07_stempeln.py" => [".py", true]
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
                    das ein <b>Quadrat mit vier Stempeln</b> aus der folgenden Skizze zeichnet:
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Skizze</div>
                    <figure class="image" style="max-width: 150px;">
                        <img src="https://turtle.ginf.ch/uebungen/04/08_skizze.png" alt="Vier Ringe">
                    </figure>
                </div>
                <p>
                    Dabei sind folgende <b>Bedingungen</b> einzuhalten:
                </p>
                <ul class="mt-0">
                    <li>
                        Die <b>Seitenlänge</b> wird in einer <b>Variablen</b> gespeichert und beträgt 100.
                    </li>
                    <li>
                        In <b>jeder Ecke</b> macht die Turtle einen <b>Stempel</b>. Der Stempel ist <b>pro Ecke</b> ein
                        <b>zufälliges</b> Icon.
                    </li>
                    <?php
                    include("$uebungenBasePath/hints.php");
                    $text = '
                        <ul class="my-0">
                           <li>
                                <p>
                                    Mit <code>turtle.stamp()</code> erzeugt die Turtle aus dem aktuellen Icon einen
                                    Stempel.
                                </p>
                           </li>
                           <li>
                                <p>
                                    Mit <code>turtle.shape(icon)</code> wird das Icon der Turtle und damit auch der
                                    Stempel angepasst.
                                </p>
                           </li>
                        </ul>
                        ';
                    echoHints($text);
                    ?>
                    <li>
                        Das <b>Icon</b> wird mit dem <code>random</code>-Modul und der <code>choice</code>-Funktion aus
                        <code>"turtle"</code>, <code>"square"</code> oder <code>"triangle"</code> ausgewählt.
                        <?php
                        $text = '
                        <ul class="my-0">
                           <li>
                                <p>
                                    Es wird wie bei der Farbauswahl in der vorherigen Übung vorgegangen.
                                </p>
                           </li>
                           <li>
                                <p>
                                    Verwenden Sie <code>choice</code> mit einer passenden List <code>["...", "...", "..."]</code>.
                                </p>
                           </li>
                        </ul>
                        ';
                        echoHints($text);
                        /** @noinspection PhpIncludeInspection */
                        include("$uebungenBasePath/tastatur_eckige_klammern.php");
                        ?>
                    </li>
                    <li>
                        Es gibt <b>exakt eine Variable</b> für das <b>Icon</b>. Überschreiben Sie den Wert der Variablen
                        nach jeder Ecke mit einer erneuten Zuweisung.
                    </li>
                    <li>
                        Die Turtle (das Icon) ist <b>am Ende</b> des Programms versteckt.
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