<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "05_schleifen";
$pythonFilename = "quadrat_loop.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [false, false, []],
    "05_schleifen" => [true, false, [
        "aufgaben" => [false, false, []],
        "quadrat_loop.py" => [".py", true]
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
                    <div class="content linenumbers is-size-4" oncopy="return false" oncut="return false" onpaste="return false"><pre>
<code>import<span class="has-text-grey-light">&sqcup;</span>turtle</code>
<code></code>
<code>for<span class="has-text-grey-light">&sqcup;</span>_<span class="has-text-grey-light">&sqcup;</span>in<span class="has-text-grey-light">&sqcup;</span>[0,<span class="has-text-grey-light">&sqcup;</span>1,<span class="has-text-grey-light">&sqcup;</span>2,<span class="has-text-grey-light">&sqcup;</span>3]:</code>
<code>&nbsp;&#8677;&nbsp;turtle.fd(100)</code>
<code>&nbsp;&#8677;&nbsp;turtle.lt(90)</code>
<code>turtle.done()</code>
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
                    In <b>PyCharm</b> wird die Einrückung <b>automatisch</b> vorgenommen, wenn Sie nach dem Schleifenkopf auf <code>Enter</code> drücken.
                </p>
                ';
                echoAttention($text);
                ?>
                <?php
                /** @noinspection PhpIncludeInspection */
                include("$uebungenBasePath/tastatur_tabulator.php");
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