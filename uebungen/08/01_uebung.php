<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "08_funktionen";
$pythonFilename = "zwei_quadrate.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [false, false, []],
    "05_schleifen" => [false, false, []],
    "06_rechnen" => [false, false, []],
    "07_benutzereingabe" => [false, false, []],
    "08_funktionen" => [true, false, [
        "aufgaben" => [false, false, []],
        "zwei_quadrate.py" => [".py", true]
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
                    Tippen (<b>nicht</b> kopieren!) Sie das Programm aus dem folgenden Listing in die Python-Datei
                    <code><?php echo $pythonFilename; ?></code> ab.
                </p>
                <div class="box mb-5">
                    <div class="title is-size-6">Listing</div>
                    <div class="content linenumbers is-size-5" oncopy="return false" oncut="return false"
                         onpaste="return false"><pre>
<code>import<span class="has-text-grey-light">&sqcup;</span>turtle<span
            class="has-text-grey-light">&sqcup;</span>as<span class="has-text-grey-light">&sqcup;</span>t</code>
<code></code>
<code></code>
<code>def<span class="has-text-grey-light">&sqcup;</span>quadrat_50():</code>
<code>&nbsp;&#8677;&nbsp;for<span class="has-text-grey-light">&sqcup;</span>_<span
            class="has-text-grey-light">&sqcup;</span>in<span class="has-text-grey-light">&sqcup;</span>range(4):</code>
<code>&nbsp;&#8677;&nbsp;&nbsp;&#8677;&nbsp;t.fd(50)</code>
<code>&nbsp;&#8677;&nbsp;&nbsp;&#8677;&nbsp;t.lt(90)</code>
<code></code>
<code></code>
<code>quadrat_50()</code>
<code>t.pu()</code>
<code>t.fd(125)</code>
<code>t.pd()</code>
<code>quadrat_50()</code>
<code></code>
<code>t.done()</code>
<code></code></pre>
                    </div>
                </div>
                <?php
                include("$uebungenBasePath/attention.php");
                $text = '
                <p>Denken Sie an die Leerzeichen und die korrekte Einrückung:</p>
                <ul>
                <li><code class="is-size-4">&sqcup;</code> bedeutet Leerzeichen/Leerschlag</li>
                <li><code class="is-size-4">&#8677;</code> bedeutet Tabulator</li>
                </ul>
                <p>
                    In <b>PyCharm</b> wird die Einrückung <b>automatisch</b> vorgenommen, wenn Sie nach dem <b>Schleifenkopf</b> oder dem <b>Funktionskopf</b> auf <code>Enter</code> drücken.
                </p>
                ';
                echoAttention($text);
                ?>
                <?php
                /** @noinspection PhpIncludeInspection */
                include("$uebungenBasePath/tastatur_tabulator.php");
                ?>
                <?php
                /** @noinspection PhpIncludeInspection */
                include("$uebungenBasePath/clean_code.php");
                $text = 'Vor und nach einer <b>Funktionsdefinition</b> werden <b>zwei Leerzeilen</b> notiert. Befindet sich die Funktionsdefinition unmittelbar nach einer <code>import</code>-Anweisung, dann wird keine zusätzliche Leerzeile hinzugefügt. Also insgesamt zwei Leerzeilen, nicht drei Leerzeilen.';
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