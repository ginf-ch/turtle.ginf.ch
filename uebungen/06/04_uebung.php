<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "02_verschachtelte_quadrate.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [false, false, []],
    "05_schleifen" => [false, false, []],
    "06_rechnen" => [true, false, [
        "aufgaben" => [false, false, [
            "01_dreiecke.py" => [".py", false],
            "02_verschachtelte_quadrate.py" => [".py", true]
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
                    das die <b>verschachtelten Quadrate</b> aus der folgenden Skizze zeichnet:
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Skizze</div>
                    <figure class="image" style="max-width: 256px;">
                        <img src="https://turtle.ginf.ch/uebungen/06/04_skizze.png" alt="Verschachtelte Quadrate">
                    </figure>
                </div>
                <p>
                    Dabei sind folgende <b>Bedingungen</b> einzuhalten:
                </p>
                <ul class="mt-0">
                    <li>
                        Die <b>Seitenlänge</b> \(a_1\) ist ein <b>Integer</b> und muss zwischen <b>100</b> und
                        <b>300</b>
                        liegen.
                    </li>
                    <li>
                        Die Seitenlänge \(a_1\) wird zufällig gewählt.
                    </li>
                    <li>
                        <p>
                        Die Seitenlänge \(a_2\) berechnet sich wie folgt: <span class="is-size-4">\(\frac{a_1 \cdot \sqrt{2}}{2}\)</span>
                        </p>
                        <?php
                        include("$uebungenBasePath/hints.php");
                        $text = '<p>Sie müssen für das Berechnen der Quadratwurzel das <code>math</code>-Modul importieren:</p>
                        <pre><code>import math as m

ergebnis = m.sqrt(2)</code></pre><p>Sie können <code>m.sqrt(2)</code> natürlich auch direkt in einem arithmetischen Ausdruck verwenden.</p>';
                        echoHints($text);
                        ?>
                    </li>
                    <li>
                        Es werden <b>zwei Schleifen nacheinander</b> verwendet. Die <b>erste</b> Schleife zeichnet das
                        <b>äussere Quadrat</b>. Die <b>zweite</b> Schleife zeichnet das <b>innere Quadrat</b>.
                    </li>
                    <li>
                        Jede Schleife wird <b>4 mal</b> wiederholt.
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