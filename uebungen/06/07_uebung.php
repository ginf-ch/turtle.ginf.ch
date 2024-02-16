<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "05_zackige_sterne.py";

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
            "04_farbiger_stern.py" => [".py", false],
            "05_zackige_sterne.py" => [".py", true]
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
                    das die <b>zackigen Sterne</b> aus der folgenden Skizze zeichnet (die Skizze zeigt zwei Beispiele,
                    das Programm wird so gestaltet sein, dass beide Bilder möglich sind):
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Skizze</div>
                    <div class="columns">
                        <div class="column is-half">
                            <figure class="image" style="max-width: 256px;">
                                <img src="https://turtle.ginf.ch/uebungen/06/07_skizze_1.png" alt="5 zackige Sterne">
                            </figure>
                        </div>
                        <div class="column is-half">
                            <figure class="image" style="max-width: 256px;">
                                <img src="https://turtle.ginf.ch/uebungen/06/07_skizze_2.png" alt="40 zackige Sterne">
                            </figure>
                        </div>
                    </div>
                    <p>
                        Das erste Bild zeigt <b>5 zackige Sterne</b>, das zweite Bild zeigt <b>40 zackige Sterne</b>.
                    </p>
                </div>
                <p>
                    Dabei sind folgende <b>Bedingungen</b> einzuhalten:
                </p>
                <ul class="mt-0">
                    <li>
                        <p>
                            Es wird ein <b>zackiger Stern</b> wiederholt gezeichnet. Nach jedem zackigen Stern
                            <b>dreht</b> sich die Turtle nach <b>links</b>. Sie können folgenden Code verwenden,
                            um <b>einen zackigen Stern</b> zu zeichnen:
                        </p>
                        <pre><code>for _ in range(5):
    t.fd(a)
    t.rt(144)
</code></pre>
                    </li>
                    <li>
                        Die Seitenlänge des zackigen Sterns ist ein Integer, wird zufällig gewählt und muss zwischen 50
                        und 200 liegen.
                    </li>
                    <li>
                        Alle zackigen Sterne besitzen die <b>gleiche Farbe</b>. Entweder blau, cornflowerblue,
                        sandybrown oder seagreen.
                    </li>
                    <li>
                        Die Farbe wird zufällig ausgewählt.
                    </li>
                    <li>
                        <p>
                            Die Anzahl der zackigen Sterne ist ein Integer und wird zufällig gewählt. Die Anzahl muss
                            zwischen 10 und 100 liegen.
                        </p>
                    </li>
                    <li>
                        <p>
                            Das Programm muss eine <b>verschachtelte for-Schleife</b> verwenden - eine for-Schleife in
                            einer for-Schleife. Die <b>äussere Schleife</b> bestimmt wie viele zackige Sterne gezeichnet
                            werden. Die <b>innere Schleife</b> zeichnet einen zackigen Stern.
                        </p>
                        <pre><code> for _ in range(...):
    for _ in range(...):
        Befehle
    Befehle</code></pre>
                        <?php
                        include("$uebungenBasePath/hints.php");
                        $text = '<p>Wie <b>oft</b> wird der <b>äussere</b> Schleifenkörper ausgeführt? Dies hängt von der <b>Anzahl der zackigen Sterne</b> ab. 
Das Argument des <code>range</code>-Funktionsaufrufs muss deshalb eine <b>Variable</b> sein. Der Drehwinkel muss ebenfalls berechnet werden 
und hängt auch von der Anzahl der zackigen Sterne ab. Sie finden dazu auch ein <b>Beispiel im Skript</b>.</p>';
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