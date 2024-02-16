<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "06_rechnen";
$pythonFilename = "rechteck.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [false, false, []],
    "05_schleifen" => [false, false, []],
    "06_rechnen" => [true, false, [
        "aufgaben" => [false, false, []],
        "rechteck.py" => [".py", true]
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
                    <div class="content linenumbers" oncopy="return false" oncut="return false" onpaste="return false"><pre>
<code>import<span class="has-text-grey-light">&sqcup;</span>turtle<span class="has-text-grey-light">&sqcup;</span>as<span class="has-text-grey-light">&sqcup;</span>t</code>
<code>import<span class="has-text-grey-light">&sqcup;</span>random<span class="has-text-grey-light">&sqcup;</span>as<span class="has-text-grey-light">&sqcup;</span>r</code>
<code></code>
<code>a<span class="has-text-grey-light">&sqcup;</span>=<span class="has-text-grey-light">&sqcup;</span>r.randrange(100,<span class="has-text-grey-light">&sqcup;</span>151)</code>
<code>b<span class="has-text-grey-light">&sqcup;</span>=<span class="has-text-grey-light">&sqcup;</span>1.5<span class="has-text-grey-light">&sqcup;</span>*<span class="has-text-grey-light">&sqcup;</span>a</code>
<code>for<span class="has-text-grey-light">&sqcup;</span>_<span class="has-text-grey-light">&sqcup;</span>in<span class="has-text-grey-light">&sqcup;</span>range(2):</code>
<code>&nbsp;&#8677;&nbsp;t.fd(a)</code>
<code>&nbsp;&#8677;&nbsp;t.lt(90)</code>
<code>&nbsp;&#8677;&nbsp;t.fd(b)</code>
<code>&nbsp;&#8677;&nbsp;t.lt(90)</code>
<code>t.done()</code>
<code></code></pre>
                    </div>
                </div>
                <?php
                /** @noinspection PhpIncludeInspection */
                include("$uebungenBasePath/clean_code.php");
                $text = 'Denken Sie an die beiden Leerzeichen bei einem Operator (z.B. <code><span class="has-text-grey-light">&sqcup;</span>*<span class="has-text-grey-light">&sqcup;</span></code> und <code><span class="has-text-grey-light">&sqcup;</span>+<span class="has-text-grey-light">&sqcup;</span></code>).';
                echoCleanCode($text);
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