<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "02_turtle-grundlagen";
$pythonFilename = "bsp_1.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [true, false, [
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
                    Tippen (<b>nicht</b> kopieren!) Sie das Programm aus dem folgenden Listing in die Python-Datei
                    <code><?php echo $pythonFilename; ?></code> ab. Beachten Sie die <b>Leerzeilen</b>. Klären Sie ggf.
                    unbekannte Befehle. Suchen Sie <b>im Skript</b> nach dem Programm. Sie finden dort auch die <b>Zeichnung</b>
                    zum Vergleichen.
                </p>
                <div class="box mb-5">
                    <div class="title is-size-6">Listing</div>
                    <div class="content linenumbers" oncopy="return false" oncut="return false" onpaste="return false"><pre>
<code>import<span class="has-text-grey-light">&sqcup;</span>turtle</code>
<code></code>
<code>turtle.shape("turtle")</code>
<code>turtle.left(90)</code>
<code>turtle.forward(50)</code>
<code>turtle.right(90)</code>
<code>turtle.forward(100)</code>
<code>turtle.right(135)</code>
<code>turtle.forward(100)</code>
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