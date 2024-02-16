<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "08_funktionen";
$pythonFilename = "quadrate.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [false, false, []],
    "05_schleifen" => [false, false, []],
    "06_rechnen" => [false, false, []],
    "07_benutzereingabe" => [false, false, []],
    "08_funktionen" => [true, false, [
        "aufgaben" => [true, false, [
            "01_kreuze.py" => [".py", false],
            "02_rad.py" => [".py", false],
            "03_waben.py" => [".py", false]
        ]],
        "quadrate.py" => [".py", true],
        "vier_quadrate.py" => [".py", false],
        "zwei_quadrate.py" => [".py", false]
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
import turtle as t
import random as r


def quadrat_50():
    for _ in range(4):
        t.fd(50)
        t.lt(90)


def move_forward_randomly():
    t.pu()
    laenge = r.randrange(100, 201)
    t.fd(laenge)
    t.pd()


def rotate_left_randomly():
    t.pu()
    winkel = r.randrange(0, 361)
    t.lt(winkel)
    t.pd()


t.onkeypress(quadrat_50, "q")
t.onkeypress(move_forward_randomly, "f")
t.onkeypress(rotate_left_randomly, "l")
t.listen()
t.done()
</pre>
                    </div>
                </div>
            </li>
            <li>
                <p>
                    Führen Sie das Programm aus. <b>Finden Sie heraus, wie man die Turtle dazu bringen kann, etwas zu
                        zeichnen.</b> Leitfragen:
                </p>
                <ul>
                    <li>Was machen die Code-Zeilen mit <code>onkeypress</code>?</li>
                    <li>Was passiert wenn man <code>t.listen()</code> löscht?</li>
                </ul>
            </li>
        </ol>
    </div>
</div>