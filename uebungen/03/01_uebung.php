<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "03_analyse";
$pythonFilename = "bsp_1.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "03_analyse" => [true, false, [
        "aufgaben" => [false, false, []],
        "bsp_1.py" => [".py", true]
    ]]
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
                    Übertragen Sie das Programm aus dem folgenden Listing in die Python-Datei
                    <code><?php echo $pythonFilename; ?></code>. Sie können sich einige Tipparbeit sparen, wenn Sie
                    zunächst das Programm aus <code>quadrat.py</code> kopieren und dann die Ergänzungen vornehmen.
                    Beachten Sie die <b>Leerzeilen</b> und <b>Leerzeichen</b>.
                </p>
                <div class="box mb-5">
                    <div class="title is-size-6">Listing</div>
                    <div class="content linenumbers" oncopy="return false" oncut="return false" onpaste="return false"><pre>
<code>import<span class="has-text-grey-light">&sqcup;</span>turtle</code>
<code></code>
<code>turtle.forward(100)<span class="has-text-grey-light">&sqcup;</span><span
            class="has-text-grey-light">&sqcup;</span>#<span
            class="has-text-grey-light">&sqcup;</span>Funktionsname:<span class="has-text-grey-light">&sqcup;</span>forward,<span
            class="has-text-grey-light">&sqcup;</span>Argument:<span class="has-text-grey-light">&sqcup;</span>100<span
            class="has-text-grey-light">&sqcup;</span>(Integer)</code>
<code>turtle.left(90)</code>
<code>turtle.forward(100)</code>
<code>turtle.left(90)</code>
<code>turtle.forward(100)</code>
<code>#<span class="has-text-grey-light">&sqcup;</span>Modulname:<span class="has-text-grey-light">&sqcup;</span>turtle</code>
<code>#<span class="has-text-grey-light">&sqcup;</span>Funktionsname:<span class="has-text-grey-light">&sqcup;</span>left,<span
            class="has-text-grey-light">&sqcup;</span>Argument:<span class="has-text-grey-light">&sqcup;</span>90<span
            class="has-text-grey-light">&sqcup;</span>(Integer)</code>
<code>turtle.left(90)</code>
<code>turtle.forward(100)</code>
<code>turtle.left(90)</code>
<code>turtle.done()</code>
<code></code></pre>
                    </div>
                    <?php
                    include("$uebungenBasePath/attention.php");
                    $text = 'Denken Sie daran: <code>&sqcup;</code> bedeutet Leerzeichen/Leerschlag.';
                    echoAttention($text);
                    ?>
                </div>
            </li>
            <li>
                <p>
                    Lesen Sie im Skript den Abschnitt über Kommentare.
                </p>
            </li>
        </ol>
    </div>
</div>