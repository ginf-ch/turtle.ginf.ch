<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "01_analyse.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "03_analyse" => [true, false, [
        "aufgaben" => [true, false, [
            "01_analyse.py" => [".py", true]
        ]],
        "bsp_1.py" => [".py", false]
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
                    Kopieren (<b>nicht</b> abtippen!) Sie das Programm aus dem folgenden Listing in die Python-Datei
                    <code><?php echo $pythonFilename; ?></code>.
                </p>
                <div class="box mb-5">
                    <div class="title is-size-6">Listing</div>
                    <div class="content"><pre>
import turtle

turtle.forward(100)
turtle.right(45)
turtle.pensize(3)
turtle.forward(200)
turtle.left(135)
turtle.pencolor("blue")
turtle.forward(300)
turtle.penup()
turtle.backward(200)
turtle.left(90)
turtle.pendown()
turtle.forward(300)
turtle.done()
</pre>
                    </div>
                </div>
            </li>
            <li>
                <p>
                    Führen Sie das Programm aus.
                </p>
            </li>
            <li>
                <p>
                    Führen Sie für die folgenden <b>vier Funktionen</b> eine <b>Analyse</b> durch:
                </p>
                <ul>
                    <li><code>turtle.right(45)</code></li>
                    <li><code>turtle.pensize(3)</code></li>
                    <li><code>turtle.pencolor("blue")</code></li>
                    <li><code>turtle.penup()</code></li>
                </ul>
                <p>
                    Notieren Sie die Analyse direkt als <b>Kommentar</b> in der Python-Datei
                    <code><?php echo $pythonFilename; ?></code>. Orientieren Sie sich am Beispiel aus der vorherigen
                    Übung.
                </p>
            </li>
        </ol>
    </div>
</div>