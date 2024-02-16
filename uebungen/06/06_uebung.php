<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "04_farbiger_stern.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [false, false, []],
    "05_schleifen" => [false, false, []],
    "06_rechnen" => [true, false, [
        "aufgaben" => [false, false, [
            "01_dreiecke.py" => [".py", false],
            "02_verschachtelte_quadrate.py" => [".py", false],
            "03_drei_quadrate.py" => [".py", false],
            "04_farbiger_stern.py" => [".py", true]
        ]],
        "kreise.py" => [".py", false],
        "rechteck.py" => [".py", false]
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
                    das den <b>farbigen Stern</b> aus der folgenden Skizze zeichnet:
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Skizze</div>
                    <figure class="image" style="max-width: 512px;">
                        <img src="https://turtle.ginf.ch/uebungen/06/06_skizze.png" alt="Verschachtelte Quadrate">
                    </figure>
                </div>
                <p>
                    Dabei sind folgende <b>Bedingungen</b> einzuhalten:
                </p>
                <ul class="mt-0">
                    <li>
                        Die <b>Seitenlänge</b> \(a\) ist ein <b>Integer</b> und muss zwischen <b>50</b> und
                        <b>200</b> liegen.
                    </li>
                    <li>
                        Die Seitenlänge \(a\) wird zufällig gewählt.
                    </li>
                    <li>
                        <p>
                            Ein Strahl der Seitenlänge \(a\) besteht aus drei <b>gleich grossen Teilstrecken</b>.
                        </p>
                    </li>
                    <li>
                        <p>
                            Die erste Teilstrecke ist immer <b>rot</b>, die zweite Teilstrecke ist immer <b>grün</b> und
                            die dritte
                            Teilstrecke ist immer <b>blau</b>.
                        </p>
                    </li>
                    <li>
                        Die Anzahl der Strahlen ist ein <b>Integer</b> und muss zwischen <b>10</b> und
                        <b>100</b> liegen.
                    </li>
                    <li>
                        Die <b>Anzahl der Strahlen</b> wird <b>zufällig</b> gewählt.
                        <?php
                        include("$uebungenBasePath/hints.php");
                        $text = '<p>Wie <b>oft</b> wird der Schleifenkörper ausgeführt? Dies hängt von der <b>Anzahl der Strahlen</b> ab. 
Das Argument des <code>range</code>-Funktionsaufrufs muss deshalb eine <b>Variable</b> sein. Der Drehwinkel muss ebenfalls berechnet werden 
und hängt auch von der Anzahl der Strahlen ab. Sie finden dazu auch ein <b>Beispiel im Skript</b>.</p>';
                        echoHints($text);
                        ?>
                    </li>
                    <li>
                        Stellen Sie die Turtle auf die maximale Zeichengeschwindigkeit. Verwenden Sie den passenden <b>String</b>!
                    </li>
                </ul>
                <?php
                /** @noinspection PhpIncludeInspection */
                include("$uebungenBasePath/clean_code.php");
                $text = 'Denken Sie an die beiden Leerzeichen bei einem Operator (z.B. <code><span class="has-text-grey-light">&sqcup;</span>*<span class="has-text-grey-light">&sqcup;</span></code> und <code><span class="has-text-grey-light">&sqcup;</span>+<span class="has-text-grey-light">&sqcup;</span></code>).';
                echoCleanCode($text);
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