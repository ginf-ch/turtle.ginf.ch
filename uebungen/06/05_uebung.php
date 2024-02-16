<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "03_drei_quadrate.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [false, false, []],
    "05_schleifen" => [false, false, []],
    "06_rechnen" => [true, false, [
        "aufgaben" => [false, false, [
            "01_dreiecke.py" => [".py", false],
            "02_verschachtelte_quadrate.py" => [".py", false],
            "03_drei_quadrate.py" => [".py", true]
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
                    das die <b>drei Quadrate</b> aus der folgenden Skizze zeichnet:
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Skizze</div>
                    <figure class="image" style="max-width: 200px;">
                        <img src="https://turtle.ginf.ch/uebungen/06/05_skizze.png" alt="Verschachtelte Quadrate">
                    </figure>
                </div>
                <p>
                    Dabei sind folgende <b>Bedingungen</b> einzuhalten:
                </p>
                <ul class="mt-0">
                    <li>
                        Die <b>Seitenlänge</b> \(a_1\) ist ein <b>Integer</b> und muss zwischen <b>50</b> und
                        <b>100</b> liegen.
                    </li>
                    <li>
                        Die Seitenlänge \(a_1\) wird zufällig gewählt.
                    </li>
                    <li>
                        <p>
                            Die Seitenlänge \(a_2\) ist um \(50\) grösser als \(a_1\).
                        </p>
                    </li>
                    <li>
                        <p>
                            Die Seitenlänge \(a_3\) ist um \(50\) grösser als \(a_2\).
                        </p>
                    </li>
                    <li>
                        Es werden <b>drei Schleifen nacheinander</b> verwendet. Die <b>erste</b> Schleife zeichnet das
                        <b>innerste Quadrat</b>. Die <b>zweite</b> Schleife zeichnet das <b>mittlere Quadrat</b> und die
                        <b>dritte</b> Schleife zeichnet das <b>äusserste Quadrat</b>.
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