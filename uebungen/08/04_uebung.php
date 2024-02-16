<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "02_rad.py";

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
            "02_rad.py" => [".py", true]
        ]],
        "vier_quadrate.py" => [".py", false],
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
                    das ein <b>farbiges Rad</b> mit <b>zwei</b> Funktion<b>en</b> zeichnen kann. Die folgende Skizze
                    zeigt ein Beispiel der Figur:
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Skizze</div>
                    <figure class="image" style="max-width: 256px;">
                        <img src="https://turtle.ginf.ch/uebungen/08/04_skizze.png" alt="Farbiges Rad">
                    </figure>
                    <p>
                        Das Rad besteht aus <b>sechs gleichseitigen Dreiecken</b>. Die Farben sind zufällig gewählt.
                    </p>
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
                            Sie definieren eine <b>Funktion</b> <code>dreieck_200</code>, die im <b>Funktionskörper</b>
                            mit einer <code>for</code>-Schleife <b>ein</b> gleichseitiges Dreieck (Seitenlänge 200)
                            zeichnet.
                        </p>
                    </li>
                    <li>
                        <p>
                            Jedes Dreieck soll eine zufällige Füllfarbe (rot, grün oder blau) erhalten. Ergänzen Sie den
                            Funktionskörper <code>dreieck_200</code> mit den passenden Befehlen.
                        </p>
                        <?php
                        include("$uebungenBasePath/hints.php");
                        $text = '<p>Verwenden Sie für die Füllfarbe die folgenden Funktionen aus dem Turtle-Modul:</p><ul><li><code>fillcolor(FARBE)</code></li><li><code>begin_fill()</code></li><li><code>end_fill()</code></li></ul>';
                        echoHints($text);
                        ?>
                    </li>
                    <li>
                        In einer weiteren <b>Funktion</b> (<code>rad</code>) soll mithilfe einer <code>for</code>-Schleife
                        das Rad gezeichnet werden. Dazu wird die Funktion <code>dreieck_200</code> im Schleifenkörper
                        aufgerufen.
                    </li>
                    <li>
                        Die Turtle bewegt sich mit der <b>Zeichengeschwindigkeit</b> 10.
                    </li>
                    <li>
                        Rufen Sie die Funktion <code>rad</code> auf, um das Rad zu zeichnen.
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