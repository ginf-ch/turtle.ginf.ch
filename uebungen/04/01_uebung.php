<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "04_variablen";
$pythonFilename = "quadrat_var.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [true, false, [
        "aufgaben" => [false, false, []],
        "quadrat_var.py" => [".py", true]
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
                    Kopieren (<b>nicht</b> abtippen!) Sie das Programm aus dem folgenden Listing in die Python-Datei
                    <code><?php echo $pythonFilename; ?></code>.
                </p>
                <div class="box mb-5">
                    <div class="title is-size-6">Listing</div>
                    <div class="content"><pre>
import turtle

turtle.forward(100)
turtle.left(90)
turtle.forward(100)
turtle.left(90)
turtle.forward(100)
turtle.left(90)
turtle.forward(100)
turtle.left(90)
turtle.done()
</pre>
                    </div>
                </div>
            </li>
            <li>
                <p>
                    Ersetzen Sie dann die <b>Seitenlänge</b> durch eine <b>Variable</b>
                    <code>a</code>. Verwenden Sie nach der <code>import</code>-Anweisung die passende <b>Zuweisung</b>.
                    Sie finden den Code dafür auch im Skript.
                </p>
                <?php
                /** @noinspection PhpIncludeInspection */
                include("$uebungenBasePath/clean_code.php");
                $text = 'Denken Sie an die beiden Leerzeichen bei einer Zuweisung: <code>a<span class="has-text-grey-light">&sqcup;</span>=<span class="has-text-grey-light">&sqcup;</span>100</code>.';
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