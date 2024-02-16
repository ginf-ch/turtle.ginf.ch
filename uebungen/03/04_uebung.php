<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "03_shortcuts.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "03_analyse" => [true, false, [
        "aufgaben" => [true, false, [
            "01_analyse.py" => [".py", false],
            "02_erfinder.py" => [".py", false],
            "03_shortcuts.py" => [".py", true]
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
                    Suchen Sie in der <b>Dokumentation des Turtle-Moduls</b> nach <b>Abkürzungen</b> für die <b>Funktionen</b>
                    (falls vorhanden). Schreiben Sie dann das Programm um (direkt in der Python-Datei
                    <code><?php echo $pythonFilename; ?></code>) und verwenden Sie dabei so viele Abkürzungen wie
                    möglich.
                </p>
                <?php
                include("$uebungenBasePath/attention.php");
                $text = 'Sie dürfen keine Zeilen löschen! Das Programm zeichnet immer noch die gleiche Figur.';
                echoAttention($text);
                ?>
            </li>
        </ol>
    </div>
</div>