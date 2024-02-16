<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "04_hidden_icon.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "03_analyse" => [true, false, [
        "aufgaben" => [true, false, [
            "01_analyse.py" => [".py", false],
            "02_erfinder.py" => [".py", false],
            "03_shortcuts.py" => [".py", false],
            "04_hidden_icon.py" => [".py", true]
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

turtle.fd(100)
# Ab hier das Icon der Turtle verstecken
turtle.rt(45)
turtle.pensize(3)
turtle.fd(200)
turtle.lt(135)
turtle.pencolor("blue")
turtle.fd(300)
turtle.pu()
# Ab hier soll das Icon der Turtle wieder sichtbar sein
turtle.bk(200)
turtle.lt(90)
turtle.pd()
turtle.fd(300)
turtle.done()
</pre>
                    </div>
                </div>
            </li>
            <li>
                <p>
                    Ersetzen Sie die <b>beiden Kommentare</b> durch einen entsprechenden Funktionsaufruf. Suchen Sie
                    dazu in der <b>Dokumentation des Turtle-Moduls</b> nach einer Funktion, die das <b>Turtle-Icon</b>
                    ausblendet bzw. wieder anzeigt.
                </p>
            </li>
            <li>
                <p>
                    <b>Warum sollte man das Turtle-Icon verstecken?</b> Notieren Sie Ihre <b>Antwort als Kommentar</b>
                    direkt in die Python-Datei <code><?php echo $pythonFilename; ?></code> (z.B. oberhalb des
                    Funktionsaufrufs).
                </p>
            </li>
        </ol>
    </div>
</div>